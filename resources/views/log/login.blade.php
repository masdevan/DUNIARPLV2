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
        <h2 class="text-2xl font-bold text-center text-gray-700">Login ke Akun Sekolah</h2>
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="block w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-500" placeholder="example@sekolah.com">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="block w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-500" placeholder="********">
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-800">Ingat Saya</label>
                </div>
                <a href="#" class="text-sm text-blue-600 hover:underline">Lupa Password?</a>
            </div>
            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500 transition duration-200">Login</button>
        </form>
        <p class="text-center text-sm text-gray-600">Belum punya akun? <a href="{{ route('signup') }}" class="text-blue-600 hover:underline">Daftar Sekarang</a></p>
    </div>
</body>

</html>
