<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="jumbotron text-center">
        <h1>My First Bootstrap Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

    <div class="container">

    <p>MULTIPLE ROWS </p>


    {{-- new code --}}

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th class="thead-dark">Name</th>
            <th class="thead-dark">Email</th>
            <th class="thead-dark" > <a  class="btn btn-success addRow"> + </a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" class="form-control" name="name[]" placeholder="Enter name"></td>
            <td><input type="email" class="form-control" name="email[]" placeholder="Enter email"></td>
            <td>  <a href="javascript:;" class="btn btn-danger deleteRow"> - </a> </td>
          </tr>
         
        </tbody>
      </table>
      
      

    {{-- end of new code --}}

{{--         
        <form id="dataForm" action="{{ route('multiple_rows.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name[]">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email[]">
            </div>
            <!-- Add more fields as needed -->

            <button type="button" class="btn btn-primary" onclick="addRow()">Add Row</button>
        <button type="submit" class="btn btn-success">Save Data</button>

        </form> --}}

    </div>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    {{-- Add and delete row : working new --}}
    <script>
        // add row
        $('thead').on('click', '.addRow', function(){

            var addNewRow =
            'tbody' +
             '<tr>' + 
                '<td><input type="text" class="form-control" name="name[]" placeholder="Enter name"></td>' +
                '<td><input type="text" class="form-control" name="email[]" placeholder="Enter Email"></td>' +
                '<td><a href="javascript:;" class="btn btn-danger deleteRow"> - </a></td>' + 
             '</tr>' ;

        // append row
        $('tbody').append(addNewRow);
         
        });

        // delete row
        $('tbody').on('click','.deleteRow', function(){

            $(this).parent().parent().remove();
        });

    </script>
    {{-- end of add and delete row --}}

    <script>
        function addRow2() {
            var newRow = `
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name[]">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email[]">
            </div>
            <!-- Add more fields as needed -->
        `;

            $('#dataForm').append(newRow);
        }
    </script>

  

</body>

</html>







