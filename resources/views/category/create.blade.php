<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Buat Kategori Baru</h1>
    <form action="{{route("category.store")}}" method="post">
        @csrf
        <label for="name">Nama Kategori</label>
        <input type="text" name="name" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
