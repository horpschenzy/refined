<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        {{-- <span class="badge rounded-pill bg-primary float-end">2</span> --}}
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-multiple"></i><span>Applicants</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('approved')}}">Approved Applicants</a></li>
                        <li><a href="{{route('pending')}}">Pending Applicants</a></li>
                        <li><a href="{{route('rejected')}}">Rejected Applicants</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('course')}}" class="waves-effect">
                        <i class="mdi mdi-cash-multiple"></i>
                        <span>Courses</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('livestream')}}" class="waves-effect">
                        <i class="mdi mdi-monitor-cellphone"></i>
                        <span>LiveStream</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('classroom')}}" class="waves-effect">
                        <i class="mdi mdi-teach"></i>
                        <span>Classroom</span>
                    </a>
                </li>
                <li>
                    <a href="#" class=" waves-effect">
                        <i class="mdi mdi-file-outline"></i>
                        <span>Resources</span>
                    </a>
                </li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="mdi mdi-home-search"></i>
                        <span>Exams and Test</span>
                    </a>
                </li>
                <li>
                    <a href="#" class=" waves-effect">
                        <i class="mdi mdi-account-details"></i>
                        <span>Attendance</span>
                    </a>
                </li>
                <li>
                    <a href="#" class=" waves-effect">
                        <i class="mdi mdi-account"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="#" class=" waves-effect">
                        <i class="mdi mdi-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
