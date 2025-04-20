<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
          overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
          font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg .tg-nb2d{border-color:inherit;font-size:100%;text-align:center;vertical-align:top}
        .tg .tg-sg5v{border-color:inherit;font-size:100%;text-align:left;vertical-align:top}
        .tg .tg-ju5g{border-color:inherit;font-size:100%;font-style:italic;text-align:left;vertical-align:top}
        .tg .tg-xam4{border-color:inherit;font-size:100%;font-weight:bold;text-align:left;vertical-align:top}
        .tg .tg-82fe{border-color:inherit;font-size:100%;font-weight:bold;text-align:center;vertical-align:top}
        .tg .tg-r94a{border-color:inherit;font-size:100%;font-style:italic;text-align:center;vertical-align:top}
        </style>

</head>
<body>

    <table class="tg" style="undefined;table-layout: fixed; width: 770px"><colgroup>
        <col style="width: 1.93333px">
        <col style="width: 46.93333px">
        <col style="width: 52.93333px">
        <col style="width: 189.93333px">
        <col style="width: 91.93333px">
        <col style="width: 60.93333px">
        <col style="width: 53.93333px">
        <col style="width: 92.93333px">
        <col style="width: 88.93333px">
        <col style="width: 89.93333px">
        </colgroup>
        <thead>
          <tr>
            <th class="tg-sg5v"></th>
            <th class="tg-xam4" colspan="2">Entity Name:</th>
            <th class="tg-xam4" colspan="3">OFFICE OF CIVIL DEFENSE MIMAROPA</th>
            <th class="tg-82fe" colspan="4">Fund Cluster: {{$requisition->fund_cluster}}</th>
          </tr></thead>
        <tbody>
          <tr>
            <td class="tg-sg5v">Division</td>
            <td class="tg-xam4" colspan="2">Division:</td>
            <td class="tg-82fe" colspan="3">{{$requisition->division}}</td>
            <td class="tg-xam4" colspan="2">Responsibility Center Code</td>
            <td class="tg-nb2d" colspan="2"></td>
          </tr>
          <tr>
            <td class="tg-sg5v">Office</td>
            <td class="tg-xam4" colspan="2">Office:</td>
            <td class="tg-82fe" colspan="3">office_card</td>
            <td class="tg-xam4" colspan="2">RIS Number</td>
            <td class="tg-nb2d" colspan="2"></td>
          </tr>
          <tr>
            <td class="tg-ju5g"></td>
            <td class="tg-r94a" colspan="4">Requistion</td>
            <td class="tg-r94a" colspan="2">Stock Available ?</td>
            <td class="tg-r94a" colspan="3">Issue</td>
          </tr>
          <tr>
            <td class="tg-sg5v">Stock No.</td>
            <td class="tg-nb2d">Stock No.</td>
            <td class="tg-nb2d">Unit</td>
            <td class="tg-nb2d">Description</td>
            <td class="tg-nb2d">Quantity</td>
            <td class="tg-nb2d">Yes</td>
            <td class="tg-nb2d">No</td>
            <td class="tg-nb2d">Quantity</td>
            <td class="tg-nb2d" colspan="2">Remarks</td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-82fe">liter_card</td>
            <td class="tg-82fe">gasoline_card</td>
            <td class="tg-82fe">num_card</td>
            <td class="tg-nb2d">/</td>
            <td class="tg-nb2d"></td>
            <td class="tg-82fe">num_card</td>
            <td class="tg-xam4">Amount Utilized</td>
            <td class="tg-82fe">amount_card</td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-xam4">Balance</td>
            <td class="tg-82fe">balance_card</td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-xam4">Invoice</td>
            <td class="tg-82fe">invoice_card</td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-xam4">Plate Number</td>
            <td class="tg-82fe">plate_card</td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-nb2d"></td>
            <td class="tg-xam4">Type of Car</td>
            <td class="tg-82fe">car_card</td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v"></td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-82fe" colspan="2">Purpose</td>
            <td class="tg-xam4" colspan="7">purpose_card</td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v" colspan="9"></td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v" colspan="2"></td>
            <td class="tg-xam4">Requested By:</td>
            <td class="tg-xam4" colspan="2">Approved By:</td>
            <td class="tg-xam4" colspan="2">Issued By:</td>
            <td class="tg-xam4" colspan="2">Received By:</td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-xam4" colspan="2">Signature:</td>
            <td class="tg-sg5v"></td>
            <td class="tg-sg5v" colspan="2"></td>
            <td class="tg-sg5v" colspan="2"></td>
            <td class="tg-sg5v" colspan="2"></td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-xam4" colspan="2">Printed Name:</td>
            <td class="tg-82fe">request_name_card</td>
            <td class="tg-82fe" colspan="2">MARC REMBRANDT P. VICTORE</td>
            <td class="tg-82fe" colspan="2">JERVIS LLOYD M. ATILANO</td>
            <td class="tg-82fe" colspan="2">received_name_card</td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-xam4" colspan="2">Designation:</td>
            <td class="tg-82fe">position_card</td>
            <td class="tg-82fe" colspan="2">OIC, OCD MIMAROPA</td>
            <td class="tg-82fe" colspan="2">SUPPLY ACCOUNTABLE OFFICER</td>
            <td class="tg-82fe" colspan="2">position_card</td>
          </tr>
          <tr>
            <td class="tg-sg5v"></td>
            <td class="tg-xam4" colspan="2">Date:</td>
            <td class="tg-82fe">date_card</td>
            <td class="tg-82fe" colspan="2">date_card</td>
            <td class="tg-82fe" colspan="2">date_card</td>
            <td class="tg-82fe" colspan="2">date_card</td>
          </tr>
        </tbody></table>
    
</body>
</html>