<?php
	session_start();
	require('db_connect/db_connect.php');

	// SQL query to count total companies
	$sql = "SELECT COUNT(*) AS total_companies FROM `companies`";
	$result = $conn->query($sql);

	// Fetch the result
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$total_companies = $row["total_companies"];
	} else {
		$total_companies = 0;
	}

	// SQL query to count total companies
	$sql = "SELECT
    (SELECT COUNT(*) FROM `online_fair_job_posts`) + (SELECT COUNT(*) FROM `job_posts`) AS total_count;";
	$result = $conn->query($sql);

	// Fetch the result
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$total_job = $row["total_count"];
	} else {
		$total_job = 0;
	}
	$conn->close();
?>

<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Home</title>
		<?php include 'assets/link.php';?>
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
						<!--begin::Logo-->
						<a href="../../demo3/dist/index.html">
							<img alt="Logo" src="assets/media/logos/logo-demo3-default.svg" class="h-20px logo" />
						</a>
						<!--end::Logo-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<?php include 'templet\aside_menu.php';?>
					<!--end::Aside menu-->
					<!--begin::Footer-->
					<?php include 'user\user.php';?>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<?php include 'templet\header.php';?>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::Mixed Widget 13-->
									<div class="card card-xl-stretch mb-xl-10" style="background-color: #F7D9E3">
										<!--begin::Body-->
										<div class="card-body d-flex flex-column">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column flex-grow-1">
												<!--begin::Title-->
												<span class="text-dark fw-bolder fs-3">App User</span>
												<!--end::Title-->
												<!--begin::Chart-->
												<div class="" style="height: 100px">
													<i class="material-icons" style="font-size:100px;color:white;">smartphone</i>
												</div>
												<!--end::Chart-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Stats-->
											<div class="pt-5">
												<!--begin::Symbol-->
												<span class="text-dark fw-bolder fs-2x lh-0"></span>
												<!--end::Symbol-->
												<!--begin::Number-->
												<span class="text-dark fw-bolder fs-3x me-2 lh-0">560</span>
												<!--end::Number-->
												<!--begin::Text-->
												<span class="text-dark fw-bolder fs-6 lh-0">+ App User</span>
												<!--end::Text-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Mixed Widget 13-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::Mixed Widget 14-->
									<div class="card card-xxl-stretch mb-xl-10" style="background-color: #CBF0F4">
										<!--begin::Body-->
										<div class="card-body d-flex flex-column">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column flex-grow-1">
												<!--begin::Title-->
												<a href="#" class="text-dark fw-bolder fs-3">Company</a>
												<!--end::Title-->
												<!--begin::Chart-->
												<div class="" style="height: 100px">
													<i class="material-icons" style="font-size:100px;color:white;">domain</i>
												</div>
												<!--end::Chart-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Stats-->
											<div class="pt-5">
												<!--begin::Symbol-->
												<span class="text-dark fw-bolder fs-2x lh-0"></span>
												<!--end::Symbol-->
												<!--begin::Number-->
												<span class="text-dark fw-bolder fs-3x me-2 lh-0"><?php echo $total_companies; ?></span>
												<!--end::Number-->
												<!--begin::Text-->
												<span class="text-dark fw-bolder fs-6 lh-0">Company</span>
												<!--end::Text-->
											</div>
											<!--end::Stats-->
										</div>
									</div>
									<!--end::Mixed Widget 14-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::Mixed Widget 14-->
									<div class="card card-xxl-stretch mb-xl-10" style="background-color: #CBD4F4">
										<!--begin::Body-->
										<div class="card-body d-flex flex-column">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column flex-grow-1">
												<!--begin::Title-->
												<a href="#" class="text-dark fw-bolder fs-3">Total Job</a>
												<!--end::Title-->
												<!--begin::Chart-->
												<div class="" style="height: 100px">
													<i class="fa fa-archive" style="font-size:100px;color:white;"></i>
												</div>
												<!--end::Chart-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Stats-->
											<div class="pt-5">
												<!--begin::Symbol-->
												<span class="text-dark fw-bolder fs-2x lh-0"></span>
												<!--end::Symbol-->
												<!--begin::Number-->
												<span class="text-dark fw-bolder fs-3x me-2 lh-0"><?php echo $total_job; ?></span>
												<!--end::Number-->
												<!--begin::Text-->
												<span class="text-dark fw-bolder fs-6 lh-0">Jobs</span>
												<!--end::Text-->
											</div>
											<!--end::Stats-->
										</div>
									</div>
									<!--end::Mixed Widget 14-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Tables Widget 9-->
							<?php include 'templet/application.php';?>
							<!--end::Tables Widget 9-->
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
		<?php include 'templet/notification.php';?>
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
		<!--begin::Modal - Invite Friends-->
		<?php include 'templet/invite.php';?>
		<!--end::Modal - Invite Friend-->
		<!--begin::Modal - Users Search-->
		<?php include 'templet/search.php';?>
		<!--end::Modal - Users Search-->
		<!--end::Modals-->
		<?php include 'assets/js/js.php';?>
	</body>
	<!--end::Body-->
</html>