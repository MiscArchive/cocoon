<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Job;
use App\Models\JobSeeker;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function applyjob(Job $job)
    {
        return view('employee.applyjob', compact('job'));
    }

    public function applyform(Request $request)
    {
        $jobseeker = new JobSeeker();
        $jobseeker->jobid = $request->job_id;
        $jobseeker->name = $request->input('name');
        $jobseeker->email = $request->input('email');
        $jobseeker->phone = $request->input('phone');
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // Get the file extension
            $fileName = time().'.'.$extension; // Generate a unique file name

            $file->move(public_path('uploads'), $fileName); // Move the file to the public/uploads directory

            // Save the file name and path to the databa
            $jobseeker->cv = 'uploads/'.$fileName;
        }
        $jobseeker->save();

        return redirect()->back();
    }

    public function jobcard()
    {
        $job = Job::where('status', 1)
        ->get();

        return view('employee.jobcard', compact('job'));
    }
}
