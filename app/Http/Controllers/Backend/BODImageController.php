<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BODImage;
use Intervention\Image\Facades\Image;

class BODImageController extends Controller
{
    public function AllBODImage()
    {
        $BODImages = BODImage::latest()->get();
        return view('backend.BODImage.BODImage_all', compact('BODImages'));
    } // End Method

    public function AddBODImage()
    {
        return view('backend.BODImage.BODImage_add');
    } // End Method

    public function StoreBODImage(Request $request)
    {
        $image = $request->file('background_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)
            ->resize(2434, 1000)
            ->save('upload/bod/' . $name_gen);
        $save_url = 'upload/bod/' . $name_gen;

        BODImage::insert([
            'background_image' => $save_url,
        ]);

        $notification = [
            'message' => 'Board of Directors [Image] Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('all.BODImage')
            ->with($notification);
    } // End Method

    public function EditBODImage($id)
    {
        $BODImages = BODImage::findOrFail($id);
        return view('backend.BODImage.BODImage_edit', compact('BODImages'));
    } // End Method

    public function UpdateBODImage(Request $request)
    {
        $BODImage_id = $request->id;
        $old_img = $request->old_image;

        $image = $request->file('background_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)
            ->resize(2434, 1000)
            ->save('upload/bod/' . $name_gen);
        $save_url = 'upload/bod/' . $name_gen;

        if (file_exists($old_img)) {
            unlink($old_img);
        }

        BODImage::findOrFail($BODImage_id)->update([
            'background_image' => $save_url,
        ]);

        $notification = [
            'message' => 'Board of Directors [Image] Updated with image Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('all.BODImage')
            ->with($notification);
    } // End Method

    public function DeleteOurStoryImage($id)
    {
        $BODImage = BODImage::findOrFail($id);
        $img = $BODImage->background_image;
        unlink($img);

        BODImage::findOrFail($id)->delete();

        $notification = [
            'message' => 'Board of Directors [Image] Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End Method
}
