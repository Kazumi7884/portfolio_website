<!DOCTYPE html>
<html lang="en" class="light-mode">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>My Personal Website - Home</title>
</head>
<body>

<nav class="navbar">
    <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Blog</a>
            <div class="dropdown-content">
                <a href="blog.php">All Posts</a>
                <!-- Additional links to individual blog posts can be added here -->
            </div>
        </li>
        <li class="dropdown">
            <a href="#" class="dropbtn">About Me & Education</a>
            <div class="dropdown-content">
                <a href="about.php">About Me</a>
                <a href="education.php">Education</a>
            </div>
        </li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<div class="container">
    <h1>Welcome to My Personal Website</h1>
    <p>This is a simple and personal website where I share my thoughts and experiences.</p>
    <button id="darkModeToggle">Toggle Dark Mode</button>
</div>

<script src="script.js"></script>
</body>
</html>
