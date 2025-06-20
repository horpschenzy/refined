@extends('frontend.layouts.app')

@section('content')

<div id="hero5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-head">
            <h1>the best place to learn and understand Ministry life for you and your family</h1>
            <p>Studies have shown that those who participate in group fitness are more dedicated and get better results.</p>
            <a href="#" class="btn btn-secondary">more ..</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="big-form">
            <h1>Portal Access</h1>
            <form action="" method="POST">
                @csrf
                <label for="ref">Registration Number</label>
                <input type="text" placeholder="REF/2025/0001">
                <label for="email">Email Address</label>
                <input type="email" placeholder="example@gmail.com">
                <button type="submit" class="btn btn-primary btn-sh-primary ">join us</button>

            </form>

            <p class="paragraph">
              * We don’t share your personal info with anyone. Check out our Privacy Policy for more information.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
