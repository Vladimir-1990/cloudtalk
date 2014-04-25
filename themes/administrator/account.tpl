<div id="content">
    {if $error != ''}
        <div class="error">{$error}</div>    
    {/if}
    
    {if $message != ''}
        <div class="error">{$message}</div>    
    {/if}
    
    {section name=i loop=$admin}
    <form action="account.php" method="post">
        <label>Username:</label>
        <input type="text" class="text_box" name="username" value="{$admin[i].username}" />
        <br />
        <label>Email:</label>
        <input type="text" class="text_box" name="email" value="{$admin[i].email}" />
        <input type="hidden" name="submit" value="1" />
        <br />
        <input type="submit" value="save" class="button" />
        {/section}
    </form>
    
    <a id="show_pass">change password</a>
    
    <div id="change_pass_box" style="display:none;">
        <form action="account.php" method="POST">
            <label>New password:</label>
            <input type="password" name="password" id="password" class="text_box" />
            <br />
            <input type="hidden" value="1" name="new_password" />
            
            <input type="submit" value="change pass" class="button" />
            
        </form>
    </div>
</div>