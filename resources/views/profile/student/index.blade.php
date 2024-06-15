@extends('layout.app')

@section('title', 'My page')

@section('content')

<section class="section">
            <div class="section__wrapper">

                <div class="my__profile">
                    <div class="dop__panel">
                        <div class="profile__photo">
                            <img src="storage/students/{{$user->photo}}" alt="">
                            <a href="{{ route('student.edit.form') }}">Редактировать профиль</a>
                        </div>
                        <div class="dop__panel--elem">
                            <div class="">
                                <a href="">Тесты</a>
                            </div>
                            <div class="">
                                <a href="{{ route('myHometasks') }}">Tasks</a>
                            </div>
                            <div class="">
                                <a href="">Курсы</a>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="profile__block profile__info">
                        
                            <h4 class="">Мой профайл</h4>
                            <ul class="student-profile-info">
                                <li>
                                    <h5>День рождения :</h5>
                                    <span>{{ $user->birthday}}</span>
                                </li>
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
                  
                            </ul>
                    </div>
                </div>
            </div>
        </section>

@endsection


<style>
    .my__profile{
        display: flex;
        flex-direction: row;
    }
    .dop__panel{
        padding: 30px;
        border-radius: 20px;
        text-align: center;
        
    }
    .profile__block{
        padding: 14px 25px ;
    }
    .profile__photo{
        display: flex;
        flex-direction: column;
        align-content: space-between;
        width: 250px;
        
        text-align: center;
    }
    .profile__photo a{
        padding: 20px;    
    }
    .profile__photo img{
        width: 250px;
        height: 250px;
        border-radius: 50%;
        object-fit: cover;
        object-position: center top;
    }
    .student-profile-info li{
        display: flex;
        margin-bottom: 15px;
        font-size: 16px;
        align-items: center;
        height: 25px;
    }
    .student-profile-info li h5{
        min-width: 230px;
        font-size: 16px;
    }

</style>