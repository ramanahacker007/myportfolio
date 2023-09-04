<!-- portfolio/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
  <title>Ramana Portfolio</title>
  <style>
  .btn-custom{
  background: linear-gradient(to right, #3498db, #e74c3c, #f39c12, #27ae60); /* Gradient with multiple colors */
  color: #fff;
}
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0; 
  background-color: #222;
}
  </style>
</head>
<body>
<nav class="navbar">
  <div class="container">
      <a href="index.php?section=about" class="btn btn-custom">About</a>
      <a href="index.php?section=projects" class="btn btn-custom">Projects</a>
      <a href="index.php?section=achievements" class="btn btn-custom">Achievements</a>
      <a href="index.php?section=interests" class="btn btn-custom">Area of Interest</a>
      <a href="index.php?section=education" class="btn btn-custom">Education</a>
      <a href="index.php?section=skills" class="btn btn-custom">Skills</a>
  </div>
</nav>
<div class="background-image">
  <div class="content-wrapper">
    <?php
    if (isset($_GET['section'])) {
      $section = $_GET['section'];
    } else {
      $section = 'about';
    }
    switch ($section) {
      case 'about':
        include_once 'about.php';
        break;
      case 'projects':
        include_once 'projects.php';
        break;
      case 'achievements':
        include_once 'achievements.php';
        break;
      case 'interests':
        include_once 'interests.php';
        break;
      case 'education':
        include_once 'education.php';
        break;
      case 'skills':
        include_once 'skills.php';
        break;
      default:
        include_once 'about.php';
    }
    ?>
  </div>
</div>
<footer>
<div class="text-center" style="padding:1%;background:#222;color:#fff;margin-top:20px;">
  <h3>©ramana 2023</h3>
</div>
</footer>
<script src="main.js"></script>
</body>
</html>
