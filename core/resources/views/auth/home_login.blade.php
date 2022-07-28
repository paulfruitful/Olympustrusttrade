@extends('inc.ai_layout')
@section('content')
<body>
    <div style="">
        <img src="/img/inv_bg2.jpg" class="fixedOverlayIMG">         
        <div class="fixedOeverlayBG"></div>
        <div class="">
            <div class="row login_row_cont">
                <div class="col-md-3 ">                                    
                </div>
                <div class="col-md-6 bg_white mt-5">
                    
                    <div class="row">
                        <div class="col-md-12 " >
                            <div style="">                        
                                <div class="">
                                    <div class="">
                                        <div align="center">
                                            <br>
                                            <img src="/img/{{$settings->site_logo}}" alt="{{$settings->site_title}}" class="login_logo">
                                            <h3 class="colhd mt-2"><i class="fa fa-key"></i>{{ __(' Activation') }}</h3>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="">
                                        <form method="POST" action="{{ route('login_system') }}" class=""> 
                                            @if(Session::has('err'))
                                                <div class="alert alert-danger">
                                                    {{Session::get('err')}}
                                                </div>
                                            @endif                                          
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label>Activation Details</label>
                                                </div>
                                            </div>
                                            <div class="form-group row" >
                                                <div class="col-md-6">
                                                    <input type="text" class="regTxtBox" name="key" value="" required placeholder="Envato Purchase Code">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="regTxtBox" name="app_name" value="" required placeholder="Website Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 mt-2">
                                                    <label>Setup Admin Credentials</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <input type="email" class="regTxtBox" name="username" value="" required placeholder="Admin Email">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="password" class="regTxtBox" name="password" value="" required placeholder="Admin Password">
                                                </div>
                                            </div>
                                            
                                            <!-- <div class="form-group row">
                                                <div class="col-md-6 mt-5">
                                                    <label>Database Details</label>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="col-md-6 mt-3">
                                                    <h6>{{ __('Database Name ') }}</h6>
                                                    <input type="text" class="regTxtBox" name="db_name" value="" required placeholder="">
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <h6>{{ __('Database Username') }}</h6>
                                                    <input type="text" class="regTxtBox" name="db_user" value=""  placeholder="">
                                                </div>
                                                 <div class="col-md-6 mt-3">
                                                    <h6>{{ __('Database Password') }}</h6>
                                                    <input type="password" class="regTxtBox" name="db_pwd" value="" placeholder="">
                                                </div>
                                            </div> -->

                                            <div class="mb-5">
                                                <div class="mt-5" align="center">
                                                    <button type="submit" class="collc btn btn-primary">
                                                        {{ __('Activate') }}
                                                    </button>                               
                                                </div>                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <br><br>
        </div>
    </div>
@endsection
