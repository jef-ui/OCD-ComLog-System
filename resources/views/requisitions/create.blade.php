<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create RIS Log</h2>

    <div>
        @if($errors->any())
        <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
        </ul>
        @endif
    </div>


    <form method="POST" action="{{ route('requisition.store') }}">
        @csrf
    

    
        <div>
            <label for="fund_cluster">Fund Cluster</label>
            <select id="fund_cluster" name="fund_cluster" required>
                <option value="ADMIN 738766030225745104" {{ old('fund_cluster') == 'ADMIN 738766030225745104' ? 'selected' : '' }}>ADMIN 738766030225745104</option>
                <option value="OPCEN 738766030358525000" {{ old('fund_cluster') == 'OPCEN 738766030358525000' ? 'selected' : '' }}>OPCEN 738766030358525000</option>
                <option value="RD OFFICE 738766030358506000" {{ old('fund_cluster') == 'RD OFFICE 738766030358506000' ? 'selected' : '' }}>RD OFFICE 738766030358506000</option>
                <option value="VEHICLE 738766030354808012" {{ old('fund_cluster') == 'VEHICLE 738766030354808012' ? 'selected' : '' }}>VEHICLE 738766030354808012</option>
                <option value="QRF 738766030225688007" {{ old('fund_cluster') == 'QRF 738766030225688007' ? 'selected' : '' }}>QRF 738766030225688007</option>
                <option value="QRF 738766030225805106" {{ old('fund_cluster') == 'QRF 738766030225805106' ? 'selected' : '' }}>QRF 738766030225805106</option>
                <option value="QRF 738766030225804109" {{ old('fund_cluster') == 'QRF 738766030225804109' ? 'selected' : '' }}>QRF 738766030225804109</option>
            </select>
        </div>
    
        <div>
            <label for="division">Division</label>
            <input type="text" id="division" name="division" value="{{ old('division') }}" required>
        </div>
    
        <div>
            <label for="agency_office">Agency / Office</label>
            <input type="text" id="agency_office" name="agency_office" value="{{ old('agency_office') }}" required>
        </div>
    
        <div>
            <label for="unit">Unit</label>
            <input type="text" id="unit" name="unit" value="{{ old('unit') }}" required>
        </div>
    
        <div>
            <label for="description">Description</label>
            <select id="description" name="description" required>
                <option value="XCS" {{ old('description') == 'XCS' ? 'selected' : '' }}>XCS</option>
                <option value="XTRA" {{ old('description') == 'XTRA' ? 'selected' : '' }}>XTRA</option>
                <option value="DIESEL" {{ old('description') == 'DIESEL' ? 'selected' : '' }}>DIESEL</option>
            </select>
        </div>
    
        <div>
            <label for="quantity">Quantity</label>
            <input type="number" step="0.01" id="quantity" name="quantity" value="{{ old('quantity') }}" required>
        </div>
    
        <div>
            <label for="amount_utilized">Amount Utilized</label>
            <input type="number" step="0.01" id="amount_utilized" name="amount_utilized" value="{{ old('amount_utilized') }}" required>
        </div>
    
        <div>
            <label for="balance">Balance</label>
            <input type="number" step="0.01" id="balance" name="balance" value="{{ old('balance') }}" required>
        </div>
    
        <div>
            <label for="invoice_number">Invoice Number</label>
            <input type="text" id="invoice_number" name="invoice_number" value="{{ old('invoice_number') }}" required>
        </div>
    
        <div>
            <label for="plate_number">Plate Number</label>
            <input type="text" id="plate_number" name="plate_number" value="{{ old('plate_number') }}" required>
        </div>
    
        <div>
            <label for="car_type">Car Type</label>
            <input type="text" id="car_type" name="car_type" value="{{ old('car_type') }}" required>
        </div>
    
        <div>
            <label for="purpose">Purpose</label>
            <textarea id="purpose" name="purpose" required>{{ old('purpose') }}</textarea>
        </div>
    
        <div>
            <label for="requested_by">Requested By</label>
            <input type="text" id="requested_by" name="requested_by" value="{{ old('requested_by') }}" required>
        </div>
    
        <div>
            <label for="received_by">Received By</label>
            <input type="text" id="received_by" name="received_by" value="{{ old('received_by') }}" required>
        </div>
    
        <div>
            <label for="position_designation">Position / Designation</label>
            <input type="text" id="position_designation" name="position_designation" value="{{ old('position_designation') }}" required>
        </div>
    
        <div>
            <label for="date">Date</label>
            <input type="date" id="date" name="date" value="{{ old('date') }}" required>
        </div>
    
        <div>
            <input type="submit" value="Save">
        </div>

    </form>
    
</body>
</html>