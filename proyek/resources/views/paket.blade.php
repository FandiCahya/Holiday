<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB TABLE PAKET</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    {{-- @dd($paket) --}}
    @foreach ($paket as $data)
        <ul class="text-lg my-5">
            <li>id = {{ $data->id }}</li>
            <li>judul = {{ $data->judul_jasa }}</li>
            <li>deskrip = {{ $data->deskripsi }}</li>
            <li>harga = {{ $data->harga }}</li>
            {{-- <li>Kategori = {{ $data->kategori }}</li> --}}
        </ul>
    @endforeach
</body>
</html>
