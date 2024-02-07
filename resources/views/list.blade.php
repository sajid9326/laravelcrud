@extends("master")
@section("dynamic")
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Optional: Add some responsive styles for small screens */
        @media only screen and (max-width: 600px) {
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th,
            td {
                display: block;
                width: 100%;
                box-sizing: border-box;
            }
        }

        .add-btn {
            float: revert-layer;
            background-color: #9F5635;
            height: 40px;
            width: 1270px;
            border-radius: 50px;
        }

        .add {
            color: #f2f2f2;
        }
    </style>
</head>

<body>
    <button class="add-btn"><a href="/add" style="text-decoration:none ; text-align:center" class="add">Add Employee</a></button>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Designation</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $row) {
            ?>
                <tr>
                    <td>{{$row->name}}</td>
                    <td><?php echo $row->email ?></td>
                    <td><img src="{{asset('images/'.$row->image)}}" with="100px" height="100px" /></td>
                    <td>{{$row->designation}}</td>
                    <td><a href="/edit/{{$row->id}}" style="text-decoration:none" ;>Edit</a></td>
                    <td>
                        <a href="{{ route('delete.row', $row->id)}}" style="text-decoration:none" ;>Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>

@endsection