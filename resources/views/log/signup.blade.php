<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center text-gray-700">Daftar Akun Sekolah</h2>
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="name" name="name" required class="block w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-500" placeholder="Nama Lengkap">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="block w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-500" placeholder="example@sekolah.com">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                <input type="password" id="password" name="password" required class="block w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-500" placeholder="********">
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Kata Sandi</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required class="block w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-500" placeholder="********">
            </div>
            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500 transition duration-200">Daftar</button>
        </form>
        <p class="text-center text-sm text-gray-600">Sudah punya akun? <a href="{{ route('sigin') }}" class="text-blue-600 hover:underline">Login Sekarang</a></p>
    </div>
</body>

</html>
