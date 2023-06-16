@extends('layouts.app')
               
@section('content')
              
<!-- Striped Rows -->
<table class="table table-striped">

    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">cv</th>
         
        </tr>
    </thead>
    <tbody>
        @foreach ($jobseeker as $jobseeker)
            
        
        <tr>
            <th scope="row">{{$jobseeker->id}}</th>
            <td>{{$jobseeker->name}}</td>
            <td>{{$jobseeker->email}}</td>
            <td>{{$jobseeker->phone}}</td>
            <td><a href="{{asset($jobseeker->cv)}}" target="_blank">view cv</a></td>
            

        </tr>
    @endforeach
      
     
    </tbody>
</table>

@endsection


                <!-- container-fluid -->
          
