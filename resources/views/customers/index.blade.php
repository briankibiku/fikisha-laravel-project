@extends('layouts.app')

@section('content')
<div style="margin:40px">
    <div class="d-flex justify-content-between">
        <h2>Customers List</h2>
        <a class="btn btn-success" href="/create_customer">Create Customers</a>
    </div>

    <table class="table">
    <thead class="thead-dark">
      
      <tr>
        <th scope="col">Customer No</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Location</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($customers as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->name}}</td>
        <td>{{$value->location}}</td>
        <td>{{$value->phone}}</td>
        <td>{{$value->email}}</td>
        <td><a class="btn btn-info" style="margin-right: 10px" href="/edit_customer/{{$value->id}}">Edit</a><a class="btn btn-danger" href="/delete_customer/{{$value->id}}" >Delete</a></td>
      </tr>  
      @endforeach
    </tbody>
  </table>
</div>
@endsection