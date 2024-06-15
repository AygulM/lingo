@extends('layout.app')

@section('title', 'My page')

@section('content')
<p>add, course</p>



    <!-- <form method="POST" action="{{ route('courses.store') }}"  enctype="multipart/form-data">
        @csrf
        

        <label for="first_name">title:</label>
        <input type="text" id="first_name" name="title" value="" required>
        @error('title')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        						


        <label for="duration">duration:</label>
        <input type="text" id="duration" name="duration" value="" required>
        @error('duration')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label for="price">price:</label>
        <input type="text" id="price" name="price" value="" required>
        @error('price')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label for="max_student">max_student</label>
        <input type="text" id="max_student" name="max_student" value="" required>
        @error('max_student')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <label for="description">description</label>
        <textarea name="description" id="description"></textarea>

        <label for="preview">preview</label>
        <textarea name="preview" id="preview"></textarea>


        <label for="preview">start_date</label>
        <input type="date" id="start" name="start_date" value=""  />
        @error('start_date')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label for="preview">end_date</label>
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

        <div class="nice-form-group">
            <label>previewImage:</label>
            <input type="file" name="previewImage"  />
        </div> 
        
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
                                    <form method="POST"  action="{{ route('courses.store') }}"   enctype="multipart/form-data"  id="contact-form-main">
                                        @csrf
                                        <input type="text" id="tid" name="teacher_id" value="{{$teacher->id}}"  />
                                        @error('teacher_id')
                                            <p class="text-red-500">{{ $message }}</p>
                                        @enderror
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="title" id="title"
                                                    placeholder="title" value=" $course->title ">
                                            </div>
                                            @error('title')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="duration" id="lname"
                                                    placeholder="duration" value=" $course->duration ">
                                            </div>
                                            @error('duration')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group ">
                                                <input type="text" class="form-control" name="price" 
                                                    placeholder="price" value=" $course->price ">
                                            </div>
                                            @error('price')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group ">
                                                <input type="text" class="form-control" name="max_student" 
                                                    placeholder="max_student" value=" $course->max_student ">
                                            </div>
                                            @error('max_student')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group ">
                                                <input type="date" class="form-control"  id="start" name="start_date" value=" $course->start_date "  />
                                            </div>
                                            @error('start_date')
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
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <select name="course_type_id" id="Country" class="form-control">
                                                    @foreach($course_types as $course_type)
                                                    <option value="{!! $course_type->id !!}">{!! $course_type->name !!}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('course_type_id')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in">
                                                <label for="file">Загрузить img</label>
                                                <input id="file" type="file" class="form-control" name="previewImage" value=" $course->previewImage ">
                                                <i class="ti-cloud-up"></i>
                                            </div>
                                            @error('previewImage')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            <div class="col-lg-12 col-12 form-group">
                                                <textarea class="form-control" name="preview" id="note" value=" $course->preview "
                                                    placeholder="preview..."></textarea>
                                            </div>
                                            @error('preview')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            <div class="col-lg-12 col-12 form-group">
                                                <textarea class="form-control" name="description" id="note" value=" $course->description "
                                                    placeholder="description..."></textarea>
                                            </div>
                                            @error('description')
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



