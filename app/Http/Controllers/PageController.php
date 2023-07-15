<?php

namespace App\Http\Controllers;

use App\Models\Enquires;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('frontEnd.pages.about');
    }

    public function home()
    {
        return view('frontEnd.pages.index');
    }

    public function contact()
    {
        return view('frontEnd.pages.contact');
    }

    public function admissionpage()
    {
        return view('frontEnd.pages.admission');
    }

    public function contactform(Request $request)
    {
        $enquiry = new Enquires();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->subject = $request->subject;
        $enquiry->telephone = $request->telephone;
        $enquiry->comments = $request->comments;
        $enquiry->save();

        return redirect()->back();
    }
}
