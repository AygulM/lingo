





<div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <div class="wpo-team-img-box">
                                        <img src="/storage/teachers/{{$teacher->photo}}" alt="">
                                        <ul>
                                            <li><a href="teacher.html#"><i class="fi flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="teacher.html#"><i class="fi flaticon-twitter"></i></a></li>
                                            <li><a href="teacher.html#"><i class="fi flaticon-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h2><a href="{{ route('teacherDetail', $teacher->id) }}">{!! $teacher->fname, $teacher->lname !!}</a></h2>
                                    <span><a href="{{ route('teacherDetail', $teacher->id) }}">Узнать больше</a></span>
                                </div>
                            </div>
                        </div>