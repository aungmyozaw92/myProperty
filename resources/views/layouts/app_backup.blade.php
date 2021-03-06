<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'MyProperty') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
         <script src="{{ asset('admin/ajax/libs/webfont/1.6.16/webfont.js') }}"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script> 
        <!--end::Web font -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!--begin::Base Styles -->
        <link href="{{ asset('admin/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/assets/demo/default/base/style.bundle.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/assets/demo/default/media/img/logo/favicon.ico') }}" rel="shortcut icon">
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			@include('layouts.header')
			
			<!-- END: Header -->		
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				@include('layouts.sidebar')
				<!-- END: Left Aside -->
				<div id="app">
				@yield("content")
				</div>
				
			</div>
			<!-- end:: Body -->
			<!-- begin::Footer -->
			@include('layouts.footer')
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->
	    
	    <!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<script type="text/javascript" src="/js/app.js"></script>
		<!-- end::Scroll Top -->
    	<!--begin::Base Scripts -->
		<script src="{{ asset('admin/assets/vendors/base/vendors.bundle.js') }}"></script>
        <script src="{{ asset('admin/assets/demo/default/base/scripts.bundle.js') }}"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Vendors -->

		<!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
		<script src="{{ asset('admin/assets/app/js/dashboard.js') }}"></script>
		<!--end::Page Snippets -->

		
	</body>
	<!-- end::Body -->
</html>
