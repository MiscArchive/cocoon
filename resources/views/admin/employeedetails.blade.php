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
        @foreach ($employee as $employee)
            
        
        <tr>
            <th scope="row">{{$employee->id}}</th>
            <td>{{$employee->name}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->phone}}</td>
            

        </tr>
    @endforeach
      
     
    </tbody>
</table>

@endsection


                <!-- container-fluid -->
          
