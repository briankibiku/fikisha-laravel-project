@extends('layouts.app')

@section('content')
<div style="margin:40px">
  <div class="d-flex flex-direction-row">
    <a class="btn btn-light" href="/home">All</a>
    <a class="btn btn-light" href="/pending_orders">Pending</a>
    <a class="btn btn-light" href="loading_orders">Loading</a>
    <a class="btn btn-info" href="dispatched_orders">Dispatched</a>
    <a class="btn btn-light" href="delivered_orders">Delivered</a>
  </div>
     <h2>Dispatched Orders List</h2>

    <table class="table">
    <thead class="thead-dark">
      
      <tr>
        <th scope="col">Order #</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Customer No</th>
        <th scope="col">Load Capacity</th>
        <th scope="col">Destination</th>
        <th scope="col">Priority</th>
        <th scope="col">Description</th>
        <th scope="col">Due Date</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($dispatched_orders as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->customer_name}}</td>
        <td>{{$value->customer_phone}}</td>
        <td>{{$value->load_capacity}}</td>
        <td>{{$value->destination}}</td>
        <td>{{$value->priority}}</td>
        <td>{{$value->description}}</td>
        <td>{{$value->due_date}}</td>
        <td>{{$value->status}}</td>
        <td><button class="btn btn-info" style="margin-right: 10px">Mark As Delivered</button></td>
      </tr>  
      @endforeach
    </tbody>
  </table>
</div>
@endsection