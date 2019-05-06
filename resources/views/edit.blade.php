<html>
    <title>edit</title>
    <body>

        <form action = '/person/edit_action' method='post'>
            {{ csrf_field() }}
            <input type='hidden' value='{{$data[0]->id}}' name='id'/>
            First name: <input type='textfield' value='{{$data[0]->first_name}}' name='first_name'/><br>
            Last name: <input type='textfield' value='{{$data[0]->last_name}}'  name='last_name'/><br>
            <input type='submit' value='edit'/>
        </form>

    </body>
</html>