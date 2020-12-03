@section('title','Add New Corporate')
@extends('layouts.header')

@section('inner_content')
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-card card">
                        <div class="card-body">

                            <form method="POST" action="{{ url('corporate') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="corporate_code">Corporate Code</label>
                                    <input type="text" class="form-control @error('corporate_code') is-invalid @enderror"
                                           id="corporate_code" name="corporate_code" value="{{ old('corporate_code') }}"
                                           placeholder="Enter corporate code">
                                    @error('corporate_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Corporate Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           id="name" name="name" value="{{ old('name') }}"
                                           placeholder="Enter corporate name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="phone">Contact No.</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                           id="phone" value="{{ old('phone') }}" name="phone"
                                           placeholder="Enter corporate contact">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="address">Corporate Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                                           id="address" value="{{ old('address') }}" name="address"
                                           placeholder="Enter corporate address">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="name">Corporate Photo</label>
                                    <input type="file" class="form-control-file @error('photo') is-invalid @enderror"
                                           id="photo" name="photo">
                                    @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">

                    <div class="main-card card">
                        <div class="card-body">
                            <h5 class="card-title">For old clients</h5>

                            <div class="form-group">
                                <label for="reward">Corporate Discount</label>
                                <input type="text" class="form-control @error('reward') is-invalid @enderror"
                                       id="reward" value="{{ old('reward') }}" name="reward"
                                       placeholder="Enter corporate reward">
                                @error('reward')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="paid">Paid Amount</label>
                                <input type="text" class="form-control @error('paid') is-invalid @enderror"
                                       id="paid" value="{{ old('paid') }}" name="paid"
                                       placeholder="Enter corporate paid">
                                @error('paid')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="due">Due Amount</label>
                                <input type="text" class="form-control @error('due') is-invalid @enderror" id="due"
                                       value="{{ old('due') }}" name="due" placeholder="Enter corporate due">
                                @error('due')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="amount">Total Amount</label>
                                <input type="text" class="form-control @error('amount') is-invalid @enderror"
                                       id="amount" value="{{ old('amount') }}" name="amount"
                                       placeholder="Enter corporate amount">
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary "> Add Corporate</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
