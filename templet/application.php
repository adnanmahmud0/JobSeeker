<?php
	require('db_connect/db_connect.php');
	// SQL query to count total companies
	$sql = "SELECT COUNT(*) AS total_count FROM `applications`";
	$result = $conn->query($sql);

	// Fetch the result
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$total_count = $row["total_count"];
	} else {
		$total_count = 0;
	}
?>

								<div class="card mb-5 mb-xl-10">
								<!--begin::Header-->
								<div class="card-header border-0 pt-5">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bolder fs-3 mb-1">Regular Application</span>
										<span class="text-muted mt-1 fw-bold fs-7">Total Application <?php echo $total_count ?></span>
									</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<!--begin::Card body-->
								<div class="card-body py-4">
									<!--begin::Table-->
									<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
										<!--begin::Table head-->
										<thead>
											<!--begin::Table row-->
											<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
												<th class="w-10px pe-2">
													<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
														<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
													</div>
												</th>
												<th class="min-w-125px">User</th>
												<th class="min-w-125px">Company</th>
												<th class="min-w-125px">Employment Type</th>
												<th class="min-w-125px">Job Post</th>
												<th class="min-w-125px">Applyed Date</th>
												<th class="text-end min-w-100px">Actions</th>
											</tr>
											<!--end::Table row-->
										</thead>
										<!--end::Table head-->
										<!--begin::Table body-->
										<tbody class="text-gray-600 fw-bold">
											<!--begin::Table row-->
											
											<?php
											// Fetch data from the Applications table
											$sql = "SELECT *
											FROM applications a
											INNER JOIN jobseeker_register_info j ON a.UserID = j.user_id
											INNER JOIN companies c ON a.CompanyID = c.company_id
											INNER JOIN job_posts p ON a.JobPostID = p.job_id; ";
											$result = $conn->query($sql);

											// Check if there are any rows returned
											if ($result->num_rows > 0) {
												// Output data of each row
												while ($row = $result->fetch_assoc()) {

													// Generate HTML table row using the data from the database
													echo '<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="' . $row["ApplicationID"] . '" />
															</div>
														</td>
														<td class="d-flex align-items-center">
															<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																<a href="job_post_application/view_user.php">
																	<div class="symbol-label">
																		<img src="assets/media/avatars/300-6.jpg" alt="' . $row["UserID"] . '" class="w-100" />
																	</div>
																</a>
															</div>
															<div class="d-flex flex-column">
																<a href="job_post_application/view_user.php?user_id=' . $row['UserID'] . '" class="text-gray-800 text-hover-primary mb-1">' . $row["name"] . '</a>
																<span>' . $row["EmploymentType"] . '</span>
															</div>
														</td>
														<td>' . $row["company_name"] . '</td>
														<td>' . $row["EmploymentType"] . '</td>
														<td>' . $row["job_title"] . '</td>
														<td>' . $row["ApplyDate"] . '</td>
														';
														echo "<td class='text-end'>
															<div class='dropdown'>
																<button class='btn btn-sm btn-light btn-active-light-primary dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-labelledby='dropdownMenuLink'>Actions</button>
																<ul class='dropdown-menu'>
																	
																	<li>
																		<form method='POST' action='job_post_application/backend_application.php'>
																			<input type='hidden' name='approve_job_post' value='1'>
																			<input type='hidden' name='application_id' value='" . $row["ApplicationID"] . "'>
																			<button type='submit' class='dropdown-item'>Approve</button>
																		</form>
																	</li>

																	<li>
																		<form method='POST' action='job_post_application/backend_application.php'>
																			<input type='hidden' name='waiting_job_post' value='1'>
																			<input type='hidden' name='application_id' value='" . $row["ApplicationID"] . "'>
																			<button type='submit' class='dropdown-item'>Wating</button>
																		</form>
																	</li>
																	<li>
																		<form method='POST' action='job_post_application/backend_application.php'>
																			<input type='hidden' name='reject_job_post' value='1'>
																			<input type='hidden' name='application_id' value='" . $row["ApplicationID"] . "'>
																			<button type='submit' class='dropdown-item'>Reject</button>
																		</form>
																	</li>
																</ul>
															</div>
														</td>";
												echo '</tr>';
												}
											} else {
												
											}

											// Close the connection
											
											?>
											<!--end::Table row-->
										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
								</div>
								<!--end::Card body-->
								<!--begin::Body-->
							</div>