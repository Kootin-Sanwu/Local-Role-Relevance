<?php
if (isset($_COOKIE['organization_name']) && isset($_COOKIE['organization_id']) && isset($_COOKIE['organization_email'])) {
    $organizationName = $_COOKIE['organization_name'];
    $organizationID = $_COOKIE['organization_id'];
    $organizationEmail = $_COOKIE['organization_email'];
    
    // Sanitize cookie values to prevent XSS
    $organizationName = htmlspecialchars($organizationName, ENT_QUOTES, 'UTF-8');
    $organizationID = htmlspecialchars($organizationID, ENT_QUOTES, 'UTF-8');
    $organizationEmail = htmlspecialchars($organizationEmail, ENT_QUOTES, 'UTF-8');
    
    // Set session variables
    $_SESSION['organization_name'] = $organizationName;
    $_SESSION['organization_id'] = $organizationID;
    $_SESSION['organization_email'] = $organizationEmail;

    // Redirect to the organization metrics page
    // Use the sanitized organization name in the URL
    header("Location: http://localhost:3000/views/org-metrics.php?organization_name=$organizationName");
    exit();
} else {
    header("Location: http://localhost:3000/views/gen-metrics.php");
    exit();
}
?>
