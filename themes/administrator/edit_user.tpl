<div id="content">
{if $error != ''}
    <div class="error">{$error}</div>
{/if}
{if $message != ''}
    <div class="message">{$message}</div>  
{/if}
    {section name=i loop=$user}
        <div id="left">
            <div id="labels">
                <label>Username:</label>
                <label>Display name:</label>
                <label>Email:</label>
                <label>Bio:</label>
                <label style="margin-top:66px;">Gender:</label>
                <label>Profile image:</label>   
            </div>
            
            <div id="inputs">
                <form action="edit_user.php?id={$user[i].USERID}" method="post" enctype="multipart/form-data">
                    <input type="text" name="username" class="text_box" value="{$user[i].username}" />
                    <br />
                    <input type="text" name="display_name" class="text_box" value="{$user[i].display_name}" />
                    <br />
                    <input type="text" name="email" class="text_box" value="{$user[i].email}" />
                    <br />
                    <textarea name="bio" maxlength="160" class="text_box" style="width:200px;height:78px;resize:none;">{$user[i].bio}</textarea>
                    <div id="gender_container">
                        <label style="width:50px;">male</label><input type="radio" name="gender" value="m" {if $user[i].gender == 'm'}checked="cheked"{/if} />
                        <label style="width:50px;">female</label><input type="radio" name="gender" value="f" {if $user[i].gender == 'f'}checked="cheked"{/if} />
                    </div>
                    <div id="profile_image">
                        {insert name=get_profile_image assign=profile_image value=var USERID=$user[i].USERID}
                        <img src="../profilepics/{$profile_image}" alt="{$user[i].username}" class="profile_image" />
                        <input type="file" name="profile_image" />
                    </div>
                <input type="hidden" name="submit" value="1"/>
                <input type="submit" value="save" class="button"/>
                </form>
            </div>
        </div>
        
        <div id="right">
            <a href="#" id="show_pass">change password</a>
           
            <div id="change_pass_box" style="display:none;">
                <form action="edit_user.php?id={$user[i].USERID}" method="POST">
                    <label>New password:</label>
                    <input type="password" name="password" id="password" class="text_box" />
                    <br />
                    <input type="hidden" value="1" name="new_password" />
                    
                    <input type="submit" value="change pass" class="button" />
                    
                </form>
            </div>
            <a id="{$user[i].USERID}" class="delete_user">delete user</a>
        </div>
        
        

    {/section}
</div>