<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="main.css" rel="stylesheet" type="text/css">
<title>My Personal Website - Blog</title>
</head>
<body>

<nav class="navbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="dropdown active">
            <a href="#" class="dropbtn">Blog</a>
            <div class="dropdown-content">
                <a href="blog.php">All Posts</a>
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
    <h2>All Blog Posts</h2>
    <ul>
        <li>
            <h3>Post Title 1</h3>
            <p>Content of the first blog post.</p>
        </li>
        <li>
            <h3>Post Title 2</h3>
            <p>Content of the second blog post.</p>
        </li>
    </ul>
</div>

<script src="script.js"></script>
</body>
</html>
