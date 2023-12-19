<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Online Motorbike Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .card {
            background-color: white;
            color: black;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            max-width: 400px;
            margin: 20px auto;
        }

        .card-body {
            padding: 3%;
        }

        .logo-container {
            background-color: orange;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo {
            max-width: 100px; /* Adjust the size of the logo as needed */
            max-height: 100px; /* Adjust the size of the logo as needed */
            animation: bounce 2s infinite ease-in-out;
        }

        @keyframes bounce {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        .card-title {
            margin-top: 20px;
            margin-bottom: 3px;
            font-size: 2.5em;
        }

        .card-text-orange {
            color: orange;
        }
    </style>
</head>
<body>
    <div style="background-color: orange; color: black;"  class="card text-center">
        <div class="card-body">
            <div class="logo-container">
                <!-- Replace 'path/to/4s-tech-logo.png' with the actual path or URL of your 4S-TECH logo -->
                <img src="{{ asset('images/111.jpg') }}" alt="EVALast" class="logo">
            </div>
            <h5>Welcome to our online motorbike shop</h5>
            <h4 class="card-title card-text-orange">EVALAST MOTORBIKE</h4>
            <p class="card-text">Genuine parts, Reliable motorcycle, Best driver</p>
            <a href="mailto:your.email@example.com" target="_blank" rel="noopener noreferrer">
                <i class="fas fa-envelope"></i> Email Us
            </a>
            <br>
            <a href="tel:+254115054152">
                <i class="fas fa-phone"></i> Call Us
            </a>
        </div>
    </div>
</body>
</html>
