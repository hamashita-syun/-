<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Win!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script>
        if (sessionStorage.getItem('loggedIn1') !== 'true') {
            window.location.href = '/';
        }
    </script>
    <style>
        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
        }
        .blink {
            animation: blink 1s infinite;
        }
    </style>
</head>
<body class="bg-green-100">
    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-8xl font-bold text-green-600 blink">You win!</h1> 
        <p class="mt-12 text-4xl">Congratulations on your success!</p>
        <a href="{{ route('welcome') }}" class="mt-16 bg-blue-500 hover:bg-blue-700 text-white font-bold py-6 px-12 rounded">
            Go to Top Page
        </a>
<p class="mt-8 text-4xl font-extrabold text-purple-500 bg-yellow-200 p-2 transition-transform duration-300 transform hover:scale-105">
    名前：濱下俊
</p>
<p class="mt-8 text-4xl font-extrabold text-orange-600 bg-blue-200 p-2 transition-transform duration-300 transform hover:scale-105">
    6/5生まれ
</p>
<p class="mt-8 text-4xl font-extrabold text-red-600 bg-green-200 p-2 transition-transform duration-300 transform hover:scale-105">
    昔飼ってた犬の名前はロード 趣味はDDR
</p>
    </div>

</body>
</html>