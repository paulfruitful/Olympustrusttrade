
            <table class="display table table-stripped table-hover">
                <thead>
                    <tr>
                       <th> {{ __('Name') }} </th>
                       <th> {{ __('Min') }} </th>
                       <th> {{ __('Max') }} </th>
                       <th> {{ __('Interest(%)') }} </th>
                       <th> {{ __('Period') }} </th>
                       <th> {{ __('Withdrawal Interval') }} </th>                       
                       <th> {{ __('On/Off') }} </th>
                       <th> {{ __('Manage') }} </th>                                                                          
                    </tr>
                </thead>
                <tbody>
                    
                    @if(count($packs) > 0 )
                        @foreach($packs as $dep)
                            <tr>
                                <td>{{$dep->package_name}}</td>
                                <td>{{$dep->min}}</td>
                                <td>{{$dep->max}}</td>
                                <td>{{$dep->daily_interest*$dep->period*100}}</td>
                                <td>{{$dep->period}}</td>
                                <td>{{$dep->days_interval}}</td>                                
                                <td>                                     
                                  <label class="switch" >
                                    <input type="checkbox" @if($dep->status == 1){{'checked'}}@endif>
                                    <span id="switch_pack{{$dep->id}}" class="slider round" onclick="act_deact_pack('{{$dep->id}}')"></span>
                                  </label>                                    
                                </td>
                                
                                <td>                                                                       
                                    @if($adm->role == 3 || $adm->role == 2)
                                        <a id="{{$dep->id}}" title="Edit Package" href="javascript:void(0)" onclick="edit_pack(this.id, '{{$dep->min}}', '{{$dep->max}}', '{{$dep->daily_interest*$dep->period*100}}', '{{$dep->withdrwal_fee}}', '{{csrf_token()}}', '{{$dep->currency}}')"> 
                                            <span><i class="fa fa-edit btn btn-warning"></i></span>
                                        </a> 
                                        <a id="{{$dep->id}}" title="Delete Package" href="javascript:void(0)" onclick="load_get_ajax('/admin/delete/pack/{{$dep->id}}', this.id, 'admDeleteMsg') "> 
                                            <span><i class="fa fa-times btn btn-danger"></i></span>
                                        </a>
                                         
                                    @endif
                                </td>
                                               
                            </tr>
                        @endforeach
                    @else
                        
                    @endif
                </tbody>
            </table>