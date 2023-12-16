<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
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


    {{-- filter by date --}}
    {{-- <div class="my-2">
        <form action="{{ route('filter_posts_by_date') }}" method="GET">
            <div class="input-group mb-3">
                <input type="date" class="form-control" name="start_date">
                <input type="date" class="form-control" name="end_date">
                <button class="btn btn-primary" type="submit">GET</button>
            </div>
        </form>
    </div> --}}

    {{-- <form action="{{ route('filter_posts_by_date') }}" method="GET"> --}}
       {{-- <form action="{{ route('print_posts_report_by_date') }}" method="GET"> --}}
      {{-- Filter data --}}
      <p>Filter Data </p>
    <form action="{{ route('filter_posts_by_date') }}" method="GET">
      <label for="start_date">Start Date:</label>
      <input type="date" name="start_date" id="start_date" required>
  
      <label for="end_date">End Date:</label>
      <input type="date" name="end_date" id="end_date" required>
  
      <button type="submit" target="_blank">Filter Data</button>
  </form>

  {{-- Generate report --}}
  <p>Generate Report </p>
  <form action="{{ route('print_posts_report_by_date') }}" method="GET">
    <label for="start_date">Start Date:</label>
    <input type="date" name="start_date" id="start_date" required>

    <label for="end_date">End Date:</label>
    <input type="date" name="end_date" id="end_date" required>

    <button type="submit" target="_blank">Generate Report</button>
</form>


  <p>Filtered Date :  {{ $start_date }} | End date : {{ $end_date }}</p> 

<br>

    <div class="float-end">
        @if (request()->has('trashed'))
            <a href="{{ route('posts.index') }}" class="btn btn-info"> <button>View All Posts </button> </a>
            <a href="{{ route('posts.restoreAll') }}" class="btn btn-success"><button>Restore All Posts</button></a>
        @else
            {{-- <a href="{{ route('posts.index', ['trashed' => 'post']) }}" class="btn btn-primary">View Deleted Posts</a> --}}
            <a href="{{ route('posts.index', ['trashed' => 'post']) }}" class="btn btn-primary"> <button>View Deleted
                    Posts</button></a>
            <a href="{{ route('print_posts_report_by_date') }}" target="_blank" class="btn btn-success"><button>Print
                    Report</button></a>
        @endif
    </div>
    <br>

    <table>
        <tr>
            <th>#id</th>
            <th>Title</th>
            <th>Category</th>
            <th>Date</th>
            <th>Tag</th>
            <th>Slug</th>
            <th>Content</th>
            <th colspan="3">Action</th>
        </tr>

        @forelse($posts as $post)
        <tr>
          <td>{{ $post->id }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category }}</td>
          <td>{{ $post->date }}</td>
          <td>{{ $post->tag }}</td>
          <td>{{ $post->slug }}</td>
          <td>{{ $post->content }}</td>
          <td>
              @if (request()->has('trashed'))
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
              @if (request()->has('trashed'))
                  <form method="POST" action="{{ route('posts.force-delete', $post->id) }}">
                      @csrf
                      @method('DELETE')
                      <input name="_method" type="hidden" value="DELETE">
                      <button type="submit" class="btn btn-danger" title='Delete'>Force Delete</button>
                  </form>
              @endif

          </td>
      </tr>
        @empty
          <p> No data available </p>
        @endforelse ($posts as $post)
           

    </table>

</body>

</html>
