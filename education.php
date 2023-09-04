<!-- portfolio/education.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css"> <!-- Adjust the path to your CSS file -->
  <title>Education</title>
  <style>
    /* CSS for the education container */
    .education-container {
      text-align: center;
      padding: 20px;
      position: relative; /* Add relative positioning for animation */
    }

    /* CSS for the education list */
    .education-list {
      list-style-type: none;
      padding: 0;
    }

    /* Style individual education items */
    .education-item {
      background-color: white; /* Item background color */
      color: black; /* Text color */
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      margin: 10px 0;
      border: 2.5px solid transparent; /* Transparent border */
      border-image: linear-gradient(to right, #3498db, #e74c3c, #f39c12, #27ae60); /* Border gradient */
      border-image-slice: 1; /* Ensure the border image covers the entire border */
      animation: border-color-change 0.5s infinite alternate; /* Border color change animation */
    }

    /* Keyframes for the border color change animation */
    @keyframes border-color-change {
      0% {
        border-image-source: linear-gradient(to right, #3498db, #e74c3c, #f39c12, #27ae60);
      }
      25% {
        border-image-source: linear-gradient(to right, #e74c3c, #f39c12, #27ae60, #3498db);
      }
      50% {
        border-image-source: linear-gradient(to right, #f39c12, #27ae60, #3498db, #e74c3c);
      }
      75% {
        border-image-source: linear-gradient(to right, #27ae60, #3498db, #e74c3c, #f39c12);
      }
      100% {
        border-image-source: linear-gradient(to right, #3498db, #e74c3c, #f39c12, #27ae60);
      }
    }
  </style>
</head>
<body>
  <div class="education-container">
    <ul class="education-list">
      <li class="education-item">
        <strong>Jeevan Matric Higher Secondary School (2018)</strong><br>
        SSLC (10th Grade)<br>
        Percentage: 94%
      </li>
      <li class="education-item">
        <strong>Jeevan Matric Higher Secondary School (2020)</strong><br>
        HSC (12th Grade)<br>
        Percentage: 85%
      </li>
      <li class="education-item">
        <strong>Karpagam Institute of Technology (2020 - 2024)</strong><br>
        B.E. Computer Science Engineering<br>
        CGPA: 8.55
      </li>
      <!-- Add more education items as needed -->
    </ul>
  </div>
</body>
</html>
