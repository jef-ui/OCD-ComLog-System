<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ComLog Management System - Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: white;
            color: #003366;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            background-color: #003366;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-left {
            display: flex;
            align-items: center;
        }

        .header-left img {
            height: 40px;
            margin-right: 10px;
        }

        .header-left h1 {
            font-size: 20px;
            margin: 0;
        }

        .header-right a {
    color: white;
    margin-left: 20px;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s; /* Smooth transition for color change */
}

.header-right a:hover {
    color: orange; /* Only change the text color to orange on hover */
}

.header-right a.active {
    color: orange; /* Keep the text color orange when active */
}

        .welcome-section {
            background: url('{{ asset('images/background.jpg') }}') no-repeat center center/cover;
            background-color: rgba(0, 51, 102, 0.6);
            background-blend-mode: overlay;
            color: white;
            text-align: center;
            padding: 100px 20px;
            flex: 1;
        }

        .welcome-section img {
            width: 120px;
            margin-bottom: 20px;
        }

        .welcome-section h2 {
            font-size: 36px;
            margin: 20px 0 10px;
        }

        .welcome-section p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .button {
            padding: 12px 24px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .register {
            background-color: red;
            color: white;
        }

        .register:hover {
            background-color: darkred;
        }

        .login {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .login:hover {
            background-color: white;
            color: #003366;
        }

        .footer {
            background-color: white;
            color: #003366;
            text-align: center;
            font-size: 12px;
            padding: 10px 0;
        }

        @media screen and (max-width: 768px) {
            .welcome-section h2 {
                font-size: 28px;
            }

            .button-container {
                flex-direction: column;
                align-items: center;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .header-right {
                margin-top: 10px;
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }
        }

        .white-link {
  color: white;
  text-decoration: none;
}
.white-link:hover {
  color: #ccc; /* Optional hover effect */
}

.orange-button {
    background-color: #003366;  /* Adjust this to the same color as your logo */
    color: white;
}

.orange-button:hover {
    background-color: #0055aa; /* Slightly lighter shade for hover */
}


    </style>
</head>
<body>

<div class="header">
    <div class="header-left">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h1><a href="https://ocd.gov.ph/" class="white-link">OCD | CLMS </a></h1>
    </div>

    <div class="header-right">
        <a href="{{ route('log.index')}}">RADIO LOGS</a>
        <a href="{{ route('document.index')}}">INCOMING COMMUNICATION</a>
        {{--<a href="#">DASHBOARD</a>--}}
    </div>
</div>

{{-- comment --}}

<div class="welcome-section">
    <img src="{{ asset('images/logo.png') }}" alt="Main Logo">
    <h2>OFFICE OF CIVIL DEFENSE MIMAROPA</h2>
    <p>Communication Logging Management System</p>
    <div class="button-container">
        <a href="https://web.facebook.com/civildefense4b" target="_blank" class="button orange-button">OCD MIMAROPA Official Facebook Page</a>
        <a href="{{ asset('storage/documents/citizens-charter.pdf') }}" target="_blank" class="button login">Citizen's Charter</a>
    </div>

    <p style="color: black; font-size: 20px; font-weight: bold; max-width: 800px; margin: 20px auto 0; text-align: center;">
        The Communication Logging Management System (CLMS) is a digital platform designed to streamline the recording, tracking, and management of communications for faster access, reliable documentation, and effective coordination during emergencies and routine activities.  
    </p>
    
</div>  


<footer class="footer">
    Designed and Developed by ICTU MIMAROPA, Office of Civil Defense MIMAROPA © Copyright 2025
</footer>

</body>
</html>
