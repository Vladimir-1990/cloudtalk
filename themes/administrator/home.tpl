<div id="content">

    <div id="left">
        <h1>Latest five users</h1>
        <table class="latest">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Date</th>
            </tr>
        </thead>
        {section name=i loop=$latest_users}
            <tr>
                <td>{$latest_users[i].USERID}</td>
                <td>{$latest_users[i].username}</td>
                <td>{$latest_users[i].date_time}</td>
            </tr>
        {/section}
        </table>
    </div>
    
    <div id="right">
        <h1>Latest five posts</h1>
        <table class="latest">
        <thead>
            <tr>
                <th>ID</th>
                <th>Post</th>
                <th>Date</th>
            </tr>
        </thead>
        {section name=i loop=$latest_posts}
            <tr>
                <td>{$latest_posts[i].USERID}</td>
                <td>{$latest_posts[i].content}</td>
                <td>{$latest_posts[i].date_time}</td>
            </tr>
        {/section}
        </table>
        
    </div>

</div>