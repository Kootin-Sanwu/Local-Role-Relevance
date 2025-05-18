<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
  <link rel="manifest" href="../favicon_io/site.webmanifest">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="stylesheet" href="../css/subject.css">
  <title>Job Roles Form</title>
</head>
<body>
<div class="job-card">
    <h1>Organisation's Details</h1>
    <p>Enter the details of available job roles in your organization.</p>
    <form action="http://localhost:8080/actions/subject.php" method="POST" class="job-form">
      <div class="job-card-inputs">
        <label for="org-name">Organization Name</label>
        <input type="text" id="org-name" name="organization_name" required>

        <label for="org-description">Describe the organization's Current Priority</label>
        <label>(Optional – Strongly Recommended)</label>
        <textarea id="org-description" name="organization_description" rows="4" required></textarea>

      </div>
      <!-- <button type="submit">Submit</button> -->
      <button type="submit">
        <i class="fas fa-paper-plane"></i>
      </button>
    </form>
  </div>
  <script src="../javascript/alerts.js" defer></script>
</body>
</html>
