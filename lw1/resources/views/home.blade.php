<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <title>Сериалoмания</title>
    </head>



 <style type="text/css">
   .photo {
    background: #d9dabb; /* Цвет фона */
    width: 150px; /* Ширина */
    margin: 0 10px 10px 0; /* Отступы */
    padding: 10px 0; /* Поля сверху и снизу */
    text-align: center; /* Выравнивание по центру */
    display: inline-block; /* Строчно-блочный элемент */
   }
   .photo img {
    border: 2px solid #8b8e4b; /* Параметры рамки */
   }
   .photo p {
    margin: 0; /* Отступы */
   }
  </style>

    <body>
        <div class="photo">
   <p class="caption"> {{ $filmone }}</p><span>{{ $descriptionone }}</span>
  </div>
  <div class="photo">
   <p class="caption">{{ $filmtwo }}</p><span>{{ $descriptiontwo }}</span>
  </div>
  <div class="photo">
   <p class="caption">{{ $filmthree }}</p><span>{{ $descriptionthree }}</span>
  </div>
  <div class="photo">
   <p class="caption">{{ $filmfour }}</p><span>{{ $descriptionfour }}</span>
  </div>

        <div>
<!--             {{ $filmone }}
            {{ $descriptionone }}
            {{ $filmtwo }}
            {{ $descriptiontwo }}
            {{ $filmthree }}
            {{ $descriptionthree }}
            {{ $filmfour }}
            {{ $descriptionfour }}
             -->
        </div>
    </body>
</html>
