@extends('layout.app')

@section('title', 'tasks')

@section('content')

{{$student}}
<h1>Список hometasks</h1>
      
        <section class="section">
            <div class="section__wrapper">
                <div class="tasks__title"><h2>Список hometasks</h2></div>
                <div class="" >
                    

                    <a href="{{route('tasks.create')}}">Создать hometasks </a>
                    
                </div>
                
                <div class="tsets__block">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>id</th>
                                <th>end date</th>
                                <th>teacher id</th>
                                <th>Questions</th>
                                <th>edit?</th>
                                <th>Delit?</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->text }}</td>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->end_date }}</td>
                                    <td>{{ $task->teacher_id }}</td>
                                    <td>
                                        <a href="{{route('sendHometasks', $task->id)}}">send solusion</a>
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