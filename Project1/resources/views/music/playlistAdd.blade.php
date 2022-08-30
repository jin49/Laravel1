<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>プレイリストの追加</h3>
    <form action="#" method = post enctype="multipart/form-data">
        名前 <input type="text" name="name"><br>
        画像 <input type="file" name="image">
        <input type="submit" value = "作成">
        @csrf
    </form>
</body>
</html>
