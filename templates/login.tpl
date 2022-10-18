<h2>Login</h2>

<div>
    <div>
        <form method="POST" action="validate" id="login">
            <input type="text" name="user" placeholder="Ingrese su usuario...">
            <input type="password" name="password" placeholder="Ingrese su password...">
        </form>
    </div>
    <div>
        <form method="POST" action="home" id="invitado"></form>
    </div>
    <div>
        <button type="submit" form="login">Login</button>
        <button type="submit" form="invitado">Invitado</button>
    </div>
</div>
{if $error}
    {$error}
{/if}