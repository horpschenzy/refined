@extends('frontend.layouts.app')

@section('content')

<div id="baner11">
    <div class="section-space">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="section-head">
              <h1>Apply Now</h1>
              <p>Book your slot in the up coming 2021 Refined for Women by Pastor (Dr.) Funke Obadje. We thank God 2020 was glorious, we believe God for much more in 2021</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
              <form action="/register" method="POST" enctype="multipart/form-data">
                  @csrf

                <div class="form ">
                    <label for="last name">First Name:</label>
                    <input type="text"  name="firstname" required>
                </div>
                <div class="form ">
                    <label for="first name">Last Name:</label>
                    <input type="text" name="lastname" required>
                </div>
                 <p>*Participant are required to register with their real names</p>
                 <div class="form">
                    <label for="email">Email:</label>
                    <input type="email" class="form" name="email" required>
                  </div>
                  <div class="form">
                    <label for="phone">Phone Number:</label>
                    <input type="Number" class="form" name="phone" required>
                  </div>
                    <div class="form">
                    <label for="telegram_phone">Telegram Phone Number:</label>
                    <input type="Number" class="form" name="telegram_phone">
                  </div>
                <div class="form ">
                       <label for="country">Country of Residence</label>
                       <input type="text" class="form" name="country" required>
                 </div>
                 <div class="form">
                    <label for="first name">State of Residence</label>
                    <input type="text" class="form" name="state" required>
                 </div>
                 <div class="form">
                    <label for="exampleFormControlSelect1">Marital status</label>
                    <select class="form-control"  name="maritalstatus" required>
                      <option value="single">Single</option>
                      <option value="married">Married</option>
                      <option value="divorced">Divorced</option>
                      <option value="separated">Separated</option>
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
                      <option value="25-34">25-34</option>
                      <option value="35-45">35-45</option>
                      <option value="45+">45+</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="sel1">What means of communication do you prefer?</label>
                    <label class="checkbox-inline">Email<input style="margin-right: 5px;" name="prefer_com" type="radio" value="Email" required></label>
                    <label class="checkbox-inline">Telegram<input style="margin-right: 5px;" name="prefer_com" type="radio" value="Telegram" required></label>
                  </div>
                  <div class="form-group">
                    <label for="sel1">Are you a SETMAN? <span>(you pioneer a ministry work with your or together with husband)</span></label>
                    <label class="checkbox-inline">Yes<input style="margin-right: 5px;" name="setman" type="radio" value="yes" required></label>
                    <label class="checkbox-inline">No<input style="margin-right: 5px;" name="setman" type="radio" value="no" required></label>
                  </div>
                  <div class="form-group">
                        <label>How did you hear about REFINED</label>
                        <select class="form-control form-control-lg" name="advert">
                            <option value="Church announcement">Church announcement</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Email">Email</option>
                            <option value="Referal from past students">Referal from past students</option>
                            <option value="SAFOMS">SAFOMS</option>
                        </select>
                 </div>
                    <div class="form-group">
                        <label for="bornagain">Are you born again </label>
                        <label class="radio-inline">Yes<input style="margin-right: 5px;" name="born_again" type="radio" value="yes" required></label>
                        <label class="radio-inline">No<input style="margin-right: 5px;" name="born_again" type="radio" value="no" required></label>

                    </div>
                    <div class="form">
                        <label for="yearbornagain">When did you get born again?</label>
                        <input type="text" class="form-control" name="yearbornagain">
                    </div>
                    <div class="form-group">
                        <label for="spiritfilled">Are you filled with the Holy Ghost with the evidence of speaking in toungue?</label>
                        <label class="radio-inline">Yes<input style="margin-right: 5px;" name="holyghost" type="radio" value="yes" required></label>
                        <label class="radio-inline">No<input style="margin-right: 5px;" name="holyghost" type="radio" value="no" required></label>
                    </div>
                    <div class="form">
                        <label for="church">Which church do you attend currently? </label>
                        <input type="text" class="form-control" name="church" required>
                     </div>
                     <div class="form">
                        <label for="church">What department do you serve in your church? </label>
                        <input type="text" class="form-control" name="departmentchurch">
                     </div>
                     <div class="form-group">
                        <label for="spiritfilled">Are you a Pastor's Wife?</label>
                        <label class="radio-inline">Yes<input style="margin-right: 5px;" type="radio" name="pastor_wife" value="yes" required></label>
                        <label class="radio-inline">No<input style="margin-right: 5px;" type="radio" name="pastor_wife" value="no" required></label>
                    </div>

                    <div class="section-head">
                        <hr>
                        <h1>QUESTIONS ABOUT REFINED</h1>
                        <hr>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Have you taken REFINED before?</label>
                        <label class="checkbox-inline">Yes<input style="margin-right: 5px;" name="take_refined" type="radio" value="yes" required></label>
                        <label class="checkbox-inline">No<input style="margin-right: 5px;" name="take_refined"  type="radio" value="no" required></label>
                  </div>
                    <div class="form">
                        <label for="sel1">Have you been denied addmission for this REFINED before?</label>
                        <label class="checkbox-inline">Yes<input style="margin-right: 5px;" name="denied_admission" type="radio" value="yes" required></label>
                        <label class="checkbox-inline">No<input style="margin-right: 5px;" name="denied_admission"  type="radio" value="no" required></label>
                  </div>
                  <div class="form">
                    <label for="year">If yes, what year?</label>
                    <input type="text" class="form-control" name="yearofattendance" id="yearofattendance">
                  </div>
                  <div class="form-group">
                    <label for="sel1">Did you complete and graduate from REFINED?</label>
                    <label class="checkbox-inline">Yes<input style="margin-right: 5px;" name="graduate_refined" type="radio" value="yes" required></label>
                    <label class="checkbox-inline">No<input style="margin-right: 5px;" name="graduate_refined" type="radio" value="no" required></label>
                  </div>
                  <div class="form">
                    <label for="church">Why do you want to retake REFINED?</label>
                    <input type="text" class="form-control" name="retake" id="church">
                 </div>
                 <div class="form">
                    <label for="church">State your expectation from the course </label>
                    <input type="text" class="form-control" name="expectation"  required>
                </div>

                <div class="form">
                <label class="custom-file-label" for="customFile">Upload Picture</label>
                <input type="file" class="form" name="picture" id="customFile" required>
                </div>

                <div class="form"><button class="btn btn-primary btn-sh-primary" type="submit">Submit your Application</button></div>

              </form>

          </div>
        </div>
      </div>
    </div>
</div>



  @endsection
