<?php
include '..\db_connect\db_connect.php';

// create online job post PHP Code
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["create_job_post"])) {

    $online_fair_job_id = date("YmdHis");
    $online_fair_id = $_GET["online_fair_id"];
    $job_title = $_GET["jobTitle"];
    $company_id = $_GET["company_id"];
    $workplace_type = $_GET["workplaceType"];
    $job_type = $_GET["jobType"];
    $salary = $_GET["salary"];
    $job_description = $_GET["jobDescription"];
    $job_responsibilities = $_GET["jobResponsibilites"];
    $job_requirement = $_GET["jobRequirement"];
    $additional_requirement = $_GET["additionalRequirement"];
    $vacancies = $_GET["vacancies"];
    $employment_type = $_GET["employmentType"];
    $gender = $_GET["gender"];
    $experience = $_GET["experience"];
    $benefits = $_GET["benifits"];
    $deadline = $_GET["deadline"];
    $publish_status = $_GET["add_publish_status"];
    $read_before_apply = $_GET["readBeforeApply"];
    $location = $_GET["location"];
    $additional_info = $_GET["additional_info"];
    $education = $_GET["education"];
    $quiz = $_GET["quiz"];
    $online_interview = $_GET["online_interview"];
    $offline_interview = $_GET["offline_interview"];

    // SQL Process form submission
    $sql = "INSERT INTO online_fair_job_posts (online_fair_job_id, online_fair_id, company_id, job_title, workplace_type, location, education_level, job_type, salary, job_description, job_responsibilities, job_requirement, additional_requirement, vacancies, employment_type, gender, experience, benefits, deadline, publish_status, read_before_apply, quiz, online_interview, offline_interview, additional_info)  
    VALUES ('$online_fair_job_id', '$online_fair_id', '$company_id', '$job_title', '$workplace_type', '$location', '$education', '$job_type', '$salary', '$job_description', '$job_responsibilities', '$job_requirement', '$additional_requirement', '$vacancies', '$employment_type', '$gender', '$experience', '$benefits', '$deadline', '$publish_status', '$read_before_apply', '$quiz', '$online_interview', '$offline_interview', '$additional_info')";

    if ($conn->query($sql) === TRUE) {
        header("Location: online_fair_job_post_list.php?online_fair_id=".$online_fair_id."&company_id=".$company_id);
        exit(); // Exit to prevent further execution
    } else {
        header("Location: deshboard.php");
        exit(); // Exit to prevent further execution
    }
} 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_job_post_data"])){
    if(isset($_POST['job_id'])) {
        // Get company_id from POST data
        $job_id = $_POST['job_id'];

        // Prepare and execute the SQL query to delete the company record
        $sql = "DELETE FROM job_posts WHERE job_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $job_id);
        $stmt->execute();

        // Close the prepared statement and database connection
        $stmt->close();
        $conn->close();

        // Redirect to a new page after deletion
        header("Location: job_post_list.php"); // Change "new_page.php" to the desired page
        exit(); // Ensure that no further code is executed after redirection
    } else {
        // If company_id is not set in POST request, redirect back to the previous page or show an error message
        header("Location: job_post_list.php"); // Change "previous_page.php" to the desired page
        exit(); // Ensure that no further code is executed after redirection
    }
}
 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["edit_job_post"])) {
    // Retrieve job details from the form
    $job_id = $_GET["job_id"]; // Assuming job_id is passed via GET parameter
    $job_title = $_GET["jobTitle"];
    $company_id = $_GET["add_company_name"];
    $workplace_type = $_GET["workplaceType"];
    $job_type = $_GET["jobType"];
    $salary = $_GET["salary"];
    $job_description = $_GET["jobDescription"];
    $job_responsibilities = $_GET["jobResponsibilites"];
    $job_requirement = $_GET["jobRequirement"];
    $additional_requirement = $_GET["additionalRequirement"];
    $vacancies = $_GET["vacancies"];
    $employment_type = $_GET["employmentType"];
    $gender = $_GET["gender"];
    $experience = $_GET["experience"];
    $benefits = $_GET["benifits"];
    $deadline = $_GET["deadline"];
    $publish_status = $_GET["publish_status"];
    $read_before_apply = $_GET["readBeforeApply"];
    $location = $_GET["location"];
    $education = $_GET["education"];
    $additional_info = $_GET["additional_info"];
    $quiz = isset($_GET["quiz"]) ? 1 : 0;
    $online_interview = isset($_GET["online_interview"]) ? 1 : 0;
    $offline_interview = isset($_GET["offline_interview"]) ? 1 : 0;

    // SQL Process form submission to update job details
    $sql = "UPDATE job_posts SET 
            job_title='$job_title', 
            company_id='$company_id', 
            workplace_type='$workplace_type', 
            job_type='$job_type', 
            salary='$salary', 
            job_description='$job_description', 
            job_responsibilities='$job_responsibilities', 
            job_requirement='$job_requirement', 
            additional_requirement='$additional_requirement', 
            vacancies='$vacancies', 
            employment_type='$employment_type', 
            gender='$gender', 
            experience='$experience', 
            benefits='$benefits', 
            deadline='$deadline', 
            publish_status='$publish_status', 
            read_before_apply='$read_before_apply',
            location='$location',
            education='$education',
            additional_info='$additional_info'
            quiz='$quiz',
            online_interview='$online_interview',
            offline_interview='$offline_interview'
            WHERE job_id='$job_id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: edit-job_post.php?job_id=" . $_GET["job_id"] . "&success=1"); // Redirect after successful update
    } else {
        // Handle error case
        header("Location: edit-job_post.php?job_id=" . $_GET["job_id"] . "&success=1"); // Redirect after successful update
    }
}

?>