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
								<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Group Chat</h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-dot fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="../../demo3/dist/index.html" class="text-muted">Home</a>
									</li>
									<li class="breadcrumb-item text-muted">Apps</li>
									<li class="breadcrumb-item text-muted">Chat</li>
									<li class="breadcrumb-item text-dark">Group Chat</li>
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
							<!--begin::Layout-->
							<div class="d-flex flex-column flex-lg-row">
								<!--begin::Sidebar-->
								<div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
									<!--begin::Contacts-->
									<div class="card card-flush">
										<!--begin::Card header-->
										<div class="card-header pt-7" id="kt_chat_contacts_header">
											<!--begin::Form-->
											<form class="w-100 position-relative" autocomplete="off">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid px-15" name="search" value="" placeholder="Search by username or email..." />
												<!--end::Input-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-5" id="kt_chat_contacts_body">
											<!--begin::List-->
											<div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px">
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-45px symbol-circle">
															<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">M</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
															<div class="fw-bold text-muted">melody@altbox.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Lat seen-->
													<div class="d-flex flex-column align-items-end ms-2">
														<span class="text-muted fs-7 mb-1">20 hrs</span>
													</div>
													<!--end::Lat seen-->
												</div>
												<!--end::User-->
												<!--begin::Separator-->
												<div class="separator separator-dashed d-none"></div>
												<!--end::Separator-->
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-45px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
															<div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
															<div class="fw-bold text-muted">max@kt.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Lat seen-->
													<div class="d-flex flex-column align-items-end ms-2">
														<span class="text-muted fs-7 mb-1">1 week</span>
														<span class="badge badge-sm badge-circle badge-light-danger">5</span>
													</div>
													<!--end::Lat seen-->
												</div>
												<!--end::User-->
												<!--begin::Separator-->
												<div class="separator separator-dashed d-none"></div>
												<!--end::Separator-->
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-45px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
															<div class="fw-bold text-muted">sean@dellito.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Lat seen-->
													<div class="d-flex flex-column align-items-end ms-2">
														<span class="text-muted fs-7 mb-1">5 hrs</span>
													</div>
													<!--end::Lat seen-->
												</div>
												<!--end::User-->
												<!--begin::Separator-->
												<div class="separator separator-dashed d-none"></div>
												<!--end::Separator-->
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-45px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
															<div class="fw-bold text-muted">brian@exchange.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Lat seen-->
													<div class="d-flex flex-column align-items-end ms-2">
														<span class="text-muted fs-7 mb-1">1 week</span>
														<span class="badge badge-sm badge-circle badge-light-success">6</span>
													</div>
													<!--end::Lat seen-->
												</div>
												<!--end::User-->
												<!--begin::Separator-->
												<div class="separator separator-dashed d-none"></div>
												<!--end::Separator-->
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-45px symbol-circle">
															<span class="symbol-label bg-light-warning text-warning fs-6 fw-bolder">C</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
															<div class="fw-bold text-muted">mik@pex.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Lat seen-->
													<div class="d-flex flex-column align-items-end ms-2">
														<span class="text-muted fs-7 mb-1">5 hrs</span>
													</div>
													<!--end::Lat seen-->
												</div>
												<!--end::User-->
												<!--begin::Separator-->
												<div class="separator separator-dashed d-none"></div>
												<!--end::Separator-->
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-45px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
															<div class="fw-bold text-muted">f.mit@kpmg.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Lat seen-->
													<div class="d-flex flex-column align-items-end ms-2">
														<span class="text-muted fs-7 mb-1">1 day</span>
													</div>
													<!--end::Lat seen-->
												</div>
												<!--end::User-->
												<!--begin::Separator-->
												<div class="separator separator-dashed d-none"></div>
												<!--end::Separator-->
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-45px symbol-circle">
															<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">O</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
															<div class="fw-bold text-muted">olivia@corpmail.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Lat seen-->
													<div class="d-flex flex-column align-items-end ms-2">
														<span class="text-muted fs-7 mb-1">5 hrs</span>
														<span class="badge badge-sm badge-circle badge-light-success">6</span>
													</div>
													<!--end::Lat seen-->
												</div>
												<!--end::User-->
												<!--begin::Separator-->
												<div class="separator separator-dashed d-none"></div>
												<!--end::Separator-->
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-45px symbol-circle">
															<span class="symbol-label bg-light-primary text-primary fs-6 fw-bolder">N</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
															<div class="fw-bold text-muted">owen.neil@gmail.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Lat seen-->
													<div class="d-flex flex-column align-items-end ms-2">
														<span class="text-muted fs-7 mb-1">1 week</span>
														<span class="badge badge-sm badge-circle badge-light-success">2</span>
													</div>
													<!--end::Lat seen-->
												</div>
												<!--end::User-->
												<!--begin::Separator-->
												<div class="separator separator-dashed d-none"></div>
												<!--end::Separator-->
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-45px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
															<div class="fw-bold text-muted">dam@consilting.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Lat seen-->
													<div class="d-flex flex-column align-items-end ms-2">
														<span class="text-muted fs-7 mb-1">1 week</span>
														<span class="badge badge-sm badge-circle badge-light-danger">5</span>
													</div>
													<!--end::Lat seen-->
												</div>
												<!--end::User-->
												<!--begin::Separator-->
												<div class="separator separator-dashed d-none"></div>
												<!--end::Separator-->
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-45px symbol-circle">
															<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">E</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
															<div class="fw-bold text-muted">emma@intenso.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Lat seen-->
													<div class="d-flex flex-column align-items-end ms-2">
														<span class="text-muted fs-7 mb-1">1 week</span>
														<span class="badge badge-sm badge-circle badge-light-warning">9</span>
													</div>
													<!--end::Lat seen-->
												</div>
												<!--end::User-->
											</div>
											<!--end::List-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Contacts-->
								</div>
								<!--end::Sidebar-->
								<!--begin::Content-->
								<div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
									<!--begin::Messenger-->
									<div class="card" id="kt_chat_messenger">
										<!--begin::Card header-->
										<div class="card-header" id="kt_chat_messenger_header">
											<!--begin::Title-->
											<div class="card-title">
												<!--begin::Users-->
												<div class="symbol-group symbol-hover">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
													</div>
													<!--end::Avatar-->
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
													</div>
													<!--end::Avatar-->
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<span class="symbol-label bg-light-warning text-warning 40px">C</span>
													</div>
													<!--end::Avatar-->
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
													</div>
													<!--end::Avatar-->
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<span class="symbol-label bg-light-danger text-danger 40px">O</span>
													</div>
													<!--end::Avatar-->
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<span class="symbol-label bg-light-primary text-primary 40px">N</span>
													</div>
													<!--end::Avatar-->
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
													</div>
													<!--end::Avatar-->
													<!--begin::All users-->
													<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
														<span class="symbol-label fs-8 fw-bolder" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View more users">+42</span>
													</a>
													<!--end::All users-->
												</div>
												<!--end::Users-->
											</div>
											<!--end::Title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<div class="me-n3">
													<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<i class="bi bi-three-dots fs-2"></i>
													</button>
													<!--begin::Menu 3-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
														<!--begin::Heading-->
														<div class="menu-item px-3">
															<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
														</div>
														<!--end::Heading-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation"></i></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Groups</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3 my-1">
															<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 3-->
												</div>
												<!--end::Menu-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body" id="kt_chat_messenger_body">
											<!--begin::Messages-->
											<div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px">
												<!--begin::Message(in)-->
												<div class="d-flex justify-content-start mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-start">
														<!--begin::User-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-3">
																<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
																<span class="text-muted fs-7 mb-1">2 mins</span>
															</div>
															<!--end::Details-->
														</div>
														<!--end::User-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Message(in)-->
												<!--begin::Message(out)-->
												<div class="d-flex justify-content-end mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-end">
														<!--begin::User-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Details-->
															<div class="me-3">
																<span class="text-muted fs-7 mb-1">5 mins</span>
																<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
															</div>
															<!--end::Details-->
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
															</div>
															<!--end::Avatar-->
														</div>
														<!--end::User-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Message(out)-->
												<!--begin::Message(in)-->
												<div class="d-flex justify-content-start mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-start">
														<!--begin::User-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-3">
																<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
																<span class="text-muted fs-7 mb-1">1 Hour</span>
															</div>
															<!--end::Details-->
														</div>
														<!--end::User-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Message(in)-->
												<!--begin::Message(out)-->
												<div class="d-flex justify-content-end mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-end">
														<!--begin::User-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Details-->
															<div class="me-3">
																<span class="text-muted fs-7 mb-1">2 Hours</span>
																<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
															</div>
															<!--end::Details-->
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
															</div>
															<!--end::Avatar-->
														</div>
														<!--end::User-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Message(out)-->
												<!--begin::Message(in)-->
												<div class="d-flex justify-content-start mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-start">
														<!--begin::User-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-3">
																<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
																<span class="text-muted fs-7 mb-1">3 Hours</span>
															</div>
															<!--end::Details-->
														</div>
														<!--end::User-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
														<a href="https://keenthemes.com">Keenthemes.com</a></div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Message(in)-->
												<!--begin::Message(out)-->
												<div class="d-flex justify-content-end mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-end">
														<!--begin::User-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Details-->
															<div class="me-3">
																<span class="text-muted fs-7 mb-1">4 Hours</span>
																<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
															</div>
															<!--end::Details-->
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
															</div>
															<!--end::Avatar-->
														</div>
														<!--end::User-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Message(out)-->
												<!--begin::Message(in)-->
												<div class="d-flex justify-content-start mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-start">
														<!--begin::User-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-3">
																<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
																<span class="text-muted fs-7 mb-1">5 Hours</span>
															</div>
															<!--end::Details-->
														</div>
														<!--end::User-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Message(in)-->
												<!--begin::Message(template for out)-->
												<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-end">
														<!--begin::User-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Details-->
															<div class="me-3">
																<span class="text-muted fs-7 mb-1">Just now</span>
																<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
															</div>
															<!--end::Details-->
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
															</div>
															<!--end::Avatar-->
														</div>
														<!--end::User-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text"></div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Message(template for out)-->
												<!--begin::Message(template for in)-->
												<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-start">
														<!--begin::User-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-3">
																<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
																<span class="text-muted fs-7 mb-1">Just now</span>
															</div>
															<!--end::Details-->
														</div>
														<!--end::User-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Message(template for in)-->
											</div>
											<!--end::Messages-->
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->
										<div class="card-footer pt-4" id="kt_chat_messenger_footer">
											<!--begin::Input-->
											<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
											<!--end::Input-->
											<!--begin:Toolbar-->
											<div class="d-flex flex-stack">
												<!--begin::Actions-->
												<div class="d-flex align-items-center me-2">
													<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
														<i class="bi bi-paperclip fs-3"></i>
													</button>
													<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
														<i class="bi bi-upload fs-3"></i>
													</button>
												</div>
												<!--end::Actions-->
												<!--begin::Send-->
												<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
												<!--end::Send-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Card footer-->
									</div>
									<!--end::Messenger-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Layout-->
							<!--begin::Modals-->
							<!--begin::Modal - View Users-->
							<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header pb-0 border-0 justify-content-end">
											<!--begin::Close-->
											<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--begin::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
											<!--begin::Heading-->
											<div class="text-center mb-13">
												<!--begin::Title-->
												<h1 class="mb-3">Browse Users</h1>
												<!--end::Title-->
												<!--begin::Description-->
												<div class="text-muted fw-bold fs-5">If you need more info, please check out our
												<a href="#" class="link-primary fw-bolder">Users Directory</a>.</div>
												<!--end::Description-->
											</div>
											<!--end::Heading-->
											<!--begin::Users-->
											<div class="mb-15">
												<!--begin::List-->
												<div class="mh-375px scroll-y me-n7 pe-7">
													<!--begin::User-->
													<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma Smith
																<span class="badge badge-light fs-8 fw-bold ms-2">Art Director</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">smith@kpmg.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$23,000</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Melody Macy
																<span class="badge badge-light fs-8 fw-bold ms-2">Marketing Analytic</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">melody@altbox.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$50,500</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Max Smith
																<span class="badge badge-light fs-8 fw-bold ms-2">Software Enginer</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">max@kt.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$75,900</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Sean Bean
																<span class="badge badge-light fs-8 fw-bold ms-2">Web Developer</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">sean@dellito.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$10,500</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Brian Cox
																<span class="badge badge-light fs-8 fw-bold ms-2">UI/UX Designer</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">brian@exchange.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$20,000</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Mikaela Collins
																<span class="badge badge-light fs-8 fw-bold ms-2">Head Of Marketing</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">mik@pex.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$9,300</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Francis Mitcham
																<span class="badge badge-light fs-8 fw-bold ms-2">Software Arcitect</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">f.mit@kpmg.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$15,000</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Olivia Wild
																<span class="badge badge-light fs-8 fw-bold ms-2">System Admin</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">olivia@corpmail.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$23,000</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Neil Owen
																<span class="badge badge-light fs-8 fw-bold ms-2">Account Manager</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">owen.neil@gmail.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$45,800</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Dan Wilson
																<span class="badge badge-light fs-8 fw-bold ms-2">Web Desinger</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">dam@consilting.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$90,500</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma Bold
																<span class="badge badge-light fs-8 fw-bold ms-2">Corporate Finance</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">emma@intenso.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$5,000</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Ana Crown
																<span class="badge badge-light fs-8 fw-bold ms-2">Customer Relationship</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">ana.cf@limtel.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$70,000</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-5">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-info text-info fw-bold">A</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<!--begin::Name-->
																<a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Robert Doe
																<span class="badge badge-light fs-8 fw-bold ms-2">Marketing Executive</span></a>
																<!--end::Name-->
																<!--begin::Email-->
																<div class="fw-bold text-muted">robert@benko.com</div>
																<!--end::Email-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Stats-->
														<div class="d-flex">
															<!--begin::Sales-->
															<div class="text-end">
																<div class="fs-5 fw-bolder text-dark">$45,500</div>
																<div class="fs-7 text-muted">Sales</div>
															</div>
															<!--end::Sales-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::User-->
												</div>
												<!--end::List-->
											</div>
											<!--end::Users-->
											<!--begin::Notice-->
											<div class="d-flex justify-content-between">
												<!--begin::Label-->
												<div class="fw-bold">
													<label class="fs-6">Adding Users by Team Members</label>
													<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="" checked="checked" />
													<span class="form-check-label fw-bold text-muted">Allowed</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Notice-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - View Users-->
							<!--begin::Modal - Users Search-->
							<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header pb-0 border-0 justify-content-end">
											<!--begin::Close-->
											<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--begin::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
											<!--begin::Content-->
											<div class="text-center mb-13">
												<h1 class="mb-3">Search Users</h1>
												<div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
											</div>
											<!--end::Content-->
											<!--begin::Search-->
											<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
												<!--begin::Form-->
												<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
													<!--begin::Hidden input(Added to disable form autocomplete)-->
													<input type="hidden" />
													<!--end::Hidden input-->
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
													<!--end::Input-->
													<!--begin::Spinner-->
													<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
														<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
													</span>
													<!--end::Spinner-->
													<!--begin::Reset-->
													<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<!--end::Reset-->
												</form>
												<!--end::Form-->
												<!--begin::Wrapper-->
												<div class="py-5">
													<!--begin::Suggestions-->
													<div data-kt-search-element="suggestions">
														<!--begin::Heading-->
														<h3 class="fw-bold mb-5">Recently searched:</h3>
														<!--end::Heading-->
														<!--begin::Users-->
														<div class="mh-375px scroll-y me-n7 pe-7">
															<!--begin::User-->
															<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
																	<span class="badge badge-light">Art Director</span>
																</div>
																<!--end::Info-->
															</a>
															<!--end::User-->
															<!--begin::User-->
															<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
																	<span class="badge badge-light">Marketing Analytic</span>
																</div>
																<!--end::Info-->
															</a>
															<!--end::User-->
															<!--begin::User-->
															<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Max Smith</span>
																	<span class="badge badge-light">Software Enginer</span>
																</div>
																<!--end::Info-->
															</a>
															<!--end::User-->
															<!--begin::User-->
															<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
																	<span class="badge badge-light">Web Developer</span>
																</div>
																<!--end::Info-->
															</a>
															<!--end::User-->
															<!--begin::User-->
															<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
																	<span class="badge badge-light">UI/UX Designer</span>
																</div>
																<!--end::Info-->
															</a>
															<!--end::User-->
														</div>
														<!--end::Users-->
													</div>
													<!--end::Suggestions-->
													<!--begin::Results(add d-none to below element to hide the users list by default)-->
													<div data-kt-search-element="results" class="d-none">
														<!--begin::Users-->
														<div class="mh-375px scroll-y me-n7 pe-7">
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
																		<div class="fw-bold text-muted">smith@kpmg.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2" selected="selected">Owner</option>
																		<option value="3">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
																		<div class="fw-bold text-muted">melody@altbox.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1" selected="selected">Guest</option>
																		<option value="2">Owner</option>
																		<option value="3">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
																		<div class="fw-bold text-muted">max@kt.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2">Owner</option>
																		<option value="3" selected="selected">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
																		<div class="fw-bold text-muted">sean@dellito.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2" selected="selected">Owner</option>
																		<option value="3">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
																		<div class="fw-bold text-muted">brian@exchange.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2">Owner</option>
																		<option value="3" selected="selected">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
																		<div class="fw-bold text-muted">mik@pex.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2" selected="selected">Owner</option>
																		<option value="3">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
																		<div class="fw-bold text-muted">f.mit@kpmg.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2">Owner</option>
																		<option value="3" selected="selected">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
																		<div class="fw-bold text-muted">olivia@corpmail.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2" selected="selected">Owner</option>
																		<option value="3">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
																		<div class="fw-bold text-muted">owen.neil@gmail.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1" selected="selected">Guest</option>
																		<option value="2">Owner</option>
																		<option value="3">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
																		<div class="fw-bold text-muted">dam@consilting.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2">Owner</option>
																		<option value="3" selected="selected">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
																		<div class="fw-bold text-muted">emma@intenso.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2" selected="selected">Owner</option>
																		<option value="3">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
																		<div class="fw-bold text-muted">ana.cf@limtel.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1" selected="selected">Guest</option>
																		<option value="2">Owner</option>
																		<option value="3">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-info text-info fw-bold">A</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
																		<div class="fw-bold text-muted">robert@benko.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2">Owner</option>
																		<option value="3" selected="selected">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
																		<div class="fw-bold text-muted">miller@mapple.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2">Owner</option>
																		<option value="3" selected="selected">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-success text-success fw-bold">L</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
																		<div class="fw-bold text-muted">lucy.m@fentech.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2" selected="selected">Owner</option>
																		<option value="3">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
																		<div class="fw-bold text-muted">ethan@loop.com.au</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1" selected="selected">Guest</option>
																		<option value="2">Owner</option>
																		<option value="3">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
															<!--begin::Separator-->
															<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
															<!--end::Separator-->
															<!--begin::User-->
															<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-5">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
																		<div class="fw-bold text-muted">sean@dellito.com</div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Access menu-->
																<div class="ms-2 w-100px">
																	<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																		<option value="1">Guest</option>
																		<option value="2">Owner</option>
																		<option value="3" selected="selected">Can Edit</option>
																	</select>
																</div>
																<!--end::Access menu-->
															</div>
															<!--end::User-->
														</div>
														<!--end::Users-->
														<!--begin::Actions-->
														<div class="d-flex flex-center mt-15">
															<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
															<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Results-->
													<!--begin::Empty-->
													<div data-kt-search-element="empty" class="text-center d-none">
														<!--begin::Message-->
														<div class="fw-bold py-10">
															<div class="text-gray-600 fs-3 mb-2">No users found</div>
															<div class="text-muted fs-6">Try to search by username, full name or email...</div>
														</div>
														<!--end::Message-->
														<!--begin::Illustration-->
														<div class="text-center px-5">
															<img src="assets/media/illustrations/dozzy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
														</div>
														<!--end::Illustration-->
													</div>
													<!--end::Empty-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Search-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Users Search-->
							<!--end::Modals-->
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