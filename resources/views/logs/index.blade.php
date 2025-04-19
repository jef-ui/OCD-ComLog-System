<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="https://laravel.com/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
    <title>Home Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: white;
            color: #003366;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
    
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #003366;
            color: white;
            padding: 20px;
            box-sizing: border-box;
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            transition: transform 0.3s ease;
        }
    
        .sidebar img {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
        }
    
        .sidebar h3 {
            text-align: left;
            margin-bottom: 20px;
            color: white;
            width: 100%;
        }
    
            .sidebar a {
        color: white;
        text-decoration: none;
        display: block;
        margin-bottom: 10px;
        padding: 5px;
        transition: color 0.3s;
        text-align: left;
    }

        .sidebar a:hover {
            color: orange; /* Change text color to orange when hovering */
        }

        .sidebar a.active {
            color: orange; /* Keep text color orange after clicking (active link) */
        }
            
        .main-content {
            padding: 20px;
            flex: 1;
            margin-left: 200px;
            color: black;
            overflow-y: auto;
            margin-top: 0; /* Remove top margin */
        }
    
        h2 {
            color: #003366;
            margin-top: 0; /* Remove any margin at the top */
        }
    
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
    
        table, th, td {
            border: 1px solid #003366;
        }
    
        th, td {
            padding: 10px;
            text-align: left;
        }
    
        th {
            background-color: #003366;
            color: white;
        }
    
        .button {
            display: inline-block;
            background-color: #003366;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100px;
        }
    
        .button:hover {
            background-color: #0055aa;
        }
    
        .success-message {
            background-color: #e0f7ff;
            border-left: 5px solid #003366;
            padding: 10px;
            margin: 10px 0;
            color: #003366;
        }
    
        .footer {
            background-color: white;
            color: #003366;
            text-align: center;
            font-size: 12px;
            padding: 5px 0;
        }
    
            /* Media Queries for responsiveness */
            @media screen and (max-width: 768px) {
        .sidebar {
            width: 100%;
            position: relative;
            height: auto;
            transform: translateX(0); /* Show by default */
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center; /* Center all items */
    }

    .sidebar img {
        width: 80px;
        margin-bottom: 10px;
        display: block;
    }

    .sidebar h3 {
        display: block;
        margin-bottom: 20px;
        text-align: center;
        width: 100%;
    }

    .sidebar a {
        text-align: center;
        padding: 10px;
        width: 100%;
    }

    .main-content {
        margin-left: 0;
        padding: 10px;
    }

    .menu-toggle {
        display: block;
        background-color: #003366;
        color: white;
        padding: 10px;
        text-align: center;
        width: 100%;
        cursor: pointer;
    }
}
    </style>
    
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h3>OCD | ICTU</h3>
        <a href="{{ route('log.create') }}">ADD RADIO LOG</a>
        <a href="/">HOME PAGE</a>
        {{--<a href="#">DASHBOARD</a>--}}
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h2>OCD MIMAROPA Radio Logging System</h2>

        <div>
            @if (session()->has('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div>

            <form method="GET" action="{{ route('log.index') }}" style="margin-bottom: 20px;">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Search logs..." 
                    value="{{ request('search') }}"
                    style="padding: 8px; width: 300px; border: 1px solid #ccc; border-radius: 4px;">
                
                <button type="submit" class="button">Search</button>
            
                @if(request('search'))
                    <a href="{{ route('log.index') }}" class="button" 
                       style="margin-left: 8px; background-color: gray;">Clear</a>
                @endif
            </form>
            
            
            <table>
                <tr>
                    <th>Received Date</th>
                    <th>Received Time</th>
                    <th>Name of Sender</th>
                    <th>Band</th>
                    <th>Mode</th>
                    <th>Signal Strength</th>
                    <th>Name of Receiver</th>
                    <th>Notes / Remarks</th>
                    <th>Modify</th>
                    <th>Delete</th>
                </tr>

                @foreach ($logs as $log)
                    <tr>
                        <td>{{ $log->received_date }}</td>
                        <td>{{ $log->received_time }}</td>
                        <td>{{ $log->name_of_sender }}</td>
                        <td>{{ $log->band }}</td>
                        <td>{{ $log->mode }}</td>
                        <td>{{ $log->signal_strength }}</td>
                        <td>{{ $log->name_of_receiver }}</td>
                        <td>{{ $log->notes_remarks }}</td>
                        <td>
                            <a class="button" href="{{ route('log.edit', ['log' => $log]) }}">Modify</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('log.delete', ['log' => $log]) }}">
                                @csrf
                                @method('delete')
                                <input class="button" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </table>

            <div style="margin-top: 20px;">
                {{ $logs->links() }}
            </div>
            
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Designed and Developed by ICTU MIMAROPA, Office of Civil Defense MIMAROPA © Copyright 2025</p>
    </div>

    <script>
        // Toggle Sidebar for Mobile View
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('show');
        }
    </script>

</body>
</html>
