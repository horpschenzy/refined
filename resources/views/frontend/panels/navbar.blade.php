 <!-- start navbar -->
 <div id="navbar2">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
      <div class="container">
        <!-- start toggle button -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- end toggle button -->
        <!-- start brand -->
        <a class="navbar-brand" href="{{route('first')}}">
          <img src="dist/images/refined-new-black.png" alt="logo">
        </a>
        <!-- end brand -->
        <!-- start menue -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link" href="{{ route('first') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About REFINED</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://segunobadje.org/">About SOTM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary" href="{{route('apply')}}">Apply Now</a>
            </li>
          </ul>
        </div>
        <!-- end menue -->
      </div>
    </nav>
  </div>
  <!-- end navbar -->
