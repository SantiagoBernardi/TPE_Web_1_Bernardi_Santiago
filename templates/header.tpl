<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="{BASE_URL}">
        <title>anuros</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav>
            <ul class="nav justify-content-center">
            {if !isset($smarty.session.USER_ID)}
                <li class="nav-item"><a class="nav-link active" href="login">Login</a></li>
            {else} 
                <li class="nav-item"><a class="nav-link active" href="logout">Logout ({$smarty.session.USER_NAME})</a></li>
            {/if}
                <li class="nav-item"><a class="nav-link active" href="home">home</a></li>
            </ul>
        </nav>