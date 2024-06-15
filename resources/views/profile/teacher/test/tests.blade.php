@extends('layout.app')

@section('title', 'Tests')

@section('content')

{{$teacher}}
<h1>Список тестов</h1>
      
        <section class="section">
            <div class="section__wrapper">
                <div class="tests__title"><h2>Список тестов</h2></div>
                <div class="" >
                    

                    <a href="{{route('tests.create')}}">Создать тест </a>
                    
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
                                <th>Questions</th>
                                <th>edit?</th>
                                <th>Delit?</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tests as $test)
                                <tr>
                                    <td>{{ $test->title }}</td>
                                    <td>{{ $test->id }}</td>
                                    <td>{{ $test->question_count }}</td>
                                    <td>{{ $test->end_date }}</td>
                                    <td>{{ $test->lang->name}}</td>
                                    <td>{{ $test->teacher_id }}</td>
                                    <td>
                                        <a href="{{route('question.index', $test->id)}}">show question</a>
                                    </td>
                                    <td>edit btn</td>
                                    <td> del btn</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

<!-- cart-area start -->
        <div class="cart-area section-padding">
            <div class="container">
                <div class="form">
                    <div class="cart-wrapper">
                        <div class="col-lg-12 col-md-12 col-12">
                            <a href="{{route('tests.create')}}">Создать тест </a>
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
                                        @foreach ($tests as $test)
                                            <tr>
                                                <td>{{ $test->title }}</td>
                                                <td>{{ $test->id }}</td>
                                                <td>{{ $test->question_count }}</td>
                                                <td>{{ $test->end_date }}</td>
                                                <td>{{ $test->lang->name}}</td>
                                                <td>{{ $test->teacher_id }}</td>
                                                <td>
                                                    <a class="theme-btn" href="{{route('question.index', $test->id)}}">show question <i
                                                    class="fa fa-angle-double-right"></i></a>
                                                    
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
        <!-- cart-area end -->
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