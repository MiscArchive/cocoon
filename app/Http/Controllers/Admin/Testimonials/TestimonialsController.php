<?php

namespace App\Http\Controllers\Admin\Testimonials;

use App\Actions\Testimonials\CreateTestimonialAction;
use App\DataTables\Testimonials\TestimonialDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Testimonials\CreateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{

    public function index(TestimonialDataTable $dataTable)
    {
        return $dataTable->render('admin.testimonials.index');
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(CreateTestimonialRequest $request, CreateTestimonialAction $createTestimonialAction)
    {
        try {
            $response = $createTestimonialAction->execute(collect($request->validated()));

            if (!$response) {
                return redirect()->back()->withErrors('Failed to create testimonial!');
            }
            return redirect()->route('testimonials.index')->withSuccess('Testimonial created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }


    public function destroy(string $id)
    {
        //
    }
}
