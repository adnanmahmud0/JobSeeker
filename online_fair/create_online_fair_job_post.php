<?php include '../db_connect/db_connect.php'; ?>

<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
		<title>Home</title>
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

                	<?php include '../templet/logo.php';?>
					<!--begin::Aside menu-->
                    <?php include '../templet/aside_menu.php';?>
                    <!--begin::Aside menu-->
					
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
								<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Create Job Post</h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-dot fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="home.php" class="text-muted">Dashboard</a>
									</li>
									<li class="breadcrumb-item text-muted">Job Post</li>
									<li class="breadcrumb-item text-dark">Create Job Post</li>
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
							<!--begin::Form-->
							<form action="online_fair/backend_online_fair_job_post.php" method="get" class="row g-3">
								<input type="hidden" name="create_job_post" value="1">
								<input type="hidden" name="online_fair_id" value="<?php echo $_GET['online_fair_id'] ?>">
								<input type="hidden" name="company_id" value="<?php echo $_GET['company_id'] ?>">
								
								<div class="col-12">
									<label for="inputJobTitle" class="form-label">Job Title</label>
									<input name="jobTitle" type="text" class="form-control" id="JobTitle" placeholder="xyz job" >
								</div>

								<div class="col-md-6">
									<label for="inputCompanyName" class="form-label">Company Name</label>
									<!--begin::Select-->
									<label name="company_id" class="form-control" id="">
										<?php
										include '..\db_connect\db_connect.php';
										$company_id = $_GET['company_id'];
										// Fetch fair names from the database and populate the options
										$sql = "SELECT company_id, company_name FROM companies WHERE company_id=$company_id";
										$result = $conn->query($sql);
										$row = $result->fetch_assoc();
										echo  $row["company_name"];
										?>
									</label>
									<!--end::Select-->
								</div>

								<div class="col-md-6">
									<label for="inputCompanyName" class="form-label">Online Fair Name</label>
									<!--begin::Select-->
									<label name="online_fair_id" class="form-control" data-placeholder="Select a online fair name" id="">
										<?php
										include '..\db_connect\db_connect.php';
										$online_fair_id = $_GET['online_fair_id'];
										// Fetch fair names from the database and populate the options
										$sql = "SELECT online_fair_id, online_fair_name FROM online_fair WHERE online_fair_id=$online_fair_id";
										$result = $conn->query($sql);
										$row = $result->fetch_assoc();
										echo $row["online_fair_name"];
										?>
									</label>
									<!--end::Select-->
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Location</label>
									<textarea name="location" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									<div class="form-text">Enter location of the job.</div>
								</div>

								<div class="col-md-6">
									<label for="inputJobTitle" class="form-label">Workplace Type</label>
									<select name="workplaceType" class="form-select" aria-label="Default select example">
										<option selected>Choose the workplace type</option>
										<option value="On-site">On-site</option>
										<option value="Hybrid">Hybrid</option>
										<option value="Remote">Remote</option>
									</select>
									<div class="form-text">Select the type of workplace for the job.</div>
								</div>

								<div class="col-md-6">
									<label for="inputJobTitle" class="form-label">Job Type</label>
									<select name="jobType" class="form-select" aria-label="Default select example">
										<option selected>Choose the job type</option>
										<option value="Government">Government</option>
										<option value="Private">Private</option>
										<option value="International">International</option>
									</select>
									<div class="form-text">Select the type of job.</div>
								</div>

								<label for="basic-url" class="form-label">Salary</label>
								<div class="input-group mb-3">
									<input name="salary" type="text" class="form-control" aria-label="Amount (to the nearest taka)">
								</div>
								<div class="form-text">Enter the salary amount for the job.</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Job Description</label>
									<textarea name="jobDescription" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									<div class="form-text">Enter the description of the job.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Job Responsibilites</label>
									<textarea name="jobResponsibilites" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									<div class="form-text">Enter the responsibilities associated with the job.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Job Requirement</label>
									<textarea name="jobRequirement" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									<div class="form-text">Enter the requirements for the job.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Additional Requirement</label>
									<textarea name="additionalRequirement" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									<div class="form-text">Enter any additional requirements for the job.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Additional Information</label>
									<textarea name="additional_info" class="form-control" id="additional_info" rows="3"></textarea>
									<div class="form-text">Enter any additional information for the job.</div>
								</div>

								<div class="col-12">
									<label for="inputJobTitle" class="form-label">Vacancies</label>
									<input name="vacancies" type="text" class="form-control" id="JobTitle" placeholder="">
									<div class="form-text">Enter the number of vacancies available for the job.</div>
								</div>
								
								<div class="col-md-6">
									<label for="inputJobTitle" class="form-label">Employment Type</label>
									<select name ="employmentType"class="form-select" aria-label="Default select example">
									<option selected>Choose employment type</option>
										<option value="Full-time">Full-time</option>
										<option value="Part-time">Part-time</option>
										<option value="Contract">Contract</option>
										<option value="Project Based">Project Based</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Internship">Internship</option>
										<option value="Research and Development">Research and Development</option>
										<option value="Other">Other</option>
									</select>
									<div class="form-text">Select the type of employment offered for this job.</div>
								</div>
								<div class="col-md-6">
									<label for="inputJobTitle" class="form-label">Gender</label>
									<select name="gender" class="form-select" aria-label="Default select example">
										<option selected>Open this select grnder</option>
										<option value="Male">Male</option>
										<option value="Femal">Femal</option>
										<option value="Both">Both</option>
									</select>
									<div class="form-text">Specify the gender preference for this job.</div>
								</div>

								<div class="col-12">
									<label for="inputJobTitle" class="form-label">Education Level</label>
									<input name="education" type="text" class="form-control" id="JobTitle" placeholder="">
									<div class="form-text">Enter the Education Level for the job.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Experience</label>
									<textarea name="experience" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									<div class="form-text">Enter the required experience for this job.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Benifits</label>
									<textarea name="benifits" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									<div class="form-text">List the benefits provided for this job.</div>
								</div>
								<div class="col-md-6">
									<label for="inputDate" class="form-label">Deadline</label>
									<input name="deadline" type="date" class="form-control" id="inputZip">
									<div class="form-text">Specify the deadline for applications.</div>
								</div>

								<!--begin::Input group-->
								<div class="col-md-6">
									<!--begin::Label-->
									<label class="required form-label">Publish Status</label>
									<!--end::Label-->
									<!--begin::Select-->
									<select name="add_publish_status" class="form-select mb-2" data-placeholder="Select status">
										<option value="">Select status</option>
										<option value="published">Published</option>
										<option value="unpublished">Unpublished</option>
									</select>
									<!--end::Select-->
									<!--begin::Description-->
									<div class="text-muted fs-7">Select whether the company should be published or unpublished.</div>
									<!--end::Description-->
								</div>
								<!--end::Input group-->
								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Read Before Apply</label>
									<textarea name="readBeforeApply" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									<div class="form-text">Provide any specific instructions or information applicants should read before applying.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Evaluation Type</label>
									<div class="row">
										<div class="col-md-4">
										<div class="form-check form-check-inline">
											<label><input type="checkbox" name="quiz" value="1"> Quiz</label>
										</div>
										</div>
										<div class="col-md-4">
										<div class="form-check form-check-inline">
											<label><input type="checkbox" name="online_interview" value="1"> Online Interview</label>
										</div>
										</div>
										<div class="col-md-4">
										<div class="form-check form-check-inline">
											<label><input type="checkbox" name="offline_interview" value="1"> Offline Interview</label>
										</div>
										</div>
									</div>
									<div class="form-text">Select the methods through which applicants will be evaluated: quiz, online interview, offline interview.</div>
								</div>

								
								<button type="submit" class="btn btn-primary">Submit</button>


							</form>
							<!--end::Form-->
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
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/apps/ecommerce/catalog/save-product.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Page Custom Javascript-->
		<!-- Include Select2 JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

		<script>
			$(document).ready(function() {
				$('#company_select').select2({
					placeholder: "Select a company name",
					allowClear: true // This will allow the user to clear the selection
				});
			});
		</script>
	</body>
	<!--end::Body-->
</html>