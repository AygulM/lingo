@extends('layout.app')

@section('title', 'My page')

@section('content')


        <!-- <section class="section">
            <div class="section__wrapper">

                <div class="my__profile">
                    <div class="dop__panel">
                        <div class="profile__photo">
                            <img src="storage/teachers/{{$user->photo}}" alt="">
                            <a href="{{ route('teacher.edit.form') }}">Редактировать профиль</a>
                        </div>
                        <div class="dop__panel--elem">
                            <div class="">
                                <a href="{{ route('teacher.test.show') }}">Тесты</a>
                            </div>
                            <div class="">
                                <a href="{{ route('tasks.index') }}">Tasks</a>
                            </div>
                            <div class="div">
                                <a href="{{route('publicTest_create')}}">public test create?</a>
                            </div>
                            
                            <div class="">
                                <a href="{{route('courses.index')}}">Курсы</a>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="profile__block profile__info">
                        
                            <h4 class="">Мой профайл</h4>
                            <ul class="student-profile-info">
                                
                                <li>
                                    <h5>Имя :</h5>
                                    <span>{{ $user->fname}}</span>
                                </li>
                                <li>
                                    <h5>Фамилия :</h5>
                                    <span>{{ $user->lname}}</span>
                                </li>
                                <li>
                                    <h5>Имя пользователя :</h5>
                                    <span>{{ $user->user->name}}</span>
                                </li>
                                <li>
                                    <h5>Электронная почта :</h5>
                                    <span>{{ $user->user->email}}</span>
                                </li>
                                <li>
                                    <h5>Телефон :</h5>
                                    <span>{{ $user->phone}}</span>
                                </li>

                                <li>
                                    <h5>Опыт работы :</h5>
                                    <span>{{ $user->practice}}</span>
                                </li>

                                <li>
                                    <h5>Образование :</h5>
                                    <span>{{ $user->education}}</span>
                                </li>
                                
                                <li>
                                    <h5>Биография :</h5>
                                    <span>{{ $user->about}}</span>
                                </li>

                                
                            </ul>
                    </div>
                </div>
            </div>
        </section> -->

 <!-- .team-pg-area start -->
        <div class="team-pg-area section-padding">
            <div class="container">
                <div class="team-single-wrap">
                    <div class="team-info-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="team-info-img">
                                    <img src="/storage/teachers/{{$user->photo}}" alt="">
                                    <div class="widget features-widget">
                                        
                                        <ul>
                                            <li><a href="{{ route('teacher.edit.form') }}">Редактировать профиль</a></li>
                                            <li><a href="{{ route('teacher.test.show') }}">tests</a></li>
                                            <li><a href="{{ route('tasks.index') }}">Tasks</a></li>
                                            <li><a href="{{route('publicTest_create')}}">public test create?</a></li>
                                            <li><a href="{{route('courses.index')}}">Курсы</a></li>
                                            <li><a href="{{route('lessons.index')}}">lessons on course</a></li>
                                            
                                            <li>Language: <span>English</span></li>
                                            <li>Skill Level <span>Advanced</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="team-info-text">
                                    <h2>{{ $user->fname}}</h2>
                                    <ul>
                                        <li>Position: <span>Senior Marketer</span></li>
                                        <li>Experience:<span>12 Years</span></li>
                                        <li>Address:<span>6391 Elgin St. Celina, Delaware 10299</span></li>
                                        <li>Phone:<span>+00 568 746 987</span></li>
                                        <li>Email:<span>youremail@gmail.com</span></li>
                                    </ul>

                                    <div class="certificates-wrap">
                                        <h2>Certificates</h2>

                                        <div class="certificates-items">
                                            <div class="certificates-item">
                                                <img src="assets/images/certificates/1.jpg" alt="">
                                            </div>
                                            <div class="certificates-item">
                                                <img src="assets/images/certificates/2.jpg" alt="">
                                            </div>
                                            <div class="certificates-item">
                                                <img src="assets/images/certificates/3.jpg" alt="">
                                            </div>
                                            <div class="certificates-item">
                                                <img src="assets/images/certificates/4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-exprience-area team-widget">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="exprience-wrap">
                                    <h2>Personal Experience</h2>
                                    
                                    <p>{{ $user->about}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="education-area">
                                    <h2>Education</h2>
                                    <ul>
                                        <li>Academy University School of Web Design, Boston, MA</li>
                                        <li>Admization Institute of Web Design, Juzment School of
                                            Management,Cambridge</li>
                                        <li>The Syntify High School Of New York</li>
                                        <li>Education & Development Admissions</li>
                                        <li>Admization Institute of Web Design, Juzment
                                            School of Management,Cambridge</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="skills-area">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="exprience-wrap">
                                        <h2>Skills</h2>
                                        <div class="wpo-skill-section">
                                            <div class="wpo-skill-progress">
                                                <div class="wpo-progress-single">
                                                    <h5 class="progress-title">Video Editing</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft"
                                                            data-wow-duration="0.5s" data-wow-delay=".3s"
                                                            role="progressbar" style="width: 75%" aria-valuenow="90"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <span class="progress-number">85%</span>
                                                </div>

                                                <div class="wpo-progress-single">
                                                    <h5 class="progress-title">Education</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft"
                                                            data-wow-duration="0.7s" data-wow-delay=".3s"
                                                            role="progressbar" style="width: 80%" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <span class="progress-number">80%</span>
                                                </div>

                                                <div class="wpo-progress-single">
                                                    <h5 class="progress-title">Development</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft"
                                                            data-wow-duration="0.9s" data-wow-delay=".3s"
                                                            role="progressbar" style="width: 85%" aria-valuenow="95"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <span class="progress-number">95%</span>
                                                </div>
                                                <div class="wpo-progress-single">
                                                    <h5 class="progress-title">Qualification</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft"
                                                            data-wow-duration="0.9s" data-wow-delay=".3s"
                                                            role="progressbar" style="width: 85%" aria-valuenow="95"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <span class="progress-number">70%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="education-area ex-wiget">
                                        <h2>Достижения</h2>
                                        <ul>
                                            <li>Best Web Design award 2017</li>
                                            <li>Specials awards for Development activity 2018</li>
                                            <li>Super Developer Top 50 Developer in USA</li>
                                            <li>Young star Award at Developer in 2021</li>
                                            <li>Greatest Developer Top 10</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wpo-contact-area ex-wiget">
                        <div class="wpo-contact-title">
                            <h2>Make an Appointment</h2>
                            <p>Do not put off until tomorrow the problems that need to be solved today, especially
                                if it concerns your life!</p>
                        </div>
                        <div class="quote-form">
                            <form>
                                <div class="form-group half-col">
                                    <input type="text" class="form-control" placeholder="Name:" name="name">
                                </div>
                                <div class="form-group half-col">
                                    <input type="email" class="form-control" placeholder="Email:" name="email">
                                </div>
                                <div class="form-group half-col">
                                    <input type="text" class="form-control" placeholder="phone" name="phone">
                                </div>
                                <div class="form-group half-col">
                                    <select name="subject" class="form-control">
                                        <option disabled="disabled" selected>Subject</option>
                                        <option>Web Development</option>
                                        <option>Web Design</option>
                                        <option>Marketing</option>
                                    </select>
                                </div>
                                <div class="form-group full-col">
                                    <textarea class="form-control" name="note"
                                        placeholder="Case Discription"></textarea>
                                </div>
                                <div class="form-group full-col text-center">
                                    <button class="btn theme-btn" type="submit">Appointment </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .team-pg-area end -->

@endsection

