<!-- error.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link rel="stylesheet" href="{{ asset('css/error.css') }}">
    <script src="{{ asset('js/error.js') }}" defer></script>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Oops! Halaman yang Anda cari tidak ditemukan.</p>
        <p>Anda bisa kembali ke <a id="back-to-home" href="#">halaman utama</a> atau gunakan menu navigasi untuk menemukan halaman yang Anda cari.</p>
    </div>
    <div class="cat">
    <img src="https://img.freepik.com/premium-vector/404-error-web-page-template-with-cute-cat_540634-1.jpg" alt="Cute Cat" class="src">
    </div>
</body>
</html>