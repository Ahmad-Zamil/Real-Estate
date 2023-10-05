<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WOB;
use Intervention\Image\Facades\Image;

class WOBController extends Controller
{
    public function AllCareer()
    {
        $careers = WOB::latest()->get();
        return view('backend.career.career_all', compact('careers'));
    } // End Method

    public function AddCareer()
    {
        return view('backend.career.career_add');
    } // End Method

    public function StoreCareer(Request $request)
    {
        $image = $request->file('background_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)
            ->resize(1280, 650)
            ->save('upload/career/' . $name_gen);
        $save_url = 'upload/career/' . $name_gen;

        WOB::insert([
            'title' => $request->title,
            'description' => $request->description,
            'background_image' => $save_url,
        ]);

        $notification = [
            'message' => 'Career Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('all.career')
            ->with($notification);
    } // End Method

    public function EditCareer($id)
    {
        $careers = WOB::findOrFail($id);
        return view('backend.career.career_edit', compact('careers'));
    } // End Method

    public function UpdateCareer(Request $request)
    {
        $career_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('background_image')) {
            $image = $request->file('background_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)
            ->resize(1280, 650)
                ->save('upload/career/' . $name_gen);
            $save_url = 'upload/career/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            WOB::findOrFail($career_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'background_image' => $save_url,
            ]);

            $notification = [
                'message' => 'Career Updated with image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.career')
                ->with($notification);
        } else {
            WOB::findOrFail($career_id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            $notification = [
                'message' => 'Career Updated without image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.career')
                ->with($notification);
        } // end else
    } // End Method

    public function DeleteCareer($id)
    {
        $career = WOB::findOrFail($id);
        $img = $career->background_image;
        unlink($img);

        WOB::findOrFail($id)->delete();

        $notification = [
            'message' => 'Career Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End Method
}
