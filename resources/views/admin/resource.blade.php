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
                                <li class="breadcrumb-item active">Resources</li>
                            </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- start page title -->
                         <div class="row">
                            <div class="col-12">
                                @include('admin.flash-message')
                                <div class="card">
                                <form method="POST" action="/resource" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label for="text-input" class="col-md-2 col-form-label">File Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="file_name" id="text-input" placeholder="Enter Resource Name" required value="{{ old('file_name') }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="file-input" class="col-md-2 col-form-label">File Image</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" name="picture" id="file-input" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="url" name="url" placeholder="Enter Reseource Link" id="example-url-input" value="{{ old('url') }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Description</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="description" placeholder="Enter Description" value="{{ old('description') }}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Send Files
                                        </button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($resources as $resource)

                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <!-- Simple card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="/images/resource/{{ $resource->picture }}" alt="{{ $resource->file_name }}">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $resource->file_name }}</h4>
                                        <p class="card-text">{{ $resource->description }}</p>
                                        <a href="{{ $resource->url }}" class="btn btn-primary">Get it Now</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- end col -->


                            <!-- end col -->


                            <!-- end col -->
                        </div>
                            <!-- end col -->



            <!-- end main content-->

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


@endpush

@push('charts')
        <script src="admin/assets/libs/morris.js/morris.min.js"></script>
        <script src="admin/assets/libs/raphael/raphael.min.js"></script>

        <script src="admin/assets/js/pages/dashboard.init.js"></script>

        <script src="admin/assets/js/app.js"></script>
@endpush
