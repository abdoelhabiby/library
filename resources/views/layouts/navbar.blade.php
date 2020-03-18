        <header>
            <!-- Start Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#"><img class="logo" src="{{asset('qeno')}}/images/logof.png" alt="Logo">مكتبة الدلتا</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">الرئيسية <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ألاقســام</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    حســابـك
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="login.html">تسجيل الدخول</a>
                                    <a class="dropdown-item" href="#">حجز كتاب</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">الدعم الفني</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control ml-sm-2" type="search" placeholder="بتـدور علي اية؟" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">أبـحــث</button>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- Start Navbar -->
            <!-- Start Slider -->
            <div class="slider">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="intro">
                                <span class="welcome">اهلا بِكَ فِي مَوْقِعِ مَكْتَبَةِ الدِّلْتَا الْمَرْكَزِيَّةِ.</span>
                                <h1>
                                    بتدور علي
                                    <a href="هتحط لينك الجاتيجوريز هني ياهشام علشان لو جيت تسالني ولقيتني مش فاتح واتس اب" class="typewrite" data-period="2000" data-type='[ "كتاب", "محاضرة", "ملف PDF" ]'>
                                        <span class="wrap"></span>
                                    </a>
                                    ؟
                                </h1>
                                <p>لـقد قمنـا بانشــاء هـذا الموقـع لاثــراء مــحـتـوي الـقــراء وللاحتفاظ بالمراجع وتحويل وتقدم المحتوي باستخدام التكنولوجيا لمستقبل افضل ان شاء الله ونتمني لكم تجربة مفيدة وسعيدة ولذيذة واحلا مسا..</p>
                                <button class="book-now">احجز الان</button>
                                <button class="login">تسجيل الدخول</button>
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
            <!-- End Slider -->
        </header>

<div class="content">
    
    @yield('content')

</div>

