<!DOCTYPE html>

<?php
// Include database connection file
include '../db_connect/db_connect.php';

// Check if job ID is provided in the URL
if (isset($_GET['online_fair_job_id']) && isset($_GET['online_fair_id']) && isset($_GET['company_id'])) {
    $online_fair_job_id = $_GET['online_fair_job_id'];
    $online_fair_id = $_GET['online_fair_id'];
    $company_id = $_GET['company_id'];

    // Fetch job details from the database based on the job ID
    $sql = "SELECT * FROM online_fair_job_posts  WHERE online_fair_job_id=$online_fair_job_id AND online_fair_id = $online_fair_id AND company_id = $company_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch job details as an associative array
        $row = $result->fetch_assoc();

        // Assign job details to variables
        $job_title = $row['job_title'];
        $company_name = $row['company_name'];
        $workplace_type = $row['workplace_type'];
        $job_type = $row['job_type'];
        $salary = $row['salary'];
        $deadline = $row['deadline'];
        $job_description = $row['job_description'];
        $job_responsibilities = $row['job_responsibilities'];
        $job_requirement = $row['job_requirement'];
        $additional_requirement = $row['additional_requirement'];
        $vacancies = $row['vacancies'];
        $employment_type = $row['employment_type'];
        $gender = $row['gender'];
        $experience = $row['experience'];
        $benefits = $row['benefits'];
        $publish_status = $row['publish_status'];
        $read_before_apply = $row['read_before_apply'];
    } else {
        echo "No job post found with the provided ID.";
        exit();
    }
} else {
    echo "No job ID provided in the URL.";
    exit();
}
?>


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
								<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">View Job Post</h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-dot fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="home.php" class="text-muted">Dashboard</a>
									</li>
									<li class="breadcrumb-item text-muted">Job Post</li>
									<li class="breadcrumb-item text-dark">View Job Post</li>
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
							<div class="row">
								<div class="col-md-6">
									<!-- Job Title -->
									<div class="mb-3">
										<label class="form-label">Job Title</label>
										<p class="form-control"><?php echo $job_title; ?></p>
									</div>
									<!-- Company Name -->
									<div class="mb-3">
										<label class="form-label">Company Name</label>
										<p class="form-control"><?php echo $company_name; ?></p>
									</div>
									<!-- Workplace Type -->
									<div class="mb-3">
										<label class="form-label">Workplace Type</label>
										<p class="form-control"><?php echo $workplace_type; ?></p>
									</div>
									<!-- Job Type -->
									<div class="mb-3">
										<label class="form-label">Job Type</label>
										<p class="form-control"><?php echo $job_type; ?></p>
									</div>
									<!-- Salary -->
									<div class="mb-3">
										<label class="form-label">Salary</label>
										<p class="form-control"><?php echo $salary; ?></p>
									</div>
									<!-- Deadline -->
									<div class="mb-3">
										<label class="form-label">Deadline</label>
										<p class="form-control"><?php echo $deadline; ?></p>
									</div>
								</div>
								<div class="col-md-6">
									<!-- Job Description -->
									<div class="mb-3">
										<label class="form-label">Job Description</label>
										<p class="form-control"><?php echo $job_description; ?></p>
									</div>
									<!-- Job Responsibilities -->
									<div class="mb-3">
										<label class="form-label">Job Responsibilities</label>
										<p class="form-control"><?php echo $job_responsibilities; ?></p>
									</div>
									<!-- Job Requirements -->
									<div class="mb-3">
										<label class="form-label">Job Requirements</label>
										<p class="form-control"><?php echo $job_requirement; ?></p>
									</div>
									<!-- Additional Requirements -->
									<div class="mb-3">
										<label class="form-label">Additional Requirements</label>
										<p class="form-control"><?php echo $additional_requirement; ?></p>
									</div>
									<!-- Vacancies -->
									<div class="mb-3">
										<label class="form-label">Vacancies</label>
										<p class="form-control"><?php echo $vacancies; ?></p>
									</div>
									<!-- Employment Type -->
									<div class="mb-3">
										<label class="form-label">Employment Type</label>
										<p class="form-control"><?php echo $employment_type; ?></p>
									</div>
									<!-- Gender -->
									<div class="mb-3">
										<label class="form-label">Gender</label>
										<p class="form-control"><?php echo $gender; ?></p>
									</div>
									<!-- Experience -->
									<div class="mb-3">
										<label class="form-label">Experience</label>
										<p class="form-control"><?php echo $experience; ?></p>
									</div>
									<!-- Benefits -->
									<div class="mb-3">
										<label class="form-label">Benefits</label>
										<p class="form-control"><?php echo $benefits; ?></p>
									</div>
									<!-- Publish Status -->
									<div class="mb-3">
										<label class="form-label">Publish Status</label>
										<p class="form-control"><?php echo $publish_status; ?></p>
									</div>
									<!-- Read Before Apply -->
									<div class="mb-3">
										<label class="form-label">Read Before Apply</label>
										<p class="form-control"><?php echo $read_before_apply; ?></p>
									</div>
								</div>
							</div>
							<!--end::Form-->
							<div class="d-flex justify-content-end">
										<!--begin::Button-->
										<a href="job_post/job_post_list.php" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
										<!--end::Button-->
                                        <a href='job_post/edit-job_post.php?online_fair_job_id=<?php echo $online_fair_job_id ?>' class="btn btn-primary">Edit</a>
							</div>
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
	</body>
	<!--end::Body-->
</html>