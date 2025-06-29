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
                    <h2 class="card-title">お知らせタイトル1</h2>
                    <p>HTMLとPHPを新しく学び始めました！これから様々なことを学んでいく予定です</p>
                    <div class="card-actions justify-end">
                        <span class="text-sm text-gray-500">投稿日: xxxx年06月1日</span>
                    </div>
                </div>
            </div>
            <!-- ここに他のお知らせカードを追加できます -->
        </div>
            <!-- 新しいお知らせカードを追加 -->
            <div class="card bg-base-100 shadow-lg">
                <div class="card-body">
                    <h2 class="card-title">重要なお知らせ</h2>
                    <p>最近、ログインページにパスワードをハードコーディングしてしまったことが原因で、データが流出する危険性がありました。この経験から、セキュリティの重要性を学びました。</p>
                    <p>今後は、パスワードや機密情報をコードに直接書かないようにし、環境変数や設定ファイルを使用するようにします。</p>
                    <div class="card-actions justify-end">
                        <span class="text-sm text-gray-500">投稿日: xxxx年06月6日</span>
                    </div>
                </div>
            </div>

        <div class="mt-6">
            <a href="{{ route('admin.login_2') }}" class="btn btn-primary">管理者用ログインページにアクセス</a>
        </div>
    </div>
</body>
</html>