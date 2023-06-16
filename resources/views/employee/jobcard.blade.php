@extends('layouts.app')
               
@section('content')
<div class="row">
    <div class="col-xxl-4 col-lg-6">
        <div class="card card-body">
            @foreach ($job as $job)
            <div class="avatar-sm mb-3">
                <div class="avatar-title bg-success-subtle text-success fs-xl rounded">
                    <i class="reader-outline"></i>
                </div>
            </div>
            <h4 class="card-title">{{$job->companyname}}</h4>
            <p class="card-text text-muted">{{$job->discription}}</p>
            <a href="{{route('applyjob',$job->id)}}" class="btn btn-success">Apply Now</a>
            @endforeach
        </div>
    </div>
</div>
@endsection
                <!-- container-fluid -->
          
