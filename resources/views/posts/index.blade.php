<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #1a202c;
        }

        .sadrzaj{
            margin-top: 25vh;
        }

        .naslov1{
            color: white;
            margin-bottom: 40px;
            margin-top: 40px;
            font-size: 50px;
            text-transform: uppercase;
        }

        .box{
            text-align: center; !important
            width: 100vh;
        }

        .btn{
            margin-bottom: 50px;
            width: 300px;
        }

        .text{
            color: white;
            text-align: center; !important
        }

    </style>
</head>
<body class="sadrzaj">
    <div class="box" class="container max-w-full pt-4">
        <h1 class="naslov1">Lista radnika</h1>

        <a href="/posts/create" class="btn btn-primary btn">Dodaj radnika</a>

        @foreach($posts as $post)
            <article>
                <a href="/posts/{{ $post->id }}/edit" class="text-uppercase font-weight-bold h2">{{ $post->title }}</a>
                <p class="text">{{ $post->content }}</p>

                <hr>
            </article>
        @endforeach
    </div>
</body>
</html>