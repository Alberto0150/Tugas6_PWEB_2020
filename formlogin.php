<html>
    <head>
        <title>
            Form admin
        </title>
    </head>

    <body>
        <form action="login.php" method="post" onsubmit="return checker(inputan)">
            <table>
                <tr>
                    <td>Username </td>
                    <td><input type="text"name="nama_admin"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password"name="password"></td>
                </tr>
                <tr>
                    <td>&nbsp</td>
                    <td><input type="submit"name="Login" value="Proses"></td>
                </tr>
            </table>
        </form>
        
        <!-- <script>
            function checker(inputan)
            {
                let laporan;
                if(inputan.username.value =="")
                {
                    laporan += "Username tidak boleh kosong";
                }
                if(inputan.password.value == "")
                {
                    laporan += "Password tidak boleh kosong";
                }
                if(laporan =="")
                {
                    return true;
                }
                else
                {
                    alert(laporan);
                    return false;
                }
            }
        </script> -->

    </body>
</html>