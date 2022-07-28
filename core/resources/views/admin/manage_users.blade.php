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
                                    <h4 class="card-title text-white" > {{ __('All Users') }} </h4>
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
                                @php($users_table = search_users())                               
                                <p class="card-category text-white" > {{ __('All registered users.') }} </p>
                            </div>
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="" class="table  table-hover" >
                                        <thead>
                                            <tr>
                                                <th><i class="fa fa-eye"></i></th>
                                                <th>{{ __('Name') }}</th>
                                                <th>{{ __('Username') }}</th>
                                                <th>{{ __('Email') }}</th>
                                                <th>{{ __('Phone') }}</th>
                                                <th>{{ __('Status') }}</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th><i class="fa fa-eye"></i></th>
                                                <th>{{ __('Name') }}</th>
                                                <th>{{ __('Username') }}</th>
                                                <th>{{ __('Email') }}</th>
                                                <th>{{ __('Phone') }}</th>
                                                <th>{{ __('Status') }}</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                            @if(count($users_table) > 0 )
                                                @foreach($users_table as $user)
                                                    <tr>
                                                        <td>
                                                            <a class="btn btn-info" href="/admin/view/userdetails/{{$user->id}}" title="View user details">
                                                                <i class="fa fa-eye"> VIEW</i>
                                                            </a>
                                                        </td>
                                                        <td>{{$user->firstname}} {{$user->lastname}}</td>
                                                        <td>{{$user->username}}</td>
                                                        <td>{{$user->email}}</td>  
                                                        <td>{{$user->phone}}</td>
                                                        <td>
                                                            @if($user->status == 1 || $user->status == 'Active')
                                                                {{'Active'}}
                                                             @elseif($user->status == 0 || $user->status == 'Not Active')
                                                             {{'Not Active'}}
                                                             @else
                                                             {{'Blocked'}}
                                                            @endif
                                                        </td>                                     
                                                    </tr>
                                                @endforeach
                                            @else
                                                
                                            @endif
                                        </tbody>
                                    </table>
                                    <div class="" align="">
                                       <span> {{$users_table->links()}}</span>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endSection