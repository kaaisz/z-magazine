<p>photo/CRUD</p>

<form action="{{ url('photo')}}" method="post">
  @csrf
  <div>
    <label for="photo-title">新規追加/title</label><br>
    <input type="text" name="title" id="photo-title"><br><br>
    <button type="submit">追加する</button>
  </div>
</form>
<hr>
<div>
  <ul>
    @foreach ($photos as $photo)
      <li>{{ $photo->title }} {{ $photo->created_at }}</li>
    @endforeach
  </ul>
</div>
<hr>
<a href="{{ route('photo.index') }}">一覧画面へのリンク</a>
