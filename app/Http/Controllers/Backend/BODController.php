<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BOD;
use Intervention\Image\Facades\Image;

class BODController extends Controller
{
    public function AllBOD()
    {
        $BODS = BOD::latest()->get();
        return view('backend.BOD.BOD_all', compact('BODS'));
    } // End Method

    public function AddBOD()
    {
        return view('backend.BOD.BOD_add');
    } // End Method

    public function StoreBOD(Request $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)
            ->resize(470, 500)
            ->save('upload/bod/' . $name_gen);
        $save_url = 'upload/bod/' . $name_gen;

        BOD::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'description' => $request->description,
            'image' => $save_url,
        ]);

        $notification = [
            'message' => 'Board of Directors Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('all.BOD')
            ->with($notification);
    } // End Method

    public function EditBOD($id)
    {
        $BODS = BOD::findOrFail($id);
        return view('backend.BOD.BOD_edit', compact('BODS'));
    } // End Method

    public function UpdateBOD(Request $request)
    {
        $BOD_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)
                ->resize(470, 500)
                ->save('upload/bod/' . $name_gen);
            $save_url = 'upload/bod/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            BOD::findOrFail($BOD_id)->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'description' => $request->description,
                'image' => $save_url,
            ]);

            $notification = [
                'message' => 'Board of Directors Updated with image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.BOD')
                ->with($notification);
        } else {
            BOD::findOrFail($BOD_id)->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'description' => $request->description,
            ]);

            $notification = [
                'message' => 'Board of Directors Updated without image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.BOD')
                ->with($notification);
        } // end else
    } // End Method

    public function DeleteBOD($id)
    {
        $BOD = BOD::findOrFail($id);
        $img = $BOD->image;
        unlink($img);

        BOD::findOrFail($id)->delete();

        $notification = [
            'message' => 'Board of Directors Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End Method
}
