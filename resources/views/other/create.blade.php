@section('title','Add New Other')
@extends('layouts.header')

@section('inner_content')
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-card card">
                        <div class="card-body">

                            <form method="POST" action="{{ url('other') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="other_code">Other Code</label>
                                    <input type="text" class="form-control @error('other_code') is-invalid @enderror"
                                           id="other_code" name="other_code" value="{{ old('other_code') }}"
                                           placeholder="Enter other code">
                                    @error('other_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Other Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           id="name" name="name" value="{{ old('name') }}"
                                           placeholder="Enter other name">
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
                                           placeholder="Enter other contact">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="address">Other Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                                           id="address" value="{{ old('address') }}" name="address"
                                           placeholder="Enter other address">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="name">Other Photo</label>
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
                                <label for="reward">Other Discount</label>
                                <input type="text" class="form-control @error('reward') is-invalid @enderror"
                                       id="reward" value="{{ old('reward') }}" name="reward"
                                       placeholder="Enter other reward">
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
                                       placeholder="Enter other paid">
                                @error('paid')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="due">Due Amount</label>
                                <input type="text" class="form-control @error('due') is-invalid @enderror" id="due"
                                       value="{{ old('due') }}" name="due" placeholder="Enter other due">
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
                                       placeholder="Enter other amount">
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary "> Add Other</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
