@extends('layout.app')

@section('title', 'My page')

@section('content')
<p>add, test</p>



    <!-- <form method="POST" action="{{ route('tests.store', $id) }}"  enctype="multipart/form-data">
        @csrf
        

        <label for="first_name">title:</label>
        <input type="text" id="first_name" name="title" value="" required>
        @error('title')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        
        <label for="question_count">question_count:</label>
        <input type="text" id="question_count" name="question_count" value="" required>
        @error('question_count')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <label for="time_limit">time_limit</label>
        <input type="text" id="time_limit" name="time_limit" value="" required>
        @error('time_limit')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        
        <input type="date" id="start" name="end_date" value=""  />
        @error('end_date')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label for="lang_id">Lang:</label>
        <select name="lang_id" id="lang_id" required>
        @foreach($langs as $lang)
                <option value="{!! $lang->id !!}">{!! $lang->name !!}</option>
        @endforeach    
        </select><br><br>

        @error('lang_id')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        
        <input type="text" id="tid" name="teacher_id" value="{{$teacher->id}}"  />

        <button type="submit">Сохранить</button>
    </form> -->

    <div class="teacher-area section-padding pb-0">
            <div class="teacher-wrap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="teacher-contact">
                                <div class="teacher-contact-form" style="margin-top: 5px;">
                                    <h2>add course</h2>
                                    <form method="POST" action="{{ route('tests.store', $id) }}"   enctype="multipart/form-data"  id="contact-form-main">
                                        @csrf
                                        
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="title" id="title"
                                                    placeholder="title" >
                                            </div>
                                            @error('title')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="question_count" id="lname"
                                                    placeholder="question_count" >
                                            </div>
                                            @error('question_count')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group ">
                                                <input type="text" class="form-control" name="time_limit" 
                                                    placeholder="time_limit" >
                                            </div>
                                            @error('time_limit')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group ">
                                                <input type="date" class="form-control"  id="start" name="end_date" />
                                            </div>
                                            @error('end_date')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <select name="lang_id" id="Country" class="form-control">
                                                    @foreach($langs as $lang)
                                                    <option value="{!! $lang->id !!}">{!! $lang->name !!}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('lang_id')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            
                                            <div class="submit-area col-lg-12 col-12">
                                                <button type="submit" class="theme-btn submit-btn">Соханить</button>
                                                
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


    



@endsection



