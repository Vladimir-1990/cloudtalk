<div id="main_content">
    <div id="static">
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
        
        <h1>Contact us</h1>
        <form action="contact.php" method="post">
        <input type="text" name="name" placeholder="Your Name" class="text_box" />
        <br />
        <textarea name="message" placeholder="Message" class="text_box" style="height:150px;"></textarea>
        <br />
        <input type="submit" value="Send" />
    </div>
</div>