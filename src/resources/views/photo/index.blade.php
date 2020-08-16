<p>photo/CRUD</p>

<form action="{{ url('photo')}}" method="post">
  @csrf
  <div>
    <label for="photo-name">新規追加</label><br>
    <input type="text" name="title" id="photo-name"><br><br>
    <button type="submit">追加する</button>
  </div>
</form>
<hr>
<a href="{{ route('photo.index') }}">一覧画面へのリンク</a>
