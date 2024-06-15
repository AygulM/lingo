@extends('layout.app')

@section('title', 'My page')

@section('content')



<div class="div" style="heart:150px;margit-top:150px;">1</div>
<form  method="POST" action="{{ route('publicTest.create__procces') }}"  enctype="multipart/form-data">
        @csrf
        

        <label for="first_name">title:</label>
        <input type="text" id="first_name" name="title" value="" required>
        @error('fname')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
   
        <label for="question_count">question_count:</label>
        <input type="text" id="question_count" name="question_count" value="" required>
        @error('question_count')
            <p class="text-red-500">{{ $message }}</p>
        @enderror      

        <label for="lang_id">Lang:</label>
        <select name="lang_id" id="lang_id" required>
        @foreach($langs as $lang)
                <option value="{!! $lang->name !!}">{!! $lang->name !!}</option>
        @endforeach    
        </select><br><br>

        @error('lang_id')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <button type="submit">Сохранить</button>
    </form>

    


    



@endsection



