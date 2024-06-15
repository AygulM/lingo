@extends('layout.app')

@section('title', 'Edit my page')

@section('content')
        <!-- <section class="section">
            <div class="section__wrapper">
                <h4>Редактирование профиля</h4>
                <form method="POST" action="{{ route('student.edit', $student->id) }}"  enctype="multipart/form-data">
                    @csrf
                            <div class="redact__student section__input">
                                <div class="nice-form-group">
                                    <label>Имя: </label>
                                    <input name="fname"  type="text" placeholder="Имя" value="{{ $student->fname }}" />
                                    @error('fname')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="nice-form-group">
                                    <label>Фамилия:</label>
                                    <input type="text" placeholder="Your name"  name="lname" value="{{ $student->lname }}" />
                                    @error('lname')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="nice-form-group">
                                    <label>Телефон:</label>
                                    <input type="tel" name="phone" placeholder="+7 (900) 123-45-67" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"/>
                                </div>

                                <div class="nice-form-group">
                                    <label>Фото</label>
                                    <input type="file" name="photo"  />
                                </div> 

                                <div class="nice-form-group">
                                    <label>День рождения</label>
                                    <input type="date" name="birthday" value="{{ $student->birthday }}" />
                                </div>
                                <details>
                                    <summary>
                                        <div class="toggle-code">
                                        <button style="background: transparent;border: none;" type="submit">Сохранить</button>
                                        </div>
                                    </summary>
                                </details>
                            </div>
                    
                            
                </form>
            </div>
        </section> -->
        <div class="teacher-area section-padding pb-0">
            <div class="teacher-wrap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="teacher-contact">
                                <div class="teacher-contact-form" style="margin-top: 5px;">
                                    <h2>Редактировать профиль</h2>
                                    <form method="POST" action="{{ route('student.edit', $student->id) }}"  enctype="multipart/form-data"  id="contact-form-main">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="fname" id="fname"
                                                    placeholder="Имя" value="{{ $student->fname }}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="lname" id="lname"
                                                    placeholder="Фамилия" value="{{ $student->lname }}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group ">
                                                <input type="text" class="form-control" name="phone" 
                                                    placeholder="Телефон" value="{{ $student->phone }}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="date" name="birthday" value="{{ $student->birthday }}" />
                                            </div>
                                            
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in">
                                                <label for="file">Загрузить фото</label>
                                                <input id="file" type="file" class="form-control" name="photo" value="{{ $student->photo }}">
                                                <i class="ti-cloud-up"></i>
                                            </div>
                                            
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