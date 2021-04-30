@extends('frontend.layouts.app')

@section('content')

{{-- <div id="hero5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-head">
            <h1>Online Mentoring Course for
                Women-In-Ministry</h1>
            <p>Join the thousands of women who are taking over the world for God
                through their various ministries.</p>
            <a href="{{ route('about') }}" class="btn btn-secondary">more ..</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="big-form">
            <h1>Portal Access</h1>
            <form action="/login" method="POST">
                @csrf
                <label for="ref">Registration Number</label>
                <input type="text" placeholder="REF/2021/0001" name="username" required>
                <label for="Password">Password</label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <button type="submit" class="btn btn-primary btn-sh-primary ">Login</button>

            </form>

            <p class="paragraph">
              * We don’t share your personal info with anyone.
            </p>
          </div>
        </div>
      </div>
    </div>
</div> --}}
<div class="row" id="hero">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 justify-content-center">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="dist/images/pastor-funke-obadje.png" class="d-block mx-lg-auto img-fluid bg-dark" alt="Bootstrap Themes" width="350" height="250" loading="lazy" style="border-radius: 20px;">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Online Mentoring Course for Women-In-Ministry</h1>
            <p class="lead">Join the thousands of women who are taking over the world for God through their various ministries</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{route('apply')}}" class="btn btn-primary btn-lg px-4 me-md-2">Apply </a>
                <a href="{{route('memberslogin')}}" class="btn btn-primary btn-lg px-4 me-md-2">Login </a>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="row">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg align-items-top g-5 py-5">
          <div class="col-12">
            <img src="dist/images/refined-flier.png" class="d-block mx-lg-auto img-fluid bg-dark" alt="Bootstrap Themes" width="100%" height="200" loading="lazy">
          </div>
          <div class="col-12">
            <h1 class="display-5 fw-bold lh-1 mb-3 text-uppercase">About Refined</h1>
            <p class="lead">REFINED is an online mentoring platform for Women in Ministry.

                <br>It is a three-month grooming and preparation course, a mentoring program for women in ministry who want to be better equipped for the assignment that God has called them to and this platform is facilitated by Pastor Funke Obadje.

                <br> “Having gotten countless calls and requests from women who desire to be mentored and even mentored a few personally along the lines of ministry, God laid it on my heart to put together a platform where women who desire to be effective in ministry, women who have questions in their heart concerning ministry and balancing it with the home front can get answers to those questions”, says Pastor Funke Obadje.

                <br> Hence, the REFINED course and mentoring program.This three months intensive online course is a catalyst to jump start and refine you into a thoroughly furnished minister, effective in this day.

                <br> This platform will expose you to powerful teachings,thought provoking seminars and assignments that will help you unearth the treasures that lie within you and build capacity for your assignment.

                <br> During this course,you will be required to attend all teachings which would be made available in audio and video format online, at the end of which there will be a take home assignment to be submitted at the end of the week. All these would be done online.

                <br> So, are you a woman with a call upon her life?
                Are you a woman in ministry?
                Do you desire to be an effective minister?
                Then, this platform is for you.

                Towards the end of this course,you would be attending live teaching sessions with Pastor Funke and by the grace of God,it will be an empowering and destiny encountering prophetic moment where you will be prayed for and imparted for the assignment ahead.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="{{route('apply')}}" class="btn btn-primary btn-lg px-4 me-md-2 w-100">Apply </a>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection
