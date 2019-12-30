<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{url('/home')}}"> <img alt="image" src="{{asset('public/assets/img/logo.png')}}" class="header-logo"> <span class="logo-name">Yhvreddy</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
            <a href="{{url('/home')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <!-- <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Widgets</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
                    <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
                </ul>
            </li> -->
            <li><a class="nav-link" href="{{url('/home/addskills')}}"><i class="fa fa-bolt" ></i><span>Skills</span></a></li>
            <li><a class="nav-link" href="{{url('/home/services')}}"><i class="fa fa-bars" ></i></i><span>Services</span></a></li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-box-open"></i><span>Projects</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('/home/addproject')}}">Add Projects</a></li>
                    <li><a class="nav-link" href="{{url('/home/projectlist')}}">Projects List</a></li>
                </ul>
            </li>

            <li><a class="nav-link" href="{{url('/home/education')}}"><i class="fa fa-book-reader" ></i><span>Education</span></a></li>
            <li><a class="nav-link" href="{{url('/home/experence')}}"><i class="fa fa-briefcase" ></i><span>Experiences</span></a></li>
            <li><a class="nav-link" href="{{url('/home/aboutus')}}"><i class="fa fa-user" ></i><span>About us</span></a></li>
        </ul>
    </aside>
</div>