<!-- portfolio/interests.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css"> <!-- Adjust the path to your CSS file -->
  <title>Area of Interest</title>
  <style>
    /* CSS for the interests container */
    .interests-container {
      text-align: center;
      padding: 20px;
      position: relative; /* Add relative positioning for animation */
    }

    /* CSS for the interests list */
    .interests-list {
      list-style-type: none;
      padding: 0;
    }

    /* Style individual interests */
    .interest-item {
      background-color: white; /* Interest background color */
      color: black; /* Text color */
      padding: 5px 10px;
      border-radius: 5px;
      font-weight: bold;
      margin: 5px;
      display: inline-block;
      border: 2.5px solid transparent; /* Transparent border */
      border-image: linear-gradient(to right, #3498db, #e74c3c, #f39c12, #27ae60); /* Border gradient */
      border-image-slice: 8; /* Ensure the border image covers the entire border */
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
  <div class="interests-container">
    <ul class="interests-list">
      <li class="interest-item">Web Development</li>
      <li class="interest-item">App Development</li>
      <!-- Add more interests as needed -->
    </ul>
  </div>
</body>
</html>

