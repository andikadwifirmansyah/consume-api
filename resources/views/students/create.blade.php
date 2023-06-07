<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/siswa/store" method="post" enctype="multipart/from-data">
        @csrf
        <input type="number" name="nis" id="" placeholder="Nis">
        <input type="text" name="nama" id="" placeholder="Nama">
        <input type="text" name="rombel" id="" placeholder="Rombel">
        <input type="text" name="rayon" id="" placeholder="Rayon">
        <input type="date" name="tgl_lahir" id="" placeholder="tgl_lahir">
        <input type="file" name="file" id="" placeholder="image">
        <button type="submit">Create</button>
    </form>
</body>
</html>