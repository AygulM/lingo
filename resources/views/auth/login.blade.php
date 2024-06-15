@extends('layout.app')

@section('title', 'Авторизация')
@section('dopLink')
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/auth-pages.css" rel="stylesheet">
@endsection
@section('content')
    <!-- <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Вход</h1>

            <form method="POST" action="{{ route('login_process') }}" class="space-y-5 mt-5">
                @csrf

                <input name="email" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-500 @enderror" placeholder="Email" />

                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="password" type="password" class="w-full h-12 border border-gray-800 rounded px-3 @error('password') border-red-500 @enderror" placeholder="Пароль" />

                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <div>
                    <a href="{{ route('forgot') }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Забыли пароль?</a>
                </div>

                <div>
                    <a href="{{ route('register') }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Регистрация</a>
                </div>

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Войти</button>
            </form>
        </div>
    </div> -->


    <div class="wpo-login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="wpo-accountWrapper" method="POST" action="{{ route('login_process') }}">
                        @csrf
                        <div class="wpo-accountInfo">
                            <div class="wpo-accountInfoHeader">
                                <a href="{{ route('login') }}"><img src="assets/images/logo-s2.svg" alt=""></a>
                                    <a class="wpo-accountBtn" href="{{ route('register') }}">
                                        <span class="">Создать аккаунт</span>
                                    </a>
                            </div>
                            <div class="image">
                                <img src="assets/images/login.svg" alt="">
                            </div>
                            <div class="back-home">
                                <a class="wpo-accountBtn" href="{{ route('home') }}">
                                    <span class="">На главную</span>
                                </a>
                            </div>
                        </div>
                        <div class="wpo-accountForm form-style">
                            <div class="fromTitle">
                                <h2>Вход</h2>
                                <p>Sign into your pages account</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label>Email</label>
                                    <input type="text" id="email" name="email" placeholder="demo@gmail.com">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label >Пароль</label>
                                        <input class="pwd6" type="password" placeholder=""  value="123456" name="password">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default reveal6" type="button"><i class="fa fa-eye"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="check-box-wrap">
                                        
                                        <div class="forget-btn">
                                            <a href="{{ route('forgot') }}">Забыли пароль?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <button type="submit" class="wpo-accountBtn">Вход</button>
                                </div>
                            </div>
                            
                            <p class="subText">Нет аккаунта? <a href="{{ route('register') }}">Создать аккаунт</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection