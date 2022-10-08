<!DOCTYPE html>
<!--
Author: Ginu Vackachan
-->
<html lang="en">
	<!--begin::Head-->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<title>Project</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="GV, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="GV productions" />
		<meta property="og:url" content="https://ginuresumes.herokuapp.com" />
		<link rel="canonical" href="https://ginuresumes.herokuapp.com" />
		<link rel="shortcut icon" href="{{asset('images/logo2.jpg')}}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{asset('plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('plugins/custom/vis-timeline/vis-timeline.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset('plugins/global/plugins.dark.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/style.dark.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<!--Begin::Google Tag Manager -->
		<!--End::Google Tag Manager -->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" style="background-image: url(media/patterns/header-bg-dark.png)" class="dark-mode header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
 
		<!--End::Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    @include('layouts.headpannel')
    @yield('content')
    @include('layouts.footer')
    </div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
<!--begin::Javascript-->
<script>
$('#alert-sucess').not('.alert-important').delay(3000).fadeOut(350);
</script>
<script>
    $('#alert-sucess').modal();
</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{asset('plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{asset('plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<script src="{{asset('plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>
		<script src="{{asset('cdn.amcharts.com/lib/5/index.js')}}"></script>
		<script src="{{asset('cdn.amcharts.com/lib/5/xy.js')}}"></script>
		<script src="{{asset('cdn.amcharts.com/lib/5/percent.js')}}"></script>
		<script src="{{asset('cdn.amcharts.com/lib/5/radar.js')}}"></script>
		<script src="{{asset('cdn.amcharts.com/lib/5/themes/Animated.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{asset('js/widgets.bundle.js')}}"></script>
		<script src="{{asset('js/custom/widgets.js')}}"></script>
		<script src="{{asset('js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('js/custom/intro.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/new-target.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/create-project/type.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/create-project/budget.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/create-project/settings.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/create-project/team.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/create-project/targets.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/create-project/files.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/create-project/complete.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/create-project/main.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/new-address.js')}}"></script>
		<script src="{{asset('js/custom/utilities/modals/users-search.js')}}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->

</html>