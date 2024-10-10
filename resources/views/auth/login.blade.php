<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
</body>
</html>
