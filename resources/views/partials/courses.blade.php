




<div class="col col-lg-4 col-md-6 col-12">
                                            <div class="wpo-popular-single">
                                                <div class="wpo-popular-item">
                                                    <div class="wpo-popular-img">
                                                        @if(isset($course->teacher->photo))
                                                        <img src="/storage/courses/{{$course->previewImage}}" alt="">
                                                        @endif
                                                        @if(isset($course->lang_id))
                                                        <div class="thumb">
                                                            <span><img src="/storage/langs/{{$course->lang->lcode}}.png" alt=""></span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="wpo-popular-content">
                                                        <div class="wpo-popular-text-top">
                                                            <ul>
                                                                @if(isset($course->teacher->photo))
                                                                <li><img src="/storage/teachers/{{$course->teacher->photo}}"
                                                                        alt="">
                                                                </li>
                                                                @endif
                                                                @if(isset($course->teacher->fname))
                                                                <li><a href="{{ route('teacherDetail', $course->teacher->id) }}">{{$course->teacher->fname}} {{$course->teacher->lname}}</a></li>
                                                                @endif
                                                            </ul>
                                                            
                                                        </div>
                                                        <h2><a href="{{ route('courseDetail', $course->id) }}">{{$course->title}}</a>
                                                        </h2>

                                                        <div class="wpo-popular-text-bottom">
                                                            <ul>
                                                                <li><i class="fi flaticon-reading-book"></i>Студентов: {{$course->max_student}}</li>
                                                                <li><i class="fi flaticon-agenda"></i>Уроки {{$course->lessons->count()}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>