{include file='header.tpl'}
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>{$titulo}</th>
            <th>especie</th>
            <th>familia</th>
            <th>conservacion</th>
            <th>ecosistemas</th>
            {if isset($smarty.session.USER_ID)}
            <th>opciones</th>
            {/if}
        </tr>
    </thead>
    <tbody>
    {foreach from=$anuros item=$anuro }
        <tr>
            <td><img src="imagenes\{$anuro->foto}"></td>
            <td><a href='anuro/{$anuro->id}'>{$anuro->especie}</td>
            <td>{$anuro->familia}</td>
            <td>{$anuro->conservacion}</td>
            <td>{$anuro->ecosistema}</td>
            {if isset($smarty.session.USER_ID)}
            <td><a href='deleteanuro/{$anuro->id}'>borrar</a><a>/</a><a href='editanuro/{$anuro->id}'>editar</a></td>
            {/if}
        </tr>
        {if $edit && $id === {$anuro->id}}
        <form method="post" action="sendeditanuro/{$id}" >
        <tr><td><input type="text" name="fotoedit" value="{$anuro->foto}"></td>
        <td><input type="text" name="especieedit" value="{$anuro->especie}"></td>
        <td><input type="text" name="familiaedit" value="{$anuro->familia}"></td>
        <td><input type="text" name="conservacionedit" value="{$anuro->conservacion}"></td>
        <td><select name="ecosistemaedit">
        {foreach from=$ecosistemas item=$ecosistema}
            <option value="{$ecosistema->id_e}">{$ecosistema->ecosistema}</option>
        {/foreach}
        </select></td>
        <td><input type="submit"></td>
    </form></tr>
        {/if}
    {/foreach}
    <tr>
    </tr>
    </tbody>
</table>

{if isset($smarty.session.USER_ID)}
    <form method="post" action="addanuro" >
    <input type="text" name="foto" placeholder="foto">
    <input type="text" name="especie" placeholder="especie">
    <input type="text" name="familia" placeholder="familia">
    <input type="text" name="conservacion" placeholder="conservacion">
    <select name="ecosistema" >
    {foreach from=$ecosistemas item=$ecosistema}
        <option value="{$ecosistema->id_e}">{$ecosistema->ecosistema}</option>
    {/foreach}
    </select>
    <input type="submit" value="agregar">      
</form>
{/if}