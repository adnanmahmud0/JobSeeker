<!DOCTYPE html>

<?php
// Include database connection file
include '..\db_connect\db_connect.php';

// Check if job ID is provided in the URL
if (isset($_GET['job_id'])) {
    $job_id = $_GET['job_id'];

    // Fetch job details from the database based on the job ID
	$sql = "SELECT job_posts.*, companies.company_name 
	FROM job_posts 
	INNER JOIN companies ON job_posts.company_id = companies.company_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch job details as an associative array
        $row = $result->fetch_assoc();

        // Assign job details to variables
        $jobTitle = $row["job_title"];
        $company_id = $row["company_id"];
        $workplaceType = $row["workplace_type"];
        $jobType = $row["job_type"];
        $salary = $row["salary"];
        $jobDescription = $row["job_description"];
        $jobResponsibilites = $row["job_responsibilities"];
        $jobRequirement = $row["job_requirement"];
        $additionalRequirement = $row["additional_requirement"];
		$additional_info = $row["additional_info"];
        $vacancies = $row["vacancies"];
        $employmentType = $row["employment_type"];
        $gender = $row["gender"];
        $experience = $row["experience"];
        $benifits = $row["benefits"];
        $deadline = $row["deadline"];
        $publish_status = $row["publish_status"];
        $readBeforeApply = $row["read_before_apply"];
		$location = $row["location"];
		$education = $row["education_level"];
		$quiz = $row["quiz"];
		$online_interview = $row["online_interview"];
		$offline_interview = $row["offline_interview"];
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
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/job-search.php" />
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
										<a href="dashboard" class="text-muted">Dashboard</a>
									</li>
									<li class="breadcrumb-item text-muted">Job Post</li>
									<li class="breadcrumb-item text-muted">Job Post List</li>
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
										<p class="form-control"><?php echo $jobTitle; ?></p>
									</div>
									<!-- Company ID (assuming you retrieve company name with this ID) -->
									<div class="mb-3">
										<label class="form-label">Company ID</label>
										<p class="form-control"><?php echo $company_id; ?></p>
									</div>
									<!-- Workplace Type -->
									<div class="mb-3">
										<label class="form-label">Workplace Type</label>
										<p class="form-control"><?php echo $workplaceType; ?></p>
									</div>
									<!-- Job Type -->
									<div class="mb-3">
										<label class="form-label">Job Type</label>
										<p class="form-control"><?php echo $jobType; ?></p>
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
									<!-- Additional Information -->
									<div class="mb-3">
										<label class="form-label">Additional Information</label>
										<p class="form-control"><?php echo $additional_info; ?></p>
									</div>
									<!-- Location -->
									<div class="mb-3">
										<label class="form-label">Location</label>
										<p class="form-control"><?php echo $location; ?></p>
									</div>
								</div>
								
								<div class="col-md-6">
									<!-- Job Description -->
									<div class="mb-3">
										<label class="form-label">Job Description</label>
										<p class="form-control"><?php echo $jobDescription; ?></p>
									</div>
									<!-- Job Responsibilities -->
									<div class="mb-3">
										<label class="form-label">Job Responsibilities</label>
										<p class="form-control"><?php echo $jobResponsibilites; ?></p>
									</div>
									<!-- Job Requirements -->
									<div class="mb-3">
										<label class="form-label">Job Requirements</label>
										<p class="form-control"><?php echo $jobRequirement; ?></p>
									</div>
									<!-- Additional Requirements -->
									<div class="mb-3">
										<label class="form-label">Additional Requirements</label>
										<p class="form-control"><?php echo $additionalRequirement; ?></p>
									</div>
									<!-- Vacancies -->
									<div class="mb-3">
										<label class="form-label">Vacancies</label>
										<p class="form-control"><?php echo $vacancies; ?></p>
									</div>
									<!-- Employment Type -->
									<div class="mb-3">
										<label class="form-label">Employment Type</label>
										<p class="form-control"><?php echo $employmentType; ?></p>
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
									<!-- Education -->
									<div class="mb-3">
										<label class="form-label">Education Level</label>
										<p class="form-control"><?php echo $education; ?></p>
									</div>
									<!-- Benefits -->
									<div class="mb-3">
										<label class="form-label">Benefits</label>
										<p class="form-control"><?php echo $benifits; ?></p>
									</div>
									<!-- Publish Status -->
									<div class="mb-3">
										<label class="form-label">Publish Status</label>
										<p class="form-control"><?php echo $publish_status; ?></p>
									</div>
									<!-- Read Before Apply -->
									<div class="mb-3">
										<label class="form-label">Read Before Apply</label>
										<p class="form-control"><?php echo $readBeforeApply; ?></p>
									</div>
									<!-- Quiz -->
									<div class="mb-3">
										<label class="form-label">Quiz</label>
										<p class="form-control"><?php echo $quiz; ?></p>
									</div>
									<!-- Online Interview -->
									<div class="mb-3">
										<label class="form-label">Online Interview</label>
										<p class="form-control"><?php echo $online_interview; ?></p>
									</div>
									<!-- Offline Interview -->
									<div class="mb-3">
										<label class="form-label">Offline Interview</label>
										<p class="form-control"><?php echo $offline_interview; ?></p>
									</div>
								</div>
							</div>
							<!--end::Form-->

							<div class="d-flex justify-content-end">
										<!--begin::Button-->
										<a href="job_post/job_post_list.php" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
										<!--end::Button-->
                                        <a href='job_post/edit-job_post.php?job_id=<?php echo $job_id ?>' class="btn btn-primary">Edit</a>
							</div>
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
                    <?php include '../templet/footer.php';?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
            </div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
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