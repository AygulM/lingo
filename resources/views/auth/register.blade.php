
@extends('layout.app')

@section('title', 'Регистрация')
@section('dopLink')
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/auth-pages.css" rel="stylesheet">
@endsection
@section('content')
    <!-- <div class="">
        <div class="">
            <h1 class="">Регистрация</h1>

            <form action="{{ route('register_process') }}"  method="POST">
                @csrf

                <input name="name" type="text" class="" placeholder="Имя" />

                @error('name')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="email" type="text" class="" placeholder="Email" />

                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror


                <label for="role">Роль:</label>
                <select name="role" id="role" required>
                    <option value="teacher">Преподаватель</option>
                    <option value="student">Студент</option>
                </select><br><br>
                @error('role')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                

                <input name="password" type="password" class="" placeholder="Пароль" />

                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="password_confirmation" type="password" class="" placeholder="Подтверждение пароля" />

                @error('password_confirmation')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <div>
                    <a href="{{ route('login') }}" class="">Есть аккаунт?</a>
                </div>

                <button type="submit" class="">Зарегистрироваться</button>
            </form>
        </div>
    </div> -->

    <div class="wpo-login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="wpo-accountWrapper" action="{{ route('register_process') }}"  method="POST">
                        @csrf
                        <div class="wpo-accountInfo">
                            <div class="wpo-accountInfoHeader">
                                <a href="{{ route('register') }}"><img src="assets/images/logo-s2.svg" alt=""></a>
                                <a class="wpo-accountBtn" href="{{ route('login') }}">
                                    <span class="">Вход</span>
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
                                <h2>Регистрация</h2>
                                <p>Sign into your pages account</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label for="name">Nikname</label>
                                    <input type="text" id="name" name="name" placeholder="">
                                </div>
                                @error('name')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label>Email</label>
                                    <input type="text" id="email" name="email" placeholder="Email here..">
                                </div>
                                @error('email')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                <label for="role">Роль:</label>
                                <select name="role" id="role" required>
                                    <option value="teacher">Преподаватель</option>
                                    <option value="student">Студент</option>
                                </select><br><br>
                                @error('role')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="pwd2" type="password"  name="password">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default reveal3" type="button"><i class="fa fa-eye"></i></button>
                                        </span>
                                    </div>
                                </div>
                                @error('password')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Повторите пароль</label>
                                        <input class="pwd3" type="password"name="password_confirmation">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default reveal2" type="button"><i class="fa fa-eye"></i></button>
                                        </span>
                                    </div>
                                </div>
                                @error('password_confirmation')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                <div class="col-lg-12 col-md-12 col-12">
                                    <button type="submit" class="wpo-accountBtn">Регистрация</button>
                                </div>
                            </div>
                            
                            <p class="subText">Есть аккаунт? <a href="{{ route('login') }}">Вход</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
