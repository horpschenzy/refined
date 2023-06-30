 <!-- start navbar -->
 {{-- <div id="navbar2">
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
              <a class="nav-link" href="{{ route('about') }}">About REFINED</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://segunobadje.org/">About SOTM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">FAQ</a>
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
</div> --}}
 <nav class="navbar navbar-expand navbar-light" aria-label="Second navbar example">
     <div class="container py-2">
         <a class="navbar-brand pl-4" href="{{ route('first') }}"> <img src="dist/images/refined-new-logo.png"
                 alt="Refined Logo" srcset=""></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02"
             aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarsExample02">
             <ul class="navbar-nav me-auto">
                 <li class="nav-item">
                 </li>
                 <li class="nav-item">
                 </li>
             </ul>

             {{-- <a href="{{ route('apply') }}" class="btn btn-primary">Apply</a> --}}

         </div>
     </div>
 </nav>
 <!-- end navbar -->
