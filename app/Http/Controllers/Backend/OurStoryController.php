<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurStory;
use Intervention\Image\Facades\Image;

class OurStoryController extends Controller
{
    public function AllOurStory()
    {
        $ourStories = OurStory::latest()->get();
        return view('backend.ourStory.ourStory_all', compact('ourStories'));
    } // End Method

    public function AddOurStory()
    {
        return view('backend.ourStory.ourStory_add');
    } // End Method

    public function StoreOurStory(Request $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)
            // ->resize(2376, 807)
            ->save('upload/our_story/' . $name_gen);
        $save_url = 'upload/our_story/' . $name_gen;

        OurStory::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $save_url,
        ]);

        $notification = [
            'message' => 'Our Story Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('all.ourStory')
            ->with($notification);
    } // End Method

    public function EditOurStory($id)
    {
        $ourStories = OurStory::findOrFail($id);
        return view('backend.ourStory.ourStory_edit', compact('ourStories'));
    } // End Method

    public function UpdateOurStory(Request $request)
    {
        $ourStory_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)
                // ->resize(2376, 807)
                ->save('upload/our_story/' . $name_gen);
            $save_url = 'upload/our_story/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            OurStory::findOrFail($ourStory_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,
            ]);

            $notification = [
                'message' => 'Our Story Updated with image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.ourStory')
                ->with($notification);
        } else {
            OurStory::findOrFail($ourStory_id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            $notification = [
                'message' => 'Our Story Updated without image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.ourStory')
                ->with($notification);
        } // end else
    } // End Method

    public function DeleteOurStory($id)
    {
        $ourStory = OurStory::findOrFail($id);
        $img = $ourStory->image;
        unlink($img);

        OurStory::findOrFail($id)->delete();

        $notification = [
            'message' => 'Our Story Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End Method
}
