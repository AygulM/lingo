
@extends('layout.app')

@section('title', 'Take test')

@section('content')


<section class="wpo-shop-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="shop-grids clearfix">
                            @foreach($tests as $test)
                            <div class="grid">
                                <div class="details">
                                    <h3>{{ $test->title}}</h3>
                                    <span>{{ $test->lang->name}}</span>
                                    <div class="add-to-cart">
                                        <a href="{{ route('publicTestDetail', $test->id) }}">Пройти</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div> <!-- end container -->
        </section>


@endsection

