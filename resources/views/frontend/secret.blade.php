@extends('frontend.layouts.app')

@section('content')

<div id="baner11">
  <div class="section-space">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="section-head text-center">
            {{-- <h1>Application Closed</h1>
            <p>Application for Refined 2022 is now closed</p> --}}
            <p>Book your slot in the up coming 2024 refined for women by Pastor (Dr.) Funke Obadje. We thank God 2023
              was glorious, we believe God for much more in 2024</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="/register" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form ">
              <label for="last name" class="font-weight-bold mt-3">First Name</label>
              <input type="text" name="firstname" required value="{{ old('firstname') }}">
            </div>
            <div class="form ">
              <label for="first name" class="font-weight-bold mt-3">Last Name</label>
              <input type="text" name="lastname" required value="{{ old('lastname') }}">
            </div>
            <p>*Participants are required to register with their real names</p>
            <div class="form">
              <label for="email" class="font-weight-bold mt-3">Email</label>
              <input type="email" class="form" name="email" required value="{{ old('email') }}">
            </div>
            <div class="form">
              <label for="phone" class="font-weight-bold mt-3">Phone Number</label>
              <input type="Number" class="form" name="phone" required value="{{ old('phone') }}">
            </div>
            <div class="form">
              <label for="telegram_phone" class="font-weight-bold mt-3">Telegram Phone Number</label>
              <input type="Number" class="form" name="telegram_phone" required value="{{ old('telegram_phone') }}">
            </div>
            <div class="form ">
              <label for="country" class="font-weight-bold mt-3">Country of Residence</label>
              <input type="text" class="form" name="country" required value="{{ old('country') }}">
            </div>
            <div class="form">
              <label for="first name" class="font-weight-bold mt-3">State of Residence</label>
              <input type="text" class="form" name="state" required value="{{ old('state') }}">
            </div>
            <div class="form">
              <label for="exampleFormControlSelect1" class="font-weight-bold mt-3">Marital status</label>
              <select class="form-control  p-3" name="maritalstatus" required style="height: 50px;">
                <option></option>
                <option value="Single but engaged">Single but engaged</option>
                <option value="Single not engaged">Single not engaged</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Separated">Separated</option>
                <option value="Widow">Widow</option>
                <option value="Single mom">Single mom</option>
              </select>
            </div>
            <div class="form ">
              <label for="exampleFormControlSelect1" class="font-weight-bold mt-3">Gender</label>
              <select class="form-control  p-3" required name="gender" style="height: 50px;">
                <option></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            <div class="form">
              <label for="sel1" class="font-weight-bold mt-3">Age range</label>
              <select class="form-control  p-3" required name="agerange" style="height: 50px;">
                <option></option>
                <option value="10-18">10-18</option>
                <option value="19-25">19-25</option>
                <option value="26-34">26-34</option>
                <option value="35-44">35-44</option>
                <option value="45+">45+</option>
              </select>
            </div>
            <div class="form-group">
              <label for="sel1" class="font-weight-bold mt-3">What means of communication do you prefer?</label> <br />
              <label class="checkbox-inline text-center">Email<input style="margin-right: 5px;" name="prefer_com" type="radio"
                  value="Email" required></label>
              <label class="checkbox-inline text-center">Telegram<input style="margin-right: 5px;" name="prefer_com" type="radio"
                  value="Telegram" required></label>
            </div>
            <div class="form-group">
              <label class="font-weight-bold mt-3">Are you currently involved in ministry?*</label> <br />
              <label class="radio-inline text-center">Yes<input style="margin-right: 5px;" type="radio" name="involved_in_ministry"
                  value="yes" required></label>
              <label class="radio-inline text-center">No<input style="margin-right: 5px;" type="radio" name="involved_in_ministry"
                  value="no" required></label>
            </div>
            <div class="form">
              <label>If yes, Kindly specify</label>
              <input type="text" class="form-control" name="ministry" id="ministry" value="{{ old('ministry') }}">
            </div>
            <div class="form-group">
              <label for="sel1" class="font-weight-bold mt-3">Are you a SetMan / G.O? (Do you pioneer a ministry work with your
                husband?)</span></label> <br />
              <label class="checkbox-inline text-center">Yes<input style="margin-right: 5px;" name="setman" type="radio" value="yes"
                  required></label>
              <label class="checkbox-inline text-center">No<input style="margin-right: 5px;" name="setman" type="radio" value="no"
                  required></label>
            </div>
            <div class="form-group">
              <label for="spiritfilled" class="font-weight-bold mt-3">Are you a Pastor's Wife? (i.e. currently married to a Pastor)</label> <br />
              <label class="radio-inline text-center">Yes<input style="margin-right: 5px;" type="radio" name="pastor_wife"
                  value="yes" required></label>
              <label class="radio-inline text-center">No<input style="margin-right: 5px;" type="radio" name="pastor_wife" value="no"
                  required></label>
            </div>
            <div class="form-group">
              <label class="font-weight-bold mt-3">How did you hear about REFINED?</label>
              <select class="form-control p-3" name="advert" style="height: 50px;" required>
                <option></option>
                <option value="Church announcement">Church announcement</option>
                <option value="Social Media">Social Media</option>
                <option value="Email">Email</option>
                <option value="Referral from past students">Referral from past students</option>
                <option value="SAFOMS">SAFOMS</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bornagain" class="font-weight-bold mt-3">Are you born again? </label> <br />
              <label class="radio-inline text-center">Yes<input style="margin-right: 5px;" name="born_again" type="radio"
                  value="yes" required></label>
              <label class="radio-inline text-center">No<input style="margin-right: 5px;" name="born_again" type="radio" value="no"
                  required></label>

            </div>
            <div class="form">
              <label for="yearbornagain" class="font-weight-bold mt-3">When did you get born again?</label>
              <input type="text" class="form-control" name="yearbornagain" value="{{ old('yearbornagain') }}">
            </div>
            <div class="form-group">
              <label for="spiritfilled" class="font-weight-bold mt-3">Are you filled with the Holy Ghost with the evidence of speaking in
                tongues?</label> <br />
              <label class="radio-inline text-center">Yes<input style="margin-right: 5px;" name="holyghost" type="radio" value="yes"
                  required></label>
              <label class="radio-inline text-center">No<input style="margin-right: 5px;" name="holyghost" type="radio" value="no"
                  required></label>
            </div>
            <div class="form">
              <label for="church" class="font-weight-bold mt-3">Which church do you attend currently? </label>
              <input type="text" class="form-control" name="church" required value="{{ old('church') }}">
            </div>
            <div class="form">
              <label for="church" class="font-weight-bold mt-3">What department do you serve in your church? </label>
              <input type="text" class="form-control" name="departmentchurch" value="{{ old('departmentchurch') }}" required>
            </div>


            <div class="section-head">
              <hr>
              <h1>QUESTIONS ABOUT REFINED</h1>
              <hr>
            </div>

            <div class="form-group">
              <label for="sel1" class="font-weight-bold mt-3">Have you taken REFINED before?</label> <br />
              <label class="checkbox-inline text-center">Yes<input style="margin-right: 5px;" name="take_refined" type="radio"
                  value="yes" required></label>
              <label class="checkbox-inline text-center">No<input style="margin-right: 5px;" name="take_refined" type="radio"
                  value="no" required></label>
            </div>
            <div class="form">
              <label for="sel1" class="font-weight-bold mt-3">Have you been denied admission for this REFINED before?</label> <br />
              <label class="checkbox-inline text-center">Yes<input style="margin-right: 5px;" name="denied_admission" type="radio"
                  value="yes" required></label>
              <label class="checkbox-inline text-center">No<input style="margin-right: 5px;" name="denied_admission" type="radio"
                  value="no" required></label>
            </div>
            <div class="form">
              <label for="year">If yes, what year?</label>
              <input type="text" class="form-control" name="yearofattendance" id="yearofattendance"
                value="{{ old('yearofattendance') }}">
            </div>
            <div class="form-group">
              <label for="sel1" class="font-weight-bold mt-3">Did you complete and graduate from REFINED?</label> <br />
              <label class="checkbox-inline text-center">Yes<input style="margin-right: 5px;" name="graduate_refined" type="radio"
                  value="yes" required></label>
              <label class="checkbox-inline text-center">No<input style="margin-right: 5px;" name="graduate_refined" type="radio"
                  value="no" required></label>
            </div>
            <div class="form">
              <label for="church" class="font-weight-bold mt-3">Why do you want to retake REFINED?</label>
              <input type="text" class="form-control" name="retake" id="church" value="{{ old('retake') }}" required>
            </div>
            <div class="form">
              <label for="church" class="font-weight-bold mt-3">State your expectation from the course </label>
              <input type="text" class="form-control" name="expectation" value="{{ old('expectation') }}" required>
            </div>

            <div class="form">
              <label class="custom-file-label font-weight-bold mt-3" for="customFile" >Upload Picture (MAXIMUM SIZE: 1MB)</label>
              <input type="file" class="form" name="picture" id="customFile" required>
            </div>

            <div class="form"><button class="btn btn-primary btn-sh-primary" type="submit">Submit your
                Application</button></div>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>



@endsection