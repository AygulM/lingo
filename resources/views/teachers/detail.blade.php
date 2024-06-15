@extends('layout.app')

@section('title', 'Teachers')

@section('content')

  <!-- .team-pg-area start -->
          <div class="team-pg-area section-padding">
            <div class="container">
                <div class="team-single-wrap">
                    <div class="team-info-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="team-info-img">
                                    <img src="/storage/teachers/{{$teacher->photo}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="team-info-text">
                                    <h2>{{ $teacher->fname}} {{ $teacher->lname}}</h2>
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
                                    <h2>О преподавателе</h2>
                                    
                                    <p style="white-space: pre-wrap;">{{ $teacher->about}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="education-area">
                                    <h2>Образование</h2>
                                    <p style="white-space: pre-wrap;">
                                        {{ $teacher->education}} 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
        <!-- .team-pg-area end -->

        @endsection
