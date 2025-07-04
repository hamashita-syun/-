<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Win!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
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

    </div>