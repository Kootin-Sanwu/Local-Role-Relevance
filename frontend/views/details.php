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
  <link rel="stylesheet" href="../css/details.css">

  <title>Job Roles Form</title>
</head>
<body>
  <div class="job-card">
    <h1>Job Roles Submission</h1>
    <p>Enter the details of available job roles in your organization.</p>
    <form action="http://localhost:8080/actions/details.php" method="POST" class="job-form">
      <div class="job-card-inputs">

        <div class="job-entry">
          <label for="job-title-1">Role Title</label>
          <input type="text" id="job-title-1" name="job_title[]" list="job-titles" required>
          <datalist id="job-titles"></datalist>

          <button type="button" style="display:none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" 
                 viewBox="0 0 36 36" fill="none" stroke="currentColor" 
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </button>
        </div>

      </div>

      <button type="button" id="add-job" class="icon-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
             viewBox="0 0 24 24" fill="none" stroke="currentColor" 
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"></circle>
          <line x1="12" y1="8" x2="12" y2="16"></line>
          <line x1="8" y1="12" x2="16" y2="12"></line>
        </svg>
      </button>

      <!-- <button type="submit">Submit</button> -->
      <button type="submit">
        <i class="fas fa-paper-plane"></i>
      </button>
    </form>
  </div>
  <script src="../javascript/job_roles.js" defer></script>
  <script src="../javascript/alerts.js" defer></script>
  <script src="../javascript/search.js" defer></script>
</body>
</html>
