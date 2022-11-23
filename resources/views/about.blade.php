<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quenie Blog | About</title>
    {{-- url disini sudah relative dengan folder public --}}
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <h1>Halaman About</h1>
    <h3>Nama : <?= $name; ?></h3>
    <h3>Email : <?= $email; ?></h3>
</body>
</html>