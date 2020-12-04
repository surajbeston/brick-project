<h3 >Sales of <span id="_name"></span> ( <span id = "_id"></span> )</h3>

<form action="{{ route('sales.store') }}" method="post">

    @csrf

    <input type="hidden" value="dealer_info_id" name="dealer_info_id" id="form_dealer_id">

    <div class="form-group">
        <label for="date">Select Date</label>
        <input type="date" name="date" class="form-control" required>
        @error('date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="brick_type">Select Quality</label>
        <select class="custom-select @error('brick_type') is-invalid @enderror" id="brick_type" required name="brick_type"  value="{{ old('brick_type') }}" placeholder="Quality">
            <option value="" disabled selected>Select your option</option>
            <option value="Picket">Picket</option>
            <option value="1">1 number</option>
            <option value="2">2 number</option>
            <option value="3">3 number</option>
            <option value="other">other</option>
        </select>
        @error('brick_type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="quantity">Add Quantity</label>
        <input class="custom-select @error('quantity') is-invalid @enderror" id="quantity" required name="quantity"  value="{{ old('quantity') }}" placeholder="Quantity" type = "number">
        @error('quantity')
        <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="rate">Rate</label>
        <select class="custom-select @error('rate') is-invalid @enderror"  required id="rate" name="rate"  value="{{ old('rate') }}">
            <option value="" disabled selected>Select your option</option>
            <option value="1">10</option>
            <option value="1">12</option>
            <option value="1">15</option>
            <option value="1">20</option>
            <option value="1">25</option>
            <option value="1">35</option>
        </select>
        @error('rate')
        <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="cash_type">Cash Type</label>
        <select class="custom-select @error('cash_type') is-invalid @enderror" required id="cash_type" name="cash_type"  value="{{ old('cash_type') }}">
            <option value="" disabled selected>Select your option</option>
            <option value="1">Cash</option>
            <option value="1">Advance</option>
            <option value="1">Hard Cash</option>
            <option value="1">Due</option>
            <option value="1">Cash on Delivery</option>
            <option value="1">Others</option>
        </select>
        @error('cash_type')
        <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="vehicle_no">Tractor / Truck No.</label>
        <input class="custom-select @error('vehicle_no') is-invalid @enderror"  required id="vehicle_no" name="vehicle_no"  value="{{ old('vehicle_no') }}" placeholder = "Input Truck / Tractor No">
        <ul class="list-group d-none" id = "vehicle-search">
        </ul>
        @error('vehicle_no')
        <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="driver_no">Driver Mobile No.</label>
        <input class="custom-select @error('driver_no') is-invalid @enderror"  required id="driver_no" name="driver_no"  value="{{ old('driver_no') }}" placeholder = "Input Phone Number">
        <ul class="list-group d-none" id = "phone-search">
        </ul>
        @error('driver_no')
        <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="delivery_place">Delivery Place</label>
        <input class="custom-select @error('delivery_place') is-invalid @enderror"  required id="delivery_place" name="delivery_place"  value="{{ old('delivery_place') }}" placeholder = "Input Delivery Place">
        <ul class="list-group d-none" id = "place-search">
        </ul>
        @error('delivery_place')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="delivery_type">Delivery Type</label>
        <select class="custom-select @error('delivery_type') is-invalid @enderror"  required id="delivery_type" name="delivery_type"  value="{{ old('delivery_type') }}">
            <option value="" disabled selected>Select your option</option>
            <option value="1">Home Delivery</option>
            <option value="1">Pickup</option>
            <option value="1">Other</option>
        </select>
        @error('delivery_type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>


    <div class="form-group">
        <label for="consumer_name">Consumer Name</label>
        <input type="text" class="custom-select @error('consumer_name') is-invalid @enderror"  required id="consumer_name" value="{{ old('consumer_name') }}" name="consumer_name" placeholder="Enter dealer contact">
        @error('consumer_name')
        <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
        @enderror
    </div>


    <div class="form-group">
        <label for="reward_rate">Reward Rate (%)</label>
        <input type = "number" max = "100" class="custom-select @error('reward_rate') is-invalid @enderror" required id="reward_rate" value="{{ old('reward_rate') }}" name="reward_rate" placeholder="Reward Percentage">
        @error('reward_rate')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <hr>
    <hr>

    <div class="form-group" >
        <label for="amount">Total Amount</label>
        <input type="text" class="custom-select @error('amount') is-invalid @enderror"  required id="amount" value="{{ old('amount') }}" name="amount" placeholder="Calculated on quantity, rate and reward." readonly>
        @error('amount')
        <span class="invalid-feedback" role="alert">
            <strong>Add rate, quantity and reward.</strong>
        </span>
        @enderror
    </div>

    <input type="submit" class="btn btn-primary mb-2" value="Submit">
    <a href="{{ url('dealer') }}" class="btn btn-danger mb-2"> Cancel </a>
</form>

<script>

var phones_num = @json($phones);
var places = @json($places);
var trucks_num = @json($trucks);

var phones = []
var trucks = []

for (var phone of phones_num) phones.push(phone.toString())
for (var truck of trucks_num) trucks.push(truck.toString()) 

const options = {
  
}

const phone_search = new Fuse(phones, options)
const place_search = new Fuse(places, options)
const truck_search = new Fuse(trucks, options)


$("#vehicle_no").on("input",() => {
    var text = $("#vehicle_no").val()
    if (text){
        document.getElementById("vehicle-search").setAttribute('style', 'display:inline !important');
        var result = truck_search.search(text)
        console.log(result)
        $("#vehicle-search").empty()
        $("#vehicle-search").append(`<li class="list-group-item list-group-item-primary" onclick = "return add_to_input('vehicle', '${text}')">${text}</li>`)
        for (var each of result) $("#vehicle-search").append(`<li class="list-group-item list-group-item-action" onclick = "return add_to_input('vehicle', '${each.item}')">${each.item}</li>`)
    }
    else document.getElementById("vehicle-search").setAttribute('style', 'display:none !important');
})

$("#driver_no").on("input",() => {
    var text = $("#driver_no").val()
    if (text){
        document.getElementById("phone-search").setAttribute('style', 'display:inline !important');
        var result = phone_search.search(text)
        console.log(result)
        $("#phone-search").empty()
        $("#phone-search").append(`<li class="list-group-item list-group-item-primary" onclick = "return add_to_input('phone', '${text}')">${text}</li>`)
        for (var each of result) $("#phone-search").append(`<li class="list-group-item list-group-item-action" onclick = "return add_to_input('phone', '${each.item}')">${each.item}</li>`)
    }
    else document.getElementById("phone-search").setAttribute('style', 'display:none !important');
})

$("#delivery_place").on("input",() => {
    var text = $("#delivery_place").val()
    if (text){
        document.getElementById("place-search").setAttribute('style', 'display:inline !important');
        var result = place_search.search(text)
        console.log(result)
        $("#place-search").empty()
        $("#place-search").append(`<li class="list-group-item list-group-item-primary" onclick = "return add_to_input('place', '${text}')">${text}</li>`)
        for (var each of result) $("#place-search").append(`<li class="list-group-item list-group-item-action" onclick = "return add_to_input('place', '${each.item}')">${each.item}</li>`)
    }
    else document.getElementById("place-search").setAttribute('style', 'display:none !important');
})

function add_to_input(input_name, input){
    if (input_name == "vehicle"){
        document.getElementById("vehicle-search").setAttribute('style', 'display:none !important');
        $("#vehicle_no").val(input)
    }
    else if (input_name == "place"){
        document.getElementById("place-search").setAttribute('style', 'display:none !important');
        $("#delivery_place").val(input)

    }
    else {
        document.getElementById("phone-search").setAttribute('style', 'display:none !important');
        $("#driver_no").val(input)
    }
}

function calculate_total(){
    var quantity = $("#quantity").val()
    var rate = $("#rate").val()
    var reward = $("#reward_rate").val() 
    if (quantity && rate && reward_rate){
        var total_amount = Number(quantity) * Number(rate)
        var amount = total_amount - Number(reward)/100 * total_amount 
        $("#amount").val(Math.ceil(amount))
    }
}

$("#quantity").on("input", () => calculate_total())
$("#rate").on("input", () => calculate_total())
$("#reward_rate").on("input", () => {
    if (Number($("#reward_rate").val()) > 100) $("#reward_rate").val(100)
    calculate_total()}
)

</script>


<style>


.list-group-item:hover{
    cursor: pointer;
    font-weight: bolder;
}

#amount {
    color: blue;
}


</style>