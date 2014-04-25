<div id="main_content">
        {if $error != ''}
            <div class="error">
                <p>{$error}</p>
            </div>
        {/if}
        
        {if $message != ''} 
            <div class="message">
                {$message}
            </div>
        {/if}

    <div id="edit_account">
        <form action="account.php" method="post" enctype="multipart/form-data">
            <label>Display name:</label>
            <input type="text" name="display_name" class="text_box" value="{$display_name}" />
            <br />            
            <label>Email:</label>
            <input type="text" name="email" class="text_box" value="{$email}" />            
            <br />            
            <label>Bio:</label>
            <textarea name="bio" maxlength="160" class="text_box">{$bio}</textarea>
            <br />           
            <label>Date of birth:</label>
            <input type="text" name="DOB" class="text_box" id="datepicker" value="{$dob}" />   
            <br />
            <label>Profile image:</label>
            <div id="profile_image">
            {insert name=get_profile_image assign=profile_image value=var USERID=$USERID}
            <img src="profilepics/{$profile_image}" alt="{$username}"/>
            </div>
            <input type="file" name="profile_image" />
            <div class="clear" style="height:15px;"></div>
            <br />
            <label>Gender:</label>
            <label style="width:50px;">male</label><input type="radio" name="gender" value="m" {if $gender == 'm'}checked="cheked"{/if} />
            <label style="width:50px;">female</label><input type="radio" name="gender" value="f" {if $gender == 'f'}checked="cheked"{/if} />
            <br />
            <input type="hidden" value="1" name="submit" />
            <br />
            <input type="submit" value="update" style="margin-left:0px;" />
        </form>
        <a href="#" style="color:white;" id="show_pass">change password</a>
    </div>
    
    <div id="change_pass_box" style="display:none;">
        <form action="account.php" method="POST">
            <label>New password:</label>
            <input type="password" name="password" id="password" class="text_box" />
            <br />
            <label>Repeat password:</label>
            <input type="password" name="repeat_password" id="repeat_password" class="text_box" />
            <br />
            <input type="hidden" value="1" name="new_password" />
            <br />
            <input type="submit" value="change password" style="margin-left:0px;" />
        </form>
    </div>
    
</div>