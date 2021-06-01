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
                        <span>Dashboard</span>
                    </a>
                </li>
                @if (auth()->user()->usertype == 'admin')
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
                    <a href="{{route('classes')}}" class="waves-effect">
                        <i class="mdi mdi-book-open-page-variant"></i>
                        <span>Classes</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('addlesson')}}" class="waves-effect">
                        <i class="mdi mdi-cash-multiple"></i>
                        <span>Lessons</span>
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
                    <a href="{{route('resource')}}" class=" waves-effect">
                        <i class="mdi mdi-file-outline"></i>
                        <span>Resources</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('examandtest')}}" class=" waves-effect">
                        <i class="mdi mdi-folder-account-outline"></i>
                        <span>Exams and Test</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('examandtest')}}">Create</a></li>
                        <li><a href="{{route('results')}}">Results</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-multiple"></i>
                        <span>Family Cirle</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('family')}}">Family List</a></li>
                        <li><a href="#">Coordinators</a></li>
                        <li><a href="#">Family Heads</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('admin.users')}}" class="waves-effect">
                        <i class="mdi mdi-account"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="mdi mdi-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{route('attendance')}}" class=" waves-effect">
                        <i class="mdi mdi-account-details"></i>
                        <span>Attendance</span>
                    </a>
                </li>
                @endif


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
