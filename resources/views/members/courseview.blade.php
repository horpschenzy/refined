@extends('members.layouts.member-app')

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
                                <li class="breadcrumb-item active">Course View</li>
                            </ol>
                    </div>
                </div>

            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        @if ($course)
                                        <h4 class="card-title">{{ $course->title }}</h4>
                                        <p class="card-title-desc">{{ $course->description }}</p>

                                        <!-- 1:1 aspect ratio -->
                                        <div class="ratio ratio-4x3">
                                            @if ($type == 'youtube')
                                                <iframe src="{{ $course->youtube_url }}" title="{{ $course->title }}" allowfullscreen></iframe>
                                            @elseif ($type == 'vimeo')
                                                <iframe src="{{ $course->vimeo_url }}" title="{{ $course->title }}" allowfullscreen></iframe>
                                            @elseif ($type == 'mixlr')
                                                <iframe src="{{ $course->mixlr_url }}" title="{{ $course->title }}" width="100%" height="180px" scrolling="no" frameborder="no" marginheight="0" marginwidth="0"></iframe>
                                            @elseif ($type == 'anchor')
                                                <iframe src="{{ $course->anchor_url }}" title="{{ $course->title }}" width="100%" height="180px" scrolling="no" frameborder="no" marginheight="0" marginwidth="0"></iframe>
                                            @endif
                                        </div>
                                        @else
                                            <h4 class="card-title"> NO STREAM AVAILABLE. PLEASE CHECK BACK LATER</h4>
                                        @endif


                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>



            </div>


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

        @include('admin.panel.footer')


</div>
@endsection

@push('scripts')
        <script src="/admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/admin/assets/libs/node-waves/waves.min.js"></script>
        <script src="/admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

@endpush

@push('charts')
        <script src="/admin/assets/libs/morris.js/morris.min.js"></script>
        <script src="/admin/assets/libs/raphael/raphael.min.js"></script>

        <script src="/admin/assets/js/pages/dashboard.init.js"></script>

        <script src="/admin/assets/js/app.js"></script>
@endpush
