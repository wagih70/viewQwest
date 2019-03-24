@extends('layouts.app')

@section('content')
  <div style="display: inline-block">
    @if(count($errors) > 0)
       @foreach ($errors->all() as $error)
          <div class="alert alert-danger">{{ $error }}</div>
       @endforeach
    @endif
    <form action="/viewqwest" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="Name">Name</label>
        <input type="name" class="form-control" id="Name" name="name" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="NRIC">NRIC</label>
        <input type="text" class="form-control" id="NRIC" name="nric" placeholder="Enter NRIC">
      </div>
      <div class="form-group">
        <label for="Email">Email address</label>
        <input type="email" class="form-control" id="Email" name="email" placeholder="Enter Email">
      </div>
      <div class="form-group">
        <label for="Mobile">Mobile number</label>
        <input type="text" class="form-control" id="Mobile" name="mobile" placeholder="Enter mobile number">
      </div>
      <div class="form-group">
        <label for="Address">Address</label>
        <input type="text" class="form-control" id="Address" name="address" placeholder="Enter address">
      </div>
      <div class="form-group">
        <label for="City">City</label>
        <input type="text" class="form-control" id="City" name="city" placeholder="Enter city">
      </div>
      <div class="form-group">
        <label for="State">State</label>
        <input type="text" class="form-control" id="State" name="state" placeholder="Enter state">
      </div>
      <div class="form-group">
        <label for="Country">Country</label>
        <input type="text" class="form-control" id="Country" name="country" placeholder="Enter country">
      </div>
      <div class="form-group">
        <label for="zip_code">Zip Code</label>
        <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Enter zip code">
      </div>
      <div class="form-group">
        <label for="image">Insert image</label><br>
        <input type="file" id="image" name="image" accept=".png, .jpg">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
