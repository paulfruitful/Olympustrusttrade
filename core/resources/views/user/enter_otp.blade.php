@extends('inc.auth_layout')
<title>2FA OTP - {{env('APP_NAME')}}</title>
@section('content')
<body>
    <div class="">
        <img src="/img/adult.jpg" class="fixedOverlayIMG">         
        <div class="fixedOeverlayBG"></div>
        <div class="container">
            <div class="row pad_T90">
                <div class="col-md-4"></div>
                <div class="col-md-4">   
                        <div class="card ">
                            <div class="card-header">
                                <div align="center">
                                    <h3 class="colhd"><i class="fa fa-key"></i>{{ __(' Enter 2FA OTP') }} </h3>
                                </div>
                            </div>
                            <div class="card-body" style="">
                                <form action="{{ route('session_sa.verify_u2s') }}" method="post">
                                    <div class="form-group row ">
                                       <input type="number" name="otp" class="form-control border-info">
                                    </div>
                                    <div class="form-group  text-center " align="center">
                                       <button type="submit" class="btn collc btn-primary ">Verify OTP</button>
                                    </div>
                                </form>
                                    
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection