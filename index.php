<?php
// This is the PHP section to handle any backend functionality, if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapid Sloth Energy Drink</title>
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
            color: #01fe0e; /* Highlight color of sentence*/
            transform: scale(1.2);
        }


        .logo {
            width: 250px;
            height: auto;
        }


        /* Main Content */
        .main-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
        }


        /*Made to make font work for sentence */
        @font-face {
            font-family: myfont;
            src:url(FUNGUS BOLD);
        }


        .main-content h1 {
            font-size: 3rem;
            font-family: myfont;
            font-weight: bold;
            color: black;
            text-shadow: 2px 2px 4px #01fe0e;
        }


        .main-content img {
            width: 600px; /* Adjust the width of energy drink*/
            height: auto;
            border-radius: 10px;
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


        /* Styling for button interaction */
        .cta-button {
            background-color: #01fe0e;
            border: none;
            padding: 15px 30px;
            color: black;
            font-size: 1.5rem;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }


        .cta-button:hover {
            background-color: #00aaff;
            transform: scale(1.1);
        }


    </style>
</head>
<body>


<div class="background">
    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="#">Home</a>
        <a href="about.php">About</a> <!-- Link to About page -->
        <img src="Sloth.Inc Redesigned Logo.png" alt="Rapid Sloth Logo" class="logo">
        <a href="products.php">Products</a>
        <a href="contact.php">Contact</a>
    </div>


    <!-- Main Content -->
    <div class="main-content">
        <div class="text-section">
            <h1>UNLEASH YOUR INNER SPEEDSTER WITH RAPID SLOTH!</h1>
        </div>
        <img src="CherryEngDrnk.png" alt="Rapid Sloth Energy Drink">
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


        // jQuery effect for the "Get Yours Now" button
        $('.cta-button').on('click', function() {
            // Alert the user that they've clicked the button
            alert('You are now one step closer to getting Rapid Sloth Energy Drink!');
        });
    });
</script>


</body>
</html>