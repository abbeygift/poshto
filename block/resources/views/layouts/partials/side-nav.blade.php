<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div> </div>
        <div class="sidebar-brand-icon rotate-n-0">
            <img src="{{asset('block/public/img/logo.png')}}" width="100" height="70" alt="main_logo"></img>

        </div>
        <!-- <div class="sidebar-brand-text mx-3"> Poshto</div> -->
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        AIRTIME & BUNDLES
    </div>


    <!-- Divider -->
    <hr class="sidebar-divider">

     <!-- Nav Item - Utilities Collapse Menu Zesa-->
    <div class="sidebar-heading">
        ECONET
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{url('econet/completed')}}">
            <i class="fa fa-check"></i>
            <span>Completed</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('econet/pending')}}">
            <i class="fa fa-hourglass-end"></i>
            <span>Pending</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('econet/failed-tokens')}}">
            <i class="fa fa-spinner"></i>
            <span>Failed Tokens</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('econet/failed-payment')}}">
            <i class="fa fa-ban"></i>
            <span>Failed Payment</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        UTILITIES & BILLS
    </div>

     <!-- Divider -->
     <hr class="sidebar-divider">



    <!-- Nav Item - Utilities Collapse Menu Zesa-->
    <div class="sidebar-heading">
        ZESA
    </div>

        <!-- Divider -->
    <hr class="sidebar-divider">



        <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('zesa/completed')}}">
        <i class=" fa fa-check"></i>
            <span>Completed</span></a>
    </li>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('zesa/pending')}}">
            <i class="fa fa-hourglass-end"></i>
            <span>Pending</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('zesa/duplicate-tokens')}}">
            <i class="fa fa-spinner"></i>
            <span>Duplicated Tokens</span></a>
    </li>



    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('zesa/failed-tokens')}}">
            <i class="fa fa-minus-circle"></i>
            <span>Failed Tokens</span></a>
    </li>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('zesa/failed-payment')}}">
            <i class="fa fa-ban"></i>
            <span>Failed Payment</span></a>
    </li>

             <!-- Divider -->
    <hr class="sidebar-divider">

      <!-- Nav Item - Utilities Collapse Menu Zesa-->
      <div class="sidebar-heading">
        DSTV
    </div>

      <!-- Divider -->
      <hr class="sidebar-divider">



    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('dstv/completed')}}">
            <i class="fa fa-check"></i>
            <span>Completed</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('dstv/paid')}}">
            <i class="fa fa-check-circle"></i>
            <span>Paid</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('dstv/pending')}}">
            <i class="fa fa-hourglass-end"></i>
            <span>Pending</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('dstv/processing')}}">
            <i class="fa fa-spinner"></i>
            <span>Processing</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('dstv/failed-payment')}}">
            <i class="fa fa-ban"></i>
            <span>Failed Payment</span></a>
    </li>














    <!-- <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Dstv:</h6>
                                    <a class="collapse-item" href="/completedd">Completed</a>
                                    <a class="collapse-item" href="/paidd">Paid</a>
                                    <a class="collapse-item" href="/pendingd">Pending</a>
                                    <a class="collapse-item" href="/processingd">Processing</a>
                                    <a class="collapse-item" href="/failedpaymentd">Failed Payment</a>
                                </div>
                            </div> -->
    <!-- </li> -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Heading -->
    <div class="sidebar-heading">
        PEOPLES & CONFIGURATIONS
    </div>

    <!-- Nav Item - Charts
                        <li class="nav-item">
                            <a class="nav-link" href="charts.html">
                                <i class="fas fa-fw fa-chart-area"></i>
                                <span>Charts</span></a>
                        </li> -->

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/users">
            <i class="fa fa-users"></i>
            <span>Users</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>