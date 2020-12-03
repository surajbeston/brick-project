@section('title','Dealer Information')
@extends('layouts.header')

@section('inner_content')

    @if (session('success_msg'))

        <div class="alert alert-success" role="alert" >
            {{ session('success_msg') }}
        </div>

    @endif

    <div class = "alert alert-danger" role= "alert" id="dealer_error" style = "display: none">
        Please select dealer!
    </div>


    <div class="card">
        <div class="card-body"  id="get_dealer">

            <form action="{{ route('dealer.show') }}" >

                <a href="{{ route('dealer.create') }}" class="btn btn-primary">Add Dealer </a>
                <div class="row my-5">
                    <div class="col-6">

                            <select name="dealer_id" id="dealer_id" class="form-control">
                                <option value="" disabled selected>Select Dealer Name</option>
                                @foreach($dealers as $dealer)
                                    <option value="{{ $dealer->id }}"> {{ $dealer->name }} </option>
                                @endforeach
                            </select>

                    </div>
                    <div class="col-6">

                            <select class="form-control">
                                <option value="" disabled selected>Select Dealer Name</option>
                            @foreach($dealers as $dealer)
                                    <option value="{{ $dealer->id }}"> {{ $dealer->dealer_code }} </option>
                                @endforeach
                            </select>

                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-6">
                        <input type="button" class="btn btn-outline-info" value="Brick Sales" onclick="show_sale_form()">
                    </div>
                    <div class="col-6">
                        <input type="submit" class="btn btn-outline-info" value="Profile">

                    </div>
                </div>

            </form>
        </div>




        <div class="card-body d-none"  id="show_sale_form">


            @include('sales._form')
        </div>

    </div>

    <script>
        function show_sale_form(){

            var dealer_id = document.getElementById('dealer_id').value;
            if (dealer_id){
                document.getElementById("dealer_error").style.display = "none";
                document.getElementById('form_dealer_id').value=dealer_id;
                document.getElementById('get_dealer').style.display="none";
                document.getElementById('show_sale_form').setAttribute('style', 'display:inline !important');
            }
            else{
                document.getElementById("dealer_error").style.display = "block";
                setTimeout(() => {
                    document.getElementById("dealer_error").style.display = "none";
                }, 5000);
            }

        }
    </script>
@endsection
