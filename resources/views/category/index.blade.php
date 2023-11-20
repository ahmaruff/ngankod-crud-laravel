<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>
<body>
    <h1>Helo</h1>
    <h2>List Categories</h2>
    <table>
        <thead>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Action</th>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($categories as $category)
            <tr>
                <td>{{$i}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <a href="{{route('category.edit', $category->id)}}" role="button">Edit</a>
                    <a href="{{route('category.destroy', $category->id)}}" role="button" class="contrast">Delete</a>
                </td>
            </tr>
            @php
                $i++
            @endphp
            @endforeach
        </tbody>
    </table>
    <a href="/category/create">Tambah Kategori Baru</a>
</body>
</html>
