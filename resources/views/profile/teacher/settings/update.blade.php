@extends('layout.app')

@section('title', 'My page')

@section('content')
        <!-- <section class="section">
            <div class="section__wrapper">
                <h4>Редактирование профиля</h4>
                <form method="POST" action="{{ route('teacher.edit', $teacher->id) }}"  enctype="multipart/form-data">
                    @csrf
                    
                            <div class="redact__teacher section__input">
                                <div class="nice-form-group">
                                    <label>Имя: </label>
                                    <input name="fname"  type="text" placeholder="Имя" value="{{ $teacher->fname }}" />
                                    @error('fname')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="nice-form-group">
                                    <label>Фамилия:</label>
                                    <input type="text" placeholder="Your name"  name="lname" value="{{ $teacher->lname }}" />
                                    @error('lname')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="nice-form-group">
                                    <label>Телефон:</label>
                                    <input type="tel" name="phone" placeholder="+7 (900) 123-45-67" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"/>
                                </div>

                                <div class="nice-form-group">
                                    <label>Опыт работы: </label>
                                    <input name="practice"  type="text" placeholder="" value="{{ $teacher->practice }}" />
                                </div>
                                <div class="nice-form-group">
                                    <label>Город: </label>
                                    <input name="city"  type="text" placeholder="" value="{{ $teacher->city }}" />
                                </div>

                                <div class="nice-form-group">
                                    <label>Фото:</label>
                                    <input type="file" name="photo"  />
                                </div> 

                                <div class="nice-form-group">
                                    <label>Образование: </label>
                                    <textarea name="education" rows="2" placeholder="МИДИС" value="{{ $teacher->education }}"></textarea>
                                </div>
                                
                                <div class="nice-form-group">
                                    <label>Язык: </label>
                                    <select name="lang_id">
                                        @foreach($langs as $lang)
                                            <option value="{!! $lang->name !!}">{!! $lang->name !!}</option>
                                        @endforeach    
                                    </select>
                                </div>

                                <div class="nice-form-group">
                                    <label>О вас</label>
                                    <textarea name="about" rows="5" placeholder="Расскажите о себе" value="{{ $teacher->about }}"></textarea>
                                </div>
                                <div class="nice-form-group">
                                    <label>Vk: </label>
                                    <input name="vk"  type="text" placeholder="" value="{{ $teacher->vk }}" />
                                </div>
                                <div class="nice-form-group">
                                    <label>Telegram: </label>
                                    <input name="telegram"  type="text" placeholder="" value="{{ $teacher->telegram }}" />
                                </div>
                                <div class="nice-form-group">
                                    <label>Whatsapp: </label>
                                    <input name="whatsapp"  type="text" placeholder="" value="{{ $teacher->whatsapp }}" />
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


        <!-- teacher-area-start -->
        <div class="teacher-area section-padding pb-0">
            <div class="teacher-wrap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="teacher-contact">
                                <div class="teacher-contact-form" style="margin-top: 5px;">
                                    <h2>Редактировать профиль</h2>
                                    <form method="POST" action="{{ route('teacher.edit', $teacher->id) }}"  enctype="multipart/form-data"  id="contact-form-main">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="fname" id="fname"
                                                    placeholder="Имя" value="{{ $teacher->fname }}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="lname" id="lname"
                                                    placeholder="Фамилия" value="{{ $teacher->lname }}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group ">
                                                <input type="text" class="form-control" name="phone" 
                                                    placeholder="Телефон" value="{{ $teacher->phone }}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group ">
                                                <input type="text" class="form-control" name="city" 
                                                    placeholder="Город" value="{{ $teacher->city }}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group ">
                                                <input type="text" class="form-control" name="practice" 
                                                    placeholder="Опыт работы" value="{{ $teacher->practice }}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <select name="lang_id" id="Country" class="form-control">
                                                    @foreach($langs as $lang)
                                                    <option value="{!! $lang->id !!}">{!! $lang->name !!}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in">
                                                <label for="file">Загрузить фото</label>
                                                <input id="file" type="file" class="form-control" name="photo" value="{{ $teacher->photo }}">
                                                <i class="ti-cloud-up"></i>
                                            </div>
                                            <div class="col-lg-12 col-12 form-group">
                                                <textarea class="form-control" name="education" id="note" value="{{ $teacher->education }}"
                                                    placeholder="education..."></textarea>
                                            </div>
                                            <div class="col-lg-12 col-12 form-group">
                                                <textarea class="form-control" name="about" id="note" value="{{ $teacher->about }}"
                                                    placeholder="Description..."></textarea>
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
        <!-- teacher-area-end -->

@endsection