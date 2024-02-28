<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ИдёмВКино</title>
  @vite(['resources/css/client_styles.css'])
  @vite(['resources/css/normalize.css'])
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>

<header class="page-header">
    <h1 class="page-header__title">Идём<span>в</span>кино</h1>
    <div class="block_login"> <a href="{{ route('admin') }}" class="link_login font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
    </div>
</header>    

<nav class="page-nav">
    @php
        $chose = 'page-nav__day_today page-nav__day_chosen ';
    @endphp

    @for($i = 0; $i < 7; $i++) <a class="page-nav__day {{$chose . $weekDayRus[$i][0]['weekEnd']}}" href="#" data-time-stamp="{{$weekDayRus[$i][0]['timeStamp']}}">
        <span class="page-nav__day-week"> {{$weekDayRus[$i][0]['dayWeek']}}</span><span class="page-nav__day-number">{{$weekDayRus[$i][0]['day']}}</span>
    </a>
    @php
        $chose = '';
    @endphp
    @endfor
</nav>
