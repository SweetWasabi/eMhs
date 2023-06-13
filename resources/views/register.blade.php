<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="card w-25">
            <div class="card-header bg-primary d-flex justify-content-center">
                <strong>FORM<span class="text-light"> REGISTER</span></strong>
            </div>
            <div class="card-body">
                <form action="/simpan" method="POST">
                    @csrf
                    <!-- <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="MASUKKAN NIK" required>
                    </div> -->
                    <div class="form-group">
                        <label>NAMA LENGKAP</label>
                        <input type="text" name="nama" class="form-control" placeholder="MASUKKAN NAMA" required>
                    </div>
                    <div class="form-group">
                        <label>E-MAIL</label>
                        <input type="email" name="email" class="form-control" placeholder="MASUKKAN EMAIL" required>
                    </div>
                    <div class="form-group">
                        <label>NO HP</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="MASUKKAN NO HP" required>
                    </div>
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="password" name="pass" class="form-control" placeholder="MASUKKAN PASSWORD" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">SIGN-UP</button>
                    </div>
                </form>
                <hr>

                <span class="d-flex justify-content-center pb-4" style="color:darkorchid">SUDAH PUNYA AKUN ?</span>

                <a href="/" class="btn btn-primary btn-block">LOGIN</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>