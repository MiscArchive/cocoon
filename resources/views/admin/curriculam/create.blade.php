@extends('layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="card" style="margin-bottom:100px; ">

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Add Curriculum</h6>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-auto col-auto">
                            <a href="{{ route('curriculam.index') }}" class="btn btn-primary"><i
                                    class="bx bx-arrow-back align-baseline me-1"></i> Go Back</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('curriculam.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label for="title" class="form-label text-muted">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div>
                                <label for="syllabus" class="form-label text-muted">Syllabus</label>
                                <input type="text" class="form-control" id="syllabus" name="syllabus">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div>
                                <label for="age" class="form-label text-muted">Age</label>
                                <input type="text" class="form-control" id="age" name="age">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div>
                                <label for="duration" class="form-label text-muted">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div>
                                <label for="fee" class="form-label text-muted">Fee</label>
                                <input type="number" class="form-control" id="fee" name="fee">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <label for="class_size" class="form-label text-muted">Class Size</label>
                                <input type="text" class="form-control" id="class_size" name="class_size">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div>
                                <label for="intervals" class="form-label text-muted">Intervals</label>
                                <input type="text" class="form-control" id="intervals" name="intervals">
                            </div>
                        </div>


                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div>
                                <label for="description" class="form-label text-muted">Description</label>
                                <textarea class="ckeditor form-control" name="description"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Title Image</label>
                                <input type="file" class="form-control" name="title_image">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Main Image</label>
                                <input type="file" class="form-control" name="main_image">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="text-end">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
