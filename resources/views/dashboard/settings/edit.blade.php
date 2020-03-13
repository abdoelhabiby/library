@extends("dashboard.layouts.app")

@section('title')
 {{trans('dashb.settings')}}
@endsection

@section("content")


@if(session()->has("success"))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{trans('dashb.success')}}</strong> {{session('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


@endif





<div class="card">
          <h5 class="card-header text-primary">{{ trans("dashb.settings") }}</h5>

  <div class="card-body">

       {!! Form::open(['url' => route('setting.update'),"files" => true]) !!}
       @method("PUT")
<!-- ---------------------------------------------------------------------------------------- -->
     <div class="form-group">
       {!! Form::label('name', trans('dashb.set_name'), ['class' => 'awesome']) !!} 
       {!! Form::text("name",value($settings->name),['class' => 'form-control']) !!}
         @if($errors->has('name'))
             <p class="text-danger text-uppercase">{{$errors->first('name')}}</p>
         @endif
    </div>   

<!-- ---------------------------------------------------------------------------------------- -->
    <div class="form-group">
       {!! Form::label('email', trans('dashb.email'), ['class' => 'awesome']) !!} 
       {!! Form::email("email",value($settings->email),['class' => 'form-control']) !!}
         @if($errors->has('email'))
             <p class="text-danger text-uppercase">{{$errors->first('email')}}</p>

         @endif
    </div>              
<!-- ---------------------------------------------------------------------------------------- -->

    <div class="form-group">
       {!! Form::label("icon",trans("dashb.icon")) !!}
       {!! Form::file("icon",['class' => "form-control", 'id' => 'imgInp']) !!}

     @if($errors->has('icon'))
         <p class="text-danger text-uppercase">{{$errors->first('icon')}}</p>

       @endif

  @if($settings->icon == 'setting/default.png')
    <img src="{{asset($settings->icon)}}" id='imgSett' class="showIm blah mt-2" width="130px" height="150px">  
  @else
     
    <img src="{{asset('storage/'.$settings->icon)}}" id='imgSett' class="showIm blah mt-2" width="130px" height="150px">         
@endif
    </div>
<!-- ---------------------------------------------------------------------------------------- -->
   <div class="form-group">

     {!! Form::label("description",trans('dashb.description_web')) !!}

      {!! Form::textarea('description',value($settings->description), ['class'=>'form-control ckeditor']) !!}
   </div>
<!-- ---------------------------------------------------------------------------------------- -->
   <div class="form-group">

     {!! Form::label("keywords",trans('dashb.keywords')) !!}

      {!! Form::textarea('keywords', value($settings->keywords), ['class'=>'form-control']) !!}
   </div>

<!-- ---------------------------------------------------------------------------------------- -->
   <div class="form-group">

     {!! Form::label("maintenance_message",trans('dashb.maintenance_message')) !!}

      {!! Form::textarea('maintenance_message', value($settings->maintenance_message), ['class'=>'form-control']) !!}
   </div>

<!-- ---------------------------------------------------------------------------------------- -->
  <div class="form-group">
       {!! Form::label('status',trans("dashb.status_web"), ['class' => 'awesome']) !!} 
     
    {!! Form::select('status', ['open' => trans('dashb.open'), 'close' => trans('dashb.close')],value($settings->status) ,['class' => 'form-control' ,'placeholder' => '.....']) !!}
         @if($errors->has('status'))
             <p class="text-danger text-uppercase">{{$errors->first('status')}}</p>
         @endif
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