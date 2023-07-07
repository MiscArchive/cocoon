@extends('layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="card">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible alert-label-icon rounded-label fade show" role="alert">
                    <i class="ri-check-double-line label-icon"></i><strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show" role="alert">
                    <i class="ri-error-warning-line label-icon"></i><strong>{{ $message }}</strong
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Testimonials</h6>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-auto col-auto">
                            <a href="{{ route('testimonials.create') }}" class="btn btn-primary"><i
                                    class="bi bi-plus-circle align-baseline me-1"></i> Add New</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>

            <div class="card-body">
                {!! $dataTable->table(['class' => 'table table-striped']) !!}
            </div>
        </div>

    </div>


@section('script')
    {{ $dataTable->scripts() }}
@endsection
@endsection
