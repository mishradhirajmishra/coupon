<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--<form method="POST" action="<?php /*echo base_url();*/?>index.php/login/loginform">

-->
<?php echo $msg;?>
<?php echo form_open('file/validate'); ?>

    <table border="1" align="center">

        <caption>Login Form</caption>

        <tr><td>Email</td><td><input type="email" name="email"  required/></td></tr><br/>

        <tr><td>Password</td><td><input type="password" name="password"  required/></td></tr><br/>

        <tr align='center'><td  colspan="2"><input type="submit" name="login" value="LOG IN"/></td></tr>

        <td colspan="2"><div align="center"><a href="<?php echo base_url();?>">New User</a></div></td>

    </table>

</form>


</body>
</html>