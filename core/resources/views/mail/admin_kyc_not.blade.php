<?php
    $st = App\site_settings::find(1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Withdrawal Approval</title>
	<link rel="stylesheet" href="{{env('APP_URL')}}/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <style type="text/css">
        .btn{
            padding: 6px; background-color: #05a;
        }
        .table_boder{
            border: none;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="border:1px solid #CCC; padding:4%; box-shadow:2px 2px 4px 4px #CCC;">
            <table class="table_boder">
                <tr>
                    <td></td>
                    <td><img src="{{env('APP_URL')}}/img/{{$st->site_logo}}" style="height:100px; width:100px;" align="center"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <h3 align="">KYC Approval Request</h3>
                        <p>
                           Hi Admin, <b>{{$md['username']}} on {{env('APP_NAME')}} </b> has submitted KYC documents for approval. <br> 
                           Kindly attend to this request.<br>                           
                        </p>
                        <p>
                            <i class="fa fa-certificate">{{$st->site_title}} Investment.
                        </p>
                    </td>
                    <td></td>
                </tr>
            </table>
           
        	
        </div>
    </div>
	
</body>
</html>