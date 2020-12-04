@section('title','Other Information')
@extends('layouts.header')

@section('inner_content')

    @if (session('success_msg'))

        <div class="alert alert-success" role="alert" >
            {{ session('success_msg') }}
        </div>

    @endif

    <div class = "alert alert-danger" role= "alert" id="other_error" style = "display: none">
        Please select name.
    </div>

    <div class="card">
        <div class="card-body"  id="get_other">

            <form action="{{ route('other.show') }}" >

                <a href="{{ route('other.create') }}" class="btn btn-primary">Add Other </a>
                <div class="row my-5">
                    <div class="col-6">
                            <select name="other_id" id="other_id" class="form-control other-name">
                                <option value="" disabled selected>Select Name</option>
                                @foreach($others as $other)
                                    <option value="{{ $other->id }}"> {{ $other->name }} </option>
                                @endforeach
                            </select>
                    </div>
                    <div class="col-6">
                            <select class="form-control other-id">
                                <option value="" disabled selected>Select Code</option>
                            @foreach($others as $other)
                                    <option value="{{ $other->id }}"> {{ $other->other_code }} </option>
                                @endforeach
                            </select>
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-6">
                        <input type="button" class="btn btn-outline-info" value="Brick Sales" onclick="show_other_sale_form()">
                    </div>
                    <div class="col-6">
                        <input type="submit" class="btn btn-outline-info" value="Profile">

                    </div>
                </div>
            </form>
        </div>

        <div class="card-body d-none"  id="show_other_sale_form">
            @include('other_sales._form')
        </div>

    </div>

    <script>
        var others = @json($others) ;
        console.log(others)


        function show_other_sale_form(){
            var other_id = document.getElementById('other_id').value;

            if (other_id){
                document.getElementById("other_error").style.display = "none";
                document.getElementById('form_other_id').value=other_id;

                document.getElementById('get_other').style.display="none";
                document.getElementById('show_other_sale_form').setAttribute('style', 'display:inline !important');
                

                //retrieve from localstorage to add to sales form top user info
                $("#_name").text(localStorage.getItem("_name"))
                $("#_id").text(localStorage.getItem("_id"))
            }
            else{
                document.getElementById("other_error").style.display = "block";
                setTimeout(() => {
                    document.getElementById("other_error").style.display = "none";
                }, 5000);
            }
        }

        $('.other-name').change(function() {
            console.log("wee wee")
            var other = others.filter((other) => other.id == $(this).val())[0]
            $('.other-id').val(other.id)

            add_info_localstorage(other)
        });

        $('.other-id').change(function() {
            var other = others.filter((other) => other.id == $(this).val())[0]
            $('.other-name').val(other.id)

            add_info_localstorage(other)
        });

        function add_info_localstorage(other){
            localStorage.setItem("_id", other.other_code )
            localStorage.setItem("_name", other.name)
        }

    </script>
@endsection
