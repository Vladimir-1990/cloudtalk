<!DOCTYPE HTML>
<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
	<meta name="author" content="Vladimir" />
    
	<title>Admin login</title>
</head>

<body>

<div id="admin_login">
    <h1>Admin login</h1>
    {if $error != ''}
        <div class="error">{$error}</div>
    {/if}
    <form action="index.php" method="post">
        <input type="text" name="username" class="text_box" />
        <br /> 
        <input type="password" name="password" class="text_box" />
        <br />
        <input type="hidden" value="1" name="submit" />
        <input type="submit" value="login" class="button" style="margin-left:55px"/>
    </form>
</div>

</body>
</html>