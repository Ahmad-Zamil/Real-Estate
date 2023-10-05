<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurStoryImage;
use Intervention\Image\Facades\Image;

class OurStoryImageController extends Controller
{
    public function AllOurStoryImage()
    {
        $ourStoryImages = OurStoryImage::latest()->get();
        return view('backend.ourStoryImage.ourStoryImage_all', compact('ourStoryImages'));
    } // End Method

    public function AddOurStoryImage()
    {
        return view('backend.ourStoryImage.ourStoryImage_add');
    } // End Method

    public function StoreOurStoryImage(Request $request)
    {
        $image = $request->file('background_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)
            ->resize(1350, 550)
            ->save('upload/our_story/' . $name_gen);
        $save_url = 'upload/our_story/' . $name_gen;

        OurStoryImage::insert([
            'page_name' => $request->page_name,
            'background_image' => $save_url,
        ]);

        $notification = [
            'message' => 'Background Image Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('all.ourStoryImage')
            ->with($notification);
    } // End Method

    public function EditOurStoryImage($id)
    {
        $ourStoryImages = OurStoryImage::findOrFail($id);
        return view('backend.ourStoryImage.ourStoryImage_edit', compact('ourStoryImages'));
    } // End Method

    public function UpdateOurStoryImage(Request $request)
    {
        $ourStoryImage_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('background_image')) {
            $image = $request->file('background_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)
            ->resize(1350, 550)
                ->save('upload/our_story/' . $name_gen);
            $save_url = 'upload/our_story/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            OurStoryImage::findOrFail($ourStoryImage_id)->update([
                'page_name' => $request->page_name,
                'background_image' => $save_url,
            ]);

            $notification = [
                'message' => 'Background Image Updated with image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.ourStoryImage')
                ->with($notification);
        } else {
            OurStoryImage::findOrFail($ourStoryImage_id)->update([
                'page_name' => $request->page_name,
            ]);

            $notification = [
                'message' => 'Background Image Updated without image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.ourStoryImage')
                ->with($notification);
        } // end else
    } // End Method

    public function DeleteOurStoryImage($id)
    {
        $ourStoryImage = OurStoryImage::findOrFail($id);
        $img = $ourStoryImage->background_image;
        unlink($img);

        OurStoryImage::findOrFail($id)->delete();

        $notification = [
            'message' => 'Our Story [Image] Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End Method
}
