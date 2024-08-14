<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
		<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto px-9 mb-9" id="kt_aside_logo">
					<!--begin::Brand-->
                    <?php include '../templet/logo.php';?>
					<!--end::Brand-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<?php include '../templet\aside_menu.php';?>
					<!--end::Aside menu-->
					<!--begin::Footer-->
					<?php include '../user\user.php';?>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header">
						<!--begin::Container-->
						<div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<!--begin::Heading-->
								<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Drawer Chat</h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-dot fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="../../demo3/dist/index.html" class="text-muted">Home</a>
									</li>
									<li class="breadcrumb-item text-muted">Apps</li>
									<li class="breadcrumb-item text-muted">Chat</li>
									<li class="breadcrumb-item text-dark">Drawer Chat</li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title=-->
							<!--begin::Wrapper-->
							<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
								<!--begin::Aside mobile toggle-->
								<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1 mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Aside mobile toggle-->
								<!--begin::Logo-->
								<a href="../../demo3/dist/index.html" class="d-flex align-items-center">
									<img alt="Logo" src="assets/media/logos/logo-demo3-default.svg" class="h-20px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Topbar-->
							<div class="d-flex align-items-center flex-shrink-0">
								<!--begin::Activities-->
								<div class="d-flex align-items-center ms-3 ms-lg-4">
									<!--begin::Drawer toggle-->
									<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px" id="kt_activities_toggle">
										<!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="currentColor" />
												<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Drawer toggle-->
								</div>
								<!--end::Activities-->
								<!--begin::Sidebar Toggler-->
								<!--end::Sidebar Toggler-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							<!--begin::Heading-->
							<div class="d-flex flex-wrap flex-stack mb-6">
								<!--begin::Title-->
								<h3 class="fw-bolder my-2">My Contacts
								<span class="fs-6 fw-bold ms-1">(59)</span></h3>
								<!--end::Title-->
								<!--begin::Controls-->
								<div class="d-flex my-2">
									<!--begin::Select-->
									<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm border-body bg-body w-125px">
										<option value="Online" selected="selected">Online</option>
										<option value="Pending">Pending</option>
										<option value="Declined">Declined</option>
										<option value="Accepted">Accepted</option>
									</select>
									<!--end::Select-->
								</div>
								<!--end::Controls-->
							</div>
							<!--end::Heading-->
							<!--begin::Contacts-->
							<div class="row g-6 g-xl-9">
								<!--begin::Col-->
								<div class="col-md-6 col-xxl-4">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-center flex-column p-9">
											<!--begin::Wrapper-->
											<div class="mb-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-75px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Name-->
											<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Emma Smith</a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="fw-bold text-gray-400 mb-6">Art Director</div>
											<!--end::Position-->
											<!--begin::Info-->
											<div class="d-flex flex-center flex-wrap mb-5">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$14,560</div>
													<div class="fw-bold text-gray-400">Avg. Earnings</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$236,400</div>
													<div class="fw-bold text-gray-400">Total Sales</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Link-->
											<button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
											<!--end::Link-->
										</div>
										<!--begin::Card body-->
									</div>
									<!--begin::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xxl-4">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-center flex-column p-9">
											<!--begin::Wrapper-->
											<div class="mb-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-75px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fs-5 fw-bolder">M</span>
													<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Name-->
											<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Melody Macy</a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="fw-bold text-gray-400 mb-6">Marketing Analytic</div>
											<!--end::Position-->
											<!--begin::Info-->
											<div class="d-flex flex-center flex-wrap mb-5">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$14,560</div>
													<div class="fw-bold text-gray-400">Avg. Earnings</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$236,400</div>
													<div class="fw-bold text-gray-400">Total Sales</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Link-->
											<button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
											<!--end::Link-->
										</div>
										<!--begin::Card body-->
									</div>
									<!--begin::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xxl-4">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-center flex-column p-9">
											<!--begin::Wrapper-->
											<div class="mb-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-75px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Name-->
											<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Max Smith</a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="fw-bold text-gray-400 mb-6">Software Enginer</div>
											<!--end::Position-->
											<!--begin::Info-->
											<div class="d-flex flex-center flex-wrap mb-5">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$14,560</div>
													<div class="fw-bold text-gray-400">Avg. Earnings</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$236,400</div>
													<div class="fw-bold text-gray-400">Total Sales</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Link-->
											<button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
											<!--end::Link-->
										</div>
										<!--begin::Card body-->
									</div>
									<!--begin::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xxl-4">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-center flex-column p-9">
											<!--begin::Wrapper-->
											<div class="mb-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-75px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Name-->
											<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Sean Bean</a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="fw-bold text-gray-400 mb-6">Web Developer</div>
											<!--end::Position-->
											<!--begin::Info-->
											<div class="d-flex flex-center flex-wrap mb-5">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$14,560</div>
													<div class="fw-bold text-gray-400">Avg. Earnings</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$236,400</div>
													<div class="fw-bold text-gray-400">Total Sales</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Link-->
											<button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
											<!--end::Link-->
										</div>
										<!--begin::Card body-->
									</div>
									<!--begin::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xxl-4">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-center flex-column p-9">
											<!--begin::Wrapper-->
											<div class="mb-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-75px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Name-->
											<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Brian Cox</a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="fw-bold text-gray-400 mb-6">UI/UX Designer</div>
											<!--end::Position-->
											<!--begin::Info-->
											<div class="d-flex flex-center flex-wrap mb-5">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$14,560</div>
													<div class="fw-bold text-gray-400">Avg. Earnings</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$236,400</div>
													<div class="fw-bold text-gray-400">Total Sales</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Link-->
											<button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
											<!--end::Link-->
										</div>
										<!--begin::Card body-->
									</div>
									<!--begin::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xxl-4">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-center flex-column p-9">
											<!--begin::Wrapper-->
											<div class="mb-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-75px symbol-circle">
													<span class="symbol-label bg-light-warning text-warning fs-5 fw-bolder">C</span>
													<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Name-->
											<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Mikaela Collins</a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="fw-bold text-gray-400 mb-6">Head Of Marketing</div>
											<!--end::Position-->
											<!--begin::Info-->
											<div class="d-flex flex-center flex-wrap mb-5">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$14,560</div>
													<div class="fw-bold text-gray-400">Avg. Earnings</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$236,400</div>
													<div class="fw-bold text-gray-400">Total Sales</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Link-->
											<button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
											<!--end::Link-->
										</div>
										<!--begin::Card body-->
									</div>
									<!--begin::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xxl-4">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-center flex-column p-9">
											<!--begin::Wrapper-->
											<div class="mb-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-75px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Name-->
											<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Francis Mitcham</a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="fw-bold text-gray-400 mb-6">Software Arcitect</div>
											<!--end::Position-->
											<!--begin::Info-->
											<div class="d-flex flex-center flex-wrap mb-5">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$14,560</div>
													<div class="fw-bold text-gray-400">Avg. Earnings</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$236,400</div>
													<div class="fw-bold text-gray-400">Total Sales</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Link-->
											<button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
											<!--end::Link-->
										</div>
										<!--begin::Card body-->
									</div>
									<!--begin::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xxl-4">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-center flex-column p-9">
											<!--begin::Wrapper-->
											<div class="mb-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-75px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fs-5 fw-bolder">O</span>
													<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Name-->
											<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Olivia Wild</a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="fw-bold text-gray-400 mb-6">System Admin</div>
											<!--end::Position-->
											<!--begin::Info-->
											<div class="d-flex flex-center flex-wrap mb-5">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$14,560</div>
													<div class="fw-bold text-gray-400">Avg. Earnings</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$236,400</div>
													<div class="fw-bold text-gray-400">Total Sales</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Link-->
											<button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
											<!--end::Link-->
										</div>
										<!--begin::Card body-->
									</div>
									<!--begin::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xxl-4">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-center flex-column p-9">
											<!--begin::Wrapper-->
											<div class="mb-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-75px symbol-circle">
													<span class="symbol-label bg-light-primary text-primary fs-5 fw-bolder">N</span>
													<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Name-->
											<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Neil Owen</a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="fw-bold text-gray-400 mb-6">Account Manager</div>
											<!--end::Position-->
											<!--begin::Info-->
											<div class="d-flex flex-center flex-wrap mb-5">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$14,560</div>
													<div class="fw-bold text-gray-400">Avg. Earnings</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$236,400</div>
													<div class="fw-bold text-gray-400">Total Sales</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Link-->
											<button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
											<!--end::Link-->
										</div>
										<!--begin::Card body-->
									</div>
									<!--begin::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xxl-4">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-center flex-column p-9">
											<!--begin::Wrapper-->
											<div class="mb-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-75px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Name-->
											<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Dan Wilson</a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="fw-bold text-gray-400 mb-6">Web Desinger</div>
											<!--end::Position-->
											<!--begin::Info-->
											<div class="d-flex flex-center flex-wrap mb-5">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$14,560</div>
													<div class="fw-bold text-gray-400">Avg. Earnings</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$236,400</div>
													<div class="fw-bold text-gray-400">Total Sales</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Link-->
											<button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
											<!--end::Link-->
										</div>
										<!--begin::Card body-->
									</div>
									<!--begin::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xxl-4">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-center flex-column p-9">
											<!--begin::Wrapper-->
											<div class="mb-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-75px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fs-5 fw-bolder">E</span>
													<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n3 mt-n3"></div>
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Name-->
											<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Emma Bold</a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="fw-bold text-gray-400 mb-6">Corporate Finance</div>
											<!--end::Position-->
											<!--begin::Info-->
											<div class="d-flex flex-center flex-wrap mb-5">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$14,560</div>
													<div class="fw-bold text-gray-400">Avg. Earnings</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$236,400</div>
													<div class="fw-bold text-gray-400">Total Sales</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Link-->
											<button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
											<!--end::Link-->
										</div>
										<!--begin::Card body-->
									</div>
									<!--begin::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xxl-4">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-center flex-column p-9">
											<!--begin::Wrapper-->
											<div class="mb-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-75px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Name-->
											<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">Ana Crown</a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="fw-bold text-gray-400 mb-6">Customer Relationship</div>
											<!--end::Position-->
											<!--begin::Info-->
											<div class="d-flex flex-center flex-wrap mb-5">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$14,560</div>
													<div class="fw-bold text-gray-400">Avg. Earnings</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$236,400</div>
													<div class="fw-bold text-gray-400">Total Sales</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Link-->
											<button class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Send Message</button>
											<!--end::Link-->
										</div>
										<!--begin::Card body-->
									</div>
									<!--begin::Card-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Contacts-->
							<!--begin::Pagination-->
							<div class="d-flex flex-stack flex-wrap pt-10">
								<div class="fs-6 fw-bold text-gray-700">Showing 1 to 10 of 50 entries</div>
								<!--begin::Pages-->
								<ul class="pagination">
									<li class="page-item previous">
										<a href="#" class="page-link">
											<i class="previous"></i>
										</a>
									</li>
									<li class="page-item active">
										<a href="#" class="page-link">1</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">2</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">3</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">4</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">5</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">6</a>
									</li>
									<li class="page-item next">
										<a href="#" class="page-link">
											<i class="next"></i>
										</a>
									</li>
								</ul>
								<!--end::Pages-->
							</div>
							<!--end::Pagination-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row flex-stack">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-gray-400 fw-bold me-1">Created by</span>
								<a href="https://keenthemes.com" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->

		<!--begin::Drawers-->
		<!--begin::Activities drawer-->
		<?php include '../templet/notification.php';?>
		<!--end::Activities drawer-->

		<!--end::Drawers-->
		<!--end::Main-->

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->
		<!--end::Modals-->
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>