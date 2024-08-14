<?php 
include '../db_connect/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["approve_job_post"])){
    if(isset($_POST['application_id'])) {
        // Get application_id from POST data
        $application_id = $_POST['application_id'];

        // Prepare and execute the SQL query to update the condition
        $sql = "UPDATE applications SET `condition`='Approved' WHERE ApplicationID = ?";
        $stmt = $conn->prepare($sql);
        
        // Bind the parameter
        $stmt->bind_param("i", $application_id); // Assuming ApplicationID is an integer
        
        // Execute the statement
        if ($stmt->execute()) {
            // Close the prepared statement and database connection
            $stmt->close();
            $conn->close();

            // Redirect to a new page after successful update
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=success");
            exit(); // Ensure that no further code is executed after redirection
        } else {
            // Handle SQL execution error
            // You might want to log the error or show an error message
            // For now, redirect back to the previous page
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=error");
            exit(); // Ensure that no further code is executed after redirection
        }
    } else {
        // If application_id is not set in POST request, redirect back to the previous page or show an error message
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=error");
        exit(); // Ensure that no further code is executed after redirection
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["waiting_job_post"])){
    if(isset($_POST['application_id'])) {
        // Get application_id from POST data
        $application_id = $_POST['application_id'];

        // Prepare and execute the SQL query to update the condition
        $sql = "UPDATE applications SET `condition`='Waiting' WHERE ApplicationID= ?";
        $stmt = $conn->prepare($sql);
        
        // Bind the parameter
        $stmt->bind_param("i", $application_id); // Assuming ApplicationID is an integer
        
        // Execute the statement
        if ($stmt->execute()) {
            // Close the prepared statement and database connection
            $stmt->close();
            $conn->close();

            // Redirect to a new page after successful update
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=success");
            exit(); // Ensure that no further code is executed after redirection
        } else {
            // Handle SQL execution error
            // You might want to log the error or show an error message
            // For now, redirect back to the previous page
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=error");
            exit(); // Ensure that no further code is executed after redirection
        }
    } else {
        // If application_id is not set in POST request, redirect back to the previous page or show an error message
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=error");
        exit(); // Ensure that no further code is executed after redirection
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reject_job_post"])){
    if(isset($_POST['application_id'])) {
        // Get application_id from POST data
        $application_id = $_POST['application_id'];

        // Prepare and execute the SQL query to update the condition
        $sql = "UPDATE applications SET `condition`='Rejected' WHERE ApplicationID= ?";
        $stmt = $conn->prepare($sql);
        
        // Bind the parameter
        $stmt->bind_param("i", $application_id); // Assuming ApplicationID is an integer
        
        // Execute the statement
        if ($stmt->execute()) {
            // Close the prepared statement and database connection
            $stmt->close();
            $conn->close();

            // Redirect to a new page after successful update
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=success");
            exit(); // Ensure that no further code is executed after redirection
        } else {
            // Handle SQL execution error
            // You might want to log the error or show an error message
            // For now, redirect back to the previous page
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=error");
            exit(); // Ensure that no further code is executed after redirection
        }
    } else {
        // If application_id is not set in POST request, redirect back to the previous page or show an error message
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=error");
        exit(); // Ensure that no further code is executed after redirection
    }
}





// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["set_quiz"])) {
    // Retrieve form data
    $job_id = $_GET['job_id'];
    $quiz_id = $_GET['set_quiz']; 
    $start_date = $_GET['start_date'];
    $end_date = $_GET['end_date'];
    $start_time = $_GET['start_time'];
    $end_time = $_GET['end_time'];


    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO set_quiz (job_id, test_id, start_date, end_date, start_time, end_time) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $job_id, $quiz_id, $start_date, $end_date, $start_time, $end_time);

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_set_quiz'])) {
    // Get form data
    $job_id = $_POST['job_id'];
    $test_id = $_POST['set_quiz'];  // Quiz ID
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    // SQL query to update the set_quiz table
    $sql = "UPDATE set_quiz SET 
            test_id = ?, 
            start_date = ?, 
            end_date = ?, 
            start_time = ?, 
            end_time = ? 
            WHERE job_id = ?";
    
    // Prepare and execute the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $test_id, $start_date, $end_date, $start_time, $end_time, $job_id);
    $stmt->execute();

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect back or to another page
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();  // End the script to ensure no further code is executed
} else {
    // Invalid request or missing required data
    header("Location: " . $_SERVER['HTTP_REFERER']);
}

  

?>