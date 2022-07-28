<?php
    $acts = App\adminLog::orderby('id', 'desc')->paginate(50);
?>
                    
<div class="sparkline9-list shadow-reset mg-tb-30">    
    <div class="sparkline9-graph dashone-comment">
        <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
            <div class="row">
                <div class="col-sm-12" align="">
                   <form action="/admin/send/notification" method="post">
                        <div class="form-group">
                          <input id="msg_state" type="hidden" class="form-control" value="0" name="msg_state" required> 
                          <label>{{ __('Title') }}</label>
                          <input id="subject" type="text" class="form-control" name="subject" required>                         
                        </div>
                        <div class="form-group">                          
                          <label>{{ __('Users (Enter usersname(s) separated by "," or leave empty to send notification to all)') }}</label>
                          <textarea id="msg_users" name="msg_users" class="form-control"  rows="3" placeholder="Enter users separated by ',' or leave empty to send notification to all"></textarea>
                        </div>
                        <div class="form-group">
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                           <label>{{ __('Your message') }}</label>
                           <textarea id="textmsg2" name="msg" class="form-control" required rows="15"></textarea>
                        </div>
                       <div class="form-group" align="center">
                          <br>
                           <button class="btn btn-info fa fa-paper-plane"> {{ __('Send Message') }}</button>
                       </div>
                   </form>
                </div>
               
            </div>           
        </div>
    </div>
</div>

<script type="text/javascript">
  $('#msg_state').val(0);
</script>