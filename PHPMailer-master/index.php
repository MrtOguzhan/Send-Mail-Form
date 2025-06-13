<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
    <link rel="icon" type="image/png" href="images/Mo_org.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .Logo {
            z-index: 0;
            position: absolute;
            height: 100px;
            margin-top: 2%;
            padding: 20px;
        }

        form {
            z-index: 1;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form input,
        form textarea,
        form button {
            width: 90%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        form textarea {
            resize: none;
        }

        form input:focus,
        form textarea:focus {
            border-color: #6c63ff;
            outline: none;
        }

        form button {
            background-color: #6c63ff;
            color: #ffffff;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #574fcf;
        }

        form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <img class="Logo" src="images/Mo_org.png" alt="Company Logo">
    <form action="form.php" method="POST" enctype="multipart/form-data">
        <h2>Send Mail</h2>
        <input type="text" name="email" required placeholder="Enter your email address">
        <input type="text" name="Subject" required placeholder="Enter the email subject">
        <textarea name="content" rows="5" placeholder="Enter the email content"></textarea>
        <input type="file" name="attachment">
        <button type="submit">Send</button>
    </form>
    <!-- Made by Murat Oğuzhan Arslan -->
    <!-- Komplatox -->
</body>
</html>
