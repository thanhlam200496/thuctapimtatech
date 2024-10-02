<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Response</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #1a1a1a;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        h1 {
            text-align: center;
            color: #00ff00;
        }
        .email-section {
            margin-bottom: 20px;
        }
        .email-section h2 {
            color: #00ff00;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .email-section p {
            font-size: 16px;
            line-height: 1.5;
        }
        .response {
            background-color: #333;
            padding: 15px;
            border-radius: 5px;
        }
        .response p {
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .footer a {
            background-color: #00ff00;
            color: #000;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .footer a:hover {
            background-color: #00cc00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You for Your Feedback!</h1>

        <div class="email-section">
            <h2>Name:</h2>
            <p>{{$data_return_email['name']}}</p>
        </div>

        <div class="email-section">
            <h2>Email:</h2>
            <p>{{$data_return_email['email']}}</p>
        </div>

        <div class="email-section">
            <h2>Your Feedback:</h2>
            <div class="response">
                <p>{{$data_return_email['message']}}</p>
            </div>
        </div>

        <div class="email-section">
            <h2>Our Reply:</h2>
            <div class="response">
                <p>Dear {{$data_return_email['name']}},</p>
                <p>{{$data_return_email['mess_return']}}</p>
            </div>
        </div>

        <div class="footer">
            <a href="#">Contact Us</a>
        </div>
    </div>
</body>
</html>
