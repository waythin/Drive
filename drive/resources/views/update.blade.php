<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>


<body>
    <Table>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>phone</th>
            <th>edit</th>
         
        </tr>   <br>
        
       
            <tr>
                <td> {{ $driver->name }} </td>
                <td> {{ $driver->email }} </td>
                <td> {{ $driver->phone }} </td>
                <td> <button>Update</button></td>
            </tr>   <br>
            
      

</body>
</html>