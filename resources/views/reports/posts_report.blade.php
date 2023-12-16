<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Table</title>
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

    {{-- header section --}}

    <table >
        <thead>
            <tr>
                {{-- <th>#id</th> --}}
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>
                <th>Tag</th>
                <th>Slug</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    {{-- <td>{{ $row['id'] }}</td> --}}
                    <td>{{ $row['title'] }}</td>
                    <td>{{ $row['category'] }}</td>
                    <td>{{ $row['date'] }}</td>
                    <td>{{ $row['tag'] }}</td>
                    <td>{{ $row['slug'] }}</td>
                    <td>{{ $row['content'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
