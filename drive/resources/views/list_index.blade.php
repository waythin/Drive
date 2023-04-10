<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>


<body>

    <Table>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>phone</th>
            <th>edit</th>
            <th>delete</th>
        </tr>   <br>
        
        @foreach ($drivers as $driver)
            <tr>
                <td> {{ $driver->name }} </td>
                <td> {{ $driver->email }} </td>
                <td> {{ $driver->phone }} </td>
                <td> <a href="{{route('edit', ['id' => $driver->id_driver])}}">  <button>Edit</button> </a></td>
                <td><a href="{{route('delete', ['id' => $driver->id_driver])}}">  <button>Delete</button> </a> </td>
            </tr>   <br>
            
        @endforeach

    </Table>

   
</body>
</html>