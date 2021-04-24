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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-form__body card-body">
                            {{-- <div class="form-group">
                                <label for="fname">Slug (URL)</label>
                                <div class="help-block my-1 p-1 text-muted bg-light border rounded">/course-title-is-editable-here</div>
                            </div> --}}

                            <div class="form-group">
                                <label for="fname">Title</label>
                                <input id="fname" type="text" class="form-control" placeholder="Title goes here" value="Course title is editable here">
                            </div>

                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea id="desc" rows="4" class="form-control" placeholder="Please enter a description"></textarea>
                            </div>
                            {{-- <div class="form-group">
                                <label for="category">Category</label><br />
                                <select id="category" class="custom-select w-auto">
                                    <option value="usa">Web Design</option>
                                    <option value="usa">Web Development</option>
                                    <option value="usa">Marketing</option>
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label for="subscribe">Published</label><br>
                                <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                    <input checked="" type="checkbox" id="subscribe" class="form-check-input">
                                    <label class="custom-control-label" for="subscribe">Yes</label>
                                </div>
                                <label for="subscribe" class="mb-0">Yes</label>
                            </div> --}}

                            <h5 class="mb-n2 mt-4">Publish</h5><br>
                            <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                                <input type="checkbox" class="form-check-input" id="customSwitchsizelg" checked>
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

                    </div>
                </div>
                <div class="col-md-4">

                    <!-- Lessons -->
                    <div class="card">
                        <div class="card-header card-header-large bg-light d-flex  justify-content-between">
                            <div class="flex">
                                <h4 class="card-header__title">Lessons</h4>
                                <div class="card-subtitle text-muted">Manage Lessons</div>
                            </div>
                            <div class="">
                                <a href="{{route('addlesson')}}" class="btn btn-primary">Add Lesson <i class="mdi mdi-book-plus-multiple-outline"></i></a>
                            </div>
                        </div>


                        <ul class="list-group list-group-fit">
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="mdi mdi-format-list-bulleted-type">  </i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Overview</a>
                                    </div>
                                    <div class="media-right">
                                        <small class="text-muted">3:33</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="mdi mdi-format-list-bulleted-type"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Asset Pipeline</a>
                                    </div>
                                    <div class="media-right">
                                        <small>18:43</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="mdi mdi-format-list-bulleted-type"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Getting Started</a>
                                        <small class="badge badge-soft-success ">FREE</small>
                                    </div>
                                    <div class="media-right">
                                        <small class="text-muted">5:21</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="mdi mdi-format-list-bulleted-type"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Advanced Workflows</a>
                                        <small class="badge badge-soft-warning ">PRO</small>
                                    </div>
                                    <div class="media-right">
                                        <small class="text-muted">5:24</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="mdi mdi-format-list-bulleted-type"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Tips & Tricks</a>
                                        <small class="badge badge-soft-warning ">PRO</small>
                                    </div>
                                    <div class="media-right">
                                        <small class="text-muted">11:38</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="mdi mdi-format-list-bulleted-type"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Final Quiz</a>
                                    </div>
                                    <div class="media-right">
                                        <small class="badge badge-soft-primary ">QUIZ</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
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
