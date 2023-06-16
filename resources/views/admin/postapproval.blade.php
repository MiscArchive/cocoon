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
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($job as $job)
            
        
        <tr>
            <th scope="row">{{$job->id}}</th>
            <td>{{$job->jobname}}</td>
            <td>{{$job->discription}}</td>
            <td>{{$job->companyname}}</td>
            <td>
                <form method="post" action="{{route('jobapprove')}}">
                    @csrf
                <input name="job_id" type="hidden" value="{{$job->id}}">
                <button type="submit" class="badge bg-success">Approve</button>
            </form>
        </td>

        </tr>
    @endforeach
      
     
    </tbody>
</table>

@endsection


                <!-- container-fluid -->
          
