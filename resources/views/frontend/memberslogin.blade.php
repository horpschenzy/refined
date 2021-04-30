
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login | REFINED</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Refined" name="description" />
        <meta content="Makario" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="etc/css/tether.min.css">
        <link rel="stylesheet" href="etc/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/style/app.css">
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
                                    <a href="{{route('first')}}" class="d-block auth-logo">
                                        <img src="dist/images/refined-new-logo.png" alt="" height="30" class="auth-logo-dark">

                                    </a>
                                </h3>

                                <div class="p-3">
                                    {{-- <form class="form-horizontal mt-4" method="POST" action="/admin/login">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
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
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>
                                    </form> --}}
                                    <div class="big-form">
                                        <div class="mb-5 text-center text-uppercase">
                                            <h1 >Portal Access</h1>
                                        </div>
                                        <form action="/login" method="POST">
                                            @csrf
                                        <div class="mb-3">
                                            <label for="ref">Registration Number</label>
                                            <input type="text" placeholder="REF/2021/0000" name="username" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Password">Password</label>
                                            <input type="password" placeholder="Enter Password" name="password" required>
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
                                                <button type="submit" class="btn btn-primary btn-sh-primary ">Login</button>
                                            </div>
                                        </div>
                                        </form>

                                        <p class="paragraph">* We don’t share your personal info with anyone.</p>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="admin/assets/libs/node-waves/waves.min.js"></script>
        <script src="admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

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
