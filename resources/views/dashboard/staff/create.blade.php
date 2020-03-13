@extends("dashboard.layouts.app")

@section('title')
 {{trans('dashb.create')}}
@endsection

@section("content")






<div class="card">
	  	    <h5 class="card-header text-primary">{{ trans("dashb.create_n_staff") }}</h5>

  <div class="card-body">

    
       {!! Form::open(['url' => route('staff.store')]) !!}
<!-- ---------------------------------------------------------------------------------------- -->
     <div class="form-group">
       {!! Form::label('name', trans('dashb.name'), ['class' => 'awesome']) !!} 
       {!! Form::text("name",old('name'),['class' => 'form-control']) !!}
         @if($errors->has('name'))
             <p class="text-danger text-uppercase">{{$errors->first('name')}}</p>
         @endif
    </div>   

  <!-- ---------------------------------------------------------------------------------------- -->
     <div class="form-group">
       {!! Form::label('phone', trans('dashb.phone'), ['class' => 'awesome']) !!} 
       {!! Form::text("phone",old('phone'),['class' => 'form-control']) !!}
         @if($errors->has('phone'))
             <p class="text-danger text-uppercase">{{$errors->first('phone')}}</p>
         @endif
    </div>   
  <!-- ---------------------------------------------------------------------------------------- -->
     <div class="form-group">
       {!! Form::label('password', trans('dashb.password'), ['class' => 'awesome']) !!} 

       {!! Form::password("password",['class' => 'form-control']) !!}
         @if($errors->has('password'))
             <p class="text-danger text-uppercase">{{$errors->first('password')}}</p>
         @endif
    </div>   
<!-- ---------------------------------------------------------------------------------------- -->
     <div class="form-group">
       {!! Form::label('password_confirmation', trans('dashb.password_confirmation'), ['class' => 'awesome']) !!} 
       {!! Form::password("password_confirmation",['class' => 'form-control']) !!}
         @if($errors->has('password_confirmation'))
             <p class="text-danger text-uppercase">{{$errors->first('password_confirmation')}}</p>
         @endif
    </div>   
<!-- ---------------------------------------------------------------------------------------- -->
  <?php
      $category = ['create_category','read_category','update_category','delete_category'];
      $book = ['create_book','read_book','update_book','delete_book'];
  ?>  



  <div class="form-group">
  
    <h5>{{trans('dashb.premission')}}</h5>


 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="categories-tab" data-toggle="tab" href="#categories" role="tab" aria-controls="categories" aria-selected="true">{{trans('dashb.categories')}}</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="book-tab" data-toggle="tab" href="#book" role="tab" aria-controls="book" aria-selected="false">{{trans('dashb.books')}}</a>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="categories" role="tabpanel" aria-labelledby="categories-tab">
    <br>
  @foreach($category as $categories)  
    <label class="checkbox-inline col-2">
      <input type="checkbox" value="{{$categories}}" name="permission[]"> {{ trans('dashb.'.$categories) }}
    </label>
  @endforeach

  </div>
  <div class="tab-pane fade" id="book" role="tabpanel" aria-labelledby="book-tab">
    <br>
   @foreach($book as $books)  
    <label class="checkbox-inline col-2">
      <input type="checkbox" value="{{$books}}" name="permission[]"> {{ trans('dashb.'.$books) }}
    </label>
  @endforeach
  </div>
</div>





    </div>  

 <!-- ---------------------------------------------------------------------------------------- -->

     <div class="form-group">
       {!! Form::submit(trans("dashb.create"),['class' => 'btn btn-info']) !!}
     </div>  
   <!-- ----------------------------------------------------------------------------------------  -->

       {!! Form::close() !!}


  </div>
</div>

@endsection