<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    echo "<script>";
    echo "    window.location.href = '../index.php';";
    echo "</script>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body bgcolor="#000000">
        <table align="center" border="1" bgcolor="#FFFFFF" width="800" height="600">
            <tr height="15%">
                <td colspan="2">
                    Banner
                    <br>
                    <?php 
                    echo  "Perfil:",$_SESSION["perfil"];
                    ?>
                </td>
            </tr>
            <tr height="85%">
                <td width="15%" valign="top"><?php include 'menu.php'; ?></td>
                <td width="85%">
                    <iframe name="centro" src="" width="100%" height="100%" frameborder="0"/>                                            
                </td>
            </tr>            
        </table>
    </body>
</html>
