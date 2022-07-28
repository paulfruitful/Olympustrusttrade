<div class="sparkline9-list shadow-reset mg-tb-30">    
    <div class="sparkline9-graph dashone-comment">
        <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
            <form action="/admin/addNew/admin" method="post">
              <input id="token" type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
              
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text " ><i class="fa fa-user"></i></span>
                </div>
                  <input type="text" class="form-control" name="Name" placeholder="Enter staff name" required>
              </div>
              <br>
              <div class="input-group">  
                <div class="input-group-prepend">              
                  <span class="input-group-text "><i class="fa fa-envelope"></i></span>
                </div>
                  <input id="" type="email" class="form-control" name="email" placeholder="Enter user email address" required>
              </div>
              <br>
              <div class="input-group"> 
                <div class="input-group-prepend">               
                  <span class="input-group-text "><i class="fa fa-key"></i></span>
                </div>
                  <input id="" type="password" class="form-control" name="pwd" placeholder="Enter password" required>
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text "><i class="fa fa-user"></i></span>
                </div>
                                    
                  <select name="role" class="form-control" required>
                      <option selected disabled="">Select role</option>
                      <option value="1">Support</option>
                      <option value="2">Manager</option>
                      <option value="3">Admin</option>
                  </select>
              </div>
              <br>
              
              <div class="form-group">
                <br>
                  <button class="collb btn btn-info">{{ __('Add Admin') }}</button>
                  <br>
              </div>              
            </form>
        </div>
    </div>
</div>