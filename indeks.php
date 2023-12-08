<html>

<head>
    <link rel="stylesheet" href="style.css">
    
</head>
<header>
    <img src="img/logo.png" align="left" width="100" height="100">
    <div class="kepala">
        <h2><br>GUDANG<br>SEJATI<br>DAMAI</h2>

    </div>

    <div class="kepala2">
        <a>INVENTORY BARANG<br>
            Jl. KH. ACHMAD DAHLAN NO.156 JAKARTA SELATAN</a>
    </div>

</header>

    <body>

    <br><br><br><br>

        <div class="container">
            <form method="POST" action="akulogin.php" name="login">

            <center>
                <h3>LOGIN PEGAWAI</h3>
            </center>
            <label class="log" for="id">ID</label>
            <input type="text" class="log" name="id" placeholder="Your ID" required autofocus />

            <label class="log" for="passwords">PASSWORD</label>
            <input type="password" class="log" name="password" placeholder="Your Password" required minlength="2" />
            <button class="log" type="submit">LOGIN</button>

            </form>
        </div>
    </body>
</html>