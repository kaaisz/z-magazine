<p>photo/index</p>

<form action="{{ url('photo')}}" method="post">
  @csrf
  <div>
    <label for="photo-title">新規追加/title</label><br>
    <input type="text" name="title" id="photo-title"><br><br>
    <button type="submit">追加する</button>
  </div>
</form>
<hr>
<table>
  <tr>
    <th>ID</th>
    <th>title</th>
    <th>作成日時</th>
    <th>更新日時</th>
    <th></th>
  </tr>
  @foreach ($photos as $photo)
  <tr>
    <td>{{ $photo->id }}</td>
    <td>{{ $photo->title }}</td>
    <td>{{ $photo->created_at }}</td>
    <td>{{ $photo->updated_at }}</td>
    <td>
      <a href="{{ url('photo/'.$photo->id.'/edit') }}">編集</a>
    </td>
  </tr>
  @endforeach
</table>
<hr>

