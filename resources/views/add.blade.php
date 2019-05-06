<html>
    <title>add</title>
    <body>

        <form action = '/person/add_action' method='post'>
            {{ csrf_field() }}
            First name: <input type='textfield' name='first_name'/><br>
            Last name: <input type='textfield' name='last_name'/><br>
            <input type='submit' value='add'/>
        </form>

    </body>
</html>