<?php

namespace App\Http\Controllers;

use App\Models\Admissions;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function admissionform(Request $request)
    {
        $admission = new Admissions();
        $admission->parent_name = $request->parent_name;
        $admission->child_name = $request->parent_name;
        $admission->child_age = $request->child_age;
        $admission->class = $request->class;
        $admission->email = $request->email;
        $admission->phone = $request->phone;
        $admission->save();

        return redirect()->back();
    }
}
