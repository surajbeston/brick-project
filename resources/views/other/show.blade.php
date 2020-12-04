@section('title', $dealer->name)
@extends('layouts.header')

@section('inner_content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3>{{ $dealer->name }}</h3>
                                <img width="150" height="150" class="rounded-circle " src="{{ $dealer->photo }}" alt="">
                            </div>
                            <hr>
                        </div>

                        <div class="media">
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-sm-4">Address : {{ $dealer->address }}</div>
                                    <div class="col-sm-4">Phone : {{ $dealer->phone }}</div>
                                    <div class="col-sm-4">Code : {{ $dealer->dealer_code }}</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-card mt-3 card">
        <div class="card-body"><h5 class="card-title">Dealer Information</h5>
            <table class="mb-0 table table-hover" id="table_content">
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Reward</th>
                    <th>Paid</th>
                    <th>Due</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>

                @foreach($sales as $sale)
                    <tr>
                        <td>{{$sale->id}}</td>
                        <td>{{$sale->amount}}</td>
                        <td>{{$sale->quantity}}</td>
                        <td>{{$sale->reward_rate}}</td>
                        <td>{{$sale->driver_no}}</td>
                        <td>{{$sale->vehicle_no}}</td>
                        <td>{{$sale->delivery_place}}</td>
                        <td> Update | Delete </td>
                    </tr>
                @endforeach
            </table>

    {{ $sales->links() }}


@endsection
