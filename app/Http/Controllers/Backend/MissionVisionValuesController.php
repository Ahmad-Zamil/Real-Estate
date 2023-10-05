<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MissionVisionValues;
use Intervention\Image\Facades\Image;

class MissionVisionValuesController extends Controller
{
    public function AllMissionVisionValues()
    {
        $missionVisionValues = MissionVisionValues::latest()->get();
        return view('backend.missionVisionValues.missionVisionValues_all', compact('missionVisionValues'));
    } // End Method

    public function AddMissionVisionValues()
    {
        return view('backend.missionVisionValues.missionVisionValues_add');
    } // End Method

    public function StoreMissionVisionValues(Request $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)
            ->resize(255, 255)
            ->save('upload/missionVisionValues/' . $name_gen);
        $save_url = 'upload/missionVisionValues/' . $name_gen;

        MissionVisionValues::insert([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $save_url,
        ]);

        $notification = [
            'message' => 'Mission Vision Values Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('all.missionVisionValues')
            ->with($notification);
    } // End Method

    public function EditMissionVisionValues($id)
    {
        $missionVisionValues = MissionVisionValues::findOrFail($id);
        return view('backend.missionVisionValues.missionVisionValues_edit', compact('missionVisionValues'));
    } // End Method

    public function UpdateMissionVisionValues(Request $request)
    {
        $missionVisionValues_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)
                ->resize(255, 255)
                ->save('upload/missionVisionValues/' . $name_gen);
            $save_url = 'upload/missionVisionValues/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            MissionVisionValues::findOrFail($missionVisionValues_id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $save_url,
            ]);

            $notification = [
                'message' => 'Mission Vision Values with image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.missionVisionValues')
                ->with($notification);
        } else {
            MissionVisionValues::findOrFail($missionVisionValues_id)->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);

            $notification = [
                'message' => 'Mission Vision Values Updated without image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.missionVisionValues')
                ->with($notification);
        } // end else
    } // End Method

    public function DeleteMissionVisionValues($id)
    {
        $missionVisionValues = MissionVisionValues::findOrFail($id);
        $img = $missionVisionValues->image;
        unlink($img);

        MissionVisionValues::findOrFail($id)->delete();

        $notification = [
            'message' => 'Mission Vision Values Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End Method
}
