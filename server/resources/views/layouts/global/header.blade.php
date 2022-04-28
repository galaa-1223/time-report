<div class="page-header">
    <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
            <div class="mb-3 w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Хайлт хийх .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Уншиж байна...</span></div>
                        <i class="close-search" data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="#"><img class="img-fluid" src="{{asset('assets/images/logo/logo.png')}}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0">
        </div>
        <div class="nav-right col-8 pull-right right-header p-0">
        <ul class="nav-menus">
            <li>                         
                <span class="header-search"><i data-feather="search"></i></span></li>
            <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">4                                </span></div>
                <ul class="notification-dropdown onhover-show-div">
                    <li>
                        <i data-feather="bell"></i> <h6 class="f-18 mb-0">Мэдэгдлүүд</h6>
                    </li>
                    <li>
                        <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                    </li>
                    <li><a class="btn btn-primary" href="#">Бүх мэдэгдлийг үзэх</a></li>
                </ul>
            </li>
            <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
            </li>
            <li class="maximize">
                <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a>
            </li>
            @auth
            <li class="profile-nav onhover-dropdown p-0 me-0">
                <div class="media profile-media">
                    <img class="b-r-10" src="{{asset('assets/images/dashboard/profile.jpg')}}" alt="">
                    <div class="media-body">
                    <span>{{auth()->user()->username}}</span>
                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                    </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                    <li><a href="#"><i data-feather="user"></i><span>Профайл</span></a></li>
                    <li><a href="#"><i data-feather="settings"></i><span>Тохиргоо</span></a></li>
                    <li><a href="{{ route('logout') }}"><i data-feather="log-in"> </i><span>Гарах</span></a></li>
                </ul>
            </li>
            @endauth
        </ul>
        </div>
    </div>
</div>