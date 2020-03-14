@if(admin()->hasPermissionTo('update_category'))

<a href="{{url_dash('categories/'.$id.'/edit')}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>

@else

@endif

