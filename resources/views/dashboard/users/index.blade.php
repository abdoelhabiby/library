@extends("dashboard.layouts.app")

@section('title')
 {{trans('dashb.students')}}
@endsection

@section("content")


 {!! $dataTable->table(['class' => 'table table-hover table-bordered dataTable']) !!}



@endsection




@push('scripts')

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>

{!! $dataTable->scripts() !!}


@endpush

@section('js')
<script type="text/javascript">
  $(function(){

      $(".buttons-create").addClass('d-none');
    
  });
</script>


@endsection