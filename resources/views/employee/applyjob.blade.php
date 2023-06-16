@extends('layouts.app')
               
@section('content')
<form action="{{route('applyform')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="job_id" value="{{$job->id}}">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="firstNameinput" class="form-label">First Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your firstname" id="firstNameinput">
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="lastNameinput" class="form-label">Last Name</label>
                <input type="text" name="lastname" class="form-control" placeholder="Enter your lastname" id="lastNameinput">
            </div>
        </div><!--end col-->
      
        <div class="col-6">
            <div class="mb-3">
                <label for="phonenumberInput" class="form-label">Phone Number</label>
                <input type="tel"  name="phone"class="form-control" placeholder="+(245) 451 45123" id="phonenumberInput">
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="emailidInput" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="example@gamil.com" id="emailidInput">
            </div>
        </div><!--end col-->
        <div class="col-12">
            <div class="mb-3">
                <label for="address1ControlTextarea" class="form-label">cover letter</label>
                <input type="text" class="form-control" placeholder="Address 1" id="address1ControlTextarea">
            </div>
        </div><!--end col-->
       
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Your Resume</label>
            <input name="file"class="form-control" type="file" id="formFile">
          </div>
          
      
        <div class="col-lg-12">
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</form>

@endsection
                <!-- container-fluid -->
          
