<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="public/app.css">
    <title>Books</title>
  </head>
  <body>
    <table>
     <thead>
       <th>isbn</th>
       <th>Title</th>
       <th>Author</th>
       <th>Genre</th>
       <th>Edition</th>
       <th>Description</th>
       <th>Pages</th>
       <th>Year</th>
     </thead>
     <tbody>
       <td>{{$book->isbn}}</td>
       <td>{{$book->title}}</td>
       <td>{{$book->author}}</td>
       <td>{{$book->genre}}</td>
       <td>{{$book->edition}}</td>
       <td>{{$book->description}}</td>
       <td>{{$book->pages}}</td>
       <td>{{$book->year}}</td>
     </tbody>
    </table>
  </body>
</html>
