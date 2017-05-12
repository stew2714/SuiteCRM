

<h2>{$maxtrixReport}</h2>

<form method="post" action="index.php?module=AOR_Reports&action=matrixreport">
<table class="table table-bordered">
    <tr>
        <td><select style="" onchange="this.form.submit()" id="reportModule" name="reportModule">{$moduleList}</select></td>
        <td>{$actionFieldText}</td>
        <td><select id="actionField" name="actionField">
                {$actionField}
            </select></td>
        <td><input type="submit"> </td>
    </tr>
    <tr>
        <td>Top</td>
        <td><select id="fieldx1" name="fieldx1">
                {$fieldlistx1}
            </select></td>
        <td><select style=""  id="fieldx2" name="fieldx2">
                {$fieldlistx2}
            </select></td>
        <td><select style=""  id="fieldx3" name="fieldx3">
                {$fieldlistx3}
            </select></td>
    </tr>    <tr>
        <td>Left</td>
        <td><select style=""  id="fieldy1" name="fieldy1">
                {$fieldlisty1}
            </select></td>
        <td><select style=""  id="fieldy2" name="fieldy2">
                {$fieldlisty2}
            </select></td>
        <td><select style=""  id="fieldy3" name="fieldy3">
                {$fieldlisty3}
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