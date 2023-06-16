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
           
        </tr>
    </thead>
    <tbody>
        @foreach ($employers as $employer)
            
        
        <tr>
            <th scope="row">{{$employer->id}}</th>
            <td>{{$employer->name}}</td>
            <td>{{$employer->email}}</td>
            <td>{{$employer->phone}}</td>

        </tr>
    @endforeach
      
     
    </tbody>
</table>

@endsection


                <!-- container-fluid -->
          
