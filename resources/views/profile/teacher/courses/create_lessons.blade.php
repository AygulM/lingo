@extends('layout.app')

@section('title', 'My page')

@section('content')

        <div class="teacher-area section-padding pb-0">
            <div class="teacher-wrap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="teacher-contact">
                                <div class="teacher-contact-form" style="margin-top: 5px;">
                                    <h2>add course</h2>
                                    <form method="POST"  action="{{ route('lessons.store', $id) }}"   enctype="multipart/form-data"  id="contact-form-main">
                                        @csrf
                                        
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="theme" id="title"
                                                    placeholder="theme" >
                                            </div>
                                            @error('theme')	
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                           
                                            <div class="col-lg-12 col-12 form-group">
                                                <textarea class="form-control" name="description" id="note" 
                                                    placeholder="description..."></textarea>
                                            </div>
                                            @error('description')
                                                <p class="text-red-500">{{ $message }}</p>
                                            @enderror
                                            
                                            <div class="submit-area col-lg-12 col-12">
                                                <button type="submit" class="theme-btn submit-btn">add</button>
                                                
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
