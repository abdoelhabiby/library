@extends('layouts.app')

@section('title')

{{$category->name == 'undefined‏' ? 'عام' : $category->name }}

@endsection

@section('content')
        <article class="books-section">
            <div class="container">
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
                                <span class="status status-no">مــتاح</span>
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
                                    <a class="booking-btn" href="#">حجز</a>
                                </div>

                            </div>
                        </div>
                    </div>

          @endforeach 


            </div> 
            <div class="text-center">
                {{ $book->appends(request()->query())->links() }}

            </div>
         @else
         <center><h4>عفوا لا يوجد كتب حاليا في هذا القسم</h4></center>
         
         @endif     
                        
  
            </div>
        </article>

@endsection