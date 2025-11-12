<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Metronic - @yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                @include('inc.header')
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<div class="app-container container-xxl d-flex flex-row-fluid">
						@include('inc.sidebar')
						<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
							<div class="d-flex flex-column flex-column-fluid">
								<div id="kt_app_toolbar" class="app-toolbar d-flex pb-3 pb-lg-5">
									<div class="d-flex flex-stack flex-row-fluid">
										<div class="d-flex flex-column flex-row-fluid">
											<div class="page-title d-flex align-items-center me-3">
												<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-lg-2x gap-2">
													<span>@yield('title')</span>
												</h1>
											</div>
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3 fs-7">
												<li class="breadcrumb-item text-gray-700 fw-bold lh-1">
													<a href="../../demo37/dist/index.html" class="text-white text-hover-primary">
														<i class="ki-outline ki-home text-gray-700 fs-6"></i>
													</a>
												</li>
												<li class="breadcrumb-item">
													<i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
												</li>
												<li class="breadcrumb-item text-gray-700 fw-bold lh-1">Corporate</li>
												<li class="breadcrumb-item">
													<i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
												</li>
												<li class="breadcrumb-item text-gray-700">Licenses</li>
											</ul>
										</div>
										<div class="d-flex align-self-center flex-center flex-shrink-0">
											<a href="#" class="btn btn-sm btn-success d-flex flex-center ms-3 px-4 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
												<i class="ki-outline ki-plus-square fs-2"></i>
												<span>Invite</span>
											</a>
											<a href="#" class="btn btn-sm btn-dark ms-3 px-4 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create
											<span class="d-none d-sm-inline">Target</span></a>
										</div>
									</div>
								</div>
								<div id="kt_app_content" class="app-content flex-column-fluid">
									<div class="card">
										<div class="card-body p-5 px-lg-19 py-lg-16">
                                            @yield('content')
										</div>
									</div>
								</div>
							</div>
							@include('inc.footer')
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-outline ki-arrow-up"></i>
		</div>
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
	</body>
</html>
