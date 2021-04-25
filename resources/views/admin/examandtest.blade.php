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

            <div class="container-fluid page__container">


                <div class="card">
                    <div class="card-body card-form__body">
                        <label for="example-url-input" class="col-md-2 col-form-label">Type</label>
                        <div class="col-md-10">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select quiz type</option>
                                <option value="test">Test</option>
                                <option value="exam">Exam</option>
                                </select>
                        </div>
                    </div>
                </div>

                <div id="questions_wrapper">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                {{-- <span class="question_handle btn btn-sm btn-secondary">
                                    <i class="mdi mdi-format-list-bulleted-type"></i>
                                </span> --}}
                                <div class="h4 m-0 ml-4 col-8">
                                    <input type="text" name="firstanswer" class="form-control" placeholder="Enter Question">
                                </div>
                            </div>
                            <div>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="mb-4">
                                <div class="row mb-1 align-items-end">
                                    <div class="col-11"><strong></strong></div>
                                    <div class="col-1"><strong>Correct</strong></div>
                                </div>

                                <form action="#">
                                    <ul class="list-group" id="answer_container_1">
                                        <li class="list-group-item d-flex justify-content-between">
                                            <div class="d-flex align-items-center col-8">
                                                <input type="text" name="firstanswer" class="form-control" placeholder=" First Answer Title">
                                            </div>
                                            <div class="justify-content-end">
                                                <input type="radio" name="question[correct_answer_id]" id="correct_answer_1" checked>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between" >
                                            <div class="d-flex align-items-center">
                                                <span class="mr-4"><i class="mdi mdi-format-list-bulleted-type text-light-gray"></i></span>
                                                Second Answer
                                            </div>
                                            <div class="ml-auto">
                                                <input type="radio" name="question[correct_answer_id]" id="correct_answer_2">
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between" >
                                            <div class="d-flex align-items-center">
                                                <span class="mr-4"><i class="mdi mdi-format-list-bulleted-type text-light-gray"></i></span>
                                                Third Answer
                                            </div>
                                            <div class="ml-auto">
                                                <input type="radio" name="question[correct_answer_id]" id="correct_answer_2">
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between" >
                                            <div class="d-flex align-items-center">
                                                <span class="mr-4"><i class="mdi mdi-format-list-bulleted-type text-light-gray"></i></span>
                                                Fourth Answer
                                            </div>
                                            <div class="ml-auto">
                                                <input type="radio" name="question[correct_answer_id]" id="correct_answer_2">
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <div class="">
                                <form action="#">
                                    <div class="form-group mb-0">
                                        <button class="btn btn-success">Add Question</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="questions_wrapper">
                    <div class="card mb-4" data-position="1" data-question-id="1">
                        <div class="card-header d-flex justify-content-between">
                            <div class="d-flex align-items-center ">
                                <span class="question_handle btn btn-sm btn-secondary">
                                    <i class="mdi mdi-format-list-bulleted-type"></i>
                                </span>
                                <div class="h4 m-0 ml-4">Q: What is a prop in Angular?</div>
                            </div>
                            <div>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="mb-4">
                                <div class="row mb-1 align-items-end">
                                    <div class="col-11"><strong></strong></div>
                                    <div class="col-1"><strong>Correct</strong></div>
                                </div>

                                <form action="#">
                                    <ul class="list-group" id="answer_container_1">
                                        <li class="list-group-item d-flex justify-content-between">
                                            <div class="d-flex align-items-center ">
                                                <span class="mr-4"><i class="mdi mdi-format-list-bulleted-type text-light-gray"></i></span>
                                                First Answer Title
                                            </div>
                                            <div class="justify-content-end">
                                                <input type="checkbox" name="question[correct_answer_id]" id="correct_answer_1" checked>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between" >
                                            <div class="d-flex align-items-center">
                                                <span class="mr-4"><i class="mdi mdi-format-list-bulleted-type text-light-gray"></i></span>
                                                Second Answer
                                            </div>
                                            <div class="ml-auto">
                                                <input type="checkbox" name="question[correct_answer_id]" id="correct_answer_2">
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between" >
                                            <div class="d-flex align-items-center">
                                                <span class="mr-4"><i class="mdi mdi-format-list-bulleted-type text-light-gray"></i></span>
                                                Third Answer
                                            </div>
                                            <div class="ml-auto">
                                                <input type="checkbox" name="question[correct_answer_id]" id="correct_answer_2">
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between" >
                                            <div class="d-flex align-items-center">
                                                <span class="mr-4"><i class="mdi mdi-format-list-bulleted-type text-light-gray"></i></span>
                                                Fourth Answer
                                            </div>
                                            <div class="ml-auto">
                                                <input type="checkbox" name="question[correct_answer_id]" id="correct_answer_2">
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <div class="">
                                <form action="#">
                                    <div class="form-group mb-0">
                                        <button class="btn btn-success">Add Question</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="questions_wrapper">
                    <div class="card mb-4" data-position="1" data-question-id="1">
                        <div class="card-header d-flex justify-content-between">
                            <div class="d-flex align-items-center ">
                                <span class="question_handle btn btn-sm btn-secondary">
                                    <i class="mdi mdi-format-list-bulleted-type"></i>
                                </span>
                                <div class="h4 m-0 ml-4">Q: What is a prop in Angular?</div>
                            </div>
                            <div>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <form action="#">
                                    <div class="form-group mb-0">
                                        <button class="btn btn-success w-100">Add Question</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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


