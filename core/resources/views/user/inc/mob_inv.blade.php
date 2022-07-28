                
<div class="alert alert-info inv_alert_cont" >
    <div class="row inv_alert_top_row">
        <div class="col-xs-12 pad_top_5" align="center" >
            <h4 class="u_case">{{ __('Amount') }}Package: {{$in->package}}</h4>
           
        </div>
    </div> 
    <div class="row color_blue_9">
        <div class="col-xs-6">
            {{ __('Capital:') }}
        </div>
        <div class="col-xs-6">
            {{($settings->currency)}} {{$in->capital}}
        </div>
    </div> 
    <div class="row" style="">
        <div class="col-xs-6">
            {{ __('Return:') }}
        </div>
        <div class="col-xs-6">
            {{($settings->currency)}} {{$in->i_return}}
        </div>
    </div>  
    <div class="row" style="">
        <div class="col-xs-6">
            {{ __('Started:') }}
        </div>
        <div class="col-xs-6">
            {{$in->date_invested}}
        </div>
    </div> 
    <div class="row" style="">
        <div class="col-xs-6">
            {{ __('Ending:') }}
        </div>
        <div class="col-xs-6">
            {{$in->end_date}}
        </div>
    </div>
    <div class="row" style="">
        <div class="col-xs-6">
            {{ __('Days:') }}
        </div>
        <div class="col-xs-6">
            {{$totalDays}}
        </div>
    </div>
    <div class="row" style="">
        <div class="col-xs-6">
           {{ __('Withdrawn:') }} 
        </div>
        <div class="col-xs-6">
            {{($settings->currency)}} {{$in->w_amt}}
        </div>
    </div> 
    <div class="row" style="">
        <div class="col-xs-6">
            {{ __('Status:') }}
        </div>
        <div class="col-xs-6">
            {{$in->status}}
        </div>
    </div> 
    <div class="row" style="" align="center">
        <br>
        <div class="col-xs-12" align="center">
            <a title="Withdraw" href="javascript:void(0)" class="btn btn-info" onclick="wd('pack', '{{$in->id}}', '{{$ern}}', '{{$withdrawable}}', '{{$Edays}}', '{{$ended}}')">
                {{$settings->currency}} {{$ern}}
            </a>
        </div>
        {{ __('Click to withdraw') }}
    </div>                                                                     
</div>
        
