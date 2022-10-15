<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memo index</title>
</head>
<body>
    <h1>タイトル一覧</h1>
    <ul>
        @foreach ($memos as $memo)
            <!-- // リンク先をidで取得し名前で出力 -->
            <li><a href="/memos/{{ $memo->id }}">{{ $memo->title }}</a></li>
        @endforeach
    </ul>
    <button onclick="location.href='/memos/create'">登録する</button>
</body>
</html>
