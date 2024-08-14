<?php 
include '..\db_connect\db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["add_test"])) {


    // Retrieve data from the GET request
    $test_id = date("YmdHis");
    $test_name = $_GET["test_name"];
    $test_details = $_GET["test_details"];
    $subject = $_GET["subject"];
    $duration = $_GET["duration"];

    // SQL to insert data into the database
    $sql = "INSERT INTO tests (test_id, test_name, test_details, subject, duration)  
            VALUES ('$test_id', '$test_name', '$test_details', '$subject', '$duration')";

    // Check if the insertion was successful
    if ($conn->query($sql) === TRUE) {
        // Redirect to a success page
        header("Location: test.php");
    } else {
        // Redirect to a failure page
        header("Location: test.php");
    }

    // Close the connection
    $conn->close();
}




// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_test'])) {
    // Include database connection here

    // Get form data
    $test_id = $_POST['test_id'];
    $test_name = $_POST['test_name'];
    $test_details = $_POST['test_details'];
    $subject = $_POST['subject'];
    $duration = $_POST['duration'];
    $test_id = $_POST['test_id']; // Assuming you have a field for test_id in your form

    // Perform update query
    $sql = "UPDATE tests SET 
            test_name = ?,
            test_details = ?,
            subject = ?,
            duration = ?
            WHERE test_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $test_name, $test_details, $subject, $duration, $test_id);
    $stmt->execute();

    // Close statement and database connection
    $stmt->close();
    $conn->close();

    // Redirect back to the edit page with success message or any desired page
    header("Location: test.php?test_id=" . $_POST['test_id'] . "&success=1");
    exit();
}




// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_test_data"])) {


    // Get the ID from the form data
    $test_id = $_POST['test_id']; // Assuming there's an input with name "test_id" in your form

    // Prepare an SQL statement to delete the record
    $sql = "DELETE FROM tests WHERE test_id = '$test_id'";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        header("Location: test.php"); // Change "new_page.php" to the desired page
    } else {
        header("Location: edit-test.php"); // Change "new_page.php" to the desired page
    }

    // Close the database connection
    $conn->close();
}


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["add_question"])) {
    // Retrieve data from the POST request
    $test_id = $_GET["test_id"];
    $question = $_GET["question"];
    $optionA = $_GET["optionA"];
    $optionB = $_GET["optionB"];
    $optionC = $_GET["optionC"];
    $optionD = $_GET["optionD"];
    $answer = $_GET["ans"]; // Assuming only one correct answer is allowed



    // SQL to insert data into the database
    $sql = "INSERT INTO questions (test_id, question, optionA, optionB, optionC, optionD, answer)  
            VALUES ('$test_id', '$question', '$optionA', '$optionB', '$optionC', '$optionD', '$answer')";

    // Check if the insertion was successful
    if ($conn->query($sql) === TRUE) {
        // Redirect to a success page or do something else
        header("Location: question.php?test_id=" . $test_id . "&success=1");
        exit();
    } else {
        // Redirect to a failure page or do something else
        header("Location: question.php?test_id=" . $test_id . "&success=1");
        exit();
    }

    // Close the connection
    $conn->close();
}


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_question_data"])) {


    // Get the ID from the form data
    $question_id = $_POST['question_id']; // Assuming there's an input with name "test_id" in your form

    // Prepare an SQL statement to delete the record
    $sql = "DELETE FROM questions WHERE question_id = '$question_id'";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        header("Location: " . $_SERVER['HTTP_REFERER']); // Change "new_page.php" to the desired page
    } else {
        header("Location: " . $_SERVER['HTTP_REFERER']); // Change "new_page.php" to the desired page
    }

    // Close the database connection
    $conn->close();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_question'])) {
    // Include database connection here (make sure it's open and connected)
    include('your_connection_file.php'); // Modify as needed

    // Get form data
    $question_id = $_POST['question_id'];
    $question = $_POST['question'];
    $optionA = $_POST['optionA'];
    $optionB = $_POST['optionB'];
    $optionC = $_POST['optionC'];
    $optionD = $_POST['optionD'];
    $answer = $_POST['ans']; 

    // Prepare update query with parameterized placeholders
    $sql = "UPDATE questions SET 
            question = ?, 
            optionA = ?, 
            optionB = ?, 
            optionC = ?, 
            optionD = ?, 
            answer = ? 
            WHERE question_id = ?";
    
    $stmt = $conn->prepare($sql);

    // Bind parameters to prevent SQL injection
    $stmt->bind_param("ssssssi", $question, $optionA, $optionB, $optionC, $optionD, $answer, $question_id);

    // Execute the query
    if ($stmt->execute()) {
        // If execution is successful, redirect with success message
        header("Location: question.php?test_id=" . $_POST['test_id'] . "&success=1");
    } else {
        // If execution fails, log the error and redirect with failure message
        error_log("Error updating question: " . $stmt->error); // For debugging
        header("Location: question.php?test_id=" . $_POST['test_id'] . "&success=0");
    }

    $stmt->close(); // Close statement
    $conn->close(); // Close connection

    exit();
}
?>


?>
