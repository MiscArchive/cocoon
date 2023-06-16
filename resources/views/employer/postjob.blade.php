@extends('layouts.app')
               
@section('content')
<form action="{{route('jobpost')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="firstNameinput" class="form-label">JobName</label>
                <input type="text" name="jobname" class="form-control" placeholder="Enter jobname" >
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="lastNameinput" class="form-label">Description</label>
                <input type="text" name="discription" class="form-control" placeholder="Enter description" >
            </div>
        </div><!--end col-->
      
        <div class="col-6">
            <div class="mb-3">
                <label for="phonenumberInput" class="form-label">experience</label>
                <input type="text"  name="experience"class="form-control" placeholder="enter need experience" >
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="emailidInput" class="form-label">Working Type</label>
                <input type="text" name="workingtype" class="form-control" placeholder="fulltime/part time/consultant" id="emailidInput">
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="address1ControlTextarea" class="form-label">Company Name</label>
                <input type="text" name="companyname" class="form-control" placeholder="company name" id="address1ControlTextarea">
            </div>
        </div><!--end col-->
       
        <div class="col-6">
            <div class="mb-3">
                <label for="address1ControlTextarea" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" placeholder="Address" id="address1ControlTextarea">
            </div>
        </div><!--end col-->
          
      
        <div class="col-lg-12">
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</form>

@endsection
                <!-- container-fluid -->
          
