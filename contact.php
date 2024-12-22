<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// contact.php

// Initialize variables for the form inputs
$name = $email = $message = "";
$name_err = $email_err = $message_err = "";

// Process the form when it's submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your name.";
    } else {
        $name = trim($_POST["name"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email address.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Validate message
    if (empty(trim($_POST["message"]))) {
        $message_err = "Please enter your message.";
    } else {
        $message = trim($_POST["message"]);
    }

    // If no errors, insert into database
    if (empty($name_err) && empty($email_err) && empty($message_err)) {
        // Database connection (update with your actual DB credentials)
        $server = "localhost";
        $username = "root"; 
        $password = "";      
        $dbname = "rapid_sloth"; 

        // Create connection
        $conn = new mysqli($server, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connected sucessfully";
        }

        // Insert data into the contact_messages table
        $sql = "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "<p style='color: green;'>Message sent successfully!</p>";
        } else {
            echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
        }

        // Close the connection
        $stmt->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Rapid Sloth</title>
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
            text-align: center;
            width: 80%;
            padding-top: 100px;
        }

        .main-content h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: black;
            text-shadow: 2px 2px 4px #01fe0e;
        }

        .form-container {
            width: 60%;
            margin: 0 auto;
            text-align: left;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .form-container input, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-container button {
            background-color: #00aaff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2rem;
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

    <!-- Contact Form Content -->
    <div class="main-content">
        <h1>Contact Us</h1>

        <!-- Contact Form -->
        <div class="form-container">
            <form action="contact.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" value="<?php echo $name; ?>" required>
                <span style="color: red;"><?php echo $name_err; ?></span><br>

                <input type="email" name="email" placeholder="Your Email" value="<?php echo $email; ?>" required>
                <span style="color: red;"><?php echo $email_err; ?></span><br>

                <textarea name="message" rows="5" placeholder="Your Message" required><?php echo $message; ?></textarea>
                <span style="color: red;"><?php echo $message_err; ?></span><br>

                <button type="submit">Send Message</button>
            </form>
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
