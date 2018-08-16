<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="controller/loginController.php" method="post">
            <table border="1" align="center">
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"/></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input type="password" name="senha"/></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Entrar"/>
                    </td>
                </tr>            
            </table>
        </form>
    </body>
</html>
