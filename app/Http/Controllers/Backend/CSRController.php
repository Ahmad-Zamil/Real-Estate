<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CSR;

class CSRController extends Controller
{
    public function AllCSR()
    {
        $CSR = CSR::latest()->get();
        return view('backend.CSR.CSR_all', compact('CSR'));
    } // End Method

    public function AddCSR()
    {
        return view('backend.CSR.CSR_add');
    } // End Method

    public function StoreCSR(Request $request)
    {
        CSR::insert([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $notification = [
            'message' => 'CSR Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('all.CSR')
            ->with($notification);
    } // End Method

    public function EditCSR($id)
    {
        $CSR = CSR::findOrFail($id);
        return view('backend.CSR.CSR_edit', compact('CSR'));
    } // End Method

    public function UpdateCSR(Request $request)
    {
        $CSR_id = $request->id;

        CSR::findOrFail($CSR_id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $notification = [
            'message' => 'CSR Updated with image Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('all.CSR')
            ->with($notification);
    } // End Method

    public function DeleteCSR($id)
    {

        CSR::findOrFail($id)->delete();

        $notification = [
            'message' => 'CSR Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End Method
}
