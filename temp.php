<?php 
// Database connection 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "jobseeker_admin"; 
 
// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
 
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
 
// Process add_company_data 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["add_company_data"])) { 
     
    $add_company_name = $_GET["add_company_name"]; 
    $add_company_description = $_GET["add_company_description"]; 
    $add_website_link = $_GET["add_website_link"]; 
    $add_company_location = $_GET["add_company_location"]; 
    $add_social_link = $_GET["add_social_link"]; 
    $add_status = $_GET["add_status"];
 
    // SQL Process form submission 
    $sql = "INSERT INTO companies (company_name, company_description, website_link, company_location, social_link, status)  
            VALUES ('$add_company_name', '$add_company_description', '$add_website_link', '$add_company_location', '$add_social_link', '$add_status')"; 
 
    if ($conn->query($sql) === TRUE) { 
        echo "New record created successfully"; 
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error; 
    } 
} 
 
 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit_company_data"])) { 
    // Retrieve form data for the second form 
    $edit_company_name = $_POST["edit_company_name"]; 
    $edit_company_description = $_POST["edit_company_description"]; 
    $edit_website_link = $_POST["edit_website_link"]; 
    $edit_company_location = $_POST["edit_company_location"]; 
    $edit_social_link = $_POST["edit_social_link"]; 
    $edit_status = $_POST["edit_status"]; 
    

        // Prepare SQL statement to fetch existing data
        $sql = "SELECT * FROM companes WHERE id=1"; // Replace '1' with the ID of the record you want to edit

        // Execute SQL statement to fetch existing data
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                // Assign existing data to variables
                $existingCompanyName = $row["company_name"];
                $existingCompanyDescription = $row["company_description"];
                $existingWebsiteLink = $row["website_link"];
                $existingCompanyLocation = $row["company_location"];
                $existingSocialLink = $row["social_link"];
                $existingStatus = $row["status"];
    
                // Output existing data in the form fields
                echo "<script>
                        document.getElementById('edit_company_name').value = '$existingCompanyName';
                        document.getElementById('edit_company_description').value = '$existingCompanyDescription';
                        document.getElementById('edit_website_link').value = '$existingWebsiteLink';
                        document.getElementById('edit_company_location').value = '$existingCompanyLocation';
                        document.getElementById('edit_socal_link').value = '$existingSocialLink';
                        document.getElementById('edit_status').value = '$existingStatus';
                      </script>";
            }
        } else {
            echo "0 results";
        }


    // Prepare SQL statement to update existing data 
    $sql = "UPDATE companies SET company_name='$edit_company_name', company_description='$edit_company_description',  
            website_link='$edit_website_link', company_location='$edit_company_location', social_link='$edit_social_link',  
            status='$edit_status' WHERE id=1"; // Replace '1' with the ID of the record you want to edit 
 
    if ($conn->query($sql) === TRUE) { 
        echo "Record updated successfully"; 
    } else { 
        echo "Error updating record: " . $conn->error; 
    } 
} 
 
// Close connection 
$conn->close(); 



?>