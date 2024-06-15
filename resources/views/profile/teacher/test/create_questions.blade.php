
@extends('layout.app')

@section('title', 'Tests')

@section('content')

<form method="POST" action="{{ route('question.store',$id) }}">
    
    @csrf
    
    @for ($i = 0; $i < $question_count; $i++)
        <label for="test_name">question {{ $i }}</label>
        <input type="text" name="q_name-{{ $i }}" /><br>
        <div class="q_a">
            @for ($j = 0; $j < 3; $j++)
                <label for="test_name">ans title {{ $j.'-'.$i }}</label>
                <input type="text" name="a_name-{{ $j.'-'.$i }}" id="">
                <label for="test_name">points {{ $j.'-'.$i }}</label>
                <input type="text" name="points-{{ $j.'-'.$i }}" id="" ><br>
            @endfor
        </div>
        <br>
    @endfor
    <input type="submit" name="submit" value="Отправить"><br>
</form>

@endsection

