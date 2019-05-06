<html> 
    <title>Persons</title>
    <body>

        <h3>List person</h3>

        <a href = '/person/add'>+ Add new person</a>

        <br><br>

        <table border="1">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>
            @foreach($data as $row)
            <tr>
                <td> {{$row->first_name }} </td>
                <td> {{$row->last_name }} </td>
                <td> <a href='/person/edit/{{$row->id}}'>edit</a> | <a href='/person/delete_action/{{$row->id}}'>hapus</a></td>
            </tr>
            @endforeach
        </table>

    </body>
</html>