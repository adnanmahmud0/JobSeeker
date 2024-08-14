<!DOCTYPE html>
<?php
include '../db_connect/db_connect.php';

// Check if job ID is provided in the URL
if(isset($_GET['job_id'])) {
    $job_id = $_GET['job_id'];

    // Fetch job post data from the database based on job ID
    $sql = "SELECT * FROM job_posts WHERE job_id = '$job_id'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        // Job post found, display form for editing
        $row = $result->fetch_assoc();

        // Extract data from the row
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

        // Display the edit form
		
?>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
		<title>Edit Job Post</title>
		<meta charset="utf-8" />
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
								<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Edit Job Post</h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-dot fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="home.php" class="text-muted">Dashboard</a>
									</li>
									<li class="breadcrumb-item text-muted">Job Post</li>
									<li class="breadcrumb-item text-muted">Job Post List</li>
									<li class="breadcrumb-item text-dark">Edit Job Post</li>
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
							<form action="job_post/backend_job.php" method="get" class="row g-3">
								<input type="hidden" name="edit_job_post" value="1">
								<input type="hidden" name="job_id" value="<?php echo htmlspecialchars($job_id); ?>">
								<div class="col-12">
									<label for="inputJobTitle" class="form-label">Job Title</label>
									<input name="jobTitle" type="text" class="form-control" id="JobTitle" placeholder="xyz job" value="<?php echo htmlspecialchars($jobTitle); ?>">
								</div>

								<div class="col-12">
									<label for="inputCompanyName" class="form-label">Company Name</label>
									<!--begin::Select-->
									<select name="add_company_name" class="form-select mb-2" data-placeholder="Select a company name">
										<option value="">Select a company name</option>
										<?php
										// Fetch company names from the database and populate the options
										$sql = "SELECT company_id, company_name FROM companies";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
											while ($row = $result->fetch_assoc()) {
												$selected = ($row["company_id"] == $company_id) ? 'selected' : '';
												echo "<option value='" . $row["company_id"] . "' $selected>" . $row["company_name"] . "</option>";
											}
										}
										?>
									</select>
									<!--end::Select-->
									<div class="form-text">Select the company for which the job is being posted.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Location</label>
									<textarea name="location" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo htmlspecialchars($location); ?></textarea>
									<div class="form-text">Enter location of the job.</div>
								</div>

								<div class="col-md-6">
									<label for="inputJobTitle" class="form-label">Workplace Type</label>
									<select name="workplaceType" class="form-select" aria-label="Default select example">
										<option selected>Choose the workplace type</option>
										<option value="On-site" <?php if ($workplaceType == "On-site") echo "selected"; ?>>On-site</option>
										<option value="Hybrid" <?php if ($workplaceType == "Hybrid") echo "selected"; ?>>Hybrid</option>
										<option value="Remote" <?php if ($workplaceType == "Remote") echo "selected"; ?>>Remote</option>
									</select>
									<div class="form-text">Select the type of workplace for the job.</div>
								</div>

								<div class="col-md-6">
									<label for="inputJobTitle" class="form-label">Job Type</label>
									<select name="jobType" class="form-select" aria-label="Default select example">
										<option selected>Choose the job type</option>
										<option value="Government" <?php if ($jobType == "Government") echo "selected"; ?>>Government</option>
										<option value="Private" <?php if ($jobType == "Private") echo "selected"; ?>>Private</option>
										<option value="International" <?php if ($jobType == "International") echo "selected"; ?>>International</option>
									</select>
									<div class="form-text">Select the type of job.</div>
								</div>

								<label for="basic-url" class="form-label">Salary</label>
								<div class="input-group mb-3">
									<input name="salary" type="text" class="form-control" aria-label="Amount (to the nearest taka) " value="<?php echo htmlspecialchars($salary); ?>">
								</div>
								<div class="form-text">Enter the salary amount for the job.</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Job Description</label>
									<textarea name="jobDescription" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo htmlspecialchars($jobDescription); ?></textarea>
									<div class="form-text">Enter the description of the job.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Job Responsibilites</label>
									<textarea name="jobResponsibilites" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo htmlspecialchars($jobResponsibilites); ?></textarea>
									<div class="form-text">Enter the responsibilities associated with the job.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Job Requirement</label>
									<textarea name="jobRequirement" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo htmlspecialchars($jobRequirement); ?></textarea>
									<div class="form-text">Enter the requirements for the job.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Additional Requirement</label>
									<textarea name="additionalRequirement" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo htmlspecialchars($additionalRequirement); ?></textarea>
									<div class="form-text">Enter any additional requirements for the job.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Additional Information</label>
									<textarea name="additional_info" class="form-control" id="additional_info" rows="3"><?php echo htmlspecialchars($additional_info); ?></textarea>
									<div class="form-text">Enter any additional information for the job.</div>
								</div>

								<div class="col-12">
									<label for="inputJobTitle" class="form-label">Vacancies</label>
									<input name="vacancies" type="text" class="form-control" id="JobTitle" placeholder="" value="<?php echo htmlspecialchars($vacancies); ?>">
									<div class="form-text">Enter the number of vacancies available for the job.</div>
								</div>
								
								<div class="col-md-6">
									<label for="inputJobTitle" class="form-label">Employment Type</label>
									<select name ="employmentType"class="form-select" aria-label="Default select example">
									<option selected>Choose employment type</option>
										<option value="Full-time" <?php if ($employmentType == "Full-time") echo "selected"; ?>>Full-time</option>
										<option value="Part-time" <?php if ($employmentType == "Part-time") echo "selected"; ?>>Part-time</option>
										<option value="Contract" <?php if ($employmentType == "Contract") echo "selected"; ?>>Contract</option>
										<option value="Temporary" <?php if ($employmentType == "Temporary") echo "selected"; ?>>Temporary</option>
										<option value="Other" <?php if ($employmentType == "Other") echo "selected"; ?>>Other</option>
										<option value="Volunteer" <?php if ($employmentType == "Volunteer") echo "selected"; ?>>Volunteer</option>
										<option value="Internship" <?php if ($employmentType == "Internship") echo "selected"; ?>>Internship</option>
									</select>
									<div class="form-text">Select the type of employment offered for this job.</div>
								</div>
								<div class="col-md-6">
									<label for="inputJobTitle" class="form-label">Gender</label>
									<select name="gender" class="form-select" aria-label="Default select example">
										<option value="Male" <?php if ($gender == "Male") echo "selected"; ?>>Male</option>
										<option value="Femal" <?php if ($gender == "Femal") echo "selected"; ?>>Femal</option>
										<option value="Both" <?php if ($gender == "Both") echo "selected"; ?>>Both</option>
									</select>
									<div class="form-text">Specify the gender preference for this job.</div>
								</div>
								<div class="col-12">
									<label for="inputJobTitle" class="form-label">Education Level</label>
									<input name="education" type="text" class="form-control" id="JobTitle" value="<?php echo htmlspecialchars($education); ?>" placeholder="">
									<div class="form-text">Enter the Education Level for the job.</div>
								</div>
								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Experience</label>
									<textarea name="experience" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo htmlspecialchars($experience); ?></textarea>
									<div class="form-text">Enter the required experience for this job.</div>
								</div>

								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Benifits</label>
									<textarea name="benifits" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo htmlspecialchars($benifits); ?></textarea>
									<div class="form-text">List the benefits provided for this job.</div>
								</div>
								<div class="col-md-6">
									<label for="inputDate" class="form-label">Deadline</label>
									<input name="deadline" type="date" class="form-control" id="inputZip" value="<?php echo htmlspecialchars($deadline); ?>">
									<div class="form-text">Specify the deadline for applications.</div>
								</div>

								<!--begin::Input group-->
								<div class="col-md-6">
									<!--begin::Label-->
									<label class="required form-label">Publish Status</label>
									<!--end::Label-->
									<!--begin::Select-->
									<select name="publish_status" class="form-select mb-2" data-placeholder="Select status">
										<option value="published" <?php if ($publish_status == "published") echo "selected"; ?>>Published</option>
										<option value="unpublished" <?php if ($publish_status == "unpublished") echo "selected"; ?>>Unpublished</option>
									</select>
									<!--end::Select-->
									<!--begin::Description-->
									<div class="text-muted fs-7">Select whether the company should be published or unpublished.</div>
									<!--end::Description-->
								</div>
								<!--end::Input group-->
								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Read Before Apply</label>
									<textarea name="readBeforeApply" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo htmlspecialchars($readBeforeApply); ?></textarea>
									<div class="form-text">Provide any specific instructions or information applicants should read before applying.</div>
								</div>

								
								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">Evaluation Type</label>
									<div class="row">
										<div class="col-md-4">
										<div class="form-check form-check-inline">
											<label><input type="checkbox" name="quiz" value="1" <?php if ($quiz == "1") echo "checked"?>> Quiz</label>
										</div>
										</div>
										<div class="col-md-4">
										<div class="form-check form-check-inline">
											<label><input type="checkbox" name="online_interview" value="1" <?php if ($online_interview == "1") echo "checked"?>> Online Interview</label>
										</div>
										</div>
										<div class="col-md-4">
										<div class="form-check form-check-inline">
											<label><input type="checkbox" name="offline_interview" value="1" <?php if ($offline_interview == "1") echo "checked"?>> Offline Interview</label>
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
                    <?php include '../templet/footer.php';?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
            </div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
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

	<?php
    } else {
        // No job post found with the provided job ID
        echo "No job post found with the provided ID.";
    }
} else {
    // No job ID provided in the URL
    echo "No job ID provided.";
}

$conn->close();
?>
</html>