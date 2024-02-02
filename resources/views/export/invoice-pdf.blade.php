<!DOCTYPE html>
<html lang="en">

<head>
</head>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        color: #000;
        font-size: 12px;
    }

    .border {
        border: 2px solid #000;
    }

    .box1 {
        height: 120px;
        margin-top: -2px;
    }

    h1,
    h2,
    h3 {
        font-weight: bold;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p {
        padding: 0;
        margin: 0;
    }

    .container {
        width: 222mm;
    }

    .table_col {
        height: 100%;
    }

    .table_col td {
        border-bottom: 2px solid #000;
        border-collapse: collapse;
        text-align: center;
    }

    p {
        line-height: 17px;
    }

    .table_col2 td {
        border: 2px solid #000;
        border-collapse: collapse;
        vertical-align: middle;
    }

    .table_col2 P {
        padding: 0 5px;
        font-size: 10px;
        font-weight: bold;
    }

    .Bank_section td {
        border: 0px;
        text-align: left;
        height: 5px;
    }

    .Bank_section td p {
        font-size: 9px;
        line-height: 10px;
        font-weight: bold;
    }
</style>

<body>

    <div class="container" style="margin: 0 auto;">

        <div style="width:100%;">
            <div class="border" style="text-align: center; text-transform: uppercase;">
                <h2 style="margin-top: 8px; margin-bottom: 8px;">Commercial Invoice</h2>
            </div>
            <div style="display: flex;">
                <div class="border box1" style="width: 50%; border-top: 0px; display: flex; position: relative;">
                    <div style="padding: 5px;">
                        @php
                         $coutry='';
                         $state='';
                         $city='';
                         $pin='';
                          if($data->exporter->country !=''){
                            $country = $data->exporter->country;
                          }
                          if($data->exporter->state !=''){
                            $state = '('.$data->exporter->state.')';
                          }
                          if($data->exporter->city !=''){
                            $city = $data->exporter->city.'-';
                          }
                          if($data->exporter->pin !=''){
                            $pin = $data->exporter->pin;
                          }
                          $full = $city.''.$pin.''.$state.' '.$country;

                        @endphp
                        <h3 style="margin-bottom: 15px;">Exporter / Consignor:</h3>
                        <h3 style="margin-bottom: 15px;">{{ $data->exporter->company_name }}.</h3>
                        <p style="margin-bottom: 15px;"><b>Regd. Office: {{ $data->exporter->address }},</b></p>
                        <p><b>{{  $full }}</b></p>
                        <div style="position:absolute; top:15px; bottom:0px; right: 10px;"><img src="{{ asset('storage/' . $data->exporter->image) }}" alt="" width="80px"></div>
                    </div>
                    <div>
                        <img style="width: 75px; margin-top: 20px;"
                            src="https://skilledworkerscloud.co.uk/export/public/theme/logo.jpeg" alt="" />
                    </div>
                </div>
                <div class="border box1"
                    style="margin-top: -2px; position: relative;  width: 50%;border-left: 0px;border-top: 0px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_col">
                        <tr>
                            <td width="60%" style="border-right: 2px solid #000;">
                                <h3>Export Invoice No.</h3>
                            </td>
                            <td width="40%">
                                <h3>{{$data->invoice_no}}</h3>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-right: 2px solid #000;">

                                <h3>Date of Invoice.</h3>
                            </td>
                            <td>
                                <h3>{{ \Carbon\Carbon::parse($data->date_invoice)->format('j M-y') }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-right: 2px solid #000;">
                                <h3>Despatch Date.</h3>
                            </td>
                            <td>
                                <h3>{{ \Carbon\Carbon::parse($data->date_invoice)->format('j M-y') }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-right: 2px solid #000;">
                                <h3 style="font-weight: normal;">Buyer's Order / PO.No.</h3>
                            </td>
                            <td>
                                <h3 style="font-weight: normal;">AMF/SE/ <span style="margin: 0 15px;">{{ $data->po_no }}</span>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom: 0px; border-right: 2px solid #000;">
                                <h3>Order By Mail / WhatsApp - Dated</h3>
                            </td>
                            <td style="border-bottom: 0px;">
                                <h3><span style="margin: 0 15px;">{{ \Carbon\Carbon::parse($data->order_by_date)->format('j M-y') }}</span>
                                </h3>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div style="width:100%;">
            <div style="display: flex;">
                <div class="border box1" style="width: 60%; border-top: 0px; height:155px;">
                    <div style="padding: 5px;">
                        <p style="margin-bottom: 6px;"><b>Importer / Consignee:</b></p>
                        @php
                            $crno='';
                            $pobox='';
                            $address='';

                            if($data->importer->crno !='' ){
                                $crno = 'C.R NO : '.$data->importer->crno.',';
                            }
                            if($data->importer->pobox !='' ){
                                $crno = 'P.O BOX : '.$data->importer->pobox.',';
                            }
                            if($data->importer->address !='' ){
                                $crno = $data->importer->address;
                            }
                            $full_impoter = $crno.''.$pobox.''.$address;

                        @endphp
                        <h3 style="margin-bottom: 6px;">{{ $data->importer->name }}</h3>
                        <p><b>{{ $full_impoter }}</b></p>
                           @if ($data->importer2 !='')
                            <hr>
                            <p style="margin-bottom: 6px;"><b>Importer / Consignee:</b></p>
                            @php
                                $crno='';
                                $pobox='';
                                $address='';

                                if($data->importer2->crno !='' ){
                                    $crno = 'C.R NO : '.$data->importer2->crno.',';
                                }
                                if($data->importer->pobox !='' ){
                                    $crno = 'P.O BOX : '.$data->importer2->pobox.',';
                                }
                                if($data->importer2->address !='' ){
                                    $crno = $data->importer2->address;
                                }
                                $full_impoter = $crno.''.$pobox.''.$address;

                            @endphp
                            <h3 style="margin-bottom: 6px;">{{ $data->importer2->name }}</h3>
                            <p><b>{{ $full_impoter }}</b></p>
                            @endif
                    </div>
                </div>

                <div class="border box1"
                    style="margin-top: -2px; position: relative;  width: 40%;border-left: 0px;border-top: 0px; height:155px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_col">
                        <tr>
                            <td><b>
                                    <p>Buyer(if other than Consignee)</p>
                                    <p>AWBNO:{{ $data->awb_no }}</p>
                                </b>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <b>GST NO:{{ $data->gst_no }}</b>
                                </p>
                            </td>

                        </tr>
                        <tr>
                            <td style="border-bottom: 0px;">
                                <h3>TERMS OF DELIVERY & PAYMENT
                                    <br />
                                    FOB & TT / ADVANCE BASIS
                                </h3>
                            </td>

                        </tr>

                    </table>
                </div>
            </div>
        </div>

        <div class="border" style="border-top: 0px; border-bottom: 0px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_col table_col2">
                <tr>
                    <td width="16.4%" style="border-top: 0px; border-left: 0; border-bottom: 0px; border-right: 0;">
                        <p><b>Pre-Carriage By</b></p>
                        <p><b>{{ isset($data->pre_carriage) ? strtoupper($data->pre_carriage) : 'NA' }}</b></p>
                    </td>
                    <td width="25.7%" style="border-top: 0px; border-bottom: 0px; border-right: 0;" colspan="2">
                        <p><b>Place of Receipt by Pre-Carrier</b></p>
                        <p><b>{{ isset($data->pre_carrier) ? strtoupper($data->pre_carrier) : 'NA' }}</b></p>
                    </td>
                    <td width="37%" style="border-top: 0px; border-bottom: 0px; border-right: 0;" colspan="2">
                        <p><b>Country of Origin of Goods</b></p>
                        <p><b>{{ isset($data->country_origin_goods) ? strtoupper($data->country_origin_goods) : 'NA' }}</b></p>
                    </td>
                    <td style="border-top: 0px; border-bottom: 0px; border-right: 0; border-right: 0;">
                        <p><b>Country of Final Destination</b></p>
                        <p><b>{{ isset($data->country_final_destination) ? strtoupper($data->country_final_destination) : 'NA' }}</b></p>
                    </td>
                </tr>
            </table>
        </div>

        <div class="border" style="border-top: 0px; border-bottom: 0px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_col table_col2">
                <tr>
                    <td colspan="2" style="border-right: 0px; border-left: 0px;">
                        <p>Vessel: {{ isset($data->vesel) ? strtoupper($data->vesel) : 'NA' }}</p>
                        <p>Flight No : {{ isset($data->flight_no) ? strtoupper($data->flight_no) : 'NA' }}</p>
                    </td>
                    <td style=" border-right: 0px;">
                        <p>Port of Loading</p>
                        <p>{{ isset($data->port_of_loading) ? strtoupper($data->port_of_loading) : 'NA' }}</p>
                    </td>
                    <td colspan="2" style=" border-right: 0px;">
                        <p>Port of Discharge</p>
                        <p>{{ isset($data->port_of_discharge) ? strtoupper($data->port_of_discharge) : 'NA' }}</p>
                    </td>
                    <td colspan="2" style=" border-right: 0px; white-space: nowrap;">
                        <p>Final Destination</p>
                        <p>{{ isset($data->final_destination) ? strtoupper($data->final_destination) : 'NA' }}</p>
                    </td>
                    <td colspan="2" style=" border-right: 0px;">
                        <h3>
                            BOX MARKING
                        </h3>
                    </td>
                    <td style=" border-right: 0px;">
                        <h1>{{ isset($data->box_marking) ? strtoupper($data->box_marking) : 'NA' }}</h1>
                    </td>
                </tr>

                <tr>
                    <td width="8%" style="border-left: 0px; border-right: 0px; border-top: 0px;">
                        <p>Counting</p>
                    </td>
                    <td width="10%" style="border-right: 0px; border-top: 0px;">
                        <p>BOX & BAG</p>
                        <p>Dimention</p>
                    </td>
                    <td width="7%" style="border-right: 0px; border-top: 0px;">
                        <p>No of Box / Bag</p>
                    </td>
                    <td width="9%" style="border-right: 0px; border-top: 0px;">
                        <p>Type Box / Bag</p>
                    </td>
                    <td width="9%" style="border-right: 0px; border-top: 0px;">
                        <p>PKGS Size</p>
                    </td>
                    <td width="30%" style="border-right: 0px; border-top: 0px;">
                        <p>Description Of Goods <span style="text-decoration: underline;">VEGETABLE & FRUITS</span></p>
                    </td>
                    <td width="8%" style="border-right: 0px; border-top: 0px;">
                        <p>HS CODE</p>
                    </td>
                    <td width="8%" style="border-right: 0px; border-top: 0px; white-space: nowrap;">
                        <p>Quantity (KGS)</p>
                    </td>
                    <td width="8%" style="border-right: 0px; border-top: 0px;">
                        <p>Rate</p>
                        <p>(USD/KGS)</p>
                    </td>
                    <td width="15%" style="border-right: 0px; border-top: 0px; white-space: nowrap;">
                        <p>AMOUNT (USD)</p>
                    </td>
                </tr>

                <!-- loop start-->
                @foreach ($data->items as $item)
                <tr>
                    <td style="border-left: 0px; border-right: 0px; border-top: 0px;">
                        <p>{{ isset($item->counting) ? $item->counting : '' }}</p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p>{{ isset($item->dimention) ? $item->dimention : '' }}</p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p>{{ isset($item->no_of_bag_box) ? $item->no_of_bag_box : '' }}</p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p>{{ isset($item->type_bag_box) ? $item->type_bag_box : '' }}</p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p>{{ isset($item->pkgs_size) ? $item->pkgs_size : '' }}</p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px; text-align: left;">
                        <p>{{ isset($item->product->name) ? strtoupper($item->product->name) : '' }}</p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p>{{ isset($item->product->hscode) ? strtoupper($item->product->hscode) : '' }}</p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p>{{ isset($item->quantity) ? $item->quantity : '' }}</p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p>${{ isset($item->rate) ? $item->rate : '' }}</p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px; text-align: right;">
                        <p>${{ isset($item->amount) ? $item->amount : '' }}</p>
                    </td>
                </tr>
                @endforeach

                <!-- loop end-->

                <tr>
                    <td colspan="2" style="border-left: 0px; border-right: 0px; border-top: 0px;">
                        <p><b>Total No of Box & Bags</b></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p><b>{{ $invoiceitem->totalbags }}</b></p>
                    </td>
                    <td colspan="2" style="border-right: 0px; border-top: 0px;">
                        <p><b><span style="font-size: 8px; margin-right:2px">Gross WT.In Kgs</span> {{ isset($invoiceitem->gross_weight) ? $invoiceitem->gross_weight : 0 }}</b></p>
                    </td>
                    <td colspan="2" style="border-right: 0px; border-top: 0px;">
                        <p><b><span style="margin-right:20px">Net WT. In Kgs</span></b></p>
                    </td>
                    <td style="border:0; border-bottom: 2px solid #000;">
                        <p><b>{{ isset($invoiceitem->gross_weight) ? $invoiceitem->gross_weight : 0 }}</b></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p><b>Exchage</b></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px; text-align: right;">
                        <p>$0.00</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="9" style="border-left: 0px; border-right: 0px; border-top: 0px;">
                        <p><b>Total Amount Payable in USD</b></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px; text-align: right;">
                        <p><b>${{ isset($invoiceitem->totalAmount) ? $invoiceitem->totalAmount : 0 }}</b></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="border-left: 0px; border-right: 0px; border-top: 0px;">
                        <p><b>Total Amount Payable in Words:-</b></p>
                    </td>
                    <td colspan="6"
                        style="border-right: 0px; border-top: 0px; text-align: left; text-transform: uppercase;">
                        @php
                        // Assuming $item->totalAmount is the dynamic numeric value
                        $numericValue = isset($invoiceitem->totalAmount) ? $invoiceitem->totalAmount : 0;
                        //$numericValue = 5600.12;

                        // Convert the numeric value to words with dollars and cents
                        $amountInWords = convertToWordsWithCurrency($numericValue);

                        function convertToWordsWithCurrency($amount) {
                            $numberToWords = new \NumberToWords\NumberToWords();
                            $transformer = $numberToWords->getNumberTransformer('en');

                            // Extract dollars and cents
                            $dollars = floor($amount);
                            $cents = round(($amount - $dollars) * 100);

                            // Convert dollars to words
                            $dollarsInWords = ucfirst($transformer->toWords($dollars));

                            // Convert cents to words
                            $centsInWords = ucfirst($transformer->toWords($cents));

                            // Build the final result
                            $result = $dollarsInWords . ' Dollars';

                            if ($cents > 0) {
                                $result .= ' and ' . $centsInWords . ' Cents';
                            }

                            return $result;
                        }
                    @endphp
                        <p><b>{{ $amountInWords }}</b></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="10"
                        style="border-left: 0px; border-right: 0px; border-top: 0px; text-transform: uppercase;">
                        <p><b>Banking coordinates - Shalia export and import Private limited</b></p>
                    </td>
                </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_col table_col2">
                <tr>
                    <td width="50%" style="border-left: 0px; border-top: 0px; text-transform: uppercase;">
                        <p><b>Bank 1 (ONE)</b></p>
                    </td>
                    <td style="border-left: 0px; border-right: 0px; border-top: 0px; text-transform: uppercase;">
                        <p><b>Bank 2 (Two)</b></p>
                    </td>
                </tr>
                <tr>
                    <td width="50%"
                        style="border-left: 0px; border-top: 0px; text-transform: uppercase; height: 120px; vertical-align: top; text-align: left;">
                        <table class="Bank_section" width="100%" border="0">
                            <tr>
                                <td width="40%">
                                    <p style="margin-bottom: 10px;"><b>Bank Name:</b></p>
                                </td>
                                <td width="60%">
                                    <p style="margin-bottom: 10px;">
                                        <b>
                                          {{ isset($bank1->bank_name) ? $bank1->bank_name : 'NA' }}
                                        </b>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin-bottom: 10px;"><b>Account Name:</b></p>
                                </td>
                                <td>
                                    <p style="margin-bottom: 10px;"><b>{{ isset($bank1->account_name) ? $bank1->account_name : 'NA' }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Account nUMBER:</b></p>
                                </td>
                                <td>
                                    <p><b>{{ isset($bank1->account_number) ? $bank1->account_number : 'NA' }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Swift Code:</b></p>
                                </td>
                                <td>
                                    <p><b>{{ isset($bank1->swift_code) ? $bank1->swift_code : 'NA' }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>IFSC:</b></p>
                                </td>
                                <td>
                                    <p><b>{{ isset($bank1->ifsc_code) ? $bank1->ifsc_code : 'NA' }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Authorized Dealer Code:</b></p>
                                </td>
                                <td>
                                    <p><b>{{ isset($bank1->dealer_code) ? $bank1->dealer_code : 'NA' }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Branch Address:</b></p>
                                </td>
                                <td>
                                    <p><b>{{ isset($bank1->address) ? $bank1->address : 'NA' }}</b></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td
                        style="border-left: 0px; border-right: 0px; border-top: 0px; text-transform: uppercase; height: 120px; vertical-align: top; text-align: left">
                        <table class="Bank_section" width="100%" border="0">
                            <tr>
                                <td width="40%">
                                    <p style="margin-bottom: 10px;"><b>Bank Name:</b></p>
                                </td>
                                <td width="60%">
                                    <p>{{ isset($bank2->bank_name) ? $bank2->bank_name : 'NA' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin-bottom: 10px;"><b>Account Name:</b></p>
                                </td>
                                <td>
                                    <p style="margin-bottom: 10px;"><b>{{ isset($bank2->account_name) ? $bank2->account_name : 'NA' }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Account Number:</b></p>
                                </td>
                                <td>
                                    <p><b>{{ isset($bank2->account_number) ? $bank2->account_number : 'NA' }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Swift Code:</b></p>
                                </td>
                                <td>
                                    <p><b>{{ isset($bank2->swift_code) ? $bank2->swift_code : 'NA' }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>IFSC:</b></p>
                                </td>
                                <td>
                                    <p><b>{{ isset($bank2->ifsc_code) ? $bank2->ifsc_code : 'NA' }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Authorized Dealer Code:</b></p>
                                </td>
                                <td>
                                    <p><b>{{ isset($bank2->dealer_code) ? $bank2->dealer_code : 'NA' }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Branch Address:</b></p>
                                </td>
                                <td>
                                    <p><b>{{ isset($bank2->address) ? $bank2->address : 'NA' }}</b></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_col table_col2">
            <tr>
                <td width="50%" style="border-top: 0px;">
                    <div style="border-bottom: 2px solid #000; padding:5px 0px; text-align: left;">
                        <p>Additional Information</p>
                        <p>CIN: U74999WB2018PTC228660</p>
                        <p>IEC: ABBCS0721R</p>
                        <p>APEDA REgistration No: 193355, Dates: 15-11-2018</p>
                    </div>
                    <div>
                        <p style="text-align: left;">
                            <b style="text-decoration: underline;">Declaration:</b>
                            We on behalf of shalia Export and Import Private Limited
                            declare that the products are from the Indian Origin,
                            Enclosed the Certioficate of Origin, and all other details
                            furnished above are true and conrrect from the best of my knowledge.
                        </p>
                    </div>
                </td>
                <td style="border-top: 0px; border-left: 0px; vertical-align: top;">
                    <div style="border-bottom: 2px solid #000; padding:5px 0px; text-align: center;">
                        <p style="height:15px;">
                            <b>For Shalia Export & Import PVT. LTD.</b>
                        </p>
                    </div>

                    <div>
                        <p style="text-transform: uppercase; margin-top: 15px;"><b>{{ $data->exporter->company_name }}.</b></p>
                    </div>
                    <div style="display: flex;">
                        <div style="margin-left: 15px;">
                            <img style="width: 75px; margin-top: 5px;"
                                src="https://skilledworkerscloud.co.uk/export/public/theme/logo.jpeg" alt="">
                        </div>
                        <div style="width: 78%; margin-top: 20px;">
                            <p><b>Director:</b></p>
                            <p style="text-align: right; margin-top: 20px;"><b>Authorized Signature.</b></p>
                        </div>
                    </div>

                </td>
            </tr>
        </table>
    </div>
</body>

</html>
