@extends('layouts.app')

@section('content')
<div>
    <div class="d-flex justify-content-between">
        <h2>Customers List</h2>
        <button class="btn btn-success">Create Customer</button>
    </div>

    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Customer No</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Location</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark Holdings</td>
        <td>+254721 330 123</td>
        <td>Kisumu City</td>
        <td><button class="btn btn-info" style="margin-right: 10px">Edit</button><button class="btn btn-danger">Delete</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Ali Rai</td>
        <td>+254721 330 123</td>
        <td>Mandera City</td>
        <td><button class="btn btn-info" style="margin-right: 10px">Edit</button><button class="btn btn-danger">Delete</button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Lavi Oku</td>
        <td>+254721 330 123</td>
        <td>Nakuru City</td>
        <td><button class="btn btn-info" style="margin-right: 10px">Edit</button><button class="btn btn-danger">Delete</button></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection