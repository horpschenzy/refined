@extends('admin.layout.admin-app')

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
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">REFINED</a></li>
                               {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li> --}}
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form method="POST" action="/course" enctype="multipart/form-data">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input id="title" type="text" class="form-control" placeholder="Title goes here" value="Course title is editable here">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description" rows="4" class="form-control" placeholder="Please enter a description"></textarea>
                                </div>
                                

                                <h5 class="mb-n2 mt-4">Publish</h5><br>
                                <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                                    <input type="checkbox" name="publish" class="form-check-input" id="customSwitchsizelg" checked>
                                    <label class="form-check-label" for="customSwitchsizelg">Yes</label>
                                </div>

                                <div class="form-group">
                                    <label>Course Preview</label>
                                    <div class="dz-clickable media align-items-center" data-toggle="dropzone" data-dropzone-url="http://" data-dropzone-clickable=".dz-clickable" data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                                        <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                            <div class="avatar avatar-lg">
                                                <img src="dist/images/fav.png" class="avatar-img rounded" alt="..." data-dz-thumbnail>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="custom-file">
                                                <input type="file" class="btn btn-sm btn-light">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <button type="submit" class="btn btn-success w-100">Save Changes</button>
                            </div>
                    </form>
                    </div>
                </div>
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


        <!--tinymce js-->
        <script src="admin/assets/libs/tinymce/tinymce.min.js"></script>

        <!-- email editor init -->
        <script src="admin/assets/js/pages/email-editor.init.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

@endpush
