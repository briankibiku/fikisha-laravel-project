@extends('layouts.app')

@section('content')
<div style="margin:40px">
   
        <h2>Orders Ready for Dispatch </h2>

    <table class="table">
    <thead class="thead-dark">
      
      <tr>
        <th scope="col">Order #</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Customer No</th>
        <th scope="col">Load Capacity</th>
        <th scope="col">Description</th>
        <th scope="col">Priority</th>
        <th scope="col">Status</th>
        <th scope="col">Description</th>
        <th scope="col">Due Date</th> 
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$order->id}}</th>
        <td>{{$order->customer_name}}</td>
        <td>{{$order->customer_phone}}</td>
        <td>{{$order->load_capacity}}</td>
        <td>{{$order->destination}}</td>
        <td>{{$order->priority}}</td>
        <td>{{$order->status}}</td>
        <td>{{$order->description}}</td>
        <td>{{$order->due_date}}</td> 
      </tr>  
    </tbody>
  </table>
            <form method="post" action="/dispatch_order">
                    @csrf


            <div class="">

                <div class="">
                    <input id="id" type="hidden" value="{{$order->id}}" class="form-control" name="id">

                </div>
            </div>

                    <div class="">
        
                        <div class="">
                            <input id="customer_name" type="hidden" value="{{$order->customer_name}}" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" value="{{ old('customer_name') }}"  autocomplete="customer_name" autofocus>
        
                        </div>
                    </div>

                    <div class="">
        
                        <div class="">
                            <input id="customer_phone" type="hidden" value="{{$order->customer_phone}}"  class="form-control @error('customer_phone') is-invalid @enderror" name="customer_phone" value="{{ old('customer_phone') }}"  autocomplete="customer_phone" autofocus>
        
                        </div>
                    </div>

                    <div class="">
        
                        <div class="">
                            <input id="load_capacity" type="hidden" value="{{$order->load_capacity}}" class="form-control @error('name') is-invalid @enderror" name="load_capacity" value="{{ old('load_capacity') }}"  autocomplete="load_capacity" autofocus>
        
                        </div>
                    </div>

                    <div class="">
        
                        <div class="">
                            <input id="destination" type="hidden" value="{{$order->destination}}" class="form-control @error('destination') is-invalid @enderror" name="destination" value="{{ old('destination') }}"  autocomplete="destination" autofocus>
        
                        </div>
                    </div>



                    <div class="">
        
                        <div class="">
                            <input id="status" type="hidden" value="Loading" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}"  autocomplete="status" autofocus>
        
                        </div>
                    </div>

                    <div class="">
        
                        <div class="">
                            <input id="priority" type="hidden" value="{{$order->priority}}" class="form-control @error('destination') is-invalid @enderror" name="priority" >
         
                        </div>
                    </div>

                    <div class="">
        
                        <div class="">
                            <input id="description" type="hidden" value="{{$order->description}}" class="form-control @error('description') is-invalid @enderror" name="description"  autocomplete="description">
        
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="">
        
                        <div class="">
                            <input id="due_date" type="hidden" value="{{$order->due_date}}" class="form-control @error('due_date') is-invalid @enderror" name="due_date"  >
        
                        </div>
                    </div>


                    <div class="">
        
                        <div class="">
                            <input id="vehicle_vin" type="hidden" value="{{$order->vehicle_vin}}" class="form-control @error('vehicle_vin') is-invalid @enderror" name="vehicle_vin"  >
        
                        </div>
                    </div>


                    <button type="submit" class="btn btn-info" >
                        {{ __('Dispatch') }}
                    </button>


                    {{-- <a class="btn btn-info" low type="submit"  style="margin-right: 10px" href="/allocate_order/{{$order->id}}">Allocate</a> --}}
            </form>

</div>
@endsection