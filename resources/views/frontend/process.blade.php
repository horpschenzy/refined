
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />

        @if ($type == 'accept')
            <title>Accept Admission | REFINED</title>
        @else
            <title>Reject Admission | REFINED</title>
        @endif
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Refined" name="description" />
        <meta content="Makario" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico"> 
        
        <!-- Bootstrap Css -->
        <link href="/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

    </head>

    <body>
        <div class="account-pages my-3 pt-sm-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="card-body pt-0">

                                <h3 class="text-center mt-5 mb-4">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="/dist/images/refined-new-black.png" alt="" height="30" class="auth-logo-dark">
                                        <img src="/dist/images/refined-new-black.png" alt="" height="30" class="auth-logo-light">
                                    </a>
                                </h3>

                                <div class="p-3">
                                    @if ($type == 'accept')
                                        <form class="form-horizontal mt-4" method="POST" action="/accept/admission/{{ $user->email_code }}">
                                    @else
                                        <form class="form-horizontal mt-4" method="POST" action="/reject/admission/{{ $user->email_code }}">
                                    @endif
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" value="{{ $user->reg_no }}" disabled>
                                            <input type="text" class="form-control" id="username" name="username" value="{{ $user->reg_no }}" hidden>
                                        </div>
                                        <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required>
                                        </div>
                                        <div class="mb-3 row mt-4">
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input type="checkbox"  class="form-check-input" id="customControlInline">
                                                    <label class="form-check-label" for="customControlInline">Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6 text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                                                    @if ($type == 'accept')
                                                        Accept
                                                    @else
                                                        Reject
                                                    @endif
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="/admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/admin/assets/libs/node-waves/waves.min.js"></script>
        <script src="/admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!-- App js -->
        <script src="/admin/assets/js/app.js"></script>

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