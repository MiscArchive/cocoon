<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobSeeker;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function postjob()
    {
        return view('employer.postjob');
    }

    public function jobpost(Request $request)
    {
        $job = new Job();
        $job->empid = auth()->user()->id;
        $job->jobname = $request->jobname;
        $job->discription = $request->discription;
        $job->experience = $request->experience;
        $job->workingtype = $request->workingtype;
        $job->companyname = $request->companyname;
        $job->location = $request->location;
        $job->save();

        return redirect()->back();
    }

    public function empapplied()
    {
        $job = Job::where('empid', auth()->user()->id)->where('status', 1)->pluck('id');
        $jobseeker = JobSeeker::whereIn('jobid', $job)->get();

        return view('employer.employeeapplied', compact('jobseeker'));
    }
}
