@extends('layout.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="fontAwesome/css/font-awesome.css">
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="comment-session">
      <div class="post-comment">
         <div class="comment-list">
            <div class="flex">
               <div class="user">
                  <div class="user-image"><img src="../img/foto.kim.jpg" alt=""></div>
                  <div class="user-meta">
                     <div class="name">NayCode</div>
                     <div class="day">10 day ago</div>
                  </div>
               </div>
               <div class="reply">
                  <div class="lick icon">420<i class="fa fa-thumbs-o-up"></i></div>
                  <div class="dislick icon"><i class="fa fa-thumbs-o-down"></i></div>
                  <div class="re-comment">Reply</div>
               </div>
            </div>
            <div class="comment">
               Makasih kak, work banget buat aku pemula apa ada versi terbarunya?
            </div>
         </div>
         <form action="" class="comment-box">
            <div class="user">
               <div class="image"><img src="../img/foto.kom.jpg" alt=""></div>
               <div class="name">RelCode</div>
            </div>
            <textarea name="comment"></textarea>
            <button class="comment-submit">Comment</button>
         </form>
      </div>
   </div>
</body>
</html>
@endsection