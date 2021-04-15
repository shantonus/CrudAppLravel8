<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <br>
        <div class="header" style="text-align: center">
            <a class="btn btn-primary" href="{{ url('/add_new_user') }}">Add New</a> 
            <a class="btn btn-success" href="{{ url('/') }}">Home</a>
        </div>
        <br>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>CID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>

            @foreach($showAllData as $row)

            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->CID }}</td>
                <td>{{ $row->Name }}</td>
                <td>{{ $row->Email }}</td>
                <td>{{ $row->Address }}</td>
                <td><a class="btn btn-primary" href="{{ url('view_user/'.$row->id) }}">View</a>
                    <a class="btn btn-warning" href="{{ url('edit_user/'.$row->id) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ url('delete_user/'.$row->id) }}">Delete</a>
                </td>
            </tr>

            @endforeach

        </table>
    </div>

</body>
</html>