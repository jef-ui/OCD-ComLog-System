<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: #003366;
            padding: 40px;
            max-width: 600px;
            margin: auto;
        }

        h2 {
            text-align: center;
            color: #003366;
        }

        .logo {
            display: block;
            margin: 0 auto 20px; /* Centers the logo and adds margin below it */
            width: 100px; /* Adjust logo size as needed */
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #003366;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"],
        .back-button {
            background-color: #003366;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%; /* Makes both buttons the same width */
            text-align: center;
            font-size: 16px; /* Same text size for both buttons */
            text-decoration: none; /* Ensures no underline */
        }

        input[type="submit"]:hover,
        .back-button:hover {
            background-color: #0055aa;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px; /* Adds space between the buttons */
        }

        .back-button {
            width: 100%; /* Make the back button width the same as submit */
            margin-right: 0; /* Remove margin for the back button */
        }

        ul {
            padding: 10px;
            border-left: 5px solid red;
            background-color: #ffecec;
            color: #990000;
            list-style: none;
        }

        .footer {
            background-color: white;
            color: #003366;
            text-align: center;
            font-size: 12px;
            padding: 5px 0;
            margin-top: 40px;
        }

    </style>
</head>
<body>
    
    <!-- Logo above the title -->
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">

    <h2>Add Radio Logs</h2>

    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form method="POST" action="{{ route('log.store') }}">
        @csrf
        @method('POST')

        <div>
            <label>Received Date</label>
            <input type="date" name="received_date" value="{{ old('received_date') }}">
        </div>

        <div>
            <label>Received Time</label>
            <input type="time" name="received_time" value="{{ old('received_time') }}">
        </div>

        <div>
            <label>Name of Sender</label>
            <input type="text" name="name_of_sender" value="{{ old('name_of_sender') }}">
        </div>

        <div>
            <label>Band</label>
            <select name="band">
                <option value="">-- Select --</option>
                @foreach(['LF','HF','VHF','UHF','WIFI','NETWORK'] as $band)
                    <option value="{{ $band }}" {{ old('band') == $band ? 'selected' : '' }}>{{ $band }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Mode</label>
            <select name="mode">
                <option value="">-- Select --</option>
                @foreach(['AM','FM','SSB','DMR','UHF','WIFI','NETWORK'] as $mode)
                    <option value="{{ $mode }}" {{ old('mode') == $mode ? 'selected' : '' }}>{{ $mode }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Signal Strength</label>
            <select name="signal_strength">
                <option value="">-- Select --</option>
                @foreach(['Excellent','Good','Fair','Poor'] as $strength)
                    <option value="{{ $strength }}" {{ old('signal_strength') == $strength ? 'selected' : '' }}>{{ $strength }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Name of Receiver</label>
            <input type="text" name="name_of_receiver" value="{{ old('name_of_receiver') }}">
        </div>

        <div>
            <label>Notes / Remarks</label>
            <select name="notes_remarks">
                <option value="">-- Select --</option>
                @foreach(['Weather Update', 'Radio Check','Unit Movement','Incident Follow-up'] as $note)
                    <option value="{{ $note }}" {{ old('notes_remarks') == $note ? 'selected' : '' }}>{{ $note }}</option>
                @endforeach
            </select>
        </div>

        <div class="button-container">
            <input type="submit" value="Submit">
            <a href="{{ route('log.index') }}" class="back-button">Back</a> <!-- Back button -->
        </div>
    </form>

    <!-- Footer -->
<div class="footer">
    <p>Designed and Developed by ICTU MIMAROPA, Office of Civil Defense MIMAROPA © Copyright 2025</p>
</div>

    

</body>
</html>
