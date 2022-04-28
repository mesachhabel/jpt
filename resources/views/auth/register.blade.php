<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Silahkan Daftar Di Admin</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../../assets/img/favicon/icon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    * {
        text-align: center !important;
        padding: 0;
        box-sizing: border-box;
    }

    .a {
        line-height: 5rem;
    }

    .b {
        line-height: 2rem;
    }

    .error {
        width: 500px;
        margin-top: 2.5rem;
    }

    @media screen and (max-width: 600px) {
        .error {
            width: 100%;
        }
    }

</style>

<body>
    <img class="error" src="../../../assets/loginreg/img/undraw_server_down_s-4-lk.svg" alt="Error-Register">
    <p class="a"> Silahkan Daftar Akun Terlebih Dahulu, Atau Hubungi Admin!!!</p>
    <p class="b">Terima Kasih!!!</p>
    <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
