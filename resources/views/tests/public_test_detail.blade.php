
@extends('layout.app')

@section('title', 'Take test')

@section('content')


<form method="POST" action="{{ route('processTakeTest', $id) }}">
    
    @csrf
    

    @foreach($questions as $question)
        <p>question text: {{ $question->text}}</p>
        @foreach($question->answers as $answer)
            <label>
                <input type="radio" name="question_{{ $question->id }}" value="{{ $answer->id }}">
                {{ $answer->text }}
            </label>
            <br>
        @endforeach
    @endforeach


    
    <input type="submit" name="submit" value="Отправить"><br>
</form>

@endsection

