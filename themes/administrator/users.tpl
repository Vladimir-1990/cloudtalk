<div id="content">
    <div id="message"></div>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>username</td>
                <td>email</td>
                <td>date of registration</td>
                <td>verfied</td>
                <td>edit</td>
                <td>delete</td>
            </tr>
        </thead>
        
        {section name=i loop=$users}    
            <tr>
                <td>{$users[i].USERID}</td>
                <td>{$users[i].username}</td>
                <td>{$users[i].email}</td>
                <td>{$users[i].date_time}</td>
                <td>{$users[i].verified}</td>
                <td><a href="edit_user.php?id={$users[i].USERID}">edit</a></td>
                <td><a id="{$users[i].USERID}" class="delete_user">delete</a></td>
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