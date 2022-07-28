<?php
    $st = App\site_settings::find(1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Withdrawal Notification</title>
</head>
<body>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="border:1px solid #CCC; padding:4%; box-shadow:2px 2px 4px 4px #CCC;">
            <div align="">
        		<img src="{{env('APP_URL')}}/img/{{$st->site_logo}}" style="height:100px; width:100px;" align="center">
        	</div>
        	<h3 align="">Withdrawal Notification</h3>
        	<p>
        	   Hi, this is to notify you that <b>{{$md['username']}}</b> has made a withdrawal request on {{env('APP_URL')}}
        	   <br>
        	   Kindly attend to this withdrawal request.
        	</p>
        	<p>
        		<i class="fa fa-certificate">{{$st->site_title}} Investment.
        	</p>
        </div>
    </div>
	
</body>
</html>