<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion"><li>
                    <a class="active" href="#">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Channel</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{asset('channel/list')}}">list</a></li>
                        <li><a href="{{asset('channel/create')}}">add</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Section</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{asset('section/list')}}">list</a></li>
                        <li><a href="{{asset('section/create')}}">add</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>