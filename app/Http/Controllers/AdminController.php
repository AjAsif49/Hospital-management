<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AddDoctor(){
        return view('admin.adddoctors');
    }

    public function UploadDoctor(Request $request){
        $doctor = new Doctor;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image= $imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor added successfully');
    }
}
