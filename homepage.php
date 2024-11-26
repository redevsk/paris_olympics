<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paris Olympics 2024</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to bottom, #ece9e6, #ffffff);
            color: #333;
        }

        .header {
            height: 70px;
            width: 100%;
            background-color: blueviolet;
            display: flex;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .header_text {
            font-size: 28px;
            color: white;
            font-weight: bold;
        }

        .heading {
            margin-top: 20px;
            text-align: center;
        }

        .marquee-container {
            border: 2px solid blueviolet;
            padding: 15px;
            border-radius: 10px;
            background-color: #f8f6ff;
            margin: 20px auto;
            width: 90%;
            max-width: 1000px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .heading_text {
            font-size: 40px;
            color: blueviolet;
            font-weight: bold;
        }

        marquee {
            font-size: 36px;
            color: #333;
        }

        @media (max-width: 768px) {
            .header_text {
                font-size: 20px;
            }
            .heading_text {
                font-size: 30px;
            }
            marquee {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header_text">Olympics 2024</div>
    </div>

    <div class="heading">
        <div class="marquee-container">
            <marquee direction="left" scrollamount="20">
                <div class="heading_text">
                    Welcome to the Paris Olympics 2024
                </div>
            </marquee>
        </div>
    </div>
</body>
</html>
