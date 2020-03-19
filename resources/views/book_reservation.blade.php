@extends('layouts.app')

@section('title')
مكتبة الدلتا
@endsection


@push('js')

<script type="text/javascript">
	$(function(){
       $("#reservationBook").click(function(){

         $.ajax({

          url:"{{route('reservation_submit',$book->id)}}",
          method:'post',
          type:'json',
          data:{_token:"{{csrf_token()}}"},
          beforeSend:function(){

          },
          success:function(data){
             
                 $(".showSuccess").removeClass('d-none');

             setTimeout(function(){
                    window.location.href = "{{route('student_books')}}";
                    
              }, 4000);

          },
          error:function(data){

             window.location.href = "{{route('welcome')}}";

          }



         });

       });
        

	});
</script>

@endpush


@section('content')

<div class="container">


<div class="alert alert-success alert-dismissible fade show d-none showSuccess text-center" role="alert">
  <strong>تم الحجز</strong> برجاء التوجه للمخروبه لاستلام الكتاب 
   <br>
   <span>
      سوف يتم تحويلك لصفحة الكتب الخاصه بك
   </span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>




   <div class="row mt-5 mb-5" style="display: flex; justify-content: flex-start;" >



		    <div class="book-body col-md-7 col-sm-12">

		    	<div class="description">
		    		<h4>{{$book->category->name}}</h4>
		    		<hr>
		    		<h5>{{$book->name}}</h5>
		    		{!! $book->description !!}
		    	</div>

		    	<div class="text-center">

		     <a href="#" data-id="{{$book->id}}" class="btn btn-success" id="reservationBook">
		         تأكيد الحجز
		     </a>
		    		
		    	</div>

		    </div>	

		     <div class="book-body col-md-5 col-sm-12">
		        <div class="book-img">
		            <img src="{{asset('storage/'.$book->photo)}}" alt="books" height="450px" />
		        </div>
		     </div>


  </div>
</div>
@endsection