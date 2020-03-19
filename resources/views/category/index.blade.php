@extends('layouts.app')

@section('title')

{{$category->name == 'undefined‏' ? 'عام' : $category->name }}

@endsection

@section('content')



        <article class="books-section">
            <div class="container">
                <div>
                    <h4 style="float:right;">{{$category->name == 'undefined‏' ? 'عام' : $category->name }}</h4>
                    
                    <div style="clear: both;" class="mb-4"></div>
                </div>
                <div class="row">


    @if($book->count() > 0)

     @foreach($book as $books)
                    <div class="col">
                        <div class="book-body">
                            <div class="book-img">
                                <img src="{{asset('storage/'.$books->photo)}}" alt="books" />
                            </div>
                            <div class="book-info">
                                <span class="category">
                                	{{$category->name == 'undefined‏' ? 'عام' : $category->name }}
                                </span>
                                <h3 class="book-name">{{$books->title}}</h3>
                                

                                 @if($books->available == 'yes') 
                                     <div class="booking">
                                       <span class="status status-yas">
                                           متاح
                                       </span>
                                       <a href="{{route('book_reservation',$books->id)}}" class="status status-yas" style="margin-right: 5px;">
                                           حجز
                                       </a>

                                    </div>

                                 @else
                                  

                                          <span class="status status-no">
                                            غير متاح
                                          </span>   
   
                                 @endif
               
     
         
                                
                            </div>
                            <div class="book-details">
                                <div class="stars">
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                </div>
                                <div class="booking">
                                    <i class="heart-emptyicon- love"></i>
                                </div>

                            </div>
                        </div>
                    </div>

          @endforeach 


            </div> 
            <div class="d-flex justify-content-center mt-3">

                {{ $book->appends(request()->query())->links() }}

            </div>
         @else
         <center><h4>عفوا لا يوجد كتب حاليا في هذا القسم</h4></center>
         
         @endif     
                        
  
            </div>
        </article>

@endsection

@section('footer')
        <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form action="">
                                <input type="text" placeholder=" 🙋‍♂️ ألاســم" />
                                <input type="text" placeholder=" ✌  ألاميــل " />
                                <textarea name="" id="" cols="30" rows="4" placeholder="رســالتك!"></textarea>
                                <button>أرســال طلـب!</button>
                            </form>
                            <div class="row info-map">
                                <div class="col">
                                    <h5>العنوان</h5>
                                    المنصورة طلخا<br /> أول طريق المنصورة / دمياط  <br /> طريق دمياط السريع
                                </div>
                                <div class="col">
                                    <h5>للتواصل</h5>
                                    مز بريدى : 35681 <br />
                                    تليفون : 2529808 – 050<br />
                                    فاكس : 2529810 
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4093.436440115823!2d31.397466882758838!3d31.071015198578333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7762b58afb4b1%3A0xcd53fd9be61377db!2z2LTYsdmD2Kkg2KfZhNiv2YTYqtinINmE2YTYo9iz2YXYr9ipINmI2KfZhNi12YbYp9i52KfYqiDYp9mE2YPZitmF2KfZiNmK2Kk!5e0!3m2!1sar!2seg!4v1583089653545!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>

 @endsection 