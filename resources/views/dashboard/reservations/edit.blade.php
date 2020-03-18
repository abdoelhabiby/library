@extends("dashboard.layouts.app")

@section('title')
 {{trans('dashb.edit')}}
@endsection

@section("content")





<div class="card">
          <h5 class="card-header text-primary">{{ trans("dashb.edit") }}</h5>

  <div class="card-body">

    
       {!! Form::open(['url' => route('reservations.update',$reservation->id),"files" => true]) !!}
       @method('PUT')
<!-- ---------------------------------------------------------------------------------------- -->
 <div class="form-group row">

       {!! Form::label(null, trans('dashb.name'). " : ", ['class' => 'awesome col-1']) !!} 

       {!! Form::label(null, $reservation->user->name , ['class' => 'awesome col-5']) !!} 

       {!! Form::label(null, trans('dashb.book'). " : ", ['class' => 'awesome col-1']) !!} 

       {!! Form::label(null, $reservation->book->title , ['class' => 'awesome col-5']) !!} 


 </div>
<!-- ---------------------------------------------------------------------------------------- --> 
 <div class="form-group row">

       {!! Form::label(null, trans('dashb.like'). " : ", ['class' => 'awesome col-1']) !!} 

       <label class="awesome col-5">{{$reservation->like}}</label>

       {!! Form::label(null, trans('dashb.evaluation'). " : ", ['class' => 'awesome col-1']) !!} 

       {!! Form::label(null, $reservation->evaluation . ' '. trans('dashb.fromF') , ['class' => 'awesome col-5']) !!} 

 </div>
<!-- ---------------------------------------------------------------------------------------- --> 

<div class="form-group">

   {!! Form::label('status',trans('dashb.status'), ['class' => 'awesome ']) !!} 

   {!! Form::select('status',['pending' => trans('dashb.pending') ,'active' => trans('dashb.active') ,'refused' => trans('dashb.refused') ],$reservation->status, ['class' => 'awesome form-control']) !!} 


</div>
  <!-- ---------------------------------------------------------------------------------------- --> 


     <div class="form-group">
       {!! Form::submit(trans("dashb.edit"),['class' => 'btn btn-info']) !!}
     </div>  
   <!-- ----------------------------------------------------------------------------------------  -->

       {!! Form::close() !!}


  </div>
</div>

@endsection