<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <table>
      <tr>
        <td>ID</td>
        <td>{{ $post->id }}</td>
      </tr>
      <tr>
        <td>タイトル</td>
        <td>{{ $post-> title }}</td>
      </tr>
      <tr>
        <td>本文</td>
        <td>{{ $post->content }}</td>
      </tr>
      <tr>
        <td>作成日時</td>
        <td>{{ $post->created_at }}</td>
      </tr>
      <tr>
        <td>更新日時</td>
        <td>{{ $post->created_at }}</td>
      </tr>
    </table>
</body>
</html>