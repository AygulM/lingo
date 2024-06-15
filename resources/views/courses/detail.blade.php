
@extends('layout.app')

@section('title', 'My page')

@section('content')


<p>ji </p>
       <h1>detail {{$course-> id}}</h1>
       {{$course-> title}}

<!-- wpo-course-details-area start -->
<div class="wpo-course-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8">
                        <div class="wpo-course-details-wrap">
                            <div class="wpo-course-details-img">
                                <img src="/storage/courses/{{$course->previewImage}}" alt="">
                            </div>
                            <div class="wpo-course-details-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="Overview-tab" data-bs-toggle="tab"
                                            href="course-single.html#Overview" role="tab" aria-controls="Overview"
                                            aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="Curriculum-tab" data-bs-toggle="tab" href="course-single.html#Curriculum"
                                            role="tab" aria-controls="Curriculum" aria-selected="false">Curriculum</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="instructor-tab" data-bs-toggle="tab" href="course-single.html#instructor"
                                            role="tab" aria-controls="instructor" aria-selected="false">instructor</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="course-single.html#reviews"
                                            role="tab" aria-controls="reviews" aria-selected="false">reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="wpo-course-details-text">
                                <div class="tab-content">
                                    <div id="Overview" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="wpo-course-content">
                                                    <div class="wpo-course-text-top">
                                                        <h2>{{$course->title}}</h2>
                                                        <div class="course-b-text">
                                                            <p>{{$course->discription}}</p>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Curriculum" class="tab-pane">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="wpo-course-content">
                                                    <div class="wpo-course-text-top">
                                                        <h2>Lessons</h2>
                                                        
                                                        <div class="course-curriculam">
                                                            <ul>
                                                                @foreach($course->lessons as $lesson)
                                                               <li><span>{{$lesson->theme}}</span></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="instructor" class="tab-pane">
                                        <div class="team-info-wrap">
                                            <div class="row align-items-center">
                                                <div class="col-lg-5">
                                                    <div class="team-info-img">
                                                        <img src="/storage/teachers/{{$course->teacher->photo}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="team-info-text">
                                                        <h2>{{$course->teacher->fname}} {{$course->teacher->lname}}</h2>
                                                        <ul>
                                                            <li>Опыт работы: <span>{{$course->teacher->practice}}</span></li>
                                                            <li>Address:<span>{{$course->teacher->city}}</span></li>
                                                            <li>Phone:<span>{{$course->teacher->phone}}</span></li>
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
                                    </div>
                                    <div id="reviews" class="tab-pane">
                                        <div class="row">
                                            <div class="col col-lg-10 col-12">
                                                @foreach($reviews as $review)
                                                <div class="client-rv">
                                                    <div class="client-pic">
                                                        <img src="/storage/students/{{$review->student->photo}}" alt>
                                                    </div>
                                                    <div class="details">
                                                        <div class="name-rating-time">
                                                            <div class="name-rating">
                                                                <div>
                                                                    <h4>{{$review->student->fname}} {{$review->student->lname}}</h4>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="review-body">
                                                            <p>{{$review->text}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                
                                            </div> <!-- end col -->
    
                                            <div class="col col-lg-12 col-12 review-form-wrapper">
                                                <div class="review-form">
                                                    <h4>Add a review</h4>
                                                    <p>Your email address will not be published. Required fields are marked
                                                        *</p>
                                                    <form method="POST" action="{{ route('review', $course->id) }}">
                                                        @csrf
                                                        <div>
                                                            <textarea class="form-control"
                                                                placeholder="Review *" name='text'></textarea>
                                                        </div>
                                                        <div class="rating-wrapper">
                                                            <div class="submit">
                                                                <button type="submit" class="theme-btn-s2">Post
                                                                    review</button>
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
                    </div>
                    <div class="col col-lg-4 col-12 course-sitebar">
                        <div class="blog-sidebar">
                            <div class="widget features-widget">
                                <div class="features-top">
                                    <h4>{{$course->price}}</h4>
                                </div>
                                
                                <ul>
                                    <li>Duration: <span>{{$course->duration}}</span></li>
                                    <li>Lessons: <span>{{$course->lessons->count()}}</span></li>
                                    <li>Start: <span>Max {{$course->start_date}}</span></li>
                                    
                                    <li>Students: <span>Max {{$course->max_student}}</span></li>
                                    <li>Language: <span>{{$course->lang->name}}</span></li>
                                    <li>type <span>{{$course->course_type->name}}</span></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-course-details-area end -->
@endsection
