<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile - {{ $name }}</title>
</head>
<body>

    <header>
        <h2>Digital Identity Card</h2>
        <hr>
    </header>

    <main>
        <dl>
            <dt><strong>USER IDENTITY</strong></dt>
            <dd>The system identifies the user with the following details:</dd>
            
            <br>

            <dt><em>Authentication ID:</em></dt>
            <dd>#{{ $id }}</dd>

            <dt><em>Full Name:</em></dt>
            <dd>{{ $name }}</dd>
        </dl>
    </main>

    <hr>

    <footer>
        <nav>
            <a href="{{ url('/home') }}">Back To Main Menu</a>
        </nav>
    </footer>

</body>
</html>