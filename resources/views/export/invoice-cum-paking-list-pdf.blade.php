<!DOCTYPE html>
<html lang="en">

<head>
</head>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        color: #000;
        font-size: 11px;
    }

    p {
        font-size: 11px;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 699.21259843px;
        height: 990.23622047px;
        border: 1.5px solid #000;
        margin: 0 auto;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin-top: 10px;
    }

    .border {
        border: 1.5px solid #000;
    }

    .padding {
        padding-top: 6px;
        padding-left: 8px;
        padding-right: 8px;
        padding-bottom: 8px;
    }

    .col1 p {
        line-height: 12px;
    }

    .col2 p {
        line-height: 12px;
    }

    .text_center {
        text-align: center;
    }

    .col3 td {
        vertical-align: top;
    }

    .col4 p {
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 1.1px;
    }
</style>

<body>
    <div class="container">

        <div style="display: flex;">
            <div style="width:50%;">
                <div style="width: 100%;">
                    <div class="border" style="height: 136.06299213px; width: 100%; border-left: 0px; border-top: 0px;">
                        <div class="padding">
                            <p>Goods Consigned form</p>
                            <p>(Exporter's Business Name, Address, Country)</p>
                            <div class="col1"
                                style="position: relative; padding-top: 26px; padding-left: 26.456692913px;">
                                @php
                                // $country='';
                                // $state='';
                                // $city='';
                                // $pin='';
                                // $gst ='';
                                // $iecode='';
                                // $cin='';

                                //  if($exporter->country !=''){
                                //    $country = $exporter->country;
                                //  }
                                //  if($exporter->state !=''){
                                //    $state = '('.$exporter->state.')';
                                //  }
                                //  if($exporter->city !=''){
                                //    $city = $exporter->city.'-';
                                //  }
                                //  if($exporter->pin !=''){
                                //    $pin = $exporter->pin;
                                //  }
                                //  $full = $city.''.$pin.''.$state.' '.$country;

                                //  if ($exporter->gst != '') {
                                //      $gst = 'GST NO : '.$exporter->gst;
                                //  }
                                //  if ($exporter->ie_code != '') {
                                //     $iecode = 'IE CODE : '.$exporter->ie_code;
                                //  }
                                //  if ($exporter->cin != '') {
                                //     $cin = 'CIN : '.$exporter->cin;
                                //  }

                               @endphp
                               
                                <p style="font-size: 14px; margin-bottom: 2px;"><b>{{ $data->exporter->company_name }}</b></p>
                                <p>Regd.off : {{ $data->exporter->address }}</p>
                                <p>{{ $data->exporter->country }}{{ $data->exporter->state }}{{ $data->exporter->city }}{{ $data->exporter->pin }}</p>
                                <p> {{$data->exporter->gst}}</p>
                                <p>{{$data->exporter->iecode}}</p>
                                <p>{{$data->exporter->cin}}</p>
                                <div style="position: absolute; right: 85px; top: 55px;">
                                    <img width="40px"
                                        src="{{ asset('storage/' . $data->exporter->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border" style="height:181.41732283px; width: 100%; border-left: 0px; border-top: 0px;">
                        <div class="padding">
                            <p>Goods Consigned to</p>
                            <p>(Consignee's Business Name, Address, Country)</p>
                            <div class="col1"
                                style="position: relative; padding-top: 20px; padding-left: 26.456692913px;">
                                <p style="font-size: 14px; margin-bottom: 2px; line-height: 18px;"><b>
                                    {{ strtoupper($data->importer->name)}}</b></p>
                                    @php
                                        $gst ='';
                                        $pobox='';
                                        $crno='';

                                        if ($importer1->gst !='') {
                                           $gst = 'GST NO: '.$importer1->gst;
                                        }
                                        if ($importer1->crno !='') {
                                            $crno= 'CR NO: '.$importer1->crno;
                                        }
                                        if ($importer1->pobox !='') {
                                            $pobox= 'P.O BOX: '.$importer1->pobox;
                                        }

                                    @endphp
                                <p>{{strtoupper($data->importer->address)}}</p>
                                <p>{{strtoupper($data->importer->gst)}}</p>
                                <p>{{strtoupper($data->importer->crno)}}</p>
                                <p>{{strtoupper($data->importer->pobox)}}</p>

                            </div>
                            @if ($pass->importer_name2 !='')
                            <hr>
                            <div class="col1"
                            style="position: relative; padding-left: 26.456692913px;">
                            {{-- <p style="font-size: 14px; margin-bottom: 2px; line-height: 18px;"><b>
                                {{ strtoupper($importer2->name)}}</b></p> --}}
                                @php
                                    // $gst ='';
                                    // $pobox='';
                                    // $crno='';

                                    // if ($importer2->gst !='') {
                                    //    $gst = 'GST NO: '.$importer2->gst;
                                    // }
                                    // if ($importer2->crno !='') {
                                    //     $crno= 'CR NO: '.$importer2->crno;
                                    // }
                                    // if ($importer2->pobox !='') {
                                    //     $pobox= 'P.O BOX: '.$importer2->pobox;
                                    // }

                                @endphp
                            {{-- <p>{{strtoupper($importer2->address)}}</p>
                            <p>{{strtoupper($gst)}}</p>
                            <p>{{strtoupper($crno)}}</p>
                            <p>{{strtoupper($pobox)}}</p> --}}
                        </div>
                        @endif
                        </div>
                    </div>
                    <div class="border" style="height:45.354330709px; width: 100%; border-left: 0px; border-top: 0px;">
                        <div style="display: flex;height: 100%;">
                            <div style="width:50%; border-right: 1.5px solid #000; height: 100%;">
                                <div class="padding">
                                    <p>Means of Transport</p>
                                    <p style="font-size: 12px; padding-left: 35px;"><b>{{ strtoupper($data->vessel) }}</b></p>
                                </div>
                            </div>
                            <div style=" width:50%; height: 100%;">
                                <div class="padding">
                                    <p>Port of Loading</p>
                                    {{-- <p style="font-size: 12px; padding-left: 16px;"><b>{{ strtoupper($pass->port_of_loading) }}</b></p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border" style="height:45.354330709px; width: 100%; border-left: 0px; border-top: 0px;">
                        <div style="display: flex;height: 100%;">
                            <div style="width:50%; border-right: 1.5px solid #000; height: 100%;">
                                <div class="padding">
                                    <p>Port of Discharge</p>
                                    <p style="font-size: 12px; padding-left: 35px;"><b>{{ strtoupper($data->port_of_discharge)}}</b></p>
                                </div>
                            </div>
                            <div style="width:50%; height: 100%;">
                                <div class="padding">
                                    <p>Final Destination</p>
                                    <p style="font-size: 12px; padding-left: 16px;"><b>{{ strtoupper($data->final_destination) }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div style="width:50%; display: flex;">
                <div style="width: 100%;">
                    <div class="border" style="height:22.677165354px; width: 100%; border-left: 0px; border-top: 0px;">
                        <div class="padding" style="padding-top: 3px;">
                            <p style="font-size: 14px;">Reference No. : <span style="margin-left: 20px;"></span>
                            </p>
                        </div>
                    </div>
                    <div class="border" style="height:64.251968504px; width: 100%; border-left: 0px; border-top: 0px; ">
                        <div class="padding">
                            <p style="font-size: 14px; margin-top: 4px;">CERTIFICATE OF ORIGIN</p>
                            <p style="font-size: 14px;">(NON-PREFERENTIAL)</p>
                            <p>(Combined declaration & certificate) issued in india</p>
                        </div>
                    </div>
                    <div class="border"
                        style="height:173.85826772px; width: 100%; border-left: 0px; border-top: 0px; text-align: center;">
                        <div class="padding col2">
                            <div class="logo">
                                <img width="50px" src="https://skilledworkerscloud.co.uk/export/public/Bharat-logo.png"
                                    alt="">
                            </div>
                            <p
                                style="font-size: 15px; margin-bottom: 2px; margin-top:-5px; line-height: 18px; letter-spacing: 1px;">
                                <b>BHARAT CHAMBER OF
                                    COMMERCE</b>
                            </p>
                            <p style="font-size: 13px;">'BHARAT CHAMBERS'</p>
                            <p style="font-size: 11px; line-height: 13px;">
                                9/1, Syed Amir Ali Avenue, Kolkata-700 017, India
                                <br />
                                Phone: 2282-9591, 2283-9608, Fax: 033-2282-4947
                                <br />
                                E-mail: info@bharatchamber.com, bharat.chamber@gmail.com
                                <br />
                                CIN:U91110WB1926GAP005483, Website: www.bharatchamber.com
                            </p>
                            <p style="font-size: 12px;">
                                GSTIN: 19AAAAB217101ZH
                            </p>
                        </div>
                    </div>
                    <div class="border" style="height:147.4015748px; width: 100%; border-left: 0px; border-top: 0px;">
                        <div class="padding">For official use :</div>
                    </div>
                </div>
            </div>

        </div>
        <div style="height: 287.24409449px; border-bottom: 1.5px solid #000;">
            <div class="padding">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="col3">
                    <tr>
                        <td class="text_center" style="padding-bottom: 25px;" width="7%">Item No</td>
                        <td width="12%" style="padding-left: 5px;">Marks & No.
                            <br />
                            of Packages
                        </td>
                        <td width="12%">No. & kind<br />
                            of Packages</td>
                        <td width="40%">Description of Goods</td>
                        <td width="9%" style="text-align: center;">Origin<br />
                            Criteria</td>
                        <td width="20%" class="text_center">Gross weight/<br />
                            Quantity</td>
                    </tr>
                    <tr>
                        <td class="col4">
                            <p class="text_center">1.</p>
                        </td>
                        <td class="col4" style="padding-left: 5px;">
                            <p>{{ strtoupper($pass->marks_of_package) }}</p>
                            <p>{{ strtoupper($pass->total_package) }}</p>
                        </td>
                        <td class="col4">
                            <p>{{ strtoupper($pass->type_of_packeg) }}</p>
                        </td>
                        <td class="col4">
                            <p>{{ strtoupper($goods->name) }}</p>
                            @forelse ($goods->products as $product)
                                <p>{{ strtoupper($product->name) }}</p>
                            @empty
                            @endforelse
                        </td>
                        <td class="col4" style="text-align: center;">
                            <p>{{ strtoupper($pass->origin_criteria) }}</p>
                        </td>
                        <td class="col4">
                            <p>GROSS WEIGHT {{ strtoupper($pass->gross_weight_quantity) }}</p>
                            <p>NET WEIGHT {{ strtoupper($pass->net_weight_quantity) }}</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="height: 30.236220472px; border-bottom: 1.5px solid #000; display: flex;">
            <div style="width:438.42519685px; height: 100%;">
                <div class="padding" style="padding-top: 6px;">Invoice No : <span
                        style="font-size: 13px; margin-left: 15px;"><b>{{ strtoupper($pass->invoice_no) }}</b></span>
                </div>
            </div>
            <div style="height: 100%; width:268.34645669px;">
                <div class="padding" style="padding-top: 6px;">Date : <span
                        style="font-size: 13px; margin-left: 15px;"><b>{{ strtoupper(\Carbon\Carbon::parse($pass->date)->format('d/m/Y')) }}</b>
                    </span></div>
            </div>
        </div>
        <div style="height: 257.00787402px; display: flex;">
            <div style="width:415px; border-right: 1.5px solid #000; height: 100%;">
                <div class="padding">
                    <p
                        style="font-size: 13px; margin-bottom: 2px; line-height: 18px; letter-spacing: 2px; text-align: center;">
                        <b>
                            <u>CERTIFICATION</u></b>
                    </p>
                    <p>It is here by certified, on the basis of control carried out, that the declaration by
                        the exporter is correct.</p>
                    <div style="width: 300px; margin-top: 50px; margin-left: 122px;">
                        <div class="text_center">
                            <p style="margin-bottom: 3px;">Special Officer / Secretary / secretary General</p>
                            <p>BHARAT CHAMBER OF COMMERCE</p>
                        </div>
                        <div style="margin-top: 15px; margin-left: 110px;">
                            <div style="display: flex;">
                                <p style="margin-bottom: 10px;"><span
                                        style="width: 80px; display: inline-block;">Place</span> <small
                                        style="margin-right: 5px;"><b>:</b></small> Kolkata, India</p>
                            </div>
                            <div style="display: flex;">
                                <p style="margin-bottom: 10px;"><span
                                        style="width: 80px; display: inline-block;">Date</span> <small
                                        style="margin-right: 5px;"><b>:</b></small>
                                </p>
                            </div>
                            <div style="display: flex;">
                                <p style="margin-bottom: 10px;"><span style="width: 80px; display: inline-block;">Issued
                                        By</span> <small style="margin-right: 5px;"><b>:</b></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 100%; width:285px;">
                <div class="padding">
                    <p style="margin-bottom: 8px;">Declaration by the exporter <b>:</b> </p>
                    <p style="line-height: 18px; letter-spacing:0.4px; text-align: justify;">The undersigned hereby
                        declares that the
                        above details and statements are correct; that all the
                        goods were produced in
                        India</p>
                    <p
                        style="line-height: 18px; letter-spacing:0.4px; text-align: justify; margin-top: 5px; position: relative;">
                        and that
                        they comply with
                        the origin requirements for exports to
                        <span><b><small
                                    style="position: absolute; width:75%; text-align: center; font-size: 13px;">{{ strtoupper($pass->export_to) }}</small>
                                .....................................................</b></span>
                    </p>
                    <p>(importing country)</p>

                    <div style="margin-top: 10px;">
                        <div style="display: flex;">
                            <p style="margin-bottom: 10px;"><span
                                    style="width: 80px; display: inline-block;">Place</span> <small
                                    style="margin-right: 5px;"><b>:</b></small> <label style="font-size: 14px;">
                                        {{ strtoupper($pass->place) }} </label></p>
                        </div>
                        <div style="display: flex;">
                            <p style="margin-bottom: 10px;"><span
                                    style="width: 80px; display: inline-block;">Date</span> <small
                                    style="margin-right: 5px;"><b>:</b></small> <label style="font-size: 14px;">
                                        {{ strtoupper(\Carbon\Carbon::parse($pass->place_date)->format('d/m/Y')) }}</label>
                            </p>
                        </div>
                    </div>

                    <div style="text-align: right; margin-top: 0px;">
                        <p style="margin-bottom: 15px;"><b>Director</b></p>
                        <p>Signature of authorised signatory</p>
                        <p>with stamp</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
