<x-guest-layout>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration mb-5" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form method="POST" action="{{ route('register') }}">
            @csrf

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="first_name" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>
                  @if($errors->has('first_name'))
                      <div class="error">{{ $errors->first('first_name') }}</div>
                  @endif

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="last_name" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>
                  @if($errors->has('first_name'))
                      <div class="error">{{ $errors->first('first_name') }}</div>
                  @endif

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="password">Password</label>
                  </div>
                  @if($errors->has('password'))
                      <div class="error">{{ $errors->first('password') }}</div>
                  @endif

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="password" id="c_password" name="password_confirmation" class="form-control form-control-lg" />
                    <label class="form-label" for="c_password">Confirm Password</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">
                  <div class='input-group date' id='datetimepicker'>
                    <input type='text' name="birthday" class="form-control" />
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>
                  @if($errors->has('birthday'))
                      <div class="error">{{ $errors->first('birthday') }}</div>
                  @endif

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="femaleGender"
                      value="female"
                      checked
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="maleGender"
                      value="male"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="otherGender"
                      value="other"
                    />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                  @if($errors->has('gender'))
                      <div class="error">{{ $errors->first('gender') }}</div>
                  @endif
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>
                  @if($errors->has('email'))
                      <div class="error">{{ $errors->first('email') }}</div>
                  @endif

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" name="phone" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="annualIncome" name="income" class="form-control form-control-lg" />
                        <label class="form-label" for="annualIncome">Annual Income</label>
                    </div>

                    </div>

                    <div class="col-md-6 mb-4 pb-2">
                    <select class="select form-control-lg col-12" name="occupation">
                        <option value="">Occupation</option>
                        <option value="2">Private Job</option>
                        <option value="3">Government Job</option>
                        <option value="4">Business</option>
                    </select>
                    </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                    <select class="select form-control-lg col-12" name="family_type">
                        <option value="">Family Type</option>
                        <option value="2">Joint Family</option>
                        <option value="3">Nuclear Family</option>
                    </select>
                </div>

                <div class="col-md-6 mb-4 pb-2">
                    <select class="select form-control-lg col-12" name="manglik">
                        <option value="">Manglik</option>
                        <option value="2">Yes</option>
                        <option value="3">No</option>
                    </select>
                </div>
              </div>
            <h3 class="mb-4">Partner Preference</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-outline">
                            <label for="amount">Annual Income:</label>
                            <input type="text" id="amount" name="p_income" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            <div id="slider-range"></div>
                        </div>
                    </div>

                </div>

                <div class="row mt-3 mb-3 ">
                    <div class="col-md-6">
                        <div class="">
                            <label><strong>Occupation :</strong></label><br/>
                            <select class="form-control" name="p_occupation[]" multiple="">
                                <option value="private">Private Job</option>
                                <option value="government">Government job</option>
                                <option value="business">Business</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <label><strong>Family Type :</strong></label><br/>
                            <select class="form-control" name="p_family_type[]" multiple="">
                                <option value="joint">Joint Family</option>
                                <option value="nuclear">Nuclear Family</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                        <select class="select form-control-lg col-12" name="p_manglik">
                            <option value="">Manglik</option>
                            <option value="2">Yes</option>
                            <option value="3">No</option>
                        </select>
                    </div>
                </div>
                
              <div class="row">
                <div class="col-md-3">
                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>
                <div class="col-md-3">
                  <a href="{{ url('auth/google') }}" style="margin-top: 0px !important;background: green;color: #ffffff;padding: 5px;border-radius:7px;" class="ml-2">
                    <strong>Google Login</strong>
                  </a> 
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
    $( function() {
        $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 75, 300 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    } );
</script>
</x-guest-layout>
