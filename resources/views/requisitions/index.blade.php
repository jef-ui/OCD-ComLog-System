<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>RIS Database</h2>

    <div>
        <table border="1">
            <tr>
                <th>Fund Cluster</th>
                <th>Division</th>
                <th>Agency Office</th>
                <th>Unit</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Amount Utilized</th>
                <th>Balance</th>
                <th>Invoice Number</th>
                <th>Plate Number</th>
                <th>Type of Car</th>
                <th>Purpose</th>
                <th>Requested By</th>
                <th>Position Designation</th>
                <th>Received By</th>
                <th>Position Designation</th>
                <th>Request / Received Date</th>
            </tr>

            @foreach ($requisitions as $requisition)

            <tr>
                <td>{{$requisition->fund_cluster}}</td>
                <td>{{$requisition->division}}</td>
                <td>{{$requisition->agency_office}}</td>
                <td>{{$requisition->unit}}</td>
                <td>{{$requisition->description}}</td>
                <td>{{$requisition->quantity}}</td>
                <td>{{$requisition->amount_utilized}}</td>
                <td>{{$requisition->balance}}</td>
                <td>{{$requisition->invoice_number}}</td>
                <td>{{$requisition->plate_number}}</td>
                <td>{{$requisition->car_type}}</td>
                <td>{{$requisition->purpose}}</td>
                <td>{{$requisition->requested_by}}</td>
                <td>{{$requisition->position_designation}}</td>
                <td>{{$requisition->received_by}}</td>
                <td>{{$requisition->position_designation}}</td>
                <td>{{$requisition->date}}</td>
            </tr>



            @endforeach
        </table>
    </div>
</body>
</html>