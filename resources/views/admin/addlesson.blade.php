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

                            <div class="form-group mb-3">
                                <label for="course">Course Title</label>
                                <input id="course" type="text" name="courseTitle" class="form-control" placeholder="Honour in Ministry" value="Honour in Ministry" disabled>
                            </div>

                            <div class="form-group mb-3">
                                <label for="lesson">Lesson Title</label>
                                <input id="lesson" type="text" name="lessonTitle" class="form-control" placeholder="Lesson 1">
                            </div>
                            <div class="form-group mb-3">
                                <label for="duration">Lesson Duration</label>
                                <input id="duration" type="text" name="lessonDuration" class="form-control" placeholder="1:00" >
                            </div>
                            <div class=""><div>
                                            <div class="mb-3">
                                                <form method="post">
                                                    <textarea id="email-editor" name="area"></textarea>
                                                </form>
                                            </div>

                                            <div class="btn-toolbar form-group mb-0">
                                                <div class="">
                                                    <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="far fa-save"></i></button>
                                                    <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="far fa-trash-alt"></i></button>
                                                    <button class="btn btn-primary waves-effect waves-light">
                                                        <span>Submit</span> <i class="fab fa-telegram-plane ms-2"></i>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
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
                                <a href="student-courses.html" class="btn btn-primary">Edit Lessons<i class="mdi mdi-book-plus-multiple-outline"></i></a>
                            </div>
                        </div>


                        <ul class="list-group list-group-fit">
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="mdi mdi-format-list-bulleted-type"></i>
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


        <!--tinymce js-->
        <script src="admin/assets/libs/tinymce/tinymce.min.js"></script>

        <!-- email editor init -->
        <script src="admin/assets/js/pages/email-editor.init.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/app.js"></script>

@endpush


