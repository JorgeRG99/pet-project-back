<!DOCTYPE html>
<html>
<head>
    <title>Adoption Status Update</title>
    <style>
        body {
            font-family: 'Alegreya', serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            font-size: 18px;
        }
        .container {
            padding: 20px;
            background-color: #ffffff;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header, .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            font-size: 2.8em;
            margin: 0;
        }
        .header span {
            color: #8DD2E0;
            font-size: 1.5em;
        }
        .status {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .status.pending {
            background-color: yellow;
            color: black;
        }
        .status.accepted {
            background-color: green;
            color: white;
        }
        .status.confirmed {
            background-color: blue;
            color: white;
        }
        .status.cancelled {
            background-color: red;
            color: white;
        }
        .progress-container {
            background-color: #e0e0e0;
            border-radius: 25px;
            padding: 3px;
            margin-top: 20px;
        }
        .progress-bar {
            height: 20px;
            border-radius: 20px;
            text-align: center;
            color: white;
            width: 0;
        }
        .progress-bar.pending {
            width: 30%;
            background-color: yellow;
            color: black;
        }
        .progress-bar.accepted {
            width: 60%;
            background-color: green;
        }
        .progress-bar.confirmed {
            width: 100%;
            background-color: blue;
        }
        .progress-bar.cancelled {
            width: 100%;
            background-color: red;
        }
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f9fa;
            padding: 20px;
            flex-wrap: wrap;
        }
        .footer .logo {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .footer .logo h1 {
            font-size: 1.8em;
            font-weight: bold;
        }
        .footer .links {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        .footer .links a {
            text-decoration: none;
            color: #333;
        }
        .footer .links a:hover {
            text-decoration: underline;
        }
        .footer .socials {
            display: flex;
            gap: 10px;
        }
        .footer .socials a {
            text-decoration: none;
        }
        .footer .socials i {
            font-size: 1.8em;
            color: #333;
        }
        .footer .socials i:hover {
            color: #ff4c60;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>PET <span>4</span> YOU</h1>
        </div>
        <h1>Adoption Status Update</h1>
        <p>Pet Name: {{ $pet->name }}</p>

        <div class="progress-container">
            <div class="progress-bar {{ strtolower($status) }}">
                {{ ucfirst($status) }}
            </div>
        </div>
        <footer class="footer">
            <div class="logo">
            </div>   
        </footer>
    </div>
</body>
</html>
