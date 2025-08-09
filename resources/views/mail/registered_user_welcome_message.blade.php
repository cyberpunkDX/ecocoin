<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                color: #333;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }

            .email-container {
                max-width: 600px;
                margin: 20px auto;
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                overflow: hidden;
            }

            .header {
                padding: 20px;
                text-align: center;
                background-color: #f9f9f9;
                border-bottom: 1px solid #e0e0e0;
            }

            .header img {
                max-width: 150px;
                height: auto;
            }

            .content {
                padding: 30px;
            }

            .content h1 {
                font-size: 24px;
                margin: 0 0 10px;
                color: #1a1a1a;
            }

            .content p {
                font-size: 16px;
                margin: 10px 0;
            }

            .code {
                font-size: 28px;
                font-weight: bold;
                color: #007bff;
                text-align: center;
                padding: 15px;
                background-color: #f0f6ff;
                border-radius: 5px;
                margin: 20px 0;
            }

            .footer {
                text-align: center;
                padding: 20px;
                font-size: 14px;
                color: #777;
                background-color: #f9f9f9;
                border-top: 1px solid #e0e0e0;
            }

            a {
                color: #007bff;
                text-decoration: none;
            }

            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>

    <body>
        <div class="email-container">
            <div class="header">
                <img src="{{ asset(env('APP_LOGO')) }}" alt="{{ env('APP_NAME') }} Logo">
            </div>
            <div class="content">
                <h1>Hi, {{ $user->name }}!</h1>
                <p>
                    Thanks for joining {{ env('APP_NAME') }}! Your account is now active.
                </p>
            </div>
            <div class="footer">
                <p>© {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.</p>
            </div>
        </div>
    </body>

</html>
