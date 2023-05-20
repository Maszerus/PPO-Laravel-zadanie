<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body class="antialiased">
    <div>
        <h3>Aby obsługiwać wpisz w polu adresu localhost:8000 w programie Postman plus komenda:</h3>

        <p><br>Aby wyświetlić wszystkie wpisy wpisz polecenie:<br>
            /all<br>
            + wybierz funkcję get w Postman'ie<br></p>

        <p>Aby wyświetlić poszczególny wpis wpisz jego numer w konsoli:<br>
            np: /11<br>
            + wybierz funkcję get w Postman'ie</p>

        <p>Aby edytować zawartość poszczególny wpis wpisz jego numer w konsoli:<br>
            np: /15<br>
            + wybierz funkcję put w Postman'ie</p>

        <p>Aby zrobić nowy wpis:<br>
            /store<br>
            + wybierz funkcję post w Postman'ie</p>
    </div>
</body>

</html>