@extends('frontend.layouts.app')

@section('content')



<div id="baner11">
    <div class="section-space">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="section-head">
                @if (Session::has('message'))
                    {{ Session::get('message') }}
                @endif
              <p>Thank you for registering for REFINED 2021. Your application is being processed. Expect a feedback on your admission status via email within 3 weeks. Please check your inbox within the time. <strong>No mail from us in your box? Check Promotions/Spam</strong>.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>


@endsection
