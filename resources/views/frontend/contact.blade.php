@extends('frontend.layouts.app')

@section('content')



<div id="baner11">
    <div class="section-space">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="section-head">
              <h1>Get in Touch</h1>
              <p>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
              <form action="" method="POST">
                  @csrf
                <div class="form"><input type="text" placeholder="your name"></div>
                <div class="form"><input type="text" placeholder="your email"></div>
                <textarea class="form-control" name="message" id="" rows="10" placeholder="Enter Your Message"  ></textarea>
                <div class="form"><button class="btn btn-primary btn-sh-primary">Submit</button></div>
              </form>
          </div>
        </div>
      </div>
    </div>
</div>


@endsection
