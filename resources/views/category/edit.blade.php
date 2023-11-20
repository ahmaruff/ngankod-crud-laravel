<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Kategori</h1>
    <form action="{{route("category.update", $category->id)}}" method="post">
        @csrf
        @method("PUT")
        <label for="name">Nama Kategori</label>
        <input type="text" name="name" value="{{$category->name}}" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
