<div id="content">
    <div id="message"></div>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>name</td>
                <td>message</td>
            </tr>
        </thead>
        
        {section name=i loop=$feedback}    
            <tr>
                <td>{$feedback[i].FID}</td>
                <td>{$feedback[i].name}</td>
                <td>{$feedback[i].message}</td>
            </tr>
        {/section}
    </table>
    
    {if $prev != '0'}
        <a href='?page={$prev}'>prev</a>
    {/if}
    
    {if $next <= $num_pages}
        <a href='?page={$next}'>next</a>
    {/if}
    
    <br />
</div>