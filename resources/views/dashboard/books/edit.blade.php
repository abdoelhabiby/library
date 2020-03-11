@extends("dashboard.layouts.app")

@section('title')
 {{trans('dashb.edit')}}
@endsection

@section("content")


@section('js')

<script type="text/javascript">
  $(function(){

     $("#imgInp").change(function() {


      if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('.blah').attr('src', e.target.result);
          $(".showIm").removeClass('d-none');
        }

        reader.readAsDataURL(this.files[0]);
      }else{
           $(".showIm").addClass('d-none');

      }

     });  
   });
</script>

@endsection



<div class="card">
          <h5 class="card-header text-primary">{{ trans("dashb.edit") . " " . $book->title }}</h5>

  <div class="card-body">

    
       {!! Form::open(['url' => route('books.update',$book->id),"files" => true]) !!}
       @method('PUT')
<!-- ---------------------------------------------------------------------------------------- -->
     <div class="form-group">
       {!! Form::label('title', trans('dashb.title'), ['class' => 'awesome']) !!} 
       {!! Form::text("title",value($book->title),['class' => 'form-control']) !!}
         @if($errors->has('title'))
             <p class="text-danger text-uppercase">{{$errors->first('title')}}</p>
         @endif
    </div>   

<!-- ---------------------------------------------------------------------------------------- -->
     <div class="form-group">
       {!! Form::label('photo', trans('dashb.photo'), ['class' => 'awesome']) !!} 
       {!! Form::file("photo",['class' => 'form-control', 'id' => 'imgInp']) !!}
         @if($errors->has('photo'))
             <p class="text-danger text-uppercase">{{$errors->first('photo')}}</p>
         @endif
        

        <img src="{{asset('storage/'.$book->photo)}}" class="showIm blah mt-2" width="110px" height="150px">  

    </div>   
<!-- ---------------------------------------------------------------------------------------- -->
 <div class="form-group">
       {!! Form::label('category_id', trans('dashb.category_id'), ['class' => 'awesome']) !!} 
       {!! Form::select("category_id",$categories,value($book->category_id),['class' => 'form-control','placeholder' => '.....']) !!}

    </div>   

<!-- ---------------------------------------------------------------------------------------- -->
 <div class="form-group">
  <div>
       {!! Form::label('available', trans('dashb.available'), ['class' => 'awesome']) !!} 
</div>
        <div class="form-check row">
          <label class="form-check-label col-1" for="inlineRadio1"> {{trans('dashb.yes')}}</label>
          <input class="form-check-input" type="radio" name="available" id="inlineRadio1" value="yes" 
          {{$book->available == 'yes' ? 'checked' : ''}}>


        </div>
        <div class="form-check row">
          <label class="form-check-label col-1" for="inlineRadio2"> {{trans('dashb.no')}}</label>
          <input class="form-check-input" type="radio" name="available" id="inlineRadio2" value="no"
          {{$book->available == 'no' ? 'checked' : ''}}>

        </div>
     
    </div>   
<!-- ---------------------------------------------------------------------------------------- -->
    <div class="form-group">
       {!! Form::label('description', trans('dashb.description'), ['class' => 'awesome']) !!} 
       {!! Form::textarea("description",value($book->description),['class' => 'form-control ckeditor']) !!}
         @if($errors->has('description'))
             <p class="text-danger text-uppercase">{{$errors->first('description')}}</p>
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