<?php
// Check if a value is submitted
if (isset($_POST['inputValue'])) {
    // Get the input value
    $inputValue = $_POST['inputValue'];

    // Set the cookie with the input value
    setcookie('user_input', $inputValue, time() + (86400 * 30), '/'); // Cookie lasts for 30 days

    // Redirect to the same page to display the stored cookie value
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Check if the cookie is set
if (isset($_COOKIE['user_input'])) {
    $storedValue = $_COOKIE['user_input'];
} else {
    $storedValue = "No value stored.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Management Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cookie Management Example</h1>
        <p>Stored Value: <?php echo $storedValue; ?></p>
        
        <form method="post" action="">
            <label for="inputValue">Input Value:</label>
            <input type="text" name="inputValue" id="inputValue" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
