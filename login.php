<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | Personal Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="icon" href="img/logo.png" />
</head>

<body class="bg-danger-subtle">
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card border-0 shadow rounded-5">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="bi bi-person-circle h1 display-4"></i>
                            <p>My Daily Journal</p>
                            <hr />
                        </div>
                        <form action="" method="post">
                            <input type="text" name="user" class="form-control my-4 py-2 rounded-4"
                                placeholder="Username" />
                            <input type="password" name="pass" class="form-control my-4 py-2 rounded-4"
                                placeholder="Password" />
                            <div class="text-center my-3 d-grid">
                                <button class="btn btn-danger rounded-4">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $bg_class = "bg-body-tertiary"; 
        $text_class = "text-dark";
        
        $pesan = "Silakan Login";
        $username = "admin";
        $password = "123456";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if($_POST['user'] == $username AND $_POST['pass'] == $password){
                $bg_class = "bg-primary"; 
                $text_class = "text-white";
                $pesan = "Login Berhasil! Selamat Datang";
 
            }
            else {
                $bg_class = "bg-danger";
                $text_class = "text-white";
                $pesan = "Login Gagal! Username atau Password Salah";
            }
        }
        ?>

    <div
        class="validasi m-auto mt-5 text-center w-25 p-5  rounded-5 shadow <?php echo $bg_class . ' ' . $text_class; ?>">
        <h3 class="fw-bold">Status Login</h3>
        <hr>
        <h5 class="fw-normal">
            <?php
            foreach($_POST as $key => $val){
                echo $key . " : " . $val ."<br>";
            }
            
            echo "<hr>" . $pesan . "<br>";  
            ?>
        </h5>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>