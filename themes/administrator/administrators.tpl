<div id="content">
    <div class="message" style="display:none;"></div>
    {if $error != ''}
        <div class="error">{$error}</div>
    {/if}
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>username</td>
                <td>email</td>
                <td>last login</td>
                <td>delete</td>
            </tr>
        </thead>
        
        {section name=i loop=$administrators}    
            <tr>
                <td>{$administrators[i].ID}</td>
                <td>{$administrators[i].username}</td>
                <td>{$administrators[i].email}</td>
                <td>{$administrators[i].last_login}</td>
                <td><a id="{$administrators[i].ID}" class="delete_admin">delete</a></td>
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
    
    <a class="add_new">Add a new admin</a>
    
    <div class="add_new_admin" style="display:none;">
        <form action="administrators.php" method="post">
            <input type="text" name="username" class="text_box" placeholder="username" value="{$username}" />
            <br />
            <input type="password" name="password" class="text_box" placeholder="password" />
            <br />
            <input type="email" name="email" class="text_box" placeholder="email" value="{$email} "/>
            <br />
            <input type="hidden" name="add_new" value="1" />
            <input type="submit" value="add" class="button "/>
        </form>
    </div>
</div>