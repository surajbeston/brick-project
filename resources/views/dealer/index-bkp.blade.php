@section('title','Dealer Information')
@extends('layouts.header')

@section('inner_content')

    @if (session('success_msg'))

        <div class="alert alert-success" role="alert">
            {{ session('success_msg') }}
        </div>

    @endif

	<div class="container">
        <div class="row">
            <div class="col-auto">
            </div>
            <div class="col-auto ml-auto ">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" id="search_input" onkeyup="table_search()" placeholder="Search for names...">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
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

                @foreach($dealers as $dealer)
                    <tr>
                        <td>{{$dealer->dealer_code}}</td>
                        <td> <a href="{{ route('dealer.show',$dealer->id) }}"> {{$dealer->name}} </a> </td>
                        <td>{{$dealer->address}}</td>
                        <td>{{$dealer->phone}}</td>
                        <td>{{$dealer->reward}}</td>
                        <td>{{$dealer->paid}}</td>
                        <td>{{$dealer->due}}</td>
                        <td>{{$dealer->amount}}</td>
                        <td> Update | Delete </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $dealers->links() }}
	</div>

        <script type="text/javascript">
            function table_search() {
                // Declare variables
                let input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("search_input");
                filter = input.value.toUpperCase();
                table = document.getElementById("table_content");
                tr = table.getElementsByTagName("tr");
                console.log(filter);
                // Loop through all table rows, and hide those who don't match the search query
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>

@endsection
