

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
</table>

    <table class="table table-bordered">
        <tbody>
        <tr>
        {foreach from=$header key=name item=title}
            {if $title|is_array}
                <td colspan="{$level1Break}">
                    {$name}
                </td>
            {else}
                <td>
                    {$title}
                </td>
            {/if}
            {/foreach}
        </tr>
        {if $level2 == "true"}
        <tr>
            {foreach from=$header key=name item=title}
                {if $title|is_array}
                    {foreach from=$title key=subname item=subtitle}
                        {if $subtitle|is_array}
                        <td colspan="{$subtitle|@count}">{$subname}</td>
                        {else}
                            <td>{$subtitle}</td>
                        {/if}
                    {/foreach}
                {else}
                    <td></td>
                {/if}
            {/foreach}
        </tr>
        {/if}
        {if $level3 == "true"}
        <tr>
            {foreach from=$header key=name item=title}
                {if $title|is_array}
                    {foreach from=$title key=name item=subtitle}
                        {if $subtitle|is_array}
                            {foreach from=$subtitle key=name item=subsubtitle}
                                <td colspan="">{$subsubtitle}</td>
                            {/foreach}
                        {else}
                            <td></td>
                        {/if}
                    {/foreach}
                {else}
                    <td></td>
                {/if}
            {/foreach}
        </tr>
        {/if}
        </tbody>

    {foreach from=$data key=name item=group}
        <tbody>
        <tr>
            {foreach from=$group key=field item=value}
            <td>
                {if is_numeric($value)}{$currency}{/if}{$value}
            </td>
        {/foreach}
        </tr>

        </tbody>
    {/foreach}
        <tbody>
        <tr>
        {foreach from=$counts key=totalkey item=totalvalue}
            <td>{$totalvalue}</td>
        {/foreach}
        </tr>
        </tbody>
</table>
</form>