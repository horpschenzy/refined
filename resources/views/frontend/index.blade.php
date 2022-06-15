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
                <input type="text" placeholder="REF/2022/0001" name="username" required>
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
        <div class="container col-xxl-8 px-4 pt-5">
            <div class="row flex-lg align-items-center g-5 pt-5 justify-content-center">
                {{-- <div class="row flex-lg-row-reverse align-items-center g-5 py-5 justify-content-center"> --}}
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Online Mentoring Course for Women-In-Ministry</h1>
                    <p>Join the thousands of women who are taking over the world for God through their
                        various ministries</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ route('apply') }}" class="btn btn-primary btn-lg px-4 me-md-2 w-100">Apply </a>
                        <a href="{{ route('memberslogin') }}" class="btn btn-secondary btn-lg px-4 me-md-2 w-100">Login
                        </a>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-10 col-sm-8 col-lg-5">
                    {{-- <img src="dist/images/refined-flier.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                        width="400" height="400" loading="lazy" style="border-radius: 10px;"> --}}
                    <img src="dist/images/refined-flier.jpg" class="d-block mx-lg-auto img-fluid" alt="Refined Flier"
                        width="100%" loading="lazy" style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg justify-content-center py-5">

                <div class="col-12 col-md-9 ">
                    <h1 class="display-5 fw-bold lh-1 mb-5 text-center py-4 text-uppercase"
                        style="background-color: #1b2949; color: #ffffff; border-bottom :5px solid #FEB45C;">About Refined
                    </h1>
                    <div class="text-justify mb-5">
                        <p class="mb-3">REFINED is an online mentoring platform for Women in Ministry. </p>

                        <p class="mb-3">It is a three-month grooming and preparation course, a mentoring program
                            for
                            women in ministry
                            who want to be better equipped for the assignment that God has called them to and this platform
                            is
                            facilitated by Pastor Funke Obadje. </p>

                        <p class="mb-3"> “Having gotten countless calls and requests from women who desire to be
                            mentored and even
                            mentored a few personally along the lines of ministry, God laid it on my heart to put together a
                            platform where women who desire to be effective in ministry, women who have questions in their
                            heart
                            concerning ministry and balancing it with the home front can get answers to those questions”,
                            says
                            Pastor Funke Obadje. </p>

                        <p class="mb-3">Hence, the REFINED course and mentoring program.This three months
                            intensive
                            online course is a
                            catalyst to jump start and refine you into a thoroughly furnished minister, effective in this
                            day.
                        </p>

                        <p class="mb-3">This platform will expose you to powerful teachings,thought provoking
                            seminars
                            and assignments
                            that will help you unearth the treasures that lie within you and build capacity for your
                            assignment.
                        </p>

                        <p class="mb-3"> During this course,you will be required to attend all teachings which
                            would
                            be made available
                            in audio and video format online, at the end of which there will be a take home assignment to be
                            submitted at the end of the week. All these would be done online.</p>

                        <p class="mb-3">
                            <em>So, are you a woman with a call upon her life? | Are you a woman in ministry?
                                | Do you desire to be an effective minister? | Then, this platform is for you.
                            </em>
                        </p>

                        <p>
                            Towards the end of this course,you would be attending live teaching sessions with Pastor Funke
                            and
                            by the grace of God,it will be an empowering and destiny encountering prophetic moment where you
                            will be prayed for and imparted for the assignment ahead.</p>
                        </p>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ route('apply') }}" class="btn btn-primary btn-lg px-4 me-md-2 w-100">Apply </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
