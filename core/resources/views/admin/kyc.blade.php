@extends('admin.atlantis.layout')
@Section('content')
    <div class="main-panel">
        <div class="content">
            @include('admin.atlantis.main_bar')
            <div class="page-inner mt--5">
                @include('admin.atlantis.overview')
                <div id="prnt"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card_header_bg_blue" >
                                <div class="card-head-row card-tools-still-right">
                                    <h4 class="card-title text-white" > {{ __('KYC Users') }} </h4>
                                    <div class="card-tools">
                                       <form action="/admin/search/user" method="post">
                                            <div class="input-group">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> {{ __('Search') }} </span>
                                                </div>
                                                <input type="text" name="search_val" class="form-control" placeholder="Search by Name, Username, email, phone and status">
                                                <div class="input-group-append" style="padding: 0px;">
                                                    <button class="fa fa-search btn"></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                                                                             
                                </div>
                                <?php
                                    if(Session::has('val'))
                                    {
                                        $kyc = search_user();
                                    }
                                ?>
                                <!-- <p class="card-category text-white" > {{ __('All registered users.') }} </p> -->
                            </div>
                            <div class="card-body">                                
                                <div class="table-responsive">
                                    <table id="" class="table  table-hover" >
                                        <thead>
                                            <tr>                                                                                                
                                                <th>{{ __('Username') }}</th>
                                                <th>{{ __('Selfie') }}</th>
                                                <th>{{ __('Card Type') }}</th>
                                                <th>{{ __('Card Front') }}</th>
                                                <th>{{ __('Card Back') }}</th>
                                                <th>{{ __('Proof Of Address') }}</th>
                                                <th>{{ __('Status') }}</th>
                                                <th>{{ __('Manage') }}</th>
                                            </tr>
                                        </thead>                                        
                                        <tbody>
                                            
                                            @if(count($kyc) > 0 )
                                                @foreach($kyc as $user)
                                                    <tr>
                                                        <td>{{$user->username}}</td>                                                        
                                                        <td>
                                                            <a href="{{ env('APP_URL').'/img/kyc/'.$user->selfie }}" class=" text-info">
                                                                <i class="fa fa-download"></i>Download
                                                            </a>
                                                        </td> 
                                                        <td>{{$user->card_type}}</td>
                                                        <td>
                                                            <a href="{{ env('APP_URL').'/img/kyc/'.$user->front_card }}" class=" text-info">
                                                                <i class="fa fa-download"></i>Download
                                                            </a>
                                                        </td>  
                                                        <td>
                                                            @if(!empty($user->back_card))
                                                            <a href="{{ env('APP_URL').'/img/kyc/'.$user->back_card }}" class=" text-info">
                                                                <i class="fa fa-download"></i>Download
                                                            </a>
                                                            @endif
                                                        <td>
                                                            <a href="{{ env('APP_URL').'/img/kyc/'.$user->address_proof }}" class=" text-info">
                                                                <i class="fa fa-download"></i>Download
                                                            </a>                                                            
                                                        </td>
                                                        <td>
                                                            @if($user->status == 1 )
                                                                {{__('Verified')}}
                                                            @elseif($user->status == 0)
                                                                {{__('Pending')}}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a title="Approve" href="{{ route('admin_kyc.approve_kyc', ['id' => $user->id]) }}" class=" text-success">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                            <a title="Reject" href="{{ route('admin_kyc.reject_kyc', ['id' => $user->id]) }}" class=" text-danger">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </td>                                     
                                                    </tr>
                                                @endforeach
                                            @else
                                                
                                            @endif
                                        </tbody>
                                    </table>
                                    <div class="" align="">
                                       <span> {{$kyc->links()}}</span>  
                                    </div>
                                </div>
                                      

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

@endSection
            