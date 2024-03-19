<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="myPrintStylesheet.css" type="text/css" media="print" />
</head>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        color: #000;
        font-size: 11px;
    }

    td {
        padding: 5px 5px;
    }

    p {
        font-size: 11px;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 700px;
        /* width: 95%; */
        /* height: 990.23622047px; */
        border: 1.5px solid #000;
        margin: 0 auto;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin-top: 10px;
    }

    td {
        text-align: center;
        border: 0.5px solid #000000;
        border-collapse: collapse;

    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p {
        margin: 0;
        padding: 0px 0;
    }
</style>

<body>
    <div class="container">
        <div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align: center;">
                <tr>
                    <td colspan="6" style="font-size: 14px;">
                        <h4 style="text-align: left;">Buyer Order Number : {{$data->buyer_or_no }}</h4>
                    </td>
                    <td colspan="4" style="font-size: 14px;">
                        <h4 style="text-align: left;">Date :  {{$data->buyer_or_date }}</h4>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" rowspan="4" style="vertical-align: top; text-align: left;">
                        <p>Exporter / Consignor :</p>
                        <h3><strong>{{ $data->exporter->company_name }}</strong></h3>
                        <img src="{{ asset('storage/' . $data->exporter->image) }}" alt="Girl in a jacket" width="50" height="60">
                    </td>
                    <td colspan="2">
                        <p>Buyer's Order / PO.NO.</p>
                    </td>
                    <td colspan="4">
                        <p>{{ $data->exporter_id }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>Date of Packing.</p>
                    </td>
                    <td colspan="4">
                        <p>{{ $data->date_of_packing }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>Flight Date.</p>
                    </td>
                    <td colspan="4">
                        <p>{{ $data->flight_date }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>Gross Weight</p>
                    </td>
                    <td colspan="4">
                        <h4>{{ $data->gross_weight_limit }}</h4>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <p>Vessel: {{ $data->vessel }}</p>
                        <p>Flight No : {{ $data->flight_no }}</p>
                    </td>
                    <td colspan="2">
                        <p>Port of Discharge</p>
                        <p>{{ $data->port_of_discharge }}</p>
                    </td>
                    <td colspan="2">
                        <p>Final Destination</p>
                        <p>{{ $data->final_destination }}</p>
                    </td>
                    <td colspan="1">
                        <h4>BOX MARKING</h4>
                    </td>
                    <td colspan="2">
                        {{ $data->box_marking }}
                    </td>
                </tr>

                <tr>
                    <td width="5%" style="">
                        <p>SL. No.</p>
                    </td>
                    <td width="20%" style="">
                        <p>Item Name / List</p>
                    </td>
                    <td width="10%" style="">
                        <p>Box / Bag</p>
                    </td>
                    <td width="12%" style="">
                        <p>No of Boxes <br /> / Bags</p>
                    </td>
                    <td width="12%" style="">
                        <p>Packing Size <br /> (In Kgs)</p>
                    </td>
                    <td width="25%" style="">
                        <p>Net Qty Packed <br /> (In Kgs)</p>
                    </td>
                    <td style="">
                        <p style="width: 100px;">Box / Bag <br /> Weight (In Kgs)</p>
                    </td>
                    <td style="">
                        <p style="width: 126px;">Gross Weight<br /> Box / Bag (In Kgs)</p>
                    </td>
                    {{-- <td style="">
                        <p style="width: 58px;">Rate in USD</p>
                    </td>
                    <td width="16%" style="">
                        <p style="width: 30px;">Amount in USD</p>
                    </td> --}}
                </tr>
                @foreach($purchaseorder as $purchaseorders)
                <tr>
                    <td>
                        <P>1.</P>
                    </td>
                    <td>
                        <P>{{$purchaseorders->product->name}}</P>
                    </td>
                    <td>
                        <P>{{$purchaseorders->box->box_name}}</P>
                    </td>
                    <td>
                        <P>{{ $purchaseorders->no_of_box }}</P>
                    </td>
                    <td>
                        <P>{{ $purchaseorders->packing_size }}</P>
                    </td>
                    <td>
                        <P>{{ $purchaseorders->net_quantity }}</P>
                    </td>
                    <td>
                        <P>{{ $purchaseorders->box_weight }}</P>
                    </td>
                    <td>
                        <P>{{ $purchaseorders->box_weight_kg }}</P>
                    </td>
                    {{-- <td>
                        <P>202.5</P>
                    </td>
                    <td>
                        <P></P>
                    </td> --}}
                </tr>
                @endforeach
                <tr>
                    <td colspan="3">
                        <h3>Total</h3>
                    </td>
                    <td>
                        <h3>{{ $purchaseorder->sum('no_of_box') }}</h3>
                    </td>
                    <td>
                        <h3>{{ $purchaseorder->sum('packing_size') }}</h3>
                    </td>
                     <td>
                        <h3>{{ $purchaseorder->sum('net_quantity') }}</h3>
                    </td> 
                    <td>
                        <h3>{{ $purchaseorder->sum('box_weight') }}</h3>
                    </td>
                    <td>
                        <h3>{{ $purchaseorder->sum('box_weight_kg') }}</h3>
                    </td>
                    {{-- <td>
                        <h3></h3>
                    </td> --}}
                    {{-- <td>
                        <h3>0.00</h3>
                    </td> --}}
                </tr>
                <tr>
                    <td style="vertical-align: top;">
                        <p>NOTE</p>
                    </td>
                    <td style="vertical-align: top; text-align: left;" colspan="5" width="20%">
                        <div>
                            <p>
                                RATE LAST INVOICE RATE
                            </p>
                            <p>
                                GROSS WEGHT SHOULD NOT BE MORE THEN PLUS 2%
                            </p>
                            <p>
                                NEW WEGHT SHOULD BE LESS THAT 7% OF THE TOTAL GROSS WEGHT
                            </p>
                        </div>
                    </td>
                    <td colspan="4" style="padding: 0; border: 0px;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0"
                            style="text-align: center; height: 100%;">
                            <tr>
                                <td width="25%" style="">
                                    <h4>NOTE</h4>
                                </td>
                                <td width="25%" style="">
                                    <h4 style="width: 50px;">NOS</h4>
                                </td>
                                <td width="25%" style="">
                                    <h4 style="width: 50px;">WEGHT (NET)</h4>
                                </td>
                                <td width="25%" style="">
                                    <h4 style="width: 50px;">WEGHT (GROSS)</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 style="width: 90px;">NO OF BOXES</h4>
                                </td>
                                <td>
                                    <h4></h4>
                                </td>
                                <td>
                                    <h4></h4>
                                </td>
                                <td>
                                    <h4></h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 style="width: 90px;">NO OF BOXES</h4>
                                </td>
                                <td>
                                    <h4></h4>
                                </td>
                                <td>
                                    <h4></h4>
                                </td>
                                <td>
                                    <h4></h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>NO OF BOXES</h4>
                                </td>
                                <td>
                                    <h4></h4>
                                </td>
                                <td>
                                    <h4></h4>
                                </td>
                                <td>
                                    <h4></h4>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <button id="downloadPdf">Download PDF</button>
        </div>
    </div>
</body>

<script>
    document.getElementById('downloadPdf').addEventListener('click', function () {
        // Get the container element
        const container = document.querySelector('.container');

        // Use html2canvas to capture the container element as an image
        html2canvas(container).then(canvas => {
            // Convert the canvas image to a data URL
            const imgData = canvas.toDataURL('image/png');

            // Initialize jsPDF
            const pdf = new jsPDF();

            // Add the captured image to the PDF
            pdf.addImage(imgData, 'PNG', 0, 0);

            // Save the PDF
            pdf.save('document.pdf');
        });
    });
</script>

</html>
