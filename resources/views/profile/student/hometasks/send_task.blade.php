@extends('layout.app')

@section('title', 'My page')

@section('content')
<p>add, task</p>



<form method="POST" action="{{ route('send_procces_hometasks', $taskId) }}"  enctype="multipart/form-data">
        @csrf
        <textarea name="solution" id=""></textarea>
        @error('solution')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <div class="nice-form-group">
            <label>you can add like file</label>
            <input type="file" name="path_solution"  />
        </div>        
        
        <button type="submit">Сохранить</button>
    </form>

    


    



@endsection



