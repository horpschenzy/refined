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
            <p>Book your slot in the up coming 2023 refined for women by Pastor (Dr.) Funke Obadje. We thank God 2022
              was glorious, we believe God for much more in 2023</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="/register" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form ">
              <label for="last name">First Name</label>
              <input type="text" name="firstname" required value="{{ old('firstname') }}">
            </div>
            <div class="form ">
              <label for="first name">Last Name</label>
              <input type="text" name="lastname" required value="{{ old('lastname') }}">
            </div>
            <p>*Participants are required to register with their real names</p>
            <div class="form">
              <label for="email">Email</label>
              <input type="email" class="form" name="email" required value="{{ old('email') }}">
            </div>
            <div class="form">
              <label for="phone">Phone Number</label>
              <input type="Number" class="form" name="phone" required value="{{ old('phone') }}">
            </div>
            <div class="form">
              <label for="telegram_phone">Telegram Phone Number</label>
              <input type="Number" class="form" name="telegram_phone" value="{{ old('telegram_phone') }}">
            </div>
            <div class="form ">
              <label for="country">Country of Residence</label>
              <input type="text" class="form" name="country" required value="{{ old('country') }}">
            </div>
            <div class="form">
              <label for="first name">State of Residence</label>
              <input type="text" class="form" name="state" required value="{{ old('state') }}">
            </div>
            <div class="form">
              <label for="exampleFormControlSelect1">Marital status</label>
              <select class="form-control" name="maritalstatus" required>
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
              <label for="exampleFormControlSelect1">Gender</label>
              <select class="form-control form-control-lg" required name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            <div class="form">
              <label for="sel1">Age range</label>
              <select class="form-control form-control-lg" required name="agerange">
                <option value="10-18">10-18</option>
                <option value="19-25">19-25</option>
                <option value="26-34">26-34</option>
                <option value="35-44">35-44</option>
                <option value="45+">45+</option>
              </select>
            </div>
            <div class="form-group">
              <label for="sel1">What means of communication do you prefer?</label>
              <label class="checkbox-inline">Email<input style="margin-right: 5px;" name="prefer_com" type="radio"
                  value="Email" required></label>
              <label class="checkbox-inline">Telegram<input style="margin-right: 5px;" name="prefer_com" type="radio"
                  value="Telegram" required></label>
            </div>
            <div class="form-group">
              <label>Are you currently involved in ministry?*</label>
              <label class="radio-inline">Yes<input style="margin-right: 5px;" type="radio" name="involved_in_ministry"
                  value="yes" required></label>
              <label class="radio-inline">No<input style="margin-right: 5px;" type="radio" name="involved_in_ministry"
                  value="no" required></label>
            </div>
            <div class="form">
              <label>If yes, Kindly specify</label>
              <input type="text" class="form-control" name="ministry" id="ministry" value="{{ old('ministry') }}">
            </div>
            <div class="form-group">
              <label for="sel1">Are you a SetMan / G.O? (Do you pioneer a ministry work with your
                husband?)</span></label>
              <label class="checkbox-inline">Yes<input style="margin-right: 5px;" name="setman" type="radio" value="yes"
                  required></label>
              <label class="checkbox-inline">No<input style="margin-right: 5px;" name="setman" type="radio" value="no"
                  required></label>
            </div>
            <div class="form-group">
              <label for="spiritfilled">Are you a Pastor's Wife?</label>
              <label class="radio-inline">Yes<input style="margin-right: 5px;" type="radio" name="pastor_wife"
                  value="yes" required></label>
              <label class="radio-inline">No<input style="margin-right: 5px;" type="radio" name="pastor_wife" value="no"
                  required></label>
            </div>
            <div class="form-group">
              <label>How did you hear about REFINED?</label>
              <select class="form-control form-control-lg" name="advert">
                <option value="Church announcement">Church announcement</option>
                <option value="Social Media">Social Media</option>
                <option value="Email">Email</option>
                <option value="Referral from past students">Referral from past students</option>
                <option value="SAFOMS">SAFOMS</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bornagain">Are you born again? </label>
              <label class="radio-inline">Yes<input style="margin-right: 5px;" name="born_again" type="radio"
                  value="yes" required></label>
              <label class="radio-inline">No<input style="margin-right: 5px;" name="born_again" type="radio" value="no"
                  required></label>

            </div>
            <div class="form">
              <label for="yearbornagain">When did you get born again?</label>
              <input type="text" class="form-control" name="yearbornagain" value="{{ old('yearbornagain') }}">
            </div>
            <div class="form-group">
              <label for="spiritfilled">Are you filled with the Holy Ghost with the evidence of speaking in
                tongues?</label>
              <label class="radio-inline">Yes<input style="margin-right: 5px;" name="holyghost" type="radio" value="yes"
                  required></label>
              <label class="radio-inline">No<input style="margin-right: 5px;" name="holyghost" type="radio" value="no"
                  required></label>
            </div>
            <div class="form">
              <label for="church">Which church do you attend currently? </label>
              <input type="text" class="form-control" name="church" required value="{{ old('church') }}">
            </div>
            <div class="form">
              <label for="church">What department do you serve in your church? </label>
              <input type="text" class="form-control" name="departmentchurch" value="{{ old('departmentchurch') }}">
            </div>


            <div class="section-head">
              <hr>
              <h1>QUESTIONS ABOUT REFINED</h1>
              <hr>
            </div>

            <div class="form-group">
              <label for="sel1">Have you taken REFINED before?</label>
              <label class="checkbox-inline">Yes<input style="margin-right: 5px;" name="take_refined" type="radio"
                  value="yes" required></label>
              <label class="checkbox-inline">No<input style="margin-right: 5px;" name="take_refined" type="radio"
                  value="no" required></label>
            </div>
            <div class="form">
              <label for="sel1">Have you been denied admission for this REFINED before?</label>
              <label class="checkbox-inline">Yes<input style="margin-right: 5px;" name="denied_admission" type="radio"
                  value="yes" required></label>
              <label class="checkbox-inline">No<input style="margin-right: 5px;" name="denied_admission" type="radio"
                  value="no" required></label>
            </div>
            <div class="form">
              <label for="year">If yes, what year?</label>
              <input type="text" class="form-control" name="yearofattendance" id="yearofattendance"
                value="{{ old('yearofattendance') }}">
            </div>
            <div class="form-group">
              <label for="sel1">Did you complete and graduate from REFINED?</label>
              <label class="checkbox-inline">Yes<input style="margin-right: 5px;" name="graduate_refined" type="radio"
                  value="yes" required></label>
              <label class="checkbox-inline">No<input style="margin-right: 5px;" name="graduate_refined" type="radio"
                  value="no" required></label>
            </div>
            <div class="form">
              <label for="church">Why do you want to retake REFINED?</label>
              <input type="text" class="form-control" name="retake" id="church" value="{{ old('retake') }}">
            </div>
            <div class="form">
              <label for="church">State your expectation from the course </label>
              <input type="text" class="form-control" name="expectation" value="{{ old('expectation') }}" required>
            </div>

            <div class="form">
              <label class="custom-file-label" for="customFile">Upload Picture (MAXIMUM SIZE: 1MB)</label>
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