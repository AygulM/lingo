@extends('layout.app')

@section('title', 'My page')

@section('content')
<p>add, task</p>



<form method="POST" action="{{ route('tasks.store') }}"  enctype="multipart/form-data">
        @csrf
        

        <label for="first_name">title:</label>
        <input type="text" id="first_name" name="text" value="" required>
        @error('tetx')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        

        <select name="student_id"  id="st_id">
        @foreach($students as $student)
                <option value="{!! $student->id !!}">{!! $student->fname , $student->lname !!}</option>
        @endforeach    
        </select><br>
        @error('student_id')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <input type="date" id="start" name="end_date" value=""  />
        @error('end_date')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

  

        
        <input type="text" id="tid" name="teacher_id" value="{{$teacher->id}}"  />

        <button type="submit">Сохранить</button>
    </form>

    


    



@endsection



