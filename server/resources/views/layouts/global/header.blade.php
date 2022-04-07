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
                <i data-feather="bell"></i>
                <h6 class="f-18 mb-0">Notitications</h6>
                </li>
                <li>
                <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                </li>
                <li>
                <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                </li>
                <li>
                <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                </li>
                <li>
                <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                </li>
                <li><a class="btn btn-primary" href="#">Check all notification</a></li>
            </ul>
            </li>
            {{-- <li class="onhover-dropdown">
            <div class="notification-box"><i data-feather="star"></i></div>
            <div class="onhover-show-div bookmark-flip">
                <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="front">
                    <ul class="droplet-dropdown bookmark-dropdown">
                        <li class="gradient-primary">
                        <i data-feather="star"></i>
                        <h6 class="f-18 mb-0">Bookmark</h6>
                        </li>
                        <li>
                        <div class="row">
                            <div class="col-4 text-center"><i data-feather="file-text"></i></div>
                            <div class="col-4 text-center"><i data-feather="activity"></i></div>
                            <div class="col-4 text-center"><i data-feather="users"></i></div>
                            <div class="col-4 text-center"><i data-feather="clipboard"></i></div>
                            <div class="col-4 text-center"><i data-feather="anchor"></i></div>
                            <div class="col-4 text-center"><i data-feather="settings"></i></div>
                        </div>
                        </li>
                        <li class="text-center">
                        <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                        </li>
                    </ul>
                    </div>
                    <div class="back">
                    <ul>
                        <li>
                        <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                            <input type="text" placeholder="search...">
                        </div>
                        </li>
                        <li>
                        <button class="d-block flip-back" id="flip-back">Back</button>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </li> --}}
            <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
            </li>
            {{-- <li class="onhover-dropdown">
            <i data-feather="message-square"></i>
            <ul class="chat-dropdown onhover-show-div">
                <li>
                <i data-feather="message-square"></i>
                <h6 class="f-18 mb-0">Message Box                                    </h6>
                </li>
                <li>
                <div class="media">
                    <img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/1.jpg')}}" alt="">
                    <div class="status-circle online"></div>
                    <div class="media-body">
                    <span>Erica Hughes</span>
                    <p>Lorem Ipsum is simply dummy...</p>
                    </div>
                    <p class="f-12 font-success">58 mins ago</p>
                </div>
                </li>
                <li>
                <div class="media">
                    <img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/2.jpg')}}" alt="">
                    <div class="status-circle online"></div>
                    <div class="media-body">
                    <span>Kori Thomas</span>
                    <p>Lorem Ipsum is simply dummy...</p>
                    </div>
                    <p class="f-12 font-success">1 hr ago</p>
                </div>
                </li>
                <li>
                <div class="media">
                    <img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                    <div class="status-circle offline"></div>
                    <div class="media-body">
                    <span>Ain Chavez</span>
                    <p>Lorem Ipsum is simply dummy...</p>
                    </div>
                    <p class="f-12 font-danger">32 mins ago</p>
                </div>
                </li>
                <li class="text-center"> <a class="btn btn-primary" href="#">View All     </a></li>
            </ul>
            </li> --}}
            <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
            <li class="profile-nav onhover-dropdown p-0 me-0">
            <div class="media profile-media">
                <img class="b-r-10" src="{{asset('assets/images/dashboard/profile.jpg')}}" alt="">
                <div class="media-body">
                <span>Emay Walter</span>
                <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                </div>
            </div>
            <ul class="profile-dropdown onhover-show-div">
                <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                <li><a href="{{ route('logout') }}"><i data-feather="log-in"> </i><span>Log in</span></a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
</div>
  