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
    <p>SPARTIE HTML </p>

    {{-- {{ html()->form('PUT', '/post')->open() }} --}}
    {{ html()->form('PUT')->route('multiple_rows.store') }}



    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{ html()->span()->text('Enter Usernane'); }}
                {{ html()->email('email')->placeholder('Your e-mail address')->class('form-control') }}
            </div>

        </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ html()->span()->text('Enter Email'); }}
                {{ html()->email('email')->placeholder('Your e-mail address')->class('form-control') }}
            </div>

        </div>

          <div class="col-md-6">
            <div class="form-group">
                {{ html()->button('SUBMIT')->class('btn btn-primary') }}

            </div>

        </div>

        {{-- button --}}



        
    </div>
    
    {{ html()->form()->close() }}

    <br><br><br><br>
    
  
    

    <p>MULTIPLE ROWS </p>


        
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

        </form>




    </div>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        function addRow() {
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
