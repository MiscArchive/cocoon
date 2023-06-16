<?php

namespace App\Http\Controllers;

use App\Models\Job;
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

    public function empdetails()
    {
        $employers = User::where('role', 'employer')
        ->where('status', 1)
        ->get();

        return view('admin.employerdetails', compact('employers'));
    }

    public function employeedetails()
    {
        $employee = User::where('role', 'employee')
        ->where('status', 1)
        ->get();

        return view('admin.employeedetails', compact('employee'));
    }

    public function postapproval()
    {
        $job = Job::where('status', 0)
        ->get();

        return view('admin.postapproval', compact('job'));
    }

    public function jobapprove(Request $request)
    {
        $job = Job::find(
            $request->job_id
        );
        $job->status = 1;
        $job->save();

        return redirect()->back();
    }
}
