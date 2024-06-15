<!-- start wpo-contact-pg-section -->
<section class="wpo-contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 offset-lg-1">
                        
                        <div class="wpo-contact-title">
                            <h2>Записаться на пробное занятие</h2>
                            <p>С вами свяжется менеджер для согласования времени занятия</p>
                        </div>
                        <div class="wpo-contact-form-area" style="margin-bottom: 45px">
                            <form method="post" action="{{ route('signupCourse') }}"  class="contact-validation-active" id="contact-form-main">
                                @csrf    
                                <div>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Имя*">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email*">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="Телефон*">
                                </div>
                                <div>
                                    <select name="course_id" class="form-control">
                                    @foreach($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn">Записаться</button>
                                    <div id="loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-contact-pg-section -->