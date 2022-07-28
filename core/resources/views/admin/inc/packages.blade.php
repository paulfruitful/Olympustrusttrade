<div class="sparkline8-graph dashone-comment  dashtwo-messages">
    <div class="comment-phara">
        <div class="row comment-adminpr">
            <?php
                if($user->currency == 'N')
                {
                    $invs = App\packages::where('id', '!=', 3)->orderby('id', 'asc')->get();
                }
                elseif($user->currency == '$')
                {
                    $invs = App\packages::where('id', 3)->orderby('id','asc')->get();
                }

            ?>
            @if(isset($invs) && count($invs) > 0)
                @foreach($invs as $inv)

                    <div class="col-sm-4">
                        <div class="panel card pack-container" style="" align="center">
                            <div class="panel-head" style="padding:15px; background-color: #069; border-bottom: 1px solid #CCC;">
                                <h3 class="txt_transform">{{$inv->package_name}} Package</h3>
                            </div>
                            <div class="" align="center" >
                                <br>
                                    <h4 class="txt_transform" style="text-transform: uppercase;">
                                        <strong>Period of Investment</strong>
                                    </h4>
                                    <div style="font-size: 20px;"><b>56{{$inv->period}}</b></div>
                                    <span class="">Working Days</span>
                            </div>
                            <span align="center">..............................</span>
                            <div class="" align="center" style="">
                                    <h4 class="txt_transform" style="text-transform: uppercase;">
                                        <strong>Min Investment</strong>
                                    </h4>
                                    <span class="pk_num">{{$user->currency}} {{$inv->min}}</span>
                                    <h4 class="txt_transform" style="text-transform: uppercase;">
                                        <strong>Max Investment</strong>
                                    </h4>
                                    <span class="pk_num">{{$user->currency}} {{$inv->max}}</span>
                            </div>                                                    
                            
                            <span align="center">..............................</span>
                            <div class="" align="center">
                                    <h4 class="txt_transform">Daily Interest: {{$inv->daily_interest*100}}%</h4>
                                    <h4 class="txt_transform">Withdrawal Fee: {{$inv->withdrwal_fee*100}}%</h4>
                                    
                            </div>
                            <div class="" align="center">
                                    <a id="{{$inv->id}}" href="javascript:void(0)" class="btn btn-info" style="color:#FFF;" onclick="inv(this.id, '{{$inv->package_name}}', '{{$inv->period}}', '{{$inv->daily_interest}}', '{{$inv->min}}', '{{$inv->max}}', '{{$user->wallet}}')">
                                        Invest
                                    </a>
                                    <br><br>
                            </div>

                        </div>
                    </div>
                                                                      
                @endforeach
            @else
                <div class="alert alert-warning">
                    Please update your profile before you can invest.
                </div>
            @endif
        </div>
        
    </div>
    
</div>











                    