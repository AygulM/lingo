


@extends('layout.app')

@section('title', 'Teachers')

@section('content')       
       



<!-- start wpo-course-page -->
        <section class="wpo-course-page s2 section-padding">
            <h2 class="hidden">some</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" id="filterOpen">
                        <div class="wpo-course-sidebar">
                            <div class="widget widget_product_categories">
                                <h3>Filter by categories</h3>
                                <ul class="product-categories">
                                    <li class="cat-item">
                                        <input id="cat-list-1" type="checkbox" name="cat-list-1">
                                        <label for="cat-list-1">Art & Humanities <span>15</span></label>
                                    </li>
                                    <li class="cat-item">
                                        <input id="cat-list-2" type="checkbox" name="cat-list-2">
                                        <label for="cat-list-2">Web Design <span>10</span></label>
                                    </li>
                                    <li class="cat-item">
                                        <input id="cat-list-3" type="checkbox" name="cat-list-3">
                                        <label for="cat-list-3">Graphic Design <span>20</span></label>
                                    </li>
                                    <li class="cat-item">
                                        <input id="cat-list-4" type="checkbox" name="cat-list-4">
                                        <label for="cat-list-4">Technology <span>12</span></label>
                                    </li>
                                    <li class="cat-item">
                                        <input id="cat-list-5" type="checkbox" name="cat-list-5">
                                        <label for="cat-list-5">Management <span>10</span></label>
                                    </li>
                                    <li class="cat-item">
                                        <input id="cat-list-6" type="checkbox" name="cat-list-6">
                                        <label for="cat-list-6">Photoshop <span>08</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_product_categories">
                                <h3>Instructors</h3>
                                <ul class="product-categories">
                                    <li class="cat-item">
                                        <input id="ins-list-1" type="checkbox" name="ins-list-1">
                                        <label for="ins-list-1">Robert Henry<span>10</span></label>
                                    </li>
                                    <li class="cat-item">
                                        <input id="ins-list-2" type="checkbox" name="ins-list-2">
                                        <label for="ins-list-2">Jenny Wilson<span>15</span></label>
                                    </li>
                                    <li class="cat-item">
                                        <input id="ins-list-3" type="checkbox" name="ins-list-3">
                                        <label for="ins-list-3">Jerome Bell<span>20</span></label>
                                    </li>
                                    <li class="cat-item">
                                        <input id="ins-list-4" type="checkbox" name="ins-list-4">
                                        <label for="ins-list-4">Aliza Aney <span>12</span></label>
                                    </li>
                                    <li class="cat-item">
                                        <input id="ins-list-5" type="checkbox" name="ins-list-5">
                                        <label for="ins-list-5">Kel William <span>10</span></label>
                                    </li>
                                    <li class="cat-item">
                                        <input id="ins-list-6" type="checkbox" name="ins-list-6">
                                        <label for="ins-list-6">Devid Miller <span>08</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_product_categories">
                                <h3>Lavel</h3>
                                <ul class="product-categories">
                                    <li class="cat-item">
                                        <input id="lavel-list-1" type="checkbox" name="lavel-list-1">
                                        <label for="lavel-list-1">All Levels<span>25</span></label>
                                    </li>
                                    <li class="cat-item">
                                        <input id="lavel-list-2" type="checkbox" name="lavel-list-2">
                                        <label for="lavel-list-2">Beginner<span>15</span></label>
                                    </li>
                                    <li class="cat-item">
                                        <input id="lavel-list-3" type="checkbox" name="lavel-list-3">
                                        <label for="lavel-list-3">Intermediate<span>20</span></label>
                                    </li>
                                    <li class="cat-item last">
                                        <input id="lavel-list-4" type="checkbox" name="lavel-list-4">
                                        <label for="lavel-list-4">Expert <span>12</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_price_filter">
                                <h3>Filter By Price</h3>
                                <div class="filter-price">
                                    <form>
                                        <div id="slider-range"></div>
                                        <button>filter</button>
                                        <p>Price : <input type="text" id="amount"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- start wpo-product-section -->
                        <section class="wpo-product-section">
                            <div class="sorting-section">
                                <ul>
                                    <li>Showing 1–10 of 32 results</li>
                                    <li>
                                        <div class="search-widget">
                                            <form class="searchform">
                                                <div>
                                                    <input type="text" placeholder="Search...">
                                                    <button type="submit"><i class="ti-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter">
                                            <button id="filter">Filter <i class="ti-filter"></i></button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="wpo-popular-area">
                                <div class="wpo-popular-wrap">
                                    <div class="row">
                                    @foreach($courses as $course)
                                        @include('partials.courses')
                                    @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper pagination-wrapper-center">
                                <ul class="pg-pagination">
                                    <li>
                                        <a href="course-2.html#" aria-label="Previous">
                                            <i class="fi ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="course-2.html#">1</a></li>
                                    <li><a href="course-2.html#">2</a></li>
                                    <li><a href="course-2.html#">3</a></li>
                                    <li>
                                        <a href="course-2.html#" aria-label="Next">
                                            <i class="fi ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <!-- end wpo-product-section -->
                    </div>
                </div>
            </div>

        </section>
        <!-- end wpo-course-page -->
@endsection

