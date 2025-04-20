<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Communication</title>
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
        select,
        textarea,
        input[type="file"] {
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

    <h2>Create Communication Record</h2>
    
    <div>
        @if (session()->has('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif
    </div>


    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form method="POST" action="{{ route('document.store') }}" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="received_date">Received Date</label>
            <input type="date" id="received_date" name="received_date" value="{{ old('received_date') }}" required>
        </div>

        <div>
            <label for="received_time">Received Time</label>
            <input type="time" id="received_time" name="received_time" value="{{ old('received_time') }}" required>
        </div>

        <div>
            <label for="received_via">Received Via</label>
            <select id="received_via" name="received_via" required>
                <option value="email" {{ old('received_via') == 'email' ? 'selected' : '' }}>Email</option>
                <option value="fax" {{ old('received_via') == 'fax' ? 'selected' : '' }}>Fax</option>
                <option value="mail" {{ old('received_via') == 'mail' ? 'selected' : '' }}>Mail</option>
                <option value="lbc" {{ old('received_via') == 'lbc' ? 'selected' : '' }}>LBC</option>
                <option value="jnt" {{ old('received_via') == 'jnt' ? 'selected' : '' }}>JNT</option>
                <option value="jrsm_hand_carried" {{ old('received_via') == 'jrsm_hand_carried' ? 'selected' : '' }}>JRSM Hand-Carried</option>
                <option value="yahoomail" {{ old('received_via') == 'yahoomail' ? 'selected' : '' }}>YahooMail</option>
                <option value="gmail" {{ old('received_via') == 'gmail' ? 'selected' : '' }}>Gmail</option>
            </select>
        </div>

        <div>
            <label for="from_agency_office">From Agency/Office</label>
            <input type="text" id="from_agency_office" name="from_agency_office" value="{{ old('from_agency_office') }}" required>
        </div>

        <div>
            <label for="type">Type</label>
            <select id="type" name="type" required>
                <option value="Request" {{ old('type') == 'Request' ? 'selected' : '' }}>Request</option>
                <option value="Invitation" {{ old('type') == 'Invitation' ? 'selected' : '' }}>Invitation</option>
                <option value="Submission" {{ old('type') == 'Submission' ? 'selected' : '' }}>Submission</option>
                <option value="For Information" {{ old('type') == 'For Information' ? 'selected' : '' }}>For Information</option>
                <option value="For Compliance" {{ old('type') == 'For Compliance' ? 'selected' : '' }}>For Compliance</option>
                <option value="Report" {{ old('type') == 'Report' ? 'selected' : '' }}>Report</option>
                <option value="Complaint" {{ old('type') == 'Complaint' ? 'selected' : '' }}>Complaint</option>
            </select>
        </div>

        <div>
            <label for="subject_description">Subject / Description</label>
            <textarea id="subject_description" name="subject_description" required>{{ old('subject_description') }}</textarea>
        </div>

        <div>
            <label for="received_acknowledge_by">Received Acknowledge By</label>
            <input type="text" id="received_acknowledge_by" name="received_acknowledge_by" value="{{ old('received_acknowledge_by') }}" required>
        </div>

        <div>
            <label for="status_as_of_date">Status as of Date</label>
            <input type="text" id="status_as_of_date" name="status_as_of_date" value="{{ old('status_as_of_date') }}" required>
        </div>

        <div>
            <label for="action_taken">Action Taken</label>
            <textarea id="action_taken" name="action_taken" required>{{ old('action_taken') }}</textarea>
        </div>

        <div>
            <label for="concerned_section_personnel">Concerned Section / Personnel</label>
            <input type="text" id="concerned_section_personnel" name="concerned_section_personnel" value="{{ old('concerned_section_personnel') }}" required>
        </div>

        <div>
            <label for="deadline_of_compliance">Deadline of Compliance</label>
            <input type="date" id="deadline_of_compliance" name="deadline_of_compliance" value="{{ old('deadline_of_compliance') }}" required>
        </div>

        <div>
            <label for="compliance_status">Compliance Status</label>
            <select id="compliance_status" name="compliance_status" required>
                <option value="Pending" {{ old('compliance_status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Completed" {{ old('compliance_status') == 'Completed' ? 'selected' : '' }}>Completed</option>
                <option value="In Progress" {{ old('compliance_status') == 'In Progress' ? 'selected' : '' }}>In Progress</option>
            </select>
        </div>

        <div>
            <label for="file_path">Upload File</label>
            <input type="file" id="file_path" name="file_path" accept=".pdf,.mp4,.avi,.mov" required>
        </div>

        <div class="button-container">
            <input type="submit" value="Save">
            <a href="{{ route('document.index') }}" class="back-button">Back</a>
        </div>
    </form>

    <!-- Footer -->
    <div class="footer">
        <p>Designed and Developed by ICTU MIMAROPA, Office of Civil Defense MIMAROPA © Copyright 2025</p>
    </div>

</body>
</html>
