<header class="topbar">
        <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('admin') }}">
                    <span>
                        <!-- dark Logo text -->
                        <img src="{{ asset('img/icon/logotsm.png') }}" alt="homepage" class="dark-logo" style="margin-top: 10%;" />
                    </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">

                    <ul class="navbar-nav mr-auto mt-md-0 ">
                            <!-- This is  -->
                            <li class="nav-item"> 
                                <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" 
                                href="javascript:void(0)">
                                <i class="ti-menu"></i>
                                </a>
                            </li>
                            <li class="nav-item hidden-sm-down">
                                <form class="app-search p-l-20" style="margin-top: 10%; width: 100%;">
                                    <a href="{{ route('laporan.create') }}"><h3 style="color: #fff;"><span style="margin-right: 5%;">+</span>Tulis Laporan</h3></a>
                                </form>
                            </li>
                        </ul>

                <ul class="navbar-nav my-lg-0" style="margin-right: 0%;">
                    <li class="nav-item dropdown">
                        
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{ Auth::user()->name }}</a>
                                  
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" style="margin-right: 5%;"></i>Keluar
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                            </div>

                        
                    </li>
                </ul>
                
            </div>
        </nav>
    </header>