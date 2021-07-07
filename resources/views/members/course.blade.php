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
                                <li class="breadcrumb-item active">Courses</li>
                            </ol>
                    </div>
                </div>

            </div>
            <!-- end page title -->
            <div class="row">
                @foreach ($courses  as $course )
                <div class="col-md-6 col-lg-6 col-xl-3">

                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top" width="200" height="200" src="/images/course/{{ $course->course_image }}" alt="Card image cap">
                        <div class="card-body" style="height: 200px">
                            <h4 class="card-title">{{ $course->title }}</h4>
                            <p class="card-text">{{$course->description}}</p>
                            @if(!empty($course->youtube_url))
                            <a href="/view/youtube/{{ $course->id}}" target="_blank" class="btn btn-primary waves-effect waves-light">Youtube</a>
                            @endif
                            @if (!empty($course->vimeo_url))
                            <a href="/view/course/vimeo/{{$course->id}}"  target="_blank" class="btn btn-primary waves-effect waves-light">Vimeo</a>
                            @endif
                            @if(!empty($course->mixlr_url))
                                <a href="/view/course/mixlr/{{$course->id}}"  target="_blank" class="btn btn-primary waves-effect waves-light">Mixlr</a>
                            @endif
                            @if(!empty($course->anchor_url))
                                <a href="/view/course/anchor/{{$course->id}}"  target="_blank" class="btn btn-primary waves-effect waves-light">Anchor</a>
                            @endif
                        </div>

                    </div>

                </div>
                @endforeach




                <!-- end col -->


                <!-- end col -->
            </div>

        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

        @include('admin.panel.footer')


</div>
@endsection

@push('scripts')
        <script src="../admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="../admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../admin/assets/libs/node-waves/waves.min.js"></script>
        <script src="../admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

@endpush

@push('charts')
        <script src="../admin/assets/libs/morris.js/morris.min.js"></script>
        <script src="../admin/assets/libs/raphael/raphael.min.js"></script>

        <script src="../admin/assets/js/pages/dashboard.init.js"></script>

        <script src="../admin/assets/js/app.js"></script>
@endpush
