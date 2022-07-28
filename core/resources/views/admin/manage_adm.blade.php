@php($adm_users = search_adm())
@extends('admin.atlantis.layout')
@Section('content')
        <div class="main-panel">
            <div class="content">
                @include('admin.atlantis.main_bar')
                <div class="page-inner mt--5">
                    @include('admin.atlantis.overview')
                    <div id="prnt"></div>
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card_header_bg_blue">
                                    <div class="card-head-row card-tools-still-right">
                                        <h4 class="card-title text-white">{{ __('Admin Users') }}</h4>                                        
                                    </div>
                                    <p class="card-category text-white pl-2">
                                        {{ __('All admin users.') }}
                                    </p>
                                </div>
                                <div class="card-body">                    
                                    <div class="table-responsive">
                                        @include('admin.temp.admin')  
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card_header_bg_blue">
                                    <div class="card-head-row card-tools-still-right">
                                        <h4 class="card-title pl-2 text-white">{{ __('Add New users') }}</h4>                                        
                                    </div>
                                    <p class="card-category text-white pl-2">
                                        {{ __('Create new admin users.') }}
                                    </p>
                                </div>
                                <div class="card-body">                    
                                    <div class="table-responsive">
                                        @include('admin.temp.add_new_admin')  
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
@endSection