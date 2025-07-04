<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お知らせ</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- daisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-4 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">お知らせ</h1>
        <div class="space-y-4">
            <div class="card bg-base-100 shadow-lg">
                <div class="card-body">
                    <h2 class="card-title">はじめまして！</h2>
                    <p>HTMLとPHPを新しく学び始めました！これから様々なことを学んでいく予定です</p>
                    <div class="card-actions justify-end">
                        <span class="text-sm text-gray-500">投稿日: 202x年10月1日</span>
                    </div>
                </div>
            </div>
            <!-- ここに他のお知らせカードを追加できます -->
        </div>

        <!-- 管理者用ログインページへのボタン -->
        <div class="mt-6">
            <a href="{{ route('admin.login_1') }}" class="btn btn-primary">管理者用ログインページにアクセス</a>
        </div>
    </div>
</body>
</html>