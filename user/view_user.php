<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
    <title></title>
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
                    <?php include '../templet/logo.php';?>
					<!--end::Brand-->
					<!--begin::Aside menu-->
                    <?php include '../templet/aside_menu.php';?>
					<!--end::Aside menu-->
					<!--begin::Footer-->
                    <?php include '../user/user.php';?>
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
								<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Users List</h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-dot fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="../../demo3/dist/index.html" class="text-muted">Home</a>
									</li>
									<li class="breadcrumb-item text-muted">Apps</li>
									<li class="breadcrumb-item text-muted">User Management</li>
									<li class="breadcrumb-item text-muted">Users</li>
									<li class="breadcrumb-item text-dark">Users List</li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title=-->
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
								<div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
									<!--begin::Card-->
									<div class="card mb-5 mb-xl-8">
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin::Summary-->
											<!--begin::User Info-->
											<div class="d-flex flex-center flex-column py-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-100px symbol-circle mb-7">
													<img src="assets/media/avatars/300-6.jpg" alt="image" />
												</div>
												<!--end::Avatar-->
												<!--begin::Name-->
												<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">Emma Smith</a>
												<!--end::Name-->
												<!--begin::Position-->
												<div class="mb-9">
													<!--begin::Badge-->
													<div class="badge badge-lg badge-light-primary d-inline">Full stack Webdeveloper</div>
													<!--begin::Badge-->
												</div>
												<!--end::Position-->
											</div>
											<!--end::User Info-->
											<!--end::Summary-->
											<!--begin::Details toggle-->
											<div class="d-flex flex-stack fs-4 py-3">
												<div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details
												<span class="ms-2 rotate-180">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
                                            </div>
											</div>
											<!--end::Details toggle-->
											<div class="separator"></div>
											<!--begin::Details content-->
											<div id="kt_user_view_details" class="collapse show">
												<div class="pb-5 fs-6">
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Account ID</div>
													<div class="text-gray-600">ID-45453423</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Email</div>
													<div class="text-gray-600">
														<a href="#" class="text-gray-600 text-hover-primary">info@keenthemes.com</a>
													</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Address</div>
													<div class="text-gray-600">101 Collin Street,
													<br />Melbourne 3000 VIC
													<br />Australia</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Language</div>
													<div class="text-gray-600">English</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">CV</div>
													<a href="#"  class="text-gray-600 text-hover-primary">Download CV</a>
													<!--begin::Details item-->
												</div>
											</div>
											<!--end::Details content-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
									<!--begin::Connected Accounts-->
									<div class="card mb-5 mb-xl-8">
										<!--begin::Card header-->
										<div class="card-header border-0">
											<div class="card-title">
												<h3 class="fw-bolder m-0">Connected Accounts</h3>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-2">
											<!--begin::Items-->
											<div class="py-2">
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<div class="d-flex">
														<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
														<div class="d-flex flex-column">
															<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Google</a>
															<div class="fs-6 fw-bold text-muted">Plan properly your workflow</div>
														</div>
													</div>
												</div>
												<!--end::Item-->
												<div class="separator separator-dashed my-5"></div>
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<div class="d-flex">
														<img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
														<div class="d-flex flex-column">
															<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Github</a>
															<div class="fs-6 fw-bold text-muted">Keep eye on on your Repositories</div>
														</div>
													</div>
												</div>
												<!--end::Item-->
												<div class="separator separator-dashed my-5"></div>
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<div class="d-flex">
														<img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
														<div class="d-flex flex-column">
															<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Slack</a>
															<div class="fs-6 fw-bold text-muted">Integrate Projects Discussions</div>
														</div>
													</div>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Connected Accounts-->
								</div>
								<!--end::Sidebar-->
								<!--begin::Content-->
								<div class="flex-lg-row-fluid ms-lg-15">
									<!--begin:::Tabs-->
									<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_personal_details_tab">Personal Details</a>
										</li>
										<!--end:::Tab item-->
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_academic_qualification">Academic Qualification</a>
										</li>
										<!--end:::Tab item-->
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_certification">Certification</a>
										</li>
										<!--end:::Tab item-->
                                        <!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_skills_info">Skills Info</a>
										</li>
										<!--end:::Tab item-->
										<!--begin:::Tab item-->
										<li class="nav-item ms-auto">
											<!--begin::Action menu-->
											<a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-2 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6" data-kt-menu="true">
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="#" class="menu-link px-5">Download CV</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="#" class="menu-link flex-stack px-5">Email</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="#" class="menu-link flex-stack px-5">Message</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu-->
											<!--end::Menu-->
										</li>
										<!--end:::Tab item-->
									</ul>
									<!--end:::Tabs-->
									<!--begin:::Tab content-->
									<div class="tab-content" id="myTabContent">
										<!--begin:::Tab pane-->
										<div class="tab-pane fade show active" id="kt_user_view_personal_details_tab" role="tabpanel">
                                            <div class="container">
                                                <h1>User Information</h1>

                                                <!-- Display Personal Details -->
                                                <div><br><br>
                                                    <h2>Personal Details</h2><br>
                                                    <ul class="list-group">
                                                        <!-- Fetch and display personal information from the database -->
                                                        <!-- Replace the placeholders with actual data -->
                                                        <li class="list-group-item list-group-item-action">Father's Name: John Doe</li>
                                                        <li class="list-group-item list-group-item-action">Mother's Name: Jane Doe</li>
                                                        <li class="list-group-item list-group-item-action">Date of Birth: 1990-01-01</li>
                                                        <li class="list-group-item list-group-item-action">Religion: Christian</li>
                                                        <li class="list-group-item list-group-item-action">Gender: Male</li>
                                                        <li class="list-group-item list-group-item-action">Marital Status: Married</li>
                                                        <li class="list-group-item list-group-item-action">Nationality: American</li>
                                                        <li class="list-group-item list-group-item-action">NID: 12345678901234</li>
                                                        <li class="list-group-item list-group-item-action">Passport No: AB123456</li>
                                                        <li class="list-group-item list-group-item-action">Passport Issue Date: 2020-01-01</li>
                                                        <li class="list-group-item list-group-item-action">Blood Group: AB+</li>
                                                        <!-- Add more list items for additional users if needed -->
                                                    </ul>
                                                </div>

                                                <!-- Display Contact Details -->
                                                <div><br><br><br>
                                                    <h2>Contact Details</h2><br>
                                                    <ul class="list-group">
                                                        <!-- Fetch and display contact information from the database -->
                                                        <!-- Replace the placeholders with actual data -->
                                                        <li class="list-group-item list-group-item-action">Present Address: 123 Main St, City</li>
                                                        <li class="list-group-item list-group-item-action">Permanent Address: 456 Park Ave, City</li>
                                                        <li class="list-group-item list-group-item-action">Secondary Phone No: 123-456-7890</li>
                                                        <li class="list-group-item list-group-item-action">Emergency Phone No: 987-654-3210</li>
                                                        <li class="list-group-item list-group-item-action">Secondary Email: john@example.com</li>
                                                        <!-- Add more list items for additional users if needed -->
                                                    </ul>
                                                </div>
                                            </div>
										</div>
										<!--end:::Tab pane-->
										<!--begin:::Tab pane-->
										<div class="tab-pane fade" id="kt_user_view_academic_qualification" role="tabpanel">
                                            <div class="container">
                                            <h1>User Information</h1>

                                            <!-- Display Education History -->
                                                <div><br><br>
                                                    <h2>Academic Qualifications</h2><br>
                                                    <div class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <h5 class="mb-1">Level of Education: Bachelor's</h5>
                                                            <small class="text-muted">Passing Year: 2020</small>
                                                        </div>
                                                        <p class="mb-1">Degree Title: Computer Science</p>
                                                        <p class="mb-1">Board: XYZ Board</p>
                                                        <p class="mb-1">Group and Major: Science</p>
                                                        <p class="mb-1">Institution Name: ABC University</p>
                                                        <p class="mb-1">Result: 3.75</p>
                                                        <p class="mb-1">GPA: 3.75</p>
                                                        <p class="mb-1">Duration: 4 Years</p>
                                                    </div>
                                                </div>

                                                <!-- Display Language Skills -->
                                                <div><br><br>
                                                    <h2>Language Skills</h2><br>
                                                    <div class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <h5 class="mb-1">Language: English</h5>
                                                        </div>
                                                        <p class="mb-1">Reading Level: Fluent</p>
                                                        <p class="mb-1">Writing Level: Fluent</p>
                                                        <p class="mb-1">Speaking Level: Fluent</p>
                                                    </div>

                                                </div>
                                        
                                            </div>
                                        </div>
										<!--end:::Tab pane-->
										<!--begin:::Tab pane-->
										<div class="tab-pane fade" id="kt_user_view_certification" role="tabpanel">
                                            <div class="container">
                                                <h1>User Information</h1>

                                                <!-- Display Certifications -->
                                                <div><br><br>
                                                    <h2>Certifications</h2><br>
                                                    <div class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">Certification Title: Web Development</h5>
                                                        <small class="text-muted">Start Date: 2022-01-01 <br>End Date: 2022-06-30</small>
                                                        </div>
                                                        <p class="mb-1">Institute Name: ABC Institute</p>
                                                        <small class="text-muted">Location: New York</small>
                                                    </div>
                                                </div>

                                                <!-- Display Trainings -->
                                                <div><br><br>
                                                    <h2>Trainings</h2><br>
                                                    <div  class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <h5 class="mb-1">Training Title: Data Analysis</h5>
                                                            <small class="text-muted">Training Year: 2021</small>
                                                        </div>
                                                        <p class="mb-1">Topic Covered: Statistical Analysis</p>
                                                        <p class="mb-1">Institute: XYZ Training Center</p>
                                                        <p class="mb-1">Country: United States</p>
                                                        <p class="mb-1">Location: Washington DC</p>
                                                        <p class="mb-1">Duration: 2 Weeks</p>
                                                    </div>
                                                </div>
                                            </div>
										</div>
										<!--end:::Tab pane-->
										<!--begin:::Tab pane-->
										<div class="tab-pane fade show" id="kt_user_view_skills_info" role="tabpanel">
                                            <div class="container">
                                                <h1>User Information</h1>

                                                <!-- Display Skills Info -->
                                                <div><br><br>
                                                    <h2>Skills</h2><br>
                                                    <div class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">Skills Title: Web Development</h5>
                                                        <small class="text-muted">Online Courses</small>
                                                        </div>
                                                        <p class="mb-1">Skills Description: HTML, CSS, JavaScript</p>
                                                        <small class="text-muted">Extra Curricular Activities: Coding Club</small>
                                                    </div>
                                                </div>

                                                <!-- Display Co-curricular Activities -->
                                                <div><br><br>
                                                    <h2>Co-curricular Activities</h2><br>
                                                    <div class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">Activity Name: Debate Club</h5>
                                                        </div>
                                                        <p class="mb-1">Work Experience: Debating competitions</p>
                                                    </div>
                                                </div>

                                                <!-- Display Awards -->
                                                <div><br><br>
                                                    <h2>Awards</h2><br>
                                                    <div class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">Award Title: Best Debater</h5>
                                                        <small class="text-muted">2021-05-15</small>
                                                        </div>
                                                        <p class="mb-1">Context of Award: National Debating Competition</p>
                                                        <small class="text-muted">Reason for Award: Outstanding performance</small>
                                                    </div>
                                                </div>
                                            </div>
										</div>
										<!--end:::Tab pane-->
									</div>
									<!--end:::Tab content-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Layout-->
							<!--begin::Modals-->
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
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/apps/user-management/users/view/view.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/update-details.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/add-schedule.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/add-task.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/update-email.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/update-password.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/update-role.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/add-auth-app.js"></script>
		<script src="assets/js/custom/apps/user-management/users/view/add-one-time-password.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
	</body>
	<!--end::Body-->
</html>