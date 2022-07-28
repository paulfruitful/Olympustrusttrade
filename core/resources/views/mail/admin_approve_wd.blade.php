<?php
    $st = App\site_settings::find(1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Withdrawal Approval</title>
	<link rel="stylesheet" href="{{env('APP_URL')}}/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>
<body>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="border:1px solid #CCC; padding:4%; box-shadow:2px 2px 4px 4px #CCC;">
            <div align="">
        		<img src="{{env('APP_URL')}}/img/{{$st->site_logo}}" style="height:100px; width:100px;" align="center">
        	</div>
        	<h3 align="">Withdrawal Approval</h3>
        	<p>
        	   Hi, this is to notify you that your withdrawal request with ID: <b>{{$md['wd_id']}} on {{env('APP_URL')}} </b> has been approved. <br> 
        	   Kindly wait patiently for deposit into your account.<br>
        	   <b>Account: {{$md['act']}}</b><br>
        	   <b>Amount: {{$md['currency']}}{{$md['amt']}}</b>
        	</p>
        	<p>
        		<i class="fa fa-certificate">{{$st->site_title}} Investment.
        	</p>
        </div>
    </div>
	
</body>
</html>