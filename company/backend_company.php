<?php 
include '..\db_connect\db_connect.php';
 
// Process add_company_data 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["add_company_data"])) { 
    $company_id = date("YmdHis");
    $add_company_name = $_GET["add_company_name"]; 
    $add_company_description = $_GET["add_company_description"]; 
    $add_website_link = $_GET["add_website_link"]; 
    $add_company_type = $_GET["add_company_type"];
    $add_company_location = $_GET["add_company_location"]; 
    $add_social_link = $_GET["add_social_link"]; 
    $add_status = $_GET["add_status"];


 
    // SQL Process form submission 
    $sql = "INSERT INTO companies (company_id, company_name, company_description, company_type, website_link, company_location, social_link, status)  
            VALUES ('$company_id', '$add_company_name', '$add_company_description', '$add_company_type', '$add_website_link', '$add_company_location', '$add_social_link', '$add_status')"; 

    if ($conn->query($sql) === TRUE) { 
        header("Location: company.php"); 
    } else { 
        header("Location: add_company.php"); 
    } 
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_company_data"])){
    if(isset($_POST['company_id'])) {
        // Get company_id from POST data
        $company_id = $_POST['company_id'];

        // Prepare and execute the SQL query to delete the company record
        $sql = "DELETE FROM companies WHERE company_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $company_id);
        $stmt->execute();

        // Close the prepared statement and database connection
        $stmt->close();
        $conn->close();

        // Redirect to a new page after deletion
        header("Location: company.php"); // Change "new_page.php" to the desired page
        exit(); // Ensure that no further code is executed after redirection
    } else {
        // If company_id is not set in POST request, redirect back to the previous page or show an error message
        header("Location: company.php"); // Change "previous_page.php" to the desired page
        exit(); // Ensure that no further code is executed after redirection
    }
}
 

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_company_data'])) {
    // Check if form data for editing company is set
        // Include database connection


        // Get form data
        $edit_company_name = $_POST['edit_company_name'];
        $edit_company_description = $_POST['edit_company_description'];
        $edit_website_link = $_POST['edit_website_link'];
        $edit_company_location = $_POST['edit_company_location'];
        $edit_company_type = $_POST['edit_company_type'];
        $edit_social_link = $_POST['edit_social_link'];
        $edit_status = $_POST['edit_status']; // Assuming you have a field for status, adjust if necessary
        $company_id = $_POST['company_id']; // Get the company_id from the form

        // Perform update query
        $sql = "UPDATE companies SET 
                company_name = ?,
                company_description = ?,
                website_link = ?,
                company_location = ?,
                company_type = ?,
                social_link = ?,
                status = ?
                WHERE company_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssi", $edit_company_name, $edit_company_description, $edit_website_link, $edit_company_location, $edit_company_type, $edit_social_link, $edit_status, $company_id);
        $stmt->execute();

        // Close statement and database connection
        $stmt->close();
        $conn->close();

        // Redirect back to the edit page with success message or any desired page
        header("Location: edit-company.php?company_id=" . $_POST['company_id'] . "&success=1");
        exit();
    
}


 
// Close connection 
$conn->close(); 



?>