<div id="popInvest" class="container pop_invest_cont" >
  <div class="row wd_row_pad" >
    <div class="col-md-4">&emps;</div>
    <div class="col-md-4 card pop_invest_col" align="center">      
      <div class="card-header" style="">
        <h3><b>{{ __('Initiate Investment') }}</b></h3>
        <h5>{{ __('Wallet Balance:') }} <b>{{$settings->currency}} <span id="WalletBal"></span></b></h5>         
        <hr>
      </div>
      <div class="pop_msg_contnt">              
        <p align="center" class="color_blue_b">
            {{ __('You are about to invest in ') }} <b><span id="pack_inv"></span></b>{{ __(' package which takes a period of') }}  <b><span id="period"></span></b>{{ __(' working days and comes with ') }}  <b><span id="intr"></span></b>% {{ __(' total interest') }}                  
        </p>
        <form id="userpackinv" action="/user/invest/packages" method="post">
            <div class="form-group" align="left">
              <div class="pop_form_min_max" align="center">
                <b>{{ __('Min. Capital:') }} {{$settings->currency}} <span id="min"></span></b> | 
                <b>{{ __('Max. Capital:') }} {{$settings->currency}} <span id="max"></span></b>                      
              </div> 
              <br>                   
              <label>{{ __('Enter Amount to Invest') }}</label>
              <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
              <input id="p_id" type="hidden" class="form-control" name="p_id" value="">
              <input type="text" class="form-control" name="capital" placeholder="Enter capital to invest" required>
            </div>
            <div class="form-group">
                <button class="collb btn btn-info">{{ __('Proceed') }}</button>
                <span style="">            
                  <a id="popMsg_close_user" href="javascript:void(0)" class="btn btn-danger">{{ __('Cancel') }}</a>        
                </span>
                <br><br>
            </div>
        </form>
      
      </div>  
      <!-- close btn -->
      <script type="text/javascript">
        $('#popMsg_close_user').click( function(){
          $('#popInvest').hide();
        });        
      </script>
      <!-- end close btn -->
    </div>
  </div>
</div>