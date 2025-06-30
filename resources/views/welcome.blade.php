<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Potatoe Security Challenge</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="antialiased bg-gray-100">

<div class="flex items-center justify-center h-screen bg-pink-500">
    <div class="w-full text-center">
        <h1 class="text-8xl font-bold mb-8 text-yellow-300 rotate-12" style="text-shadow: 3px 3px 0 rgba(255, 0, 0, 0.5);">
            Potatoe Security Challenge
        </h1>
        <p class="text-4xl font-extrabold text-green-600 mt-4 animate-bounce" style="text-shadow: 2px 2px 0 rgba(0, 0, 255, 0.5);">
            すっごいハッキングチャレンジだよ！
        </p>

        
    </div>
</div>
<div class="grid grid-cols-2 gap-4 p-4 mt-[-50px]">
    <!-- ボタン1 -->
    <a href="{{ route('notification_1') }}" class="flex items-center justify-center h-16 bg-orange-500 text-green-800 font-extrabold text-3xl rounded-lg border-4 border-red-400 shadow-lg hover:bg-orange-600 hover:scale-110 transition duration-200 transform">
        その1 💥
    </a>

    <!-- ボタン2 -->
    <a href="{{ session('has_accessed1') ? route('notification_2') : '#' }}" class="flex items-center justify-center h-16 bg-yellow-500 text-black font-extrabold text-3xl rounded-lg border-4 border-purple-400 shadow-lg hover:bg-yellow-600 hover:scale-110 transition duration-200 transform {{ session('has_accessed1') ? '' : 'cursor-not-allowed opacity-50' }}">
        その2 🚀
    </a>

    <!-- ボタン3 -->
    <a href="{{ session('has_accessed2') ? route('admin.login_2') : '#' }}" class="flex items-center justify-center h-16 bg-pink-500 text-white font-extrabold text-3xl rounded-lg border-4 border-blue-400 shadow-lg hover:bg-pink-600 hover:scale-110 transition duration-200 transform {{ session('has_accessed2') ? '' : 'cursor-not-allowed opacity-50' }}">
        その3 🌈
    </a>

    <!-- ボタン4 -->
    <a href="{{ session('has_accessed2') ? route('admin.login_2') : '#' }}" class="flex items-center justify-center h-16 bg-teal-500 text-purple-800 font-extrabold text-3xl rounded-lg border-4 border-orange-400 shadow-lg hover:bg-teal-600 hover:scale-110 transition duration-200 transform {{ session('has_accessed2') ? '' : 'cursor-not-allowed opacity-50' }}">
        その4 🎉
    </a>
</div>

</body>
</html>