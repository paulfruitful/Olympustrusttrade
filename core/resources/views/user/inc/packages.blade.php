<div class="sparkline8-graph dashone-comment  dashtwo-messages">
    <div class="comment-phara">
        <div class="row comment-adminpr">
            <?php                
                $invs = App\packages::where('status', 1)->orderby('id', 'asc')->get();                
            ?>
            @if($user->phone != '')
                @if(isset($invs) && count($invs) > 0)
                    @foreach($invs as $inv)
                        <div class="col-sm-4">
                            <div class="panel card pack-container" style="" align="center">
                                <div class="panel-head" style="">
                                    <h3 class="txt_transform">{{$inv->package_name}} {{ __('Package') }}</h3>
                                </div>
                                <div class="" align="center" >
                                    <br>
                                        <h4 class="u_case" >
                                            <strong>{{ __('Period of Investment') }}</strong>
                                        </h4>
                                        <div style="font-size: 40px;">
                                            <b>
                                                {{$inv->period}}
                                            </b>
                                        </div>
                                        <span class="pk_num">
                                                {{__('Days')}}
                                        </span>
                                </div>
                                <span align="center">..............................</span>
                                <div class="" align="center" style="">
                                        <h4 class="u_case" >
                                            <strong>{{ __('Min Investment') }}</strong>
                                        </h4>
                                        <span class="pk_num">{{$settings->currency}} {{$inv->min}}</span>
                                        <h4 class="u_case">
                                            <strong>{{ __('Max Investment') }}</strong>
                                        </h4>
                                        <span class="pk_num">{{$settings->currency}} {{$inv->max}}</span>
                                </div>                                                    
                                
                                <span align="center">..............................</span>
                                <div class="" align="center">
                                    <h4 class="u_case">
                                        <strong>Total Interest</strong>
                                    </h4>         
                                     <span class="pk_num">{{$inv->daily_interest*$inv->period*100}}%</span>
                                </div>
                                 <div class="" align="center">
                                    <h4 class="u_case">
                                       <strong> Withdrawal Interval</strong>
                                    </h4> 
                                    <span class="pk_num">{{$inv->days_interval}} Days</span>
                                </div>
                                <div class="" align="center">
                                    <p>{{ __('Capital accessible after investment elapses.') }}</p>
                                </div>
                                <div class="" align="center">
                                        <a id="{{$inv->id}}" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('{{$inv->id}}', '{{$inv->package_name}}', '{{$inv->period}}', '{{$inv->daily_interest}}', '{{$inv->min}}', '{{$inv->max}}', '{{$user->wallet}}')">
                                            {{ __('Invest') }}
                                        </a>
                                        <br><br>
                                </div>
    
                            </div>
                        </div>
                                                                          
                    @endforeach
                @endif
            @else
                <div class="alert alert-warning">
                    <a href="/{{$user->username}}/profile#userdet">{{ __('Please, click here to update your profile before you can invest.') }}</a>
                </div>
            @endif
        </div>
    </div>
</div>