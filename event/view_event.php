<?php
include '../db_connect/db_connect.php';

// Check if event_id is provided in the URL
if(isset($_GET['event_id'])) {
    // Retrieve the event_id from the URL
    $event_id = $_GET['event_id'];

    // Fetch event details based on the provided event_id
    $sql = "SELECT * FROM events WHERE event_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $event_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if event details are found
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Pre-fill form fields with old data
        $edit_event_name = $row['event_name'];
        $edit_event_description = $row['event_description'];
        $edit_organizer_name = $row['organizer_name'];
        $edit_event_location = $row['event_location'];
        $edit_starting_date = $row['start_date'];
        $edit_ending_date = $row['end_date'];
        $edit_socal_link = $row['social_link'];
        $edit_status = $row['status'];
    } else {
        // Redirect or display an error message if event details are not found
        header("Location: event_list.php"); 
        exit();
    }
} else {
    // Redirect or display an error message if event_id is not provided in the URL
    header("Location: .php"); 
    exit();
}

$stmt->close();
$conn->close();
?>



<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
		<title>View Event</title>
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
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header">
						<!--begin::Container-->
						<div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<!--begin::Heading-->
								<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">View Event</h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-dot fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="home.php" class="text-muted">Dashboard</a>
									</li>
									<li class="breadcrumb-item text-muted">Event</li>
									<li class="breadcrumb-item text-dark">View Event</li>
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
                            <form action="event/backend_event.php" method="post" id="kt_ecommerce_edit_category_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="">
                                <!-- Hidden input to indicate editing event data -->
                                <input type="hidden" name="edit_event_data" value="1">
                                
                                <!-- Aside column -->
                                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                    <!-- Event Banner -->
                                    <div class="card card-flush py-4">
                                        <!-- Card header -->
                                        <div class="card-header">
                                            <!-- Card title -->
                                            <div class="card-title">
                                                <h2>Event Banner</h2>
                                            </div>
                                        </div>
                                        <!-- Card body -->
                                        <div class="card-body text-center pt-0">
                                            <!-- Image input -->
                                            <div class="image-input image-input-empty mb-3" data-kt-image-input="true" style="background-image: url(assets/media/svg/files/blank-image.svg)">
                                                <img src="<?php echo $edit_event_name; ?>" class="img-thumbnail" alt="...">
                                            </div>
                                            <!-- Description for setting event banner -->
                                        </div>
                                    </div>
                                    <!-- Status -->
                                    <div class="card card-flush py-4">
                                        <!-- Card header -->
                                        <div class="card-header">
                                            <!-- Card title -->
                                            <div class="card-title">
                                                <h2>Status</h2>
                                            </div>
                                            <!-- Status indicator -->
                                            <div class="card-toolbar">
                                                <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_Edit_category_status"></div>
                                            </div>
                                        </div>
                                        <!-- Card body -->
                                        <div class="card-body pt-0">
                                            <!-- Select input for event status -->
                                            <select name="Edit_status" class="form-select mb-2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_Edit_category_status_select">
                                                <option></option>
                                                <option value="published">published</option>
                                                <option value="unpublished">unpublished</option>
                                            </select>
                                            <!-- Description for event status -->
                                            <div class="text-muted fs-7">Set the event status.</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Main column -->
                                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                    <!-- General options -->
                                    <div class="card card-flush py-4">
                                        <!-- Card header -->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>General</h2>
                                            </div>
                                        </div>
                                        <!-- Card body -->
                                        <div class="card-body pt-0">
                                            <!-- Input group for event name -->
                                            <div class="mb-10 fv-row">
                                                <label class="required form-label">Event Name</label>
                                                <p><?php echo $edit_event_name; ?> </p>
                                            </div>
                                            <!-- Input group for event description -->
                                            <div>
                                                <label class="form-label">Description</label>
                                                <P><?php echo $edit_event_description; ?></p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Other options -->
                                    <div class="card card-flush py-4">
                                        <!-- Card header -->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Other Options</h2>
                                            </div>
                                        </div>
                                        <!-- Card body -->
                                        <div class="card-body pt-0">
                                            <!-- Input group for organizer name -->
                                            <div class="mb-10">
                                                <label class="form-label">Organizer</label>
                                                <p><?php echo $edit_organizer_name; ?> </p>
                                                
                                            </div>
                                            <!-- Input group for event location -->
                                            <div class="mb-10">
                                                <label class="form-label">Event Location</label>
                                                <p><?php echo $edit_event_location; ?></p>
                                                <div class="text-muted fs-7">Set event location.</div>
                                            </div>
                                            <!-- Input group for start and end date -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="required form-label">Start Date:</label>
                                                    <p><?php echo $edit_starting_date; ?>" </p>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="required form-label">End Date:</label>
                                                    <p><?php echo $edit_ending_date; ?> </p>
                                                    
                                                </div>
                                            </div>
                                            <!-- Input group for social link --><br><br>
                                            <div>
                                                <label class="form-label">Social Link</label>
                                                <p><?php echo $edit_socal_link; ?> </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button group for cancel and save -->
									<div class="d-flex justify-content-end">
										<!--begin::Button-->
										<a href="event/event_list.php" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
										<!--end::Button-->
                                        <a href='event/edit-event.php?event_id=<?php echo $event_id ?>' class="btn btn-primary">Edit</a>
									</div>
                                </div>
                            </form>

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
		<script src="assets/js/custom/apps/ecommerce/catalog/save-category.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>