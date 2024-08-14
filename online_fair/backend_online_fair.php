<?php 
include '..\db_connect\db_connect.php';
 
// Process add_company_data 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["add_online_fair_data"])) { 
    $online_fair_id = date("YmdHis");
    $online_fair_name = $_GET["online_fair_name"]; 
    $online_fair_description = $_GET["online_fair_description"]; 
    $start_date = $_GET["start_date"]; 
    $end_date = $_GET["end_date"];
    $add_social_link = $_GET["add_social_link"]; 
    $banner_image = $_GET["banner_image"]; 
    $add_status = $_GET["add_status"];

    // echo "Status: " . $add_status;
 
    // SQL Process form submission 
    $sql = "INSERT INTO online_fair (online_fair_id, online_fair_name, online_fair_description, start_date, end_date, social_link, banner_image, status)  
            VALUES ('$online_fair_id', '$online_fair_name', '$online_fair_description', '$start_date', '$end_date', '$add_social_link','$banner_image', '$add_status')"; 

    if ($conn->query($sql) === TRUE) { 
        header("Location: online_fair_list.php"); 
        //echo "SuccessFully insert";
    } else { 
        header("Location: create_online_fair.php"); 
        //echo "UnSuccessFully insert data";
    } 
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_online_fair_data"])){
    if(isset($_POST['online_fair_id'])) {
        // Get online_fair_id from POST data
        $online_fair_id = $_POST['online_fair_id'];

        // Prepare and execute the SQL query to delete the company record
        $sql = "DELETE FROM online_fair WHERE online_fair_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $online_fair_id);
        $stmt->execute();

        // Close the prepared statement and database connection
        $stmt->close();
        $conn->close();

        // Redirect to a new page after deletion
        header("Location: online_fair_list.php"); // Change "new_page.php" to the desired page
        exit(); // Ensure that no further code is executed after redirection
    } else {
        // If online_fair_id is not set in POST request, redirect back to the previous page or show an error message
        header("Location: dashboard.php"); // Change "previous_page.php" to the desired page
        exit(); // Ensure that no further code is executed after redirection
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_online_fair_company_data"])){
    if(isset($_POST['company_id']) && isset($_POST['online_fair_id'])) {
        // Get online_fair_company_id from POST data
        $online_fair_id = $_POST['online_fair_id'];
        $company_id = $_POST['company_id'];

        // Prepare and execute the SQL query to delete the company record
        $sql = "DELETE FROM online_fair_allocate_company WHERE online_fair_id=? AND company_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $online_fair_id, $company_id);
        $stmt->execute();

        // Close the prepared statement and database connection
        $stmt->close();
        $conn->close();
        
        // Redirect to a new page after deletion
        header("Location: view_online_fair_companies.php?online_fair_id=" . $online_fair_id. "&success=1"); // Change "new_page.php" to the desired page
        exit(); // Ensure that no further code is executed after redirection
    } else {
        // If online_fair_id is not set in POST request, redirect back to the previous page or show an error message
        header("Location: dashboard.php"); // Change "previous_page.php" to the desired page
        exit(); // Ensure that no further code is executed after redirection
    }
}
 

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["edit_online_fair_data"])) {
    // Retrieve online fair details from the form
    $online_fair_id = $_GET["online_fair_id"];
    $online_fair_name = $_GET["online_fair_name"]; 
    $online_fair_description = $_GET["online_fair_description"]; 
    $start_date = $_GET["start_date"]; 
    $end_date = $_GET["end_date"];
    $add_social_link = $_GET["add_social_link"]; 
    $banner_image = $_GET["banner_image"]; 
    $add_status = $_GET["add_status"];

    // SQL Process form submission to update job details
    $sql = "UPDATE online_fair 
            SET online_fair_name = '$online_fair_name', 
                online_fair_description = '$online_fair_description', 
                start_date = '$start_date', 
                end_date = '$end_date', 
                social_link = '$add_social_link', 
                banner_image = '$banner_image', 
                status = '$add_status'
            WHERE online_fair_id = '$online_fair_id'"; 

    if ($conn->query($sql) === TRUE) {
        header("Location: online_fair_list.php?online_fair_id=" . $online_fair_id. "&success=1"); // Redirect after successful update
    } else {
        // Handle error case
        header("Location: edit_online_fair.php?online_fair_id=" . $online_fair_id . "&error=1"); // Redirect after unsuccessful update
    }
}
// allocation company
//include '../db_connect/db_connect.php';

// Check if both online fair ID and company ID are set in the URL
if (isset($_GET['online_fair_id']) && isset($_GET['company_id'])) {
    // Retrieve the values from the URL
    $online_fair_id = $_GET['online_fair_id'];
    $company_id = $_GET['company_id'];

    // Check if the combination of online fair ID and company ID already exists
    $check_sql = "SELECT * FROM online_fair_allocate_company WHERE online_fair_id = '$online_fair_id' AND company_id = '$company_id'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // If a record with the same combination exists, redirect back with a message
        header("Location: online_fair_apply_company.php?online_fair_id=".$online_fair_id."&error=Duplicate Company!");
        exit();
    } else {
        // If the combination does not exist, proceed with insertion
        $sql = "INSERT INTO online_fair_allocate_company (online_fair_id, company_id)  
                VALUES ('$online_fair_id', '$company_id')"; 

        // Perform the SQL query
        if ($conn->query($sql) === TRUE) { 
            // If insertion is successful, redirect to online fair apply company page
            header("Location: online_fair_apply_company.php?online_fair_id=".$online_fair_id."&success=Company add Successful.."); 
            exit(); // Exit to prevent further execution
        } else { 
            // If insertion fails, redirect back to the view online fair companies page with an error message
            header("Location: view_online_fair_companies.php?error=insert_failed"); 
            exit(); // Exit to prevent further execution
        } 
    }
} else {
    // Handle the case where one or both parameters are missing
    echo "Online fair ID or company ID is missing.";
}
// allocation company 

// Close connection 
$conn->close(); 
?>