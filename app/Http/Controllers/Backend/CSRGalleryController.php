<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CSRGallery;
use Intervention\Image\Facades\Image;

class CSRGalleryController extends Controller
{
    public function AllCSRGallery()
    {
        $CSRGallery = CSRGallery::latest()->get();
        return view('backend.CSRGallery.CSRGallery_all', compact('CSRGallery'));
    } // End Method

    public function AddCSRGallery()
    {
        return view('backend.CSRGallery.CSRGallery_add');
    } // End Method

    public function StoreCSRGallery(Request $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)
            ->resize(650, 650)
            ->save('upload/CSRGallery/' . $name_gen);
        $save_url = 'upload/CSRGallery/' . $name_gen;

        CSRGallery::insert([
            'image' => $save_url,
        ]);

        $notification = [
            'message' => 'CSRGallery Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('all.CSRGallery')
            ->with($notification);
    } // End Method

    public function EditCSRGallery($id)
    {
        $CSRGallery = CSRGallery::findOrFail($id);
        return view('backend.CSRGallery.CSRGallery_edit', compact('CSRGallery'));
    } // End Method

    public function UpdateCSRGallery(Request $request)
    {
        $CSRGallery_id = $request->id;
        $old_img = $request->old_image;

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)
                ->resize(650, 650)
                ->save('upload/CSRGallery/' . $name_gen);
            $save_url = 'upload/CSRGallery/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            CSRGallery::findOrFail($CSRGallery_id)->update([
                'image' => $save_url,
            ]);

            $notification = [
                'message' => 'CSRGallery Updated with image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.CSRGallery')
                ->with($notification);

    } // End Method

    public function DeleteCSRGallery($id)
    {
        $CSRGallery = CSRGallery::findOrFail($id);
        $img = $CSRGallery->image;
        unlink($img);

        CSRGallery::findOrFail($id)->delete();

        $notification = [
            'message' => 'CSRGallery Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End Method
}
