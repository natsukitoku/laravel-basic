<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">
    <title>Laravel基礎</title>
  </head>
  <body>
    <table>
      <tr>
        <th>ID</th>
        <th>商品名</th>
        <th>価格</th>
        <th>作成日時</th>
        <th>更新日時</th>
      </tr>
      @foreach($products as $product)
          <tr>
            <!-- 取得したデータを各カラムの値を表示方法：データが格納されている変数->カラム名 -->
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at }}</td>
          </tr>
      @endforeach
    </table>
  </body>
</html>