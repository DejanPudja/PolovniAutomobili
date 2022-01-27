<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
        body {
            background-color: #1a202c;
        }

        .sadrzaj{
            text-align: center; 
            margin-top: 25vh;
        }

        .naziv{
            color: white;
            font-size: 35px;
            user-select: none;
        }

        .content1{
            color: white;
            font-size: 35px;
            user-select: none;
        }

        .input1{
            height: 40px;
            width: 300px;
            border-radius: 25px;
            margin-bottom: 30px;
            background: #b2b2b2;
            border: 0px;
        }

        .input2 {
            height: 80px;
            width: 300px;
            border-radius: 25px;
            margin-bottom: 20px;
            text-align: center; 
            background: #b2b2b2;
            border: 0px;
        }

        .btn1{
            display: inline;
            user-select: none;
        }
        
        .sadrzaj2{
            text-align: center;
            margin-top: 5px;
            user-select: none;
        }

        input { 
            text-align: center; 
        }

        label {
            display:block;
        }
    </style>

</head>
<body>
  <div class="sadrzaj">
        <form method="POST" action="/posts/{{ $post->id }}">
            @method('PUT')
            @csrf

            <div>
                <label for="title" class="naziv">Naziv radnika: </label>
                <input class="input1" name="title" value="{{ $post->title }}">
            </div>

            <div>
                <label class="content1" for="content">Opis radnika: </label>
                <textarea class="input2" name="content">{{ $post->content }}</textarea>
            </div>
            <div class="btn1">
                <button class="btn btn-primary">Update</button>
                <a href="/posts" class="btn btn-warning">Cancel</a>
            </div>

        </form>
    </div>
    <div class="sadrzaj2">
        <form method="POST" action="/posts/{{ $post->id }}">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger">Delete</button>
        </form>
    </div>

</body>
</html>