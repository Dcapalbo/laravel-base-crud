<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Show</title>
  </head>
  <body>
    <div>
      <p>{{$book->isbn}}</p>
      <p>{{$book->title}}</p>
      <p>{{$book->author}}</p>
      <p>{{$book->genre}}</p>
      <p>{{$book->edition}}</p>
      <p>{{$book->description}}</p>
      <p>{{$book->pages}}</p>
      <p>{{$book->year}}</p>
    </div>
  </body>
</html>
