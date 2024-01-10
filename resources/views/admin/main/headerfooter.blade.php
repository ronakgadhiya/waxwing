<!doctype html>
<html lang="en">
	{{-- class="color-sidebar sidebarcolor4" --}}
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	{{-- <link rel="icon" href="{{asset('backend/assets/images/favicon-32x32.png')}}" type="image/png" /> --}}
	<link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">
	<!--plugins-->
	<link href="{{asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{asset('backend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('backend/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('backend/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('backend/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet">
	<link href="{{asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet">

	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('backend/assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{asset('backend/assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('backend/assets/css/header-colors.css')}}" />
	<title>Waxwing</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('frontend/assets/img/favicon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Waxwing </h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">				
				
				@php
            		$listblog = array('blogcategory','blog');
            	@endphp
			<li class="@if(in_array(Route::currentRouteName(), $listblog)) mm-active @endif">
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Blog</div>
					</a>
					<ul class="@if(in_array(Route::currentRouteName(), $listblog)) mm-show @endif">
						<li> <a href="{{route ('blogcategory.index')}}"><i class="bx bx-right-arrow-alt @if(Route::currentRouteName()=='blogcategory') mm-active @endif"></i>Blog Category</a></li>
						<li> <a href="{{route ('blog.index')}}"><i class="bx bx-right-arrow-alt @if(Route::currentRouteName()=='blog') mm-active @endif"></i>Blog List</a></li>
					</ul>
				</li> 
				@php
            		$listproduct = array('productcategory','product');
            	@endphp
				<li class="@if(in_array(Route::currentRouteName(), $listproduct)) mm-active @endif">
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>	
						<div class="menu-title">Products</div>
					</a>
					<ul class="@if(in_array(Route::currentRouteName(), $listproduct)) mm-show @endif">
						<li> <a href="{{route ('productcategory.index')}}"><i class="bx bx-right-arrow-alt @if(Route::currentRouteName()=='productcategory') mm-active @endif"></i>Product Category</a></li>
						<li> <a href="{{route ('product.index')}}"><i class="bx bx-right-arrow-alt @if(Route::currentRouteName()=='product') mm-active @endif"></i>Product List</a></li>
					</ul>
				</li>
			
				<li class="@if(Route::currentRouteName()=='product-inquiry') mm-active @endif">
					<a href="{{route ('product-inquiry.index')}}">
						<div class="parent-icon"><i class='bx bx-category'></i>
						</div>
						<div class="menu-title">Product Inquiry</div>
					</a>
				</li>
				<li class="@if(Route::currentRouteName()=='contact') mm-active @endif">
					<a href="{{route ('contact.index')}}">
						<div class="parent-icon"><i class='bx bx-category'></i>
						</div>
						<div class="menu-title">Contact</div>
					</a>
				</li> 
				<li class="@if(Route::currentRouteName()=='gallery') mm-active @endif">
					<a href="{{route ('gallery.index')}}">
						<div class="parent-icon"><i class='bx bx-category'></i>
						</div>
						<div class="menu-title">Gallery</div>
					</a>
				</li>
				<li class="@if(Route::currentRouteName()=='page') mm-active @endif">
					<a href="{{route ('page.index')}}">
						<div class="parent-icon"><i class='bx bx-category'></i>
						</div>
						<div class="menu-title">Page</div>
					</a>
				</li>
				<li class="@if(Route::currentRouteName()=='slider') mm-active @endif">
					<a href="{{route ('slider.index')}}">
						<div class="parent-icon"><i class='bx bx-category'></i>
						</div>
						<div class="menu-title">Slider</div>
					</a>
				</li>
				<li class="@if(Route::currentRouteName()=='faq') mm-active @endif">
					<a href="{{route ('faq.index')}}">
						<div class="parent-icon"><i class='bx bx-category'></i>
						</div>
						<div class="menu-title">Faq</div>
					</a>
				</li>
				<li class="@if(Route::currentRouteName()=='social') mm-active @endif">
					<a href="{{route ('social.index')}}">
						<div class="parent-icon"><i class='bx bx-category'></i>
						</div>
						<div class="menu-title">Social</div>
					</a>
				</li>
				{{-- <li class="@if(Route::currentRouteName()=='aboutus') mm-active @endif">
					<a href="{{route ('aboutus.index')}}">
						<div class="parent-icon"><i class='bx bx-category'></i>
						</div>
						<div class="menu-title">About-Us</div>
					</a>
				</li> --}}
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<div class="header-notifications-list">
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<div class="header-message-list">
									</div>
								</div>
							</li>
						</ul>
					</div>
					<a href="/" class="btn btn-dark btn-sm" target="_blank">Website</a>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{asset('backend/assets/images/avatars/avatar-11.png')}}" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
                                @if(isset(Auth::user()->name))
                                <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                                @endif
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li>
                                <a class="dropdown-item" href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-log-out-circle"></i> {{ __('Logout') }} </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->

                @yield('contain')
    		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2022. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	{{-- <div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="form-check mb-2">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
			</div>
		
			<div class="form-chec mb-2">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
			</div>
		
			<div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                <label class="form-check-label" for="semidark">Semi Dark</label>
			</div>

			<div class="form-check mb-2">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr/>
			<h6 class="mb-0">Sidebar Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/chartjs/js/Chart.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/chartjs/js/Chart.extension.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
	<!--Morris JavaScript -->
	<script src="{{asset('backend/assets/plugins/raphael/raphael-min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/morris/js/morris.js')}}"></script>
	{{-- <script src="{{asset('backend/assets/js/index2.js')}}"></script> --}}
	<!--app JS-->
	<script src="{{asset('backend/assets/js/app.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    @yield('script')
</body>

</html>