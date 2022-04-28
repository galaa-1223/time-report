<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="#"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="#"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="#"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>

					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/content' ? 'active' : '' }}" href="#"><i data-feather="command"></i><span>Контент</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/content' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/content' ? 'block' : 'none;' }};">
	                        <li><a href="#" class="{{ Route::currentRouteName()=='news' ? 'active' : '' }}">Мэдээнүүд</a></li>
							<li><a href="#" class="{{ Route::currentRouteName()=='pages' ? 'active' : '' }}">Хуудас</a></li>
							<li><a href="#" class="{{ Route::currentRouteName()=='gallery' ? 'active' : '' }}">Зургийн цомог</a></li>
							<li><a href="#" class="{{ Route::currentRouteName()=='files' ? 'active' : '' }}">Файл</a></li>
						</ul>
					</li>

					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='users' ? 'active' : '' }}" href="#">
							<i data-feather="users"> </i><span>Хэрэглэгч</span>
						</a>
					</li>

					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='banners' ? 'active' : '' }}" href="#">
							<i data-feather="zap"> </i><span>Сурталчилгаа</span>
						</a>
					</li>
					
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/ecommerce' ? 'active' : '' }}" href="#"><i data-feather="settings"></i><span>Тохиргоо</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/ecommerce' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{request()->route()->getPrefix() == '/ecommerce' ? 'block' : 'none;' }};">
							<li><a href="#" class="{{ Route::currentRouteName()=='product' ? 'active' : '' }}">Тохиргоо</a></li>
	                        <li><a href="#" class="{{ Route::currentRouteName()=='product-page' ? 'active' : '' }}">Product page</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>