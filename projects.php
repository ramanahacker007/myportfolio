<!-- portfolio/projects.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css"> <!-- Adjust the path to your CSS file -->
  <title>Projects</title>
  <style>
    /* CSS for the projects container */
    .projects-container {
      text-align: center;
      padding: 20px;
      position: relative; /* Add relative positioning for animation */
    }

    /* CSS for the project item */
    .project-item {
      background-color: white;
      color: black; /* Text color */
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      margin: 10px auto; /* Center-align the projects */
      width: 80%; /* Adjust the width as needed */
      border: 3.5px solid transparent; /* Transparent border */
      border-image: linear-gradient(to right, #3498db, #e74c3c, #f39c12, #27ae60); /* Border gradient */
      border-image-slice: 8; /* Ensure the border image covers the entire border */
      animation: border-color-change 0.5s infinite alternate; /* Border color change animation */
    }

    /* CSS for project headlines with gradient background */
    .project-headline {
      background: linear-gradient(to right, #3498db, #e74c3c, #f39c12, #27ae60); /* Background gradient */
      color: white; /* Text color for project headlines */
      padding: 5px; /* Adjust the padding as needed */
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
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
  <div class="projects-container">
    <div class="project-item">
      <div class="project-headline">Collage Maker App</div>
      <p><strong>Role:</strong> App Developer <br> <strong>Description:</strong> I developed an application in Android Studio with the help of Java technology. It selects multiple images from mobile and makes a collage.</p>
    </div>
    <div class="project-item">
      <div class="project-headline">Freelance Website</div>
      <p><strong>Role:</strong> Backend Developer <br> <strong>Description:</strong> This webpage helps students to earn money who have digital skills and financial issues. <br> Backend: PHP, MySQL.</p>
    </div>
    <div class="project-item">
      <div class="project-headline">Buyer and Seller Website</div>
      <p><strong>Role:</strong> Web Developer <br> <strong>Description:</strong> This project allows multiple users to create their products publicly. Anyone can buy these items. <br> Backend: Python Flask, MySQL.</p>
    </div>
    <!-- Add more projects as needed -->
  </div>
</body>
</html>
