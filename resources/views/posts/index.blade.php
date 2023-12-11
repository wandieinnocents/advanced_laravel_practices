<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>POSTS</h2>
<div class="float-end">
    @if(request()->has('trashed'))
        <a href="{{ route('posts.index') }}" class="btn btn-info">View All posts</a>
        <a href="{{ route('posts.restoreAll') }}" class="btn btn-success">Restore All</a>
    @else
        <a href="{{ route('posts.index', ['trashed' => 'post']) }}" class="btn btn-primary">View Deleted Posts</a>
    @endif
</div>
<br>

<table>
  <tr>
    <th>#id</th>
    <th>Title</th>
    <th colspan="3">Action</th>
  </tr>

  @foreach($posts as $post)
  <tr>
    <td>{{ $post->id }}</td>
    <td>{{ $post->title }}</td>
    <td>
        @if(request()->has('trashed'))
            <a href="{{ route('posts.restore', $post->id) }}" class="btn btn-success">Restore</a>
        @else
            <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn btn-danger delete" title='Delete'>Delete</button>
            </form>
        @endif
    </td>

    {{--  --}}
    <td>
        @if(request()->has('trashed'))
            <form method="POST" action="{{ route('posts.force-delete', $post->id) }}">
                @csrf
                @method('DELETE')
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn btn-danger" title='Delete'>Force Delete</button>
            </form>
        @endif

    </td>
  </tr>
  @endforeach
  
</table>

</body>
</html>

