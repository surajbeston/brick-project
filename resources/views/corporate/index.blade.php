@section('title','Corporate Information')
@extends('layouts.header')

@section('inner_content')

    @if (session('success_msg'))

        <div class="alert alert-success" role="alert" >
            {{ session('success_msg') }}
        </div>

    @endif

    <div class = "alert alert-danger" role= "alert" id="corporate_error" style = "display: none">
        Please select corporate.
    </div>

    <div class="card">
        <div class="card-body"  id="get_corporate">

            <form action="{{ route('corporate.show') }}" >

                <a href="{{ route('corporate.create') }}" class="btn btn-primary">Add Corporate </a>
                <div class="row my-5">
                    <div class="col-6">
                            <select name="corporate_id" id="corporate_id" class="form-control corporate-name">
                                <option value="" disabled selected>Select Corporate Name</option>
                                @foreach($corporates as $corporate)
                                    <option value="{{ $corporate->id }}"> {{ $corporate->name }} </option>
                                @endforeach
                            </select>
                    </div>
                    <div class="col-6">
                            <select class="form-control corporate-id">
                                <option value="" disabled selected>Select Corporate Code</option>
                            @foreach($corporates as $corporate)
                                    <option value="{{ $corporate->id }}"> {{ $corporate->corporate_code }} </option>
                                @endforeach
                            </select>
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-6">
                        <input type="button" class="btn btn-outline-info" value="Brick Sales" onclick="show_corporate_sale_form()">
                    </div>
                    <div class="col-6">
                        <input type="submit" class="btn btn-outline-info" value="Profile">

                    </div>
                </div>
            </form>
        </div>

        <div class="card-body d-none"  id="show_corporate_sale_form">
            @include('corporate_sales._form')
        </div>

    </div>

    <script>
        var corporates = @json($corporates) ;
        console.log(corporates)


        function show_corporate_sale_form(){
            var corporate_id = document.getElementById('corporate_id').value;

            if (corporate_id){
                document.getElementById("corporate_error").style.display = "none";
                document.getElementById('form_corporate_id').value=corporate_id;

                document.getElementById('get_corporate').style.display="none";
                document.getElementById('show_corporate_sale_form').setAttribute('style', 'display:inline !important');
                

                //retrieve from localstorage to add to sales form top user info
                $("#_name").text(localStorage.getItem("_name"))
                $("#_id").text(localStorage.getItem("_id"))
            }
            else{
                document.getElementById("corporate_error").style.display = "block";
                setTimeout(() => {
                    document.getElementById("corporate_error").style.display = "none";
                }, 5000);
            }
        }

        $('.corporate-name').change(function() {
            console.log("wee wee")
            var corporate = corporates.filter((corporate) => corporate.id == $(this).val())[0]
            $('.corporate-id').val(corporate.id)

            add_info_localstorage(corporate)
        });

        $('.corporate-id').change(function() {
            var corporate = corporates.filter((corporate) => corporate.id == $(this).val())[0]
            $('.corporate-name').val(corporate.id)

            add_info_localstorage(corporate)
        });

        function add_info_localstorage(corporate){
            localStorage.setItem("_id", corporate.corporate_code )
            localStorage.setItem("_name", corporate.name)
        }

    </script>
@endsection
