@extends('layouts.app')

@section('content')
<div style="margin:40px">
  <div class="d-flex flex-direction-row">
    <a class="btn btn-info" href="/vehicles">All</a>
    <a class="btn btn-light" href="/available_vehicles">Available</a>
    <a class="btn btn-light" href="/loading_vehicles">Loading</a>
    <a class="btn btn-light" href="/on_transit_vehicles">On Transit</a>
  </div>
    <div class="d-flex justify-content-between">
        <h2>Vehicles List</h2>
        <a class="btn btn-success" href="/create_vehicle">Add Vehicle</a>
    </div>

    <table class="table">
    <thead class="thead-dark">
      
      <tr>
        <th scope="col">Vehicle #</th>
        <th scope="col">Vehicle VIN</th>
        <th scope="col">Load Capacity</th>
        <th scope="col">Status</th>
        <th scope="col">Driver Number</th>
        <th scope="col">Action</th> 
      </tr>
    </thead>
    <tbody>
      @foreach ($vehicles as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->vehicle_vin}}</td>
        <td>{{$value->load_capacity}}</td>
        <td>{{$value->status}}</td>
        <td>{{$value->driver_phone}}</td> 
        <td><a class="btn btn-info" style="margin-right: 10px" href="/edit_vehicle/{{$value->id}}">Edit</a><a class="btn btn-danger" href="/delete_vehicle/{{$value->id}}">Delete</a></td>
      
      </tr>  
      @endforeach
    </tbody>
  </table>
</div>
@endsection