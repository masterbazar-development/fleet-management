<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $title = $_POST['title'];
    $companyName = $_POST['companyNameStep2'];
    $industry = $_POST['industryStep2'];
    $question = $_POST['questionStep2'];
    $fleetSize = $_POST['fleetSizeStep2'];
    $option1 = isset($_POST['option1']) ? $_POST['option1'] : '';
    $option2 = isset($_POST['option2']) ? $_POST['option2'] : '';
    $option3 = isset($_POST['option3']) ? $_POST['option3'] : '';
    $additional1 = $_POST['additional1'];
    $additional2 = $_POST['additional2'];
    $additional3 = $_POST['additional3'];
    $email = $_POST['emailStep5'];
    $phone = $_POST['phoneStep5'];
    $hearAboutUs = $_POST['hearAboutUsStep5'];

    // Compose the email message
    $to = "karan.masterbazar@gmail.com"; // Change to your email address
    $subject = "Form Submission";
    $message = "First Name: $firstName\n";
    $message .= "Last Name: $lastName\n";
    $message .= "Title: $title\n";
    $message .= "Company Name: $companyName\n";
    $message .= "Industry: $industry\n";
    $message .= "Question: $question\n";
    $message .= "Fleet Size: $fleetSize\n";
    $message .= "Options selected: $option1, $option2, $option3\n";
    $message .= "Additional 1: $additional1\n";
    $message .= "Additional 2: $additional2\n";
    $message .= "Additional 3: $additional3\n";
    $message .= "Email: $email\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Heard about us from: $hearAboutUs\n";

    // Set additional headers if needed
    // $headers = 'From: webmaster@example.com' . "\r\n" .
    //     'Reply-To: webmaster@example.com' . "\r\n" .
    //     'X-Mailer: PHP/' . phpversion();

    // Send the email
    if (mail($to, $subject, $message)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
