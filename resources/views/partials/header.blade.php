
    <!-- <header>
        <div class="section__wrapper header__wrapper">
            <nav class="navbar">
                <div class="container navbar__container">
                  <div class="navbar__hamb">
                    <div class="navbar__hamb-field" id="navbar-hamb-field">
                      <span class="navbar__hamb-bar"></span>
                      <span class="navbar__hamb-bar"></span>
                      <span class="navbar__hamb-bar"></span>
                    </div>
                  </div>
                  <a href="{{ route('home') }}" class="navbar__logo">Lingo</a>
                  <ul class="navbar__menu" id="navbar-menu">
                    <li>
                      <a href="{{ route('allTeachers') }}">Teachers</a>
                    </li>
                    <li>
                      <a href="{{ route('allCourses') }}">Courses</a>
                    </li>
                    <li>
                      <a href="{{ route('allPublicTest') }}">Tests</a>
                    </li>
                    <li>
                      <a href="#!">Blog</a>
                    </li>
                    <li>
                      <a href="#!">Contact</a>
                    </li>
                    <li>
                        @auth("web")
                            <a href="{{ route('logout') }}">Выйти</a>
                            <a href="{{route('user')}}">MyPage</a>
                        @endauth
                        @guest("web")
                            <a href="{{ route('login') }}">Войти</a>
                        @endguest
                    </li>
                  </ul>
                </div>
            </nav>
            <div class="popup" id="popup"></div>
        </div>
        
    </header> -->


<!-- Start header -->
<header id="header">
            <div class="wpo-site-header wpo-header-style-2">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-4 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="{{ route('home') }}"><img src="assets/images/logo.svg"
                                            alt="logo">LINGO</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        
                                        <li><a href="{{ route('allCourses') }}">Курсы</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('allTeachers') }}">Преподаватели</a>
                                            
                                        </li>
                                        
                                        <li class="menu-item-has-children">
                                            <a href="index-3.html#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog right sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">Blog fullwidth</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="index-3.html#">Blog details</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-single.html">Blog details right sidebar</a>
                                                        </li>
                                                        <li><a href="blog-single-left-sidebar.html">Blog details left
                                                                sidebar</a></li>
                                                        <li><a href="blog-single-fullwidth.html">Blog details
                                                                fullwidth</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <li><a href="{{ route('allPublicTest') }}">Тесты</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-2">
                                <div class="header-right">
                                    <div class="header-search-form-wrapper">
                                        <div class="cart-search-contact">
                                            <button class="search-toggle-btn"><i
                                                    class="fi flaticon-search"></i></button>
                                            <div class="header-search-form">
                                                <form>
                                                    <div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search here...">
                                                        <button type="submit"><i
                                                                class="fi flaticon-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-form">
                                      @auth("web")
                                          <a class="login" href="{{ route('logout') }}"><span class="text">Выйти</span>
                                            <span class="mobile">
                                                <i class="fi flaticon-charity"></i>
                                            </span>
                                          </a>
                                          <a class="theme-btn" href="{{route('user')}}"><span class="text">My page</span>
                                            <span class="mobile">
                                                <i class="fi flaticon-charity"></i>
                                            </span>
                                          </a>
                                      @endauth
                                      @guest("web")
                                          <a class="login" href="{{ route('login') }}"><span class="text">Вход</span>
                                            <span class="mobile">
                                                <i class="fi flaticon-charity"></i>
                                            </span>
                                          </a>
                                          <a class="theme-btn" href="{{ route('register') }}"><span class="text">Регистрация</span>
                                            <span class="mobile">
                                                <i class="fi flaticon-charity"></i>
                                            </span>
                                          </a>
                                          
                                      @endguest
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end of header -->    
         <!-- <script src="/assets/js/jquery.min.js"></script> -->