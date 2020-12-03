<h3 >Sales of {{ $corporate->name ?? "" }} ( {{ $corporate->corporate_code ?? "" }})</h3>

<form action="{{ route('corporate_sales.store') }}" method="post">

    @csrf

    <input type="hidden" value="corporate_info_id" name="corporate_info_id" id="form_corporate_id">

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
        <label for="quantity">Select Quantity</label>
        <select class="custom-select @error('quantity') is-invalid @enderror" id="quantity" required name="quantity"  value="{{ old('quantity') }}" placeholder="Quality">
            <option value="" disabled selected>Select your option</option>
            <option value="1">1000</option>
            <option value="1">1200</option>
            <option value="1">1500</option>
            <option value="1">2000</option>
            <option value="1">2500</option>
        </select>
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
        <select class="custom-select @error('vehicle_no') is-invalid @enderror"  required id="vehicle_no" name="vehicle_no"  value="{{ old('vehicle_no') }}">
            <option value="" disabled selected>Select your option</option>
            <option value="1">1101</option>
            <option value="1">1102</option>
            <option value="1">1103</option>
            <option value="1">1104</option>
        </select>
        @error('vehicle_no')
        <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="driver_no">Driver Mobile No.</label>
        <select class="custom-select @error('driver_no') is-invalid @enderror"  required id="driver_no" name="driver_no"  value="{{ old('driver_no') }}">
            <option value="" disabled selected>Select your option</option>
            <option value="1">9815613132</option>
            <option value="1">9815613132</option>
            <option value="1">9815613132</option>
            <option value="1">9815613132</option>
            <option value="1">9815613132</option>
        </select>
        @error('driver_no')
        <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="delivery_place">Delivery Place</label>
        <select class="custom-select @error('delivery_place') is-invalid @enderror"  required id="delivery_place" name="delivery_place"  value="{{ old('delivery_place') }}">
            <option value="" disabled selected>Select your option</option>
            <option value="1">Dharan</option>
            <option value="1">Itahari</option>
            <option value="1">Biratnagar</option>
            <option value="1">Damak</option>
            <option value="1">Jhapa</option>
        </select>
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
        <input type="text" class="custom-select @error('consumer_name') is-invalid @enderror"  required id="consumer_name" value="{{ old('consumer_name') }}" name="consumer_name" placeholder="Enter corporate contact">
        @error('consumer_name')
        <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="amount">Total Amount</label>
        <input type="text" class="custom-select @error('amount') is-invalid @enderror"  required id="amount" value="{{ old('amount') }}" name="amount" placeholder="Total amount">
        @error('amount')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="reward_rate">Discount Rate</label>
        <input type="text" class="custom-select @error('reward_rate') is-invalid @enderror" required id="discount_rate" value="{{ old('discount_rate') }}" name="discount_rate" placeholder="Discount rate">
        @error('reward_rate')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>


    <input type="submit" class="btn btn-primary mb-2" value="Submit">
    <a href="{{ url('corporate') }}" class="btn btn-danger mb-2"> Cancel </a>
</form>
