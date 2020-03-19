@extends('layouts.app')

@section('title')
مكتبة الدلتا
@endsection

@section('slider')
            <div class="slider">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="intro">
                                <span class="welcome">اهلا بِكَ فِي مَوْقِعِ مَكْتَبَةِ الدِّلْتَا الْمَرْكَزِيَّةِ.</span>
                                <h1>
                                    بتدور علي
                                    <a  class="typewrite" data-period="2000" data-type='[ "كتاب", "محاضرة", "ملف PDF" ]'>
                                        <span class="wrap"></span>
                                    </a>
                                    ؟
                                </h1>
                                <p>لـقد قمنـا بانشــاء هـذا الموقـع لاثــراء مــحـتـوي الـقــراء وللاحتفاظ بالمراجع وتحويل وتقدم المحتوي باستخدام التكنولوجيا لمستقبل افضل ان شاء الله ونتمني لكم تجربة مفيدة وسعيدة ولذيذة واحلا مسا..</p>
                                <button class="book-now">احجز الان</button>
                             @guest   
                                <button class="login"><a href="{{route('welcome.login')}}">تسجيل الدخول</a></button>
                             @endguest   
                            </div>
                        </div>
                        <div class="col">
                            <div class="image">
                                <img data-tilt src="{{asset('qeno')}}/images/undraw_book_lover_mkck.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

      @endsection      


@section('content')

        <!-- Start About Us -->
        <section class="heading-section">
            <h2>لية تستخدم المكتبة؟</h2>
            <span>3 اسباب يخلوك تعيش جواها !</span>
        </section>
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div data-tilt class="card-about">
                            <div class="preview">
                                <img src="{{asset('qeno')}}/images/about/communication-21.png" />
                            </div>
                            <div class="description">
                                <h4>ديما جمبك</h4>
                                <p>تقدر توصلنا من اي مكان وفي اي وقت وتقرا اللي تحبة وتختارة</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div data-tilt class="card-about">
                            <div class="preview">
                                <img src="{{asset('qeno')}}/images/about/communication-12.png" />
                            </div>
                            <div class="description">
                                <h4>اتعمل علشانـك!</h4>
                                <p>اه والله زي ما بقولك كدة الموقع دة هيخدمك جامد</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div data-tilt class="card-about">
                            <div class="preview">
                                <img src="{{asset('qeno')}}/images/about/communication-03.png" />
                            </div>
                            <div class="description">
                                <h4>راحتك تهمنا</h4>
                                <p>اهتمينا بكل تفصيلة صغيرة علشان نطلع تجربة واضحة وسريعة ليك!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us -->

        <!-- Start books -->
        <section class="heading-section">
            <h2>قسم افضل الكتب</h2>
            <span>هتلاقي هني اهم واشهر الكتب اللي هتفيدك</span>
        </section>
        <article class="books-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="book-body">
                            <div class="book-img">
                                <img src="{{asset('qeno')}}/images/books/must-read-html-css-books.jpg" alt="books" />
                            </div>
                            <div class="book-info">
                                <span class="category">قسم تاريخ</span>
                                <h3 class="book-name">كتاب حلو بس مجهد</h3>
                                <span class="status status-yas">مــتاح</span>
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
                    <div class="col">
                        <div class="book-body">
                            <div class="book-img">
                                <img src="{{asset('qeno')}}/images/books/must-read-html-css-books.jpg" alt="books" />
                            </div>
                            <div class="book-info">
                                <span class="category">قسم الهكر</span>
                                <h3 class="book-name">الدرر المنسيه في اختراق سرفرات الكلية</h3>
                                <span class="status status-no">غير متاح</span>
                            </div>
                            <div class="book-details">
                                <div class="stars">
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="star-emptyicon-"></i>
                                </div>
                                <div class="booking">
                                    <i class="heart-emptyicon- love"></i>
                                    <a class="booking-btn" href="#">حجز</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="book-body">
                            <div class="book-img">
                                <img src="{{asset('qeno')}}/images/books/must-read-html-css-books.jpg" alt="books" />
                            </div>
                            <div class="book-info">
                                <span class="category">تطبيقات الانترنت</span>
                                <h3 class="book-name">الانتيم للتعليم</h3>
                                <span class="status status-no">غير متاح</span>
                            </div>
                            <div class="book-details">
                                <div class="stars">
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="star-emptyicon-"></i>
                                    <i class="star-emptyicon-"></i>
                                    <i class="star-emptyicon-"></i>
                                </div>
                                <div class="booking">
                                    <i class="heart-emptyicon- love"></i>
                                    <a class="booking-btn" href="#">حجز</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="book-body">
                            <div class="book-img">
                                <img src="{{asset('qeno')}}/images/books/must-read-html-css-books.jpg" alt="books" />
                            </div>
                            <div class="book-info">
                                <span class="category">تطبيقات الانترنت</span>
                                <h3 class="book-name">كتاب اتش تي ام ال</h3>
                                <span class="status status-yas">مــتاح</span>
                            </div>
                            <div class="book-details">
                                <div class="stars">
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="star-emptyicon-"></i>
                                    <i class="star-emptyicon-"></i>
                                </div>
                                <div class="booking">
                                    <i class="heart-emptyicon- love"></i>
                                    <a class="booking-btn" href="#">حجز</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="book-body">
                            <div class="book-img">
                                <img src="{{asset('qeno')}}/images/books/must-read-html-css-books.jpg" alt="books" />
                            </div>
                            <div class="book-info">
                                <span class="category">تطبيقات الانترنت</span>
                                <h3 class="book-name">كتاب اتش تي ام ال</h3>
                                <span class="status status-yas">مــتاح</span>
                            </div>
                            <div class="book-details">
                                <div class="stars">
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="star-emptyicon-"></i>
                                    <i class="star-emptyicon-"></i>
                                </div>
                                <div class="booking">
                                    <i class="heart-emptyicon- love"></i>
                                    <a class="booking-btn" href="#">حجز</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="book-body">
                            <div class="book-img">
                                <img src="{{asset('qeno')}}/images/books/must-read-html-css-books.jpg" alt="books" />
                            </div>
                            <div class="book-info">
                                <span class="category">تطبيقات الانترنت</span>
                                <h3 class="book-name">كتاب اتش تي ام ال</h3>
                                <span class="status status-yas">مــتاح</span>
                            </div>
                            <div class="book-details">
                                <div class="stars">
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="staricon-"></i>
                                    <i class="star-emptyicon-"></i>
                                    <i class="star-emptyicon-"></i>
                                </div>
                                <div class="booking">
                                    <i class="heart-emptyicon- love"></i>
                                    <a class="booking-btn" href="#">حجز</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <!-- End Books -->

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