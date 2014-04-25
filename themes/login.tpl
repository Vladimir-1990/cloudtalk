<div id="main_content">
        {if $error != ''}
            <div class="error">
                <p>{$error}</p>
            </div>
        {/if}
        {$message}
    
    <div id="sign_up-in" style="">
    <form action="login.php" method="post">
    
        <input type="text" name="username" placeholder="username or email" class="text_box" />
        
        <input type="password" name="password" placeholder="password" class="text_box" />
        
        <input type="hidden" name="submit" value="1" />
        
        <p style="float:left;">Remember me</p>
        <input type="checkbox" value="1" name="remember_me"/>
        
        <a href="forgot_password.php" style="float:left;">Forgot your password?</a>
        <br />
        <input type="submit" value="login" />
    </form>
    </div>
</div>