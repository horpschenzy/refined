@extends('admin.layout.admin-app')

@section('styles')
    <link href="admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection


@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title-box">
                        <h4>Dashboard</h4>
                            <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                               {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li> --}}
                                <li class="breadcrumb-item active">Admin Users</li>
                            </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    @include('admin.flash-message')
                    <div class="card">
                    <form method="POST" action="/add/admin" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="text-input" class="col-md-2 col-form-label">First Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" required type="text" value="{{old('firstname')}}" name="firstname" id="text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="file-input" class="col-md-2 col-form-label">Last Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" required type="text" value="{{old('lastname')}}" name="lastname" id="text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="file-input" class="col-md-2 col-form-label">Email  (username)</label>
                                <div class="col-md-10">
                                    <input class="form-control" required type="email" value="{{old('email')}}" name="email" id="text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="file-input" class="col-md-2 col-form-label">Password</label>
                                <div class="col-md-10">
                                    <input class="form-control" required type="password" value="{{old('password')}}" name="password" id="text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usertype" class="col-md-2 col-form-label">Usertype</label>
                                <div class="col-md-10">
                                    <select class="form-control" required name="usertype" id="usertype">
                                        <option value=''>Select Usertype</option>
                                        <option value='cordinator'>Co-ordinator</option>
                                        <option value='family_head'>Family Head</option>
                                        <option value='admin'>Admin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="file-input" class="col-md-2 col-form-label">Family Circle</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="{{old('family_circle')}}" name="family_circle" id="text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="file-input" class="col-md-2 col-form-label">Whatsapp Link</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="{{old('telegram_link')}}" name="telegram_link" id="text-input">
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <button type="submit" class="btn btn-primary waves-effect waves-light w-50">Add User
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Usertype</th>
                                        <th>Family Circle</th>
                                        <th>Whatsapp Link</th>
                                        <th>Co-ordinator</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    {{-- isset($user->user->cordinator->firstname) ? $user->user->cordinator->firstname.''.$user->user->cordinator->lastname:'' --}}
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->firstname }}</td>
                                        <td>{{ $user->lastname }}</td>
                                        <td>{{ isset($user->user->reg_no)? $user->user->reg_no : '' }}</td>
                                        <td><p style="text-align: justify; text-justify: inter-word;">{{ ucfirst(str_replace('_', ' ',isset($user->user->usertype)? $user->user->usertype : '')) }}</p></td>
                                        <td>{{ isset($user->user->family_circle)?$user->user->family_circle:'' }}</td>
                                        <td>{{ isset($user->user->telegram_link)?$user->user->telegram_link:'' }}</td>
                                        <td>
                                            @if (isset($user->user->cordinators))
                                                {{ $user->user->cordinators->firstname.' '.$user->user->cordinators->lastname }}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown dropdown-topbar d-inline-block">
                                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action <i class="mdi mdi-chevron-down"></i>
                                                    </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    @if ((isset($user->user->usertype)? $user->user->usertype : '') == 'family_head')
                                                        @if (!$user->user->cordinator)

                                                            <a href="#assigncoordinator{{$user->id}}" data-bs-toggle="modal" data-bs-target="#assigncoordinator{{$user->id}}" class="dropdown-item">Assign Co-ordinator</a>
                                                            <div class="dropdown-divider"></div>
                                                        @endif
                                                    @endif
                                                    <a href="#editUser{{$user->id}}"    data-bs-toggle="modal" data-bs-target="#editUser{{$user->id}}" class="dropdown-item">Edit</a>
                                                    <a class="dropdown-item" onclick="deleteUser({{ $user->id }})">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="assigncoordinator{{$user->id}}" tabindex="-1" aria-labelledby="assigncoordinator" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="assignToFamily">Assign Co-ordinator to {{ $user->firstname }} {{ $user->lastname }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/assign/coordinator" method="post">
                                                        @csrf
                                                        <div class="card-body">
                                                            <input type="text" value="{{$user->id}}" name="id" hidden>
                                                            <div class="mb-3 row">
                                                                <label for="usertype" class="col-md-4 col-form-label">Co-ordinators</label>
                                                                <div class="col-md-8">
                                                                    <select class="form-control" required name="cordinator" id="cordinator">
                                                                        <option value=''>Select Co-ordinator</option>
                                                                        @foreach ($coordinators as $coordinator)
                                                                        <option value='{{ $coordinator->id }}'>{{ $coordinator->firstname.' '.$coordinator->lastname }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="editUser{{$user->id}}" tabindex="-1" aria-labelledby="editUser" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="assignToFamily">Edit {{ $user->firstname }} {{ $user->lastname }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/edit/user" method="post">
                                                        @csrf
                                                        <div class="card-body">
                                                            <input type="text" value="{{$user->id}}" name="id" hidden>
                                                            <div class="mb-3 row">
                                                                <label for="text-input" class="col-md-4 col-form-label">First Name</label>
                                                                <div class="col-md-8">
                                                                    <input class="form-control" required type="text" value="{{$user->firstname}}" name="firstname" id="text-input">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="file-input" class="col-md-4 col-form-label">Last Name</label>
                                                                <div class="col-md-8">
                                                                    <input class="form-control" required type="text" value="{{$user->lastname}}" name="lastname" id="text-input">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="file-input" class="col-md-4 col-form-label">Email  (username)</label>
                                                                <div class="col-md-8">
                                                                    <input class="form-control" required type="email" value="{{isset($user->user->reg_no)? $user->user->reg_no : ''}}" name="email" id="text-input">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="usertype" class="col-md-4 col-form-label">Usertype</label>
                                                                <div class="col-md-8">
                                                                    <select class="form-control" required name="usertype" id="usertype">
                                                                        <option value='{{ isset($user->user->usertype)? $user->user->usertype : '' }}'>{{ ucfirst(str_replace('_', ' ',isset($user->user->usertype)? $user->user->usertype : '')) }}</option>
                                                                        <option value='cordinator'>Co-ordinator</option>
                                                                        <option value='family_head'>Family Head</option>
                                                                        <option value='admin'>Admin</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="file-input" class="col-md-4 col-form-label">Family Circle</label>
                                                                <div class="col-md-8">
                                                                    <input class="form-control" type="text" value="{{isset($user->user->family_circle)?$user->user->family_circle:''}}" name="family_circle" id="text-input">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="file-input" class="col-md-4 col-form-label">Whatsapp Link</label>
                                                                <div class="col-md-8">
                                                                    <input class="form-control" type="text" value="{{isset($user->user->telegram_link)?$user->user->telegram_link:''}}" name="telegram_link" id="text-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>

            <!-- end row -->



        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

        @include('admin.panel.footer')


</div>
@endsection

@push('scripts')
        <script src="admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="admin/assets/libs/node-waves/waves.min.js"></script>
        <script src="admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Required datatable js -->
        <script src="admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="admin/assets/libs/jszip/jszip.min.js"></script>
        <script src="admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="admin/assets/js/pages/datatables.init.js"></script>
        <!-- Magnific Popup-->
        <script src="admin/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- lightbox init js-->
        <script src="admin/assets/js/pages/lightbox.init.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>
            function deleteUser(id)
            {
                swal({
                    title: "Are you sure you want to delete this user?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((delete_stream) => {
                    if (delete_stream) {
                        let _token   = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: "/delete/user",
                            type:"POST",
                            data:{
                              id:id,
                              _token: _token
                            },

                            success:function(response){
                              console.log(response);
                              if(response) {
                                swal("Poof! User Deleted Successfully!", {
                                    icon: "success", });

                                location.reload();
                              }
                            },
                        });

                    } else {
                      swal("User Discarded!");
                    }
                  });
            }
        </script>

@endpush

@push('charts')
        <script src="admin/assets/js/app.js"></script>
@endpush
