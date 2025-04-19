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
            margin: 0 auto 20px;
            width: 100px;
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
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #003366;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"],
        .back-button {
            background-color: #003366;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            text-align: center;
            font-size: 16px;
            text-decoration: none;
        }

        input[type="submit"]:hover,
        .back-button:hover {
            background-color: #0055aa;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .back-button {
            width: 100%;
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
    
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">

    <h2>Communication Record</h2>

    <div>
        @if(session()->has('success'))
            <div class="success-message" style="color: green;">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method="POST" action="{{ route('document.update',['document' => $document])}}" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div>
            <label>Received Date</label>
            <input type="date" name="received_date" value="{{ old('received_date', $document->received_date) }}">
        </div>

        @php
        $receivedTime = $document->received_time ? \Carbon\Carbon::parse($document->received_time)->format('H:i') : '';
        @endphp

        <div>
            <label for="received_time">Received Time</label>
            <input type="time" name="received_time" value="{{ old('received_time', $receivedTime) }}">
        </div>

        <div>
            <label>Received Via</label>
            <select name="received_via">
                <option value="email" {{ $document->received_via == 'email' ? 'selected' : '' }}>Email</option>
                <option value="fax" {{ $document->received_via == 'fax' ? 'selected' : '' }}>Fax</option>
                <option value="mail" {{ $document->received_via == 'mail' ? 'selected' : '' }}>Mail</option>
                <option value="lbc" {{ $document->received_via == 'lbc' ? 'selected' : '' }}>LBC</option>
                <option value="jnt" {{ $document->received_via == 'jnt' ? 'selected' : '' }}>JNT</option>
                <option value="jrsm_hand_carried" {{ $document->received_via == 'jrsm_hand_carried' ? 'selected' : '' }}>JRSM Hand Carried</option>
                <option value="yahoomail" {{ $document->received_via == 'yahoomail' ? 'selected' : '' }}>YahooMail</option>
                <option value="gmail" {{ $document->received_via == 'gmail' ? 'selected' : '' }}>Gmail</option>
            </select>
        </div>

        <div>
            <label>From Agency/Office</label>
            <input type="text" name="from_agency_office" value="{{ old('from_agency_office', $document->from_agency_office) }}">
        </div>

        <div>
            <label>Type</label>
            <select name="type">
                <option value="Request" {{ $document->type == 'Request' ? 'selected' : '' }}>Request</option>
                <option value="Invitation" {{ $document->type == 'Invitation' ? 'selected' : '' }}>Invitation</option>
                <option value="Submission" {{ $document->type == 'Submission' ? 'selected' : '' }}>Submission</option>
                <option value="For Information" {{ $document->type == 'For Information' ? 'selected' : '' }}>For Information</option>
                <option value="For Compliance" {{ $document->type == 'For Compliance' ? 'selected' : '' }}>For Compliance</option>
                <option value="Report" {{ $document->type == 'Report' ? 'selected' : '' }}>Report</option>
                <option value="Complaint" {{ $document->type == 'Complaint' ? 'selected' : '' }}>Complaint</option>
            </select>
        </div>

        <div>
            <label>Subject / Description</label>
            <textarea name="subject_description">{{ old('subject_description', $document->subject_description) }}</textarea>
        </div>

        <div>
            <label>Received Acknowledge By</label>
            <input type="text" name="received_acknowledge_by" value="{{ old('received_acknowledge_by', $document->received_acknowledge_by) }}">
        </div>

        <div>
            <label>Status as of Date</label>
            <input type="text" name="status_as_of_date" value="{{ old('status_as_of_date', $document->status_as_of_date) }}">
        </div>

        <div>
            <label>Actions Taken</label>
            <textarea name="action_taken">{{ old('action_taken', $document->action_taken) }}</textarea>
        </div>

        <div>
            <label>Concerned Section / Personnel</label>
            <input type="text" name="concerned_section_personnel" value="{{ old('concerned_section_personnel', $document->concerned_section_personnel) }}">
        </div>

        <div>
            <label>Deadline of Compliance</label>
            <input type="date" name="deadline_of_compliance" value="{{ old('deadline_of_compliance', $document->deadline_of_compliance) }}">
        </div>

        <div>
            <label>Compliance Status</label>
            <select name="compliance_status">
                <option value="Pending" {{ $document->compliance_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Completed" {{ $document->compliance_status == 'Completed' ? 'selected' : '' }}>Completed</option>
                <option value="In Progress" {{ $document->compliance_status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
            </select>
        </div>

        <div>
            <label>Current File:</label>
            <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank">View File</a>
        </div>

        <div>  
            <label>Upload New File (optional)</label>
            <input type="file" name="file_path" accept=".pdf,.mp4,.avi,.mov">
        </div>

        <div class="button-container">
            <button type="submit">Update Communication</button>
            <a href="{{ route('document.index') }}" class="back-button">Back</a> 
        </div>

    </form>

    <div class="footer">
        <p>Designed and Developed by ICTU MIMAROPA, Office of Civil Defense MIMAROPA © Copyright 2025</p>
    </div>
</body>
</html>
