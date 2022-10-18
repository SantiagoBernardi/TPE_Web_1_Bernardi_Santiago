{if $edit}
{include file='header.tpl'}
{/if} 
<div>
    <table class="table table-sm">
    <thead class="thead-dark">
        <tr>
            <th>ecosistemas</th>
            {if isset($smarty.session.USER_ID)}
            <th>opciones</th>
            {/if}
        </tr>
    </thead>
    <tbody>
    {foreach from=$ecosistemas item=$ecosistema}
        <tr>
            <td><a href='anuros/{$ecosistema->id_e}'>{$ecosistema->ecosistema}</td>
            {if isset($smarty.session.USER_ID)}
            <td><a href="deleteecosistema/{$ecosistema->id_e}">borrar</a><a>/</a><a href='editecosistema/{$ecosistema->id_e}'>editar</a></td>
            {/if}
        </tr>
        {if $edit && $id === {$ecosistema->id_e}}
        <tr>
        <form method="post" action="sendeditecosistema/{$id}" >
        <tr><td><input type="text" name="ecosistemaedit" value="{$ecosistema->ecosistema}"></td>
        <td><input type="submit"></td>
        </tr>
        {/if}   
    {/foreach}
    </tbody>
    </table>
    
</div>

{if isset($smarty.session.USER_ID)}
    {include file="addecosistema.tpl"}
{/if}
{include file='footer.tpl'}