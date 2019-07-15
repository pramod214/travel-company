<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="iconsmind-Dashboard"></i>
                    <span>Dashboard</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="iconsmind-Air-Balloon"></i>
                    <span>Site Setting</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('site.create')}}"><i class="iconsmind-Arrow-Through"></i>Create Site Setting</a></li>
                    <li><a href="{{route('site.index')}}"><i class="iconsmind-Arrow-Through"></i>View Site Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="iconsmind-Air-Balloon"></i>
                    <span>Package Category</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('category.create')}}"><i class="iconsmind-Arrow-Through"></i>Create Package Category</a></li>
                    <li><a href="{{route('category.index')}}"><i class="iconsmind-Arrow-Through"></i>View Package Category</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="iconsmind-Air-Balloon"></i>
                    <span>Package</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('package.create')}}"><i class="iconsmind-Arrow-Through"></i>Create Package</a></li>
                    <li><a href=""><i class="iconsmind-Arrow-Through"></i>View Package</a></li>
                </ul>
            </li>

        </ul>
    </section>
</aside>