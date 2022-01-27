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
            text-align: center; 
            margin-top: 25vh;
        }

        .naziv{
            color: white;
            font-size: 30px;
        }

        .content1{
            color: white;
            font-size: 30px;
        }

        .input1{
            height: 40px;
            width: 300px;
            border-radius: 25px;
            margin-bottom: 30px;
        }

        .input2 {
            height: 80px;
            width: 300px;
            border-radius: 25px;
        }

        .btn1{
            margin-top: 40px;
        }

        label {
            display:block;
        }
    </style>
</head>
<body>
    <div class="sadrzaj">
        <form method="POST" action="/posts">
            @csrf
            
            <div>
                <label for="title" class="naziv">Naziv radnika: </label>
                <input class="input1" id="title" name="title">
            </div>

            <div>
                <label class="content1" for="content">Opis radnika: </label>
                <textarea class="input2" name="content"></textarea>
            </div>
            <div class="btn1">
                <button class="btn btn-primary">Create</button>
                <a href="/posts" class="btn btn-warning">Cancel</a>
            </div>
        </form>

    </div>
</body>
</html>