<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManagementTeam;
use Intervention\Image\Facades\Image;

class ManagementTeamController extends Controller
{
    public function AllManagementTeam()
    {
        $managementTeams = ManagementTeam::latest()->get();
        return view('backend.managementTeam.managementTeam_all', compact('managementTeams'));
    } // End Method

    public function AddManagementTeam()
    {
        return view('backend.managementTeam.managementTeam_add');
    } // End Method

    public function StoreManagementTeam(Request $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)
            // ->resize(2376, 807)
            ->save('upload/managementTeam/' . $name_gen);
        $save_url = 'upload/managementTeam/' . $name_gen;

        ManagementTeam::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'description' => $request->description,
            'image' => $save_url,
        ]);

        $notification = [
            'message' => 'Management Team Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('all.managementTeam')
            ->with($notification);
    } // End Method

    public function EditManagementTeam($id)
    {
        $managementTeams = ManagementTeam::findOrFail($id);
        return view('backend.managementTeam.managementTeam_edit', compact('managementTeams'));
    } // End Method

    public function UpdateManagementTeam(Request $request)
    {
        $managementTeam_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)
                // ->resize(2376, 807)
                ->save('upload/managementTeam/' . $name_gen);
            $save_url = 'upload/managementTeam/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            ManagementTeam::findOrFail($managementTeam_id)->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'description' => $request->description,
                'image' => $save_url,
            ]);

            $notification = [
                'message' => 'Management Team Updated with image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.managementTeam')
                ->with($notification);
        } else {
            ManagementTeam::findOrFail($managementTeam_id)->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'description' => $request->description,
            ]);

            $notification = [
                'message' => 'Management Team Updated without image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('all.managementTeam')
                ->with($notification);
        } // end else
    } // End Method

    public function DeleteManagementTeam($id)
    {
        $managementTeam = ManagementTeam::findOrFail($id);
        $img = $managementTeam->image;
        unlink($img);

        ManagementTeam::findOrFail($id)->delete();

        $notification = [
            'message' => 'Management Team Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End Method
}
