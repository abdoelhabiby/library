@if(admin()->hasPermissionTo('update_admin'))
<a href="{{url_dash('admins/'.$id.'/edit')}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
@else

@endif