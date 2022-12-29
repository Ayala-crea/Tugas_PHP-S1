<?php
session_start();

if(isset($HTTP_POST_VARS["insert"]))
{
    if(($HTTP_POST_VARS["user"]!="")&&($HTTP_POST_VARS["password"]!=""))
    {
        session_register("session_status");
        session_register("session_status");
        session_register("session_status");
        $session_status="login";
        $session_user=$HTTP_POST_VARS["user"];
        $session_password=$HTTP_POST_VARS["password"];
        header("Location:proses_loggin.php");
        exit;
    }
}
?>    

<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>
    <h2>penggunaan Session</h2>
    <pre>
        <form action="loggin.php" method="post">
            user Name : <input type="text" name="user" size="15">
            user password : <input type="password" name="password" size="15">
                            <input type="hidden" name="insert">
                            <input type="submit" name="loggin" value="loggin">
        </form>
    </pre>
</body>
</html>
