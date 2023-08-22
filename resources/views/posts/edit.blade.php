<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
    <h1>編集画面</h1>
    <div class="content">
       <form action="/posts/{{ $post->id }}"  method="POST">
           @csrf
           @method('PUT')
           <div class="content_title">
               <h2>タイトル<h2>
                    <input type="text" name="post[title]" value="{{ $post->title }}">
           </div>
           
           <div class="content_body">
               <h2>本文</h2>
               <input type="text" name="post[body]" value="{{ $post->body }}">
           </div>
              
            
            </div>
           <input type="submit" value="保存">
       </form>
     <a href="/posts/{{ $post->id }}">戻る</a>
    </div>
    </body>
</html>
