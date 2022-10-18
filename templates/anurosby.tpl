{include file='header.tpl'}
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>foto</th>
            <th>especie</th>
            <th>familia</th>
            <th>conservacion</th>
            <th>ecosistema</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$anuros item=$anuro }
        <tr>
            <td><img src="imagenes\{$anuro->foto}"></td>
            <td>{$anuro->especie}</td>
            <td>{$anuro->familia}</td>
            <td>{$anuro->conservacion}</td>
            <td>{$anuro->ecosistema}</td>
        </tr>
    {/foreach}
    </tbody>
</table>