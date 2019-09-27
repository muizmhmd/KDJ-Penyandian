<html>
    <head>
        <title>New Registration</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css"> 
    </head>
    <body>
    <?php include "../header.php"; ?>
        <br>
        <br>
        <center><h2>Registration</h2></center>
        <div class="login">
            <form action="prosesdaftar.php" method="post" onsubmit="return validasi()">
                <div>
                    <label for="id">ID:</label>
                    <input type="text" name="id" id="id" autocomplete="off" title="Type an ID" />
                </div>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" autocomplete="off" title="Type a Name" />
                </div>
                <div>
                    <label for="Username">Username:</label>
                    <input type="text" name="username" id="username" autocomplete="off" title="Type a Username" />
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" autocomplete="off" title="Type a Password" />
                </div>
                <div>
                    <input type="submit" value="Registration" class="tombol" title="Registration">
                </div>
            </form>
        </div>
    </body>
    <script>
        function validasi(){
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username != "" && password !="") {
                return true;
            } else {
                alert('Username or password empty!');
                return false;
            }
        }
    </script>
</html>