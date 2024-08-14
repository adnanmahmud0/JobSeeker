<?php
include '..\db_connect\db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["add_event_data"])) {
    // Retrieve form data
    $event_id = date("YmdHis");
    $event_name = $_GET["add_event_name"];
    $event_description = $_GET["add_event_description"];
    $organizer_name = $_GET["add_website_link"];
    $event_location = $_GET["add_event_location"];
    $starting_date = $_GET["starting_date"];
    $ending_date = $_GET["ending_date"];
    $social_link = $_GET["add_social_link"];
    $banner_path = "banner"; // Set this to the path where the banner is stored (you may need to handle file upload separately)
    $status = $_GET["add_status"];

    // Prepare SQL statement
    $sql = "INSERT INTO Events (event_id, event_name, event_description, organizer_name, event_location, start_date, end_date, social_link, banner_path, status)
    VALUES ('$event_id','$event_name', '$event_description', '$organizer_name', '$event_location', '$starting_date', '$ending_date', '$social_link', '$banner_path', '$status')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        header("Location: event_list.php"); 
    } else {
        header("Location: add_event.php"); 
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_event_data'])) {
    // Include database connection here
    // Example: include_once("db_connection.php");
    
    // Get form data
    $event_id = $_POST['event_id'];
    $event_name = $_POST['event_name'];
    $event_description = $_POST['event_description'];
    $organizer_name = $_POST['organizer_name'];
    $event_location = $_POST['event_location'];
    $starting_date = $_POST['starting_date'];
    $ending_date = $_POST['ending_date'];
    $social_link = $_POST['Edit_social_link'];
    $status = $_POST['Edit_status'];
    // Assuming you have a field for event_id in your form, adjust if necessary
    $event_id = $_POST['event_id']; 

    // Perform update query
    $sql = "UPDATE events SET 
            event_name = ?,
            event_description = ?,
            organizer_name = ?,
            event_location = ?,
            start_date = ?,
            end_date = ?,
            social_link = ?,
            status = ?
            WHERE event_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $event_name, $event_description, $organizer_name, $event_location, $starting_date, $ending_date, $social_link, $status, $event_id);
    $stmt->execute();

    // Close statement and database connection
    $stmt->close();
    $conn->close();

    // Redirect back to the edit page with success message or any desired page
    header("Location: event_list.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_event_data"])){
    if(isset($_POST['event_id'])) {
        // Get event_id from POST data
        $event_id = $_POST['event_id'];

        // Prepare and execute the SQL query to delete the event record
        $sql = "DELETE FROM events WHERE event_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $event_id); // Assuming event_id is an integer, adjust if necessary
        $stmt->execute();

        // Close the prepared statement and database connection
        $stmt->close();
        $conn->close();

        // Redirect to a new page after deletion
        header("Location: event_list.php"); // Change "event.php" to the desired page
        exit(); // Ensure that no further code is executed after redirection
    } else {
        // If event_id is not set in POST request, redirect back to the previous page or show an error message
        header("Location: event_list.php"); // Change "event.php" to the desired page
        exit(); // Ensure that no further code is executed after redirection
    }
}

?>