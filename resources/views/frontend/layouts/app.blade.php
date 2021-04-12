<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- stylesheet  -->
  <link rel="stylesheet" href="etc/css/tether.min.css">
  <link rel="stylesheet" href="etc/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/style/app.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
  <title>REFINED 2021</title>
</head>
<body>

<div id="page" class="page">
 @include('frontend.panels.navbar')

 @yield('content')
  <!-- start footer -->
  @include('frontend.panels.footer')
  <!-- end footer -->
</div>

@stack('stripts')
<!-- script -->
<script src="etc/js/jquery.min.js"></script>
<script src="etc/js/tether.min.js"></script>
<script src="etc/js/bootstrap.min.js"></script>
<!-- <script src="etc/js/jquery.nicescroll.min.js"></script> -->
<script src="dist/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

        <script>
            @if(Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}";
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;

                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;

                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;

                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
            @endif
        </script>
</body>
</html>
