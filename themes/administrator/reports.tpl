<div id="content">
    <div class="message" style="display:none;"></div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>post</th>
                <th>user</th>
                <th>comment</th>
                <th>date</th>
                <th>delete</th>
            </tr>
        </thead>
        
        {section name=i loop=$reports}    
            <tr>
                <td>{$reports[i].RID}</td>
                <td><a href="../status.php?id={$reports[i].TID}">{$reports[i].TID}</a><a class="delete_post" id="{$reports[i].TID}">&nbsp;<img src="images/delete-icon.png" class="delete_image" title="delete this post" alt="delete status "/></a></td>
                <td>
                {insert name=get_member_display_name assign=username value=var USERID=$reports[i].USERID}
                <a href="edit_user.php?id={$reports[i].USERID}" class="username">{$username}</a>
                </td>
                <td>{$reports[i].comment}</td>
                <td>{$reports[i].date_time}</td>
                <td><a class="delete_report" id="{$reports[i].RID}">Delete report</td>
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