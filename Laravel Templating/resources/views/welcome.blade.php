<!DOCTYPE html>
<html>
<head>
    <title>Welcome To SanberCode</title>
</head>
<body>
    <h1>Selamat Datang {{ $firstName }} {{ $lastName }}</h1>
    <p>Hello, <i>{{ $firstName }} {{ $lastName }}!</i> Terima Kasih Telah Bergabung di SANBERBOOK. sosial media kita bersama</p>
    <form action="{{ route('home') }}">
        <button type="submit">Back</button>
</body>
</html>

