{literal}
    <style>
        .forecastRegionRow{
            background-color: yellow;
        }
        .forecastAmount{
            text-align: right;
        }
    </style>
{/literal}

<p>{$buttons}</p>

<h2>{$forcast_by_region}</h2>

<form method="post" action="index.php?module=AOR_Reports&action=matrixreport">
<table class="table table-bordered">
    <tr>
        <td><select style=""  id="fieldx1">{$moduleList}</select></td>
        <td><input type="submit"> </td>
    </tr>
    <tr>
        <td>Top</td>
        <td><select style=""  id="fieldx1">
                {$fieldlist}
            </select></td>
        <td><select style=""  id="fieldx2">
                {$fieldlist}
            </select></td>
        <td><select style=""  id="fieldx3">
                {$fieldlist}
            </select></td>
    </tr>    <tr>
        <td>Left</td>
        <td><select style=""  id="fieldy1">
                {$fieldlist}
            </select></td>
        <td><select style=""  id="fieldy2">
                {$fieldlist}
            </select></td>
        <td><select style=""  id="fieldy3">
                {$fieldlist}
            </select></td>
    </tr>

    {foreach from=$data key=name item=group}
        <tbody>
        <tr>
            <td>
                {$group.name}
            </td>
            {foreach from=$group.data key=date item=order}
            <td>
                {$order}
            </td>
        {/foreach}
            <td>{$group.region}</td>
            <td>{$group.account}</td>
        </tr>

        </tbody>
    {/foreach}
        <tbody>
        <tr>

        </tr>
        </tbody>
</table>
</form>