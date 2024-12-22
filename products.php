<?php 
// products.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Rapid Sloth</title>
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
            color: #01fe0e;
            transform: scale(1.2);
        }

        .logo {
            width: 250px;
            height: auto;
        }

        /* Main Content */
        .main-content {
            text-align: left;
            width: 80%;
            padding-top: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-content img {
            width: 600px; /* Adjust size of the drinks*/
            margin-right: 30px; 
        }

        .main-content h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: black;
            text-shadow: 2px 2px 4px #01fe0e;
        }

        .main-content ul {
            list-style: none;
            padding: 0;
        }

        .main-content li {
            font-size: 2rem;
            font-family: "RapidSloths";
            color: black;
            margin: 10px 0;
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
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <img src="Sloth.Inc Redesigned Logo.png" alt="Rapid Sloth Logo" class="logo">
        <a href="products.php">Products</a>
        <a href="contact.php">Contact</a>
    </div>

    <!-- Products Content -->
    <div class="main-content">
        <img src="EnergyDrinks2.png" alt="Product Image"> 
        <div>
            <h1>Our Products</h1>
            <ul>
                <li>Black Cherry</li>
                <li>Grape</li>
                <li>Orange</li>
            </ul>
        </div>
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
                $(this).css('color', '#01fe0e');
            },
            function () {
                $(this).css('color', 'black');
            }
        );
    });
</script>

</body>
</html>
