<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="https://laravel.com/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incoming Communications</title>
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
        }

        h2, h3 {
            color: #003366;
            margin-top: 0;
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
            padding: 4px 10px;
            font-size: 12px;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
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
            margin-top: auto;
        }

        @media screen and (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .main-content {
                margin-left: 0;
                padding: 10px;
            }

            .sidebar img {
                width: 80px;
                margin-bottom: 10px;
            }

            .sidebar a {
                width: 100%;
                text-align: center;
                padding: 10px;
            }
        }

        .button-group {
    display: flex;
    gap: 10px; /* Increase space between buttons */
    flex-wrap: nowrap; /* Prevent buttons from wrapping to the next line */
    justify-content: flex-start; /* Align buttons to the left */
}

.sidebar-title {
    text-align: left;
    width: 100%;
}

@media screen and (max-width: 768px) {
    .sidebar-title {
        text-align: center;
    }
}



    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h3 class="sidebar-title">Incoming Communications</h3>
        <a href="{{ route('document.create') }}">ADD COMMUNICATION</a>
        <a href="/">HOME PAGE</a>
        {{--<a href="">DASHBOARD</a>--}}
        
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h2>Incoming Communications</h2>

        @if (session()->has('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <!-- Search Form -->
        <form method="GET" action="{{ route('document.index') }}" style="margin-bottom: 20px;">
            <input 
                type="text" 
                name="search" 
                placeholder="Search..." 
                value="{{ request('search') }}"
                style="padding: 8px; width: 300px; border: 1px solid #ccc; border-radius: 4px;">

            <button type="submit" class="button">Search</button>

            @if(request('search'))
                <a href="{{ route('document.index') }}" class="button" style="margin-left: 8px; background-color: gray;">Clear</a>
            @endif
        </form>

        <!-- Table -->
        <table>
            <tr>
                <th>Received Date</th>
                <th>Received Time</th>
                <th>Received Via</th>
                <th>From Agency/Office</th>
                <th>Type</th>
                <th>Subject Description</th>
                <th>Received/Acknowledged by</th>
                <th>Status as of Date</th>
                <th>Actions Taken</th>
                <th>Concerned Section Personnel</th>
                <th>Deadline of Compliance</th>
                <th>Compliance Status</th>
                <th>View/Download File</th>
                <th>Modify</th>
                <th>Delete</th>
            </tr>

            @foreach ($documents as $document)
                <tr>
                    <td>{{ $document->received_date }}</td>
                    <td>{{ $document->received_time }}</td>
                    <td>{{ $document->received_via }}</td>
                    <td>{{ $document->from_agency_office }}</td>
                    <td>{{ $document->type }}</td>
                    <td>{{ $document->subject_description }}</td>
                    <td>{{ $document->received_acknowledge_by }}</td>
                    <td>{{ $document->status_as_of_date }}</td>
                    <td>{{ $document->action_taken }}</td>
                    <td>{{ $document->concerned_section_personnel }}</td>
                    <td>{{ $document->deadline_of_compliance }}</td>
                    <td>{{ $document->compliance_status }}</td>
                    <td>
                        <div class="button-group">
                            <a class="button" href="{{ route('document.show', $document->id) }}">View</a>
                            <a class="button" href="{{ asset('storage/' . $document->file_path) }}" download>Download</a>
                        </div>
                    </td>
                    
                    <td>
                        <a class="button" href="{{ route('document.edit', ['document' => $document]) }}">Modify</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('document.delete', ['document'=>$document]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="button" value="Delete">
                        </form>
                    </td>
                </tr>

            
            @endforeach

        </table>

        {{-- Pagination (below the table) --}}
<div class="mt-4">
    {{ $documents->withQueryString()->links() }}
</div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Designed and Developed by ICTU MIMAROPA, Office of Civil Defense MIMAROPA © Copyright 2025</p>
    </div>

</body>
</html>
