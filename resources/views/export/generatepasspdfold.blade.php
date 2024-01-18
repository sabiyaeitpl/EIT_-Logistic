<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistic Pass</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="stylesheet" href="custom.css"> -->
    <style>
        body{  width: 230mm;
    height: 100%;
    margin: 0 auto;
    padding: 0;
    font-size: 12pt;
    font-family: Arial, Helvetica, sans-serif;
}
*{
    box-sizing: border-box;
}
p,h1,h2,h3,h4,h5,h6{
    margin: 5px;
}
p{
    font-size: 10pt;
}

.container{
    border: 1px solid black;
    width: 222mm;
    height: 318mm;
    margin:10mm auto;
    display: grid;
    grid-template-columns: repeat(4 , 1fr);
    grid-template-rows: repeat(auto-fit);
    position: relative;
}
@page{
    size: A4;
    margin: 0;
}
@media print{
    *{
        box-sizing: border-box;
    }
    p{
        font-size: 9.8pt !important;
        word-spacing: 1px !important;
    }

    .container{
        width: 222mm !important;
        height: 309mm !important;

    }
    .item-box1{
        grid-column: 1/3;
        height: 172px !important;
    }
    .item-box3{
        grid-column: 1/3;
        position: absolute;
        top: 208px !important;
        width: 100%;
        height: 200px !important;
    }
    .item-box4{
        grid-column: 3/5;
        position: absolute;
        top: 66px !important;
        width: 100%;
        height: 72px !important;
        padding: 5px;
    }
    .item-box7{
        grid-column: 3/5;
        position: absolute;
        top: 138px !important;
        width: 100%;
        height: 180px !important;
        text-align: center;
        padding-top: 5px;
        word-spacing: 0px !important;

    }
    .item-box7 h4{
        margin: 0px !important;
    }


    .item-box10{
        grid-column: 3/5;
        position: absolute;
        top: 316px !important;
        width: 100%;
        height: 211px !important;
    }
    .item-box13{
        grid-column: 1/3;
        position: absolute;
        top: 940px;
        width: 495px;
        height: 291px !important;
    }
    .item-box14{
        grid-column: 3/5;
        position: absolute;
        top: 930px;
        width: 344px;
        left: 89px !important;
        height: 291px !important;
        line-height: 13pt !important;
        padding-left: 5px !important;
        word-spacing: 5px !important;
    }
    .box14-a{
        position: absolute;
        left: 125px !important;
        bottom: 0px;
    }
    .box14-a span{
        margin-left: 133px !important;
    }
}
.container > div{
    border: 1px solid #000;

}
.item-box1{
    grid-column: 1/3;
    height: 182px;
}
.item-box2{
    grid-column: 3/5;
    height: 30px;
}
.item-box2 p{
    font-size: 11pt;
}
.item-box3{
    grid-column: 1/3;
    position: absolute;
    top: 182px;
    width: 100%;
    height: 225px;
}
.item-box4{
    grid-column: 3/5;
    position: absolute;
    top: 30px;
    width: 100%;
    height: 72px;
    padding: 5px;

}
.item-box4 p{
    font-size: 14px;
}
.item-box4 span{
    margin-left: 0px;
    font-size: 13px;
}
.item-box5{
    grid-column: 1/2;
    position: absolute;
    top: 407px;
    width: 100%;
    height: 60px;
}
.item-box6{
    grid-column: 2/3;
    position: absolute;
    top: 407px;
    width: 100%;
    height: 60px;
}
.item-box7{
    grid-column: 3/5;
    position: absolute;
    top: 102px;
    width: 100%;
    height: 200px;
    text-align: center;
    padding-top: 5px;
}
.item-box7 span{
font-size: 15px;

}
.item-box7 h4{
    margin: 0px;
}
.item-box7 p>span{
    font-size: 10pt;
}

.item-box8{
    grid-column: 1/2;
    position: absolute;
    width: 100%;
    top: 467px;
    height: 60px;

}
.item-box9{
    grid-column: 2/3;
    position: absolute;
    width: 100%;
    top: 467px;
    height: 60px;

}
.item-box10{
    grid-column: 3/5;
    position: absolute;
    top: 302px;
    width: 100%;
    height: 225px;
}
.item-box11{
    grid-column: 1/5;
    position: absolute;
    top: 527px;
    width: 100%;
    height: 345px;

}
.item-box12{
    grid-column: 1/5;
    position: absolute;
    top: 872px;
    width: 100%;
    height: 40px;
    padding-top: 3px
}
.item-box13{
    grid-column: 1/3;
    position: absolute;
    top: 912px;
    width: 495px;
    height: 289px;
}
.box13 h5{
    text-align: center;
    letter-spacing: 1.5px;
}
.box13 span{
    font-size: 12px;
}
.box13{
    position: relative;
}
.box13-a{
    position: absolute;
    left: 209px;
    top: 82px;

}

.box13-a1{
    text-align: center;
}
.box13-a2{
    position: absolute;
    left: 73px;
}
.item-box14{
    grid-column: 3/5;
    position: absolute;
    top: 912px;
    width: 344px;
    left: 75px;
    height: 289px;
    line-height: 13pt;
    padding-left: 5px;
    word-spacing: 5px;
}
.box14-a{
    position: absolute;
    left: 119px;
    bottom: 7px;
}
.box14-a span{
    margin-left: 142px;
}
p{
    margin: 1px;
    padding: 1px;
}
.ml-10{
  margin-left: 10px;
}
.ml-40{
  margin-left: 40px;
}
.color-fixed{
    color: #1067abc4;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="item-box1">
            <p class="ml-10">Goods Consigned form <br> (Exporter's Business Name, Address, Country)</p>
            <div style="margin-left: 20px;float: left;">
                <h3 style="color: #ff470087;">{{ $exporter->company_name }}</h3>
                <div style="color: #1067abc4;font-weight:600">
                    <p>Regd.off : {{$exporter->address}}</p>
                    <p>{{$exporter->city}} - {{$exporter->pin}} ({{$exporter->state}}){{$exporter->country}}</p>
                    <p>GST NO : {{$exporter->gst}}</p>
                    <p>IE CODE : {{$exporter->ie_code}}</p>
                    <p>CIN : {{$exporter->cin}}</p>
                </div>
            </div>
            <div style="float: left;margin-top: -63px;margin-left: 300px;">
                 <img src="{{ asset('storage/' . $exporter->image) }}" alt="" style="width: 70px;">
            </div>
        </div>
        <div class="item-box2">
            <p class="ml-10"> Reference No. : {{ $pass->reference_id }}</p>
        </div>
        <div class="item-box3">
            <p class="ml-10">Goods Consigned to<br> (Consignee's Business Name, Address, Country)</p>
            <div style="color: #1067abc4;">
             <h3 style="margin-left:20px;">{{ strtoupper($pass->importer_name1)}}</h3>
             <h4 style="margin-left:20px;">{{strtoupper($pass->importer_address1)}}</h4>
             @if ($pass->importer_name2 !='')
             <hr>
             <p style="color: #000;" class="ml-10">Buyer other than Consignee (If Any)</p>
             <h3 style="margin-left:20px;">{{strtoupper($pass->importer_name2)}}</h3>
             <h4 style="margin-left:20px;">{{strtoupper($pass->importer_address2)}}</h4>
             @endif
            </div>
        </div>
        <div class="item-box4">
            <p class="ml-10"> CERTIFICATE OF ORIGIN <br>(NON-PREFERENTIAL) <br> <span> (Combined declaration & certificate)
                issued in india</span></p>

        </div>
        <div class="item-box5">
            <p class="ml-10">Means of Transport</p>
            <h4 class="ml-40 color-fixed">{{ strtoupper($pass->means_of_transport) }}</h4>
        </div>
        <div class="item-box6">
            <p class="ml-10">Port of Loading</p>
            <h4 class="ml-40 color-fixed">{{ strtoupper($pass->port_of_loading) }}</h4>
        </div>
        <div class="item-box7">
            <img width="40px" src="{{asset('Bharat-logo.png')}}" alt="">
            <h4>BHARAT CHAMBER OF COMMERCE</h4>
            <span>'BHARAT CHAMBERS' </span>
            <p>9/1, Syed Amir Ali Avenue, Kolkata-700 017, India <br> Phone: 2282-9591, 2283-9608, Fax: 033-2282-4947
                <br> E-mail:
                info@bharatchamber.com, bharat.chamber@gmail.com <br> CIN:U91110WB1926GAP005483, Website:
                www.bharatchamber.com <br> <span>GSTIN: 19AAAAB217101ZH</span> </p>

        </div>
        <div class="item-box8">
            <p class="ml-10">Port of Discharge</p>
            <h4 class="ml-40 color-fixed">{{ strtoupper($pass->port_of_discharge)}}</h4>
        </div>
        <div class="item-box9">
            <p class="ml-10">Final Destination</p>
            <h4 class="ml-40 color-fixed">{{ strtoupper($pass->final_destination) }}</h4>
        </div>
        <div class="item-box10">
            <p>For official use <b>:</b></p>
        </div>
        <div class="item-box11">
            <table>
                <tr>
                    <td><p>Item No.</p></td>
                    <td width="150px" ><p>Marks & No. <br> of Packages </p></td>
                    <td width="120px"><p>No. & kind <br>of Packages </p></td>
                    <td width="280px" ><p>Description of Goods</p></td>
                    <td width="100px" ><p>Origin <br>Criteria </p></td>
                    <td style="text-align: center"><p>Gross weight/ <br>Quantity </p></td>
                </tr>
                <tr>
                    <td width="5%"><p style="font-size: 15px;"><b>1</b></p></td>
                    <td width="15%">
                        <p style="font-size: 15px;"><b>{{ strtoupper($pass->marks_of_package) }}</b></p>
                        <p style="font-size: 15px;"><b>{{ strtoupper($pass->total_package) }}</b></p>

                    </td>
                    <td width="15%">
                        <p style="font-size: 15px;"><b>{{ strtoupper($pass->type_of_packeg) }}</b></p>
                       </td>
                        <td width="25%">
                            <p style="font-size: 15px;"><b>{{ strtoupper($goods->name) }}</b></p>
                        </td>
                    <td width="10%"><p style="font-size: 15px;"><b>{{ strtoupper($pass->origin_criteria) }}</b></p></td>
                    <td width="30%">
                        <p style="font-size: 15px;"><b> GROSS WEIGHT {{ strtoupper($pass->gross_weight_quantity) }} KG</b></p>
                        <p style="font-size: 15px;"><b> NET WEIGHT {{ strtoupper($pass->net_weight_quantity) }} KG</b></p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>

                        @forelse ($goods->products as $product)
                            <p style="font-size: 15px;"><b>{{ strtoupper($product->name) }}</b></p>
                        @empty

                        @endforelse
                    </td>
                    <td></td>
                    <td></td>
                </tr>

            </table>
        </div>
        <div class="item-box12">
            <table>
                <tr>
                    <td><p class="ml-10">Invoice No. <b>: {{ strtoupper($pass->invoice_no) }}</b></p>
                    </td>
                    <td width="330px"></td>
                    <td><p>Date <b>: {{ strtoupper(\Carbon\Carbon::parse($pass->date)->format('d/m/Y')) }}</b></p></td>

                </tr>
            </table>
        </div>
        <div class="item-box13">
            <div class="box13">
                <h5><U>CERTIFICATION</U></h5>  <p> It is here by certified, on the basis of control carried out,
                    that the declaration by <br> the exporter is correct.</p>

                <div class="box13-a">
                    <div class="box13-a1">
                    <p>Special Officer/Secretary/secretary General </p>
                    <span>BHARAT CHAMBER OF COMMERCE</span>
                    </div>
                    <div class="box13-a2">
                        <p>Place   &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; <b>:</b> Kolkata, India</p>
                        <p>Date&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>:</b> </p>
                        <p>Issued by &nbsp; &nbsp; &nbsp;<b>:</b> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-box14"><p>Declaration by the exporter <b>:</b> </p>
        <p>The undersigned hereby declares that the above details and statements are correct; that all the goods were produced in India <br><br>
            and that they comply with the origin requirements
            for exports
            to   &nbsp; <span style="position: absolute;"> <b>{{ strtoupper($pass->export_to) }}</b></span>.......................................................
            (importing country)</p>
            <p>Place  <b>: {{ strtoupper($pass->place) }}</b></p>

            <p>Date&nbsp;<b>: {{ strtoupper(\Carbon\Carbon::parse($pass->place_date)->format('d/m/Y')) }}</b></p>
            <td><p style="text-align: right;margin-top:20px;padding-right:7px;"><b>{{ $pass->designation }}</b></p></td>

            <div class="box14-a">
                <p>Signature of authorised signatory  <span>with stamp</span></p>
            </div>

               </div>

    </div>
</body>

</html>
