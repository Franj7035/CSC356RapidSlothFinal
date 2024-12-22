<?php
// This is the PHP section to handle any backend functionality, if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Rapid Sloth</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* General Reset */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }


        /* Background Styling */
        .background {
            background-color: #3fedff;
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
        }


        /* Navigation Bar */
        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            background: #00aaff;
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }


        .navbar a {
            color: black;
            text-decoration: none;
            font-size: 2rem;
            font-family: "RapidSloths", sans-serif;
            transition: transform 0.2s, color 0.2s;
        }


        .navbar a:hover {
            color: #01fe0e; /* Highlight color of sentence */
            transform: scale(1.2);
        }


        .logo {
            width: 250px;
            height: auto;
        }


        /* About Content */
        .about-content {
            text-align: center;
            width: 80%;
            padding-top: 100px;
        }


        .about-content h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: black;
            text-shadow: 2px 2px 4px #01fe0e;
        }


        .about-content p {
            font-size: 1.2rem;
            color: black;
        }


        /* Footer Styling */
        footer {
            background-color: #00aaff;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 1rem;
        }


    </style>
</head>
<body>


<div class="background">
    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="index.php">Home</a> <!-- Link back to Home page -->
        <a href="about.php">About</a>
        <img src="Sloth.Inc Redesigned Logo.png" alt="Rapid Sloth Logo" class="logo">
        <a href="products.php">Products</a>
        <a href="contact.php">Contact</a>
    </div>


    <!-- About Content -->
    <div class="about-content">
        <h1>Our Story</h1>
        <p>
            The idea behind Rapid Sloth started when I was a kid. My family often called me a "sloth" because they thought I was lazy.
            But what if a sloth could be fast? What if it had a burst of energy like no other? That's how the concept of Rapid Sloth Energy Drink was born.
        </p>
        <p>
            Not only is the sloth my favorite animal, but it became a symbol of resilience and creativity in turning a supposed weakness into strength. Rapid Sloth is all about unleashing your inner speedster!
        </p>
    </div>
</div>


<!-- Footer -->
<footer>
    &copy; 2024 Rapid Sloth. All rights reserved.
</footer>


<script>
    $(document).ready(function () {
        // Highlight navigation menu items when hovering
        $('.navbar a').hover(
            function () {
                $(this).css('color', '#01fe0e'); // Change the color of the menu item to green on hover
            },
            function () {
                $(this).css('color', 'black'); // Reset the color when not hovering
            }
        );
    });
</script>


</body>
</html>
