<div id="main_content">
    {if $error != ''}
        <div class="error">
            <p>{$error}</p>
        </div>
    {/if}
    {$message}
    
    <div id="sign_up-in">
        <h2>New to CloudTalk? Sign up</h2>
        <hr />
        
        <form action="sign_up.php" method="post" enctype="multipart/form-data" id="form">
            <input type="text" name="username" id="username" class="text_box" value="{$username}" placeholder="username" />
            <div id="username_status" class="error_box"></div>
                   
            <input type="text" name="email" id="email" class="text_box" value="{$email}" placeholder="email" />
            <div id="email_status" class="error_box"></div>
            
            <input type="password" name="password" id="password" class="text_box" placeholder="password" />
            <div id="password_status" class="error_box"></div>

            <input type="password" name="repeat_password" id="repeat_password" class="text_box" placeholder="repeat password" />
            <div id="repeat_password_status" class="error_box"></div>
            
            <input type="hidden" name="submit" value="1" />
            
            <input type="submit" value="sign up" />
        </form>
    </div>
</div>