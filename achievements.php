<!-- portfolio/achievements.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css"> <!-- Adjust the path to your CSS file -->
  <title>Achievements</title>
  <style>
    /* CSS for the achievements container */
    .achievements-container {
      text-align: center;
      padding: 20px;
      position: relative; /* Add relative positioning for animation */
    }

    /* CSS for the achievement item */
    .achievement-item {
      background-color:white; /* Achievement background color */
      color: black; /* Text color */
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      margin: 10px auto; /* Center-align the achievements */
      width: 80%; /* Adjust the width as needed */
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
  <div class="achievements-container">
    <div class="achievement-item">
      Participated in a hackathon where i Developed a freelance web page
      Won ₹5000 prize amount with certificate
    </div>
    <div class="achievement-item">
      In Geeks for Geeks practice<br>
      Solved many programming problems and secured institution first rank</br>
      Geeks for Geeks Profile: <a href="https://auth.geeksforgeeks.org/user/20csa37_ramana">Profile Link</a>
    </div>
    <div class="achievement-item">
      Champion in intra-school chess competition
    </div>
    <!-- Add more achievements as needed -->
  </div>
</body>
</html>
