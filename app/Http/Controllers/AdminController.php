<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function empList()
    {
        $employers = User::where('role', 'employer')
        ->where('status', 0)
        ->get();

        return view('admin.Employerapproval', compact('employers'));
    }

    public function empapprove(Request $request)
    {
        $employer = User::find(
            $request->employer_id
        );
        $employer->status = 1;
        $employer->save();

        return redirect()->back();
    }
}
