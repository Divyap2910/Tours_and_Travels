<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #006994;
        }

        .success-icon {
            font-size: 80px;
            color: #28a745;
        }

        .message {
            font-size: 24px;
            margin-top: 20px;
        }

        .back-to-home {
            margin-top: 30px;
            
        }

        .btn {
            background-color: #006994;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color:black;
        }
    </style>
</head>
<body>
    <div class="container">
        <i class="fas fa-check-circle success-icon"></i>
        <h2>Payment Successful</h2>
        <p class="message">Thank you for your payment!</p>
        <p class="back-to-home"><a class="btn" href="/">Back to Home</a></p>
    </div>
</body>
</html>
