<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Todo</title>
</head>
<body>
<form method="post" action="{{ route('store') }}"> <!-- ここを編集 -->
        @csrf 
        <input type="text" name="text">
        <button>データ追加</button>
    </form>

    // ここから追加
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo->text }}</li>
        @endforeach
    </ul>
    // ここまで追加
    
</body>
</html>