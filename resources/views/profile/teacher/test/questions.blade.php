@extends('layout.app')

@section('title', 'Tests')

@section('content')


@foreach($questions as $question)
    <p>qId: {{ $question->id }}</p>
    <p>qText: {{ $question->text }}</p>
    <ul>
    @foreach($question->answers as $answer)
        <li>aText: {{ $answer->text }} - Points: {{ $answer->points }}</li>
    @endforeach
    </ul>
@endforeach


<h1>Список question of test: {{$id}} </h1>
<a href="{{route('question.create', $id)}}">add new questions</a>
        <div style="display: flex; flex-wrap:wrap;">
            @foreach ($questions as $question)
                <div style="border:5px solid blue; width:550px;">
                <p>test id: {{ $question->test->id }}</p>
                    <p>question id: {{ $question->id }}</p>
                    <p> test id {{ $question->test_id }}</p>
                    <p>question text: {{ $question->text}}</p>
                    
                    @foreach ($question->answers as $answer)    
                                <div style="border:1px solid red;">
                                    <p> a text: {{ $answer->text }}</p>
                                    <p> a points: {{ $answer->points }}</p>
                                </div>
                    @endforeach
                    
                </div>
            @endforeach
        </div>
        

        
	
</div>

<div class="cart-area section-padding">
            <div class="container">
                <div class="form">
                    <div class="cart-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <form action="https://wpocean.com/html/tf/eduko/cart">
                                    <table class="table-responsive cart-wrap">
                                        <thead>
                                            <tr>
                                                <th class="images ">text</th>
                                                <th class="product-2">Product Name</th>
                                                <th class="pr">Quantity</th>
                                                <th class="ptice">Price</th>
                                                <th class="stock">Total Price</th>
                                                <th class="remove remove-b">Action</th>
                                                <th class="remove remove-b">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($questions as $question)
                                            <tr>
                                                <td>{{ $question->text}}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                
                                                <td>
                                                    <ul>
                                                        @foreach ($question->answers as $answer)
                                                        <li>{{ $answer->text }} ( {{ $answer->points }} )</li>
                                                        
                                                        @endforeach
                                                    </ul>                              
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