<!-- portfolio/about.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css"> <!-- Adjust the path to your CSS file -->
  <title>About Me</title>
  <style>
    /* CSS for the background and container */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif; /* Use a suitable font-family */
      background-color: #222;
    }

    /* CSS for the fixed position container */
    .about-container {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%); /* Center the container horizontally and vertically */
      background-color: white; /* White background color */
      border: 6px solid transparent; /* Transparent border */
      border: spacing 2px;
      border-image: linear-gradient(to right, #3498db, #e74c3c, #f39c12, #27ae60); /* Border gradient */
      border-image-slice: 8; /* Ensure the border image covers the entire border */
      max-width: 80%; /* Adjust the maximum width as needed */
      animation: border-color-change 0.5s infinite alternate; /* Border color change animation */
      text-align: center; /* Center-align text within the container */
      padding: 20px; /* Add padding for text content */
      display: flex;
      flex-direction: column;
      align-items: center;
      box-sizing: content-box;
    }

    /* Center-align text within the container */
    .about-text {
      text-align: center;
    }

    /* Circular logo */
    .circular-logo {
      width: 100px; /* Adjust the width as needed */
      height: 100px; /* Adjust the height as needed */
      border-radius: 50%; /* Creates a circular shape */
      background-image: url('ramana.jpg'); /* Background color for the circular area */
      overflow: hidden; /* Hides any image overflow */
      margin-bottom: 20px; /* Add space between the logo and social media links */
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
    /* CSS for the horizontal social media icon bar */
.social-icons {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center; /* Horizontally center the icons */
}

.social-icons li {
    margin: 0 10px; /* Adjust the spacing between icons */
}

.social-icons a {
    text-decoration: none;
    color: #333; /* Adjust the icon color */
    font-size: 24px; /* Adjust the icon size */
}

  </style>
</head>
<body>
  <div class="about-container">
    <!-- Circular logo image -->
    <img src="ramana.jpg" alt="Logo" class="circular-logo">
    
    <div class="about-text">
      <h2>About Me</h2>
      <p>👋 Hello there!

      Are you in search of a talented and driven web and app developer to join your team? Look no further! Allow me to introduce my name RAMANA!, highly motivated and skilled developer with a strong foundation in both web development and app development.My mission is to bring innovation and creativity to your organization, making an impact from day one.

With a deep understanding of various programming languages, frameworks, and tools, i am well-equipped to tackle a wide range of projects.I was a continuous learner who thrives in dynamic environments and embraces challenges as opportunities for growth.Having successfully completed a range of personal and collaborative projects, now i am eagerly seeking new opportunities to apply my expertise and contribute to your organization's success.

Get in touch today to learn more about how can i be an asset to your team.</p>
    </div>
    <ul class="social-icons">
    <h3>Social Contact: </h3>
    <li><a href="https://replit.com/@ramanasingle123"><p style="color:#e74c3c;"><i class="fab fa-reddit">replit</i></p></a></li>
    <li><a href="https://github.com/ramanahacker007"><p style="color:black;"><i class="fab fa-github">github</i></p></a></li>
    <li><a href="https://www.linkedin.com/in/ramana-m-6ab76b213"><p style="color:#3498db;"><i class="fab fa-linkedin">linkedin</i></p></a></li>
    <li><a href="https://wa.me/6384241805"><p style="color:#27ae60;"><i class="fab fa-whatsapp">whatsapp</i></p></a></li>
    <!-- Add more social media icons and links as needed -->
  </div>
</body>
</html>
