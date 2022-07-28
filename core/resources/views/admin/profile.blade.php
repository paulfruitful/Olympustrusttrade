@extends('admin.atlantis.layout')
@Section('content')
        <div class="main-panel">
            <div class="content">
                @include('admin.atlantis.main_bar')
                <div class="page-inner mt--5"> 
                    <div class="row mt--2">
                        <div class="col-md-6">
                            <div class="card full-height">
                                <div class="card-body">
                                    <div class="card-title"> {{ __('Profile') }} </div>  
                                    <hr>                                 
                                    <div class="row">
                                        <div class="col-4">
                                            @if($adm->img == "")
                                                <img src="/img/adminAvatar/any.png" alt="avatar" class="admin_usr_img_size">
                                            @else
                                                <img src="/img/adminAvatar/{{$adm->img}}" alt="avatar" class="admin_usr_img_size">
                                            @endif
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col-4"><h5><b> {{ __('Name:') }} </b></h5></div>
                                                <div class="col-8">{{$adm->name}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4"><h5><b> {{ __('Email:') }} </b></h5></div>
                                                <div class="col-8">{{$adm->email}}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12"><h6><b> {{ __('Level:') }} </b> {{$adm->role}} &emsp;|&emsp; <b> {{ __('status:') }} </b> {{($adm->status == 1) ? 'Active' : 'Paused'}}</h6></div>                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12"><h6><b> {{ __('Created on:') }} </b> {{$adm->created_at}} </h6></div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card full-height">
                                <div class="card-body" style="">
                                    <div id="circles-admLevel" align="center"></div><br>
                                    <h5 align="center"> {{ __('Account Level') }} </h5>             
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title"> {{ __('Change Password (Disabled on Demo)') }} </div>                                       
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="/admin/change/pwd" method="post">
                                        <input id="token" type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                                          
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text " ><i class="fa fa-key"></i></span>
                                            </div>
                                              <input type="Password" class="form-control" name="oldpwd" placeholder="Old Password" required>
                                          </div>
                                          <br>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text "><i class="fa fa-key"></i></span>
                                            </div>
                                              <input id="" type="password" class="form-control" name="newpwd" placeholder="New Password" required>
                                        </div>
                                          <br>
                                        <div class="input-group"> 
                                            <div class="input-group-prepend">               
                                              <span class="input-group-text "><i class="fa fa-key"></i></span>
                                            </div>
                                              <input id="" type="password" class="form-control" name="cpwd" placeholder="Confirm Password" required>
                                        </div>
                                          <br>
                                          
                                        <div class="form-group">
                                            <br>
                                              <button class="collb btn btn-info" disabled> {{ __('Update Password') }} </button>
                                              <br>
                                        </div>                                          
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
@endSection