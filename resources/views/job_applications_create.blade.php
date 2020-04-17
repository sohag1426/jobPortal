@extends ('laraview.layouts.topNavLayout')
@section ('title')
Job Application of X Company
@endsection
@section ('pageCss')
<style>
  input.error {
      border: 1px dashed red;
      font-weight: 300;
      color: red;
  }
  
  label.error {
      color: red;
      font-size: 1rem;
      display: block;
      margin-top: 5px;
  }
</style>
@endsection
@section ('topNavbar')
@include ('navbar')
@endsection
@section('contentTitle')
<h1>Job Application of X Company</h1>
@endsection
@section('content')
<p><span class="text-danger">* required field.</span></p>
<form id="sid03" enctype="multipart/form-data" action ="{{ route('job_applications.store') }}"  method="post">
  @csrf
  <!--Email-->
  <br>
  <div class="form-group">
    <label for="email"><span class="text-danger">*</span><b>Email address</b></label>
    <input type="email" class="form-control" id="email" name="email" required="">
  </div>
  <!--/Email-->
  <!--password-->
  <div class="form-group">
    <label for="password"><span class="text-danger">*</span><b>Password</b></label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
  </div>
  <!--password-->
  <!--Name-->
  <div class="form-group">
    <div class="row">
      <label for="first_name">&nbsp;&nbsp;&nbsp;<span class="text-danger">*</span><b>Name</b></label>
    </div>
    <div class="row">
      <div class="col">
        <input type="text" maxlength="64" class="form-control" id="first_name" name="first_name" aria-describedby="first_name_help" required="">
        <small id="first_name_help" class="form-text text-muted">First</small>
      </div>
      <div class="col">
        <input type="text" maxlength="64" class="form-control"  id="last_name" name="last_name" aria-describedby="last_name_help" required="">
        <small id="last_name_help" class="form-text text-muted">Last</small>
      </div>
    </div>
  </div>
  <!--/Name-->
  <!--Phone-->
  <br>
  <div class="form-group">
    <label for="phone"><span class="text-danger">*</span><b>Phone</b></label>
    <input type="number" class="form-control" id="phone" name="phone" required="">
  </div>
  <!--/Phone-->
  <!--Web Site-->
  <br>
  <div class="form-group">
    <label for="web_site"><b>Web Site(Optional)</b></label>
    <input type="text" class="form-control" id="web_site" name="web_site" placeholder="http://">
  </div>
  <!--/Web Site-->
  <!--Date of Birth-->
  <br>
  <div class="form-group">
    <div class="row">
      <div class="col">
        <label for="date_of_birth">&nbsp;&nbsp;&nbsp;<span class="text-danger">*</span><b>Date of Birth</b></label>
        <input type="text" id="date_of_birth" name="date_of_birth" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy"  data-mask required="">
      </div>
    </div>
  </div>
  <!--/Date of Birth-->
  <!--Street Address-->
  <br>
  <div class="form-group">
    <label for="address"><b>Address</b></label>
    <input type="text" class="form-control" id="address" name="street_address" aria-describedby="street_address_help" required="">
    <small id="street_address_help" class="form-text text-muted"><span class="text-danger">*</span>Street Address</small>
  </div>
  <!--/Street Address-->
  <!--Address Line 2-->
  <div class="form-group">
    <input type="text" class="form-control" name="address_line_2" aria-describedby="address_line_2_help" >
    <small id="address_line_2_help" class="form-text text-muted">Address Line 2</small>
  </div>
  <!--/Address Line 2-->
  <div class="row">
    <!--City-->
    <div class="col">
      <input type="text" class="form-control" name="city" aria-describedby="city_help" >
      <small id="city_help" class="form-text text-muted">City</small>
    </div>
    <!--/City-->
    <!--State/province/Region-->
    <div class="col">
      <input type="text" class="form-control" name="state" aria-describedby="state_help" >
      <small id="state_help" class="form-text text-muted">State/province/Region</small>
    </div>
    <!--/State/province/Region-->
  </div>
  <div class="row">
    <!--Postal/Zip Code-->
    <div class="col">
      <input type="number" class="form-control" name="postal" aria-describedby="postal_help" required="">
      <small id="postal_help" class="form-text text-muted"><span class="text-danger">*</span>Postal/Zip Code</small>
    </div>
    <!--/Postal/Zip Code-->
    <!--Country-->
    <div class="col">
      <select class="form-control" name="country" aria-describedby="country_help" required="">
        <option value=""></option>
        <option value="Bangladesh">Bangladesh</option>
      </select>
      <small id="country_help" class="form-text text-muted"><span class="text-danger">*</span>Country</small>
    </div>
    <!--/Country-->
  </div>
  <!--Sex-->
  <br>
  <p><b>Sex</b></p>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="sex" id="male_option" value="male">
    <label class="form-check-label" for="male_option">
      Male
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="sex" id="female_option" value="female">
    <label class="form-check-label" for="female_option">
      Female
    </label>
  </div>
  <!--/Sex-->
  <!--Bio-->
  <br>
  <div class="form-group">
    <label for="bio"><b>Bio</b></label>
    <textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
  </div>
  <!--/Bio-->
  <!--Division of Interest-->
  <br>
  <p><b>Division of Interest</b></p>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="division[]" value="HR Division" id="hr">
    <label class="form-check-label" for="hr">
      HR Division
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="division[]" value="IT Division" id="it">
    <label class="form-check-label" for="it">
      IT Division
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="division[]" value="Marketing Division" id="marketing">
    <label class="form-check-label" for="marketing">
      Marketing Division
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="division[]" value="Other" id="other">
    <label class="form-check-label" for="other">
      Other
    </label>
  </div>
  <!--/Division of Interest-->
  <!--Expected Salary-->
  <br>
  <label for="salary"><span class="text-danger">*</span><b>Expected Salary</b></label>
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text">TK</div>
    </div>
    <input type="text" class="form-control" id="salary" name="salary" required="">
  </div>
  <!--/Expected Salary-->
  <!--Latest Degree-->
  <br>
  <label  for="degree"><span class="text-danger">*</span><b>Latest Degree</b></label>
  <select class="custom-select my-1 mr-sm-2" id="degree" name="latest_degree" required="">
    <option selected value="">Choose...</option>
    <option value="bsc">B.Sc</option>
    <option value="msc">M.Sc</option>
    <option value="hsc">HSC</option>
  </select>
  <!--Latest Degree-->
  <!--Years of Experience-->
  <br>
  <div class="form-group">
    <label for="experience"><span class="text-danger">*</span><b>Year(s) of Experience</b></label>
    <input type="number" class="form-control" id="experience" name="experience" required="">
  </div>
  <!--/Years of Experience-->
  <!--Current Designation-->
  <br>
  <div class="form-group">
    <label for="designation"><span class="text-danger">*</span><b>Name of Current Designation</b></label>
    <input type="text" class="form-control" id="designation" name="designation" required="">
  </div>
  <!--/Current Designation-->
  <!--Upload CV-->
  <br>
  <div class="form-group">
    <label for="cv"><b>Upload CV</b></label>
    <input type="file" class="form-control-file" id="cv" name="cv">
  </div>
  <!--/Upload CV-->
  <br>
  <button class="btn btn-primary" type="submit" name="submit">Submit</button>
</form>
@endsection
@section('pageJs')
<script src="/jsPlugins/jquery-validation/dist/jquery.validate.js"></script>
<script>
  $("#sid03").validate({
   onkeyup: true,
    rules: {
  	    phone: {
  	      required: true,
  	      minlength: 11,
  	      maxlength: 11
  	    },
  		web_site: {
  	      url: true
  	    },
  		experience: {
  			range: [1, 20]
  		},
  		salary: {
  			range: [25, 100000]
  		}
  	  },
  	  messages: {
  	    first_name: {
  	      required: "Valid First Name is required"
  	    },
  	    last_name: {
  	    	required: "Valid Last Name is required"
  	    }
  	  }
  	});
</script>
<script>
  //Initialize Select2 Elements
  $('.select2').select2()
  
  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })
  
  //Datemask dd/mm/yyyy
  $('#datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' })
  $('[data-mask]').inputmask()
</script>
@endsection
