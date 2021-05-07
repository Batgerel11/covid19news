@extends('base')
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid19 news</title>
    <style>
    .App {
        text-align: center;
        max-width: 200cm;
        margin: 70px;
        margin-top: 40px;
        margin-bottom: 40px;
        background-color: rgb(223, 223, 247);
    }
    .mn {
        background-color: rgb(82, 82, 82);
        border-radius: 7px;
        border: 3px solid rgb(126, 186, 241);
        color: white;
        font-weight: 100;
        text-align: Center;
        padding: 25px;

    }
    .mongol{
        color: rgb(201, 79, 49);
        font-size: 25px;
    }
    .text {
        text-align: center;
        border-spacing: 20px;
    }
    table {
        border-spacing: 30px;
    }
    h1
     {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
            Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            margin-bottom: -40px;
            margin-top: 100px;
    }
    h3{
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
            Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-size: 50px;
    }
    table {
        border-spacing: 20px;
        padding: 10px;
        margin: 40px;
    }
    body {
        background-image: url("/main/Covid-background.jpg");
    }
    </style>  
</head>
<body>

<div class="App">
<h3>covid19 news</h3>
<h1>дэлхийн хэмжээнд</h1>
<table>
<tr>
<td class="mn"><p>Шинээр нэмэгдсэн</p>{{$data['Global']['NewConfirmed']}}</td>
<td class="mn"><p>Батлагдсан нийт тохиолдол</p>{{$data['Global']['TotalConfirmed']}}</td>
<td class="mn"><p>Нас барсан</p>{{$data['Global']['NewDeaths']}}</td>
<td class="mn"><p>Нийт нас барсан</p>{{$data['Global']['TotalDeaths']}}</td>
<td class="mn"><p>Эдгэрсэн</p>{{$data['Global']['NewRecovered']}}</td>
<td class="mn"><p>Нийт эдгэрсэн</p>{{$data['Global']['TotalRecovered']}}</td>
<td class="mn"><p>Мэдээ шинэчлэгдсэн</p>{{$data['Global']['Date']}}</td>
</tr>
</table><hr>
<h1>Монгол улсад</h1>
<table>
<tr>
          <td class="mn">Батлагдсан нийт тохиолдол</td>
          <td class="mn">Шинээр нэмэгдсэн</td>
          <td class="mn">Нас барсан</td>
          <td class="mn">Нийт нас барсан</td>
          <td class="mn">Эдгэрсэн</td>
          <td class="mn">Нийт эдгэрсэн</td>
          <td class="mn">Мэдээ шинэчлэгдсэн</td>
</tr>
@foreach ($data['Countries'] as $node)
    @if($node['Country'] =='Mongolia')
    <tr class="mongol">
       <td>{{$node['TotalConfirmed']}}</td>
       <td>{{$node['NewConfirmed']}}</td>
       <td>{{$node['NewDeaths']}}</td>
       <td>{{$node['TotalDeaths']}}</td>
       <td>{{$node['NewRecovered']}}</td>
       <td>{{$node['TotalRecovered']}}</td>
       <td>{{$node['Date']}}</td>
    </tr>        
    @else      
    @endif
@endforeach
</table><hr>
<h1>Бусад орнууд</h1>
<table>
        <tr>
          <td class="mn">Улс</td>
          <td class="mn">Батлагдсан нийт тохиолдол</td>
          <td class="mn">Шинээр нэмэгдсэн</td>
          <td class="mn">Нас барсан</td>
          <td class="mn">Нийт нас барсан</td>
          <td class="mn">Эдгэрсэн</td>
          <td class="mn">Нийт эдгэрсэн</td>
          <td class="mn">Мэдээ шинэчлэгдсэн</td>
        </tr>
        @foreach($data['Countries'] as $item)
        <tr class="text">
            <td><b>{{$item['Country']}}</b></td>
            <td>{{$item['TotalConfirmed']}}</td>
            <td>{{$item['NewConfirmed']}}</td>
            <td>{{$item['NewDeaths']}}</td>
            <td>{{$item['TotalDeaths']}}</td>
            <td>{{$item['NewRecovered']}}</td>
            <td>{{$item['TotalRecovered']}}</td>
            <td>{{$item['Date']}}</td>
        </tr>
        @endforeach
</table>
</div>
</body>
</html>
