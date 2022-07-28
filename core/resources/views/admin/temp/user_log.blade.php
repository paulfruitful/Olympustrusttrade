<?php
    $acts = App\adminLog::orderby('id', 'desc')->paginate(50);
?>

<table id="basic-datatables" class="display table table-stripped table-hover">
    <thead>
        <tr>            
            <th> {{ __('ID') }} </th>
            <th> {{ __('Admin') }} </th>
            <th> {{ __('Action') }} </th>
            <th> {{ __('Date') }} </th>                                                              
        </tr>
    </thead>
    <tbody>
        @if(count($acts) > 0 )
            @foreach($acts as $dep)
                <tr>                                                            
                    <td>{{$dep->id}}</td>
                    <td>{{$dep->admin}}</td>
                    <td>{{$dep->action}}</td>
                    <td>{{$dep->created_at}}</td>
                </tr>
            @endforeach
        @else
            <tr>                                                            
                <td>No data</td>                                        
            </tr>
        @endif
    </tbody>
</table>
<!--<div align="center">-->
<!--   <span> {{$acts->links()}}</span>  -->
<!--</div>-->