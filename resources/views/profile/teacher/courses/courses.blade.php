@extends('layout.app')

@section('title', 'courses')

@section('content')

<h1>Список тестов</h1>
      
        <section class="section">
            <div class="section__wrapper">
                <div class="courses__title"><h2>Список курсов</h2></div>
                <div class="" >
                    

                    <a href="{{route('courses.create')}}">Создать курс </a>
                    
                </div>
                
                <div class="tsets__block">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>id</th>
                                <th>question_count</th>
                                <th>end date</th>
                                <th>lang</th>
                                <th>teacher id</th>
                                <th>edit?</th>
                                <th>Delit?</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $course->title }}</td>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->start_date }}</td>
                                    <td>{{ $course->end_date }}</td>
                                    <td>{{ $course->lang->name}}</td>
                                    <td>{{ $course->teacher_id }}</td>
                                    
                                    
                                    <td>edit btn</td>
                                    <td> del btn</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>


        <div class="cart-area section-padding">
            <div class="container">
                <div class="form">
                    <div class="cart-wrapper">
                        <div class="col-lg-12 col-md-12 col-12">
                            <a href="{{route('courses.create')}}">Создать тест </a>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <form action="https://wpocean.com/html/tf/eduko/cart">
                                    <table class="table-responsive cart-wrap">
                                        <thead>
                                            <tr>
                                                <th class="images images-b">Image</th>
                                                <th class="product-2">Product Name</th>
                                                <th class="pr">Quantity</th>
                                                <th class="ptice">Price</th>
                                                <th class="stock">Total Price</th>
                                                <th class="remove remove-b">Action</th>
                                                <th class="remove remove-b">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($courses as $course)
                                            <tr>
                                                <td>{{ $course->title }}</td>
                                                <td>{{ $course->id }}</td>
                                                <td>{{ $course->max_student }}</td>
                                                <td>{{ $course->start_date }}</td>
                                                <td>{{ $course->lang->name}}</td>
                                                <td>{{ $course->teacher->fname }}</td>
                                                <td>
                                                    @if(isset($course->lessons))
                                                    <p>haven`t lessons</p>
                                                    
                                                    @else
                                                    <p>have</p>
                                                    @endif
                                                    @foreach ($course->lessons as $lesson)
                                                    <p>{{$lesson->theme}}</p>
                                                    <p>{{$lesson->description}}</p>
                                                    @endforeach
                                                    <a class="theme-btn" href="{{route('lessons.create', $course->id)}}">add also?</a>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                                                                        
                                        </tbody>
                                    </table>
                                </form>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 14px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  width: 150px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>