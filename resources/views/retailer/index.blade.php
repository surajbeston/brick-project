@section('title','Retailer Information')
@extends('layouts.header')

@section('inner_content')

    @if (session('success_msg'))

        <div class="alert alert-success" role="alert" >
            {{ session('success_msg') }}
        </div>

    @endif

    <div class = "alert alert-danger" role= "alert" id="retailer_error" style = "display: none">
        Please select retailer.
    </div>

    <div class="card">
        <div class="card-body"  id="get_retailer">

            <form action="{{ route('retailer.show') }}" >

                <a href="{{ route('retailer.create') }}" class="btn btn-primary">Add Retailer </a>
                <div class="row my-5">
                    <div class="col-6">
                            <select name="retailer_id" id="retailer_id" class="form-control retailer-name">
                                <option value="" disabled selected>Select Retailer Name</option>
                                @foreach($retailers as $retailer)
                                    <option value="{{ $retailer->id }}"> {{ $retailer->name }} </option>
                                @endforeach
                            </select>
                    </div>
                    <div class="col-6">
                            <select class="form-control retailer-id">
                                <option value="" disabled selected>Select Retailer Code</option>
                            @foreach($retailers as $retailer)
                                    <option value="{{ $retailer->id }}"> {{ $retailer->retailer_code }} </option>
                                @endforeach
                            </select>
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-6">
                        <input type="button" class="btn btn-outline-info" value="Brick Sales" onclick="show_retailer_sale_form()">
                    </div>
                    <div class="col-6">
                        <input type="submit" class="btn btn-outline-info" value="Profile">

                    </div>
                </div>
            </form>
        </div>

        <div class="card-body d-none"  id="show_retailer_sale_form">
            @include('retailer_sales._form')
        </div>

    </div>

    <script>
        var retailers = @json($retailers) ;
        console.log(retailers)


        function show_retailer_sale_form(){
            var retailer_id = document.getElementById('retailer_id').value;

            if (retailer_id){
                document.getElementById("retailer_error").style.display = "none";
                document.getElementById('form_retailer_id').value=retailer_id;

                document.getElementById('get_retailer').style.display="none";
                document.getElementById('show_retailer_sale_form').setAttribute('style', 'display:inline !important');
                

                //retrieve from localstorage to add to sales form top user info
                $("#_name").text(localStorage.getItem("_name"))
                $("#_id").text(localStorage.getItem("_id"))
            }
            else{
                document.getElementById("retailer_error").style.display = "block";
                setTimeout(() => {
                    document.getElementById("retailer_error").style.display = "none";
                }, 5000);
            }
        }

        $('.retailer-name').change(function() {
            console.log("wee wee")
            var retailer = retailers.filter((retailer) => retailer.id == $(this).val())[0]
            $('.retailer-id').val(retailer.id)

            add_info_localstorage(retailer)
        });

        $('.retailer-id').change(function() {
            var retailer = retailers.filter((retailer) => retailer.id == $(this).val())[0]
            $('.retailer-name').val(retailer.id)

            add_info_localstorage(retailer)
        });

        function add_info_localstorage(retailer){
            localStorage.setItem("_id", retailer.retailer_code )
            localStorage.setItem("_name", retailer.name)
        }

    </script>
@endsection
