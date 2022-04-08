<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/25495e258e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>LOGIN TOKO ASKHA JAYA</title>
</head>

<body>
    </div>
    <div class="box">
        <h2><br>INVENTARIS BARANG</br><span> TOKO ASKHA JAYA</span></h2>

        <div class="box-login">

            <!-- form login -->
            <center>
                <form method="post" action="<?= base_url('auth/cek_login'); ?>">
                    <?php if ($this->session->flashdata('msg')) { ?>
                        <div class="alert alert-warning alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Warning!</strong><br> <?php echo $this->session->flashdata('msg'); ?>
                        </div>
                    <?php } ?>
                    <img src="assets/img/askha-logo.png" alt="" height="100px" width="100px">
                    <div class="input">
                        <i class="fa-2x fa-solid fa-circle-user" sty></i>
                        <input type="text" name="username" id="username" placeholder="Nama Pengguna" />
                    </div>
                    <div class="input">
                        <i class="fa-2x fa-solid fa-key"></i>
                        <input type="password" name="password" id="password" placeholder="Kata Sandi" />
                    </div>

                    <button class="btn btn-success">MASUK</button>
                    <!-- <div class="btn btn-success">MASUK</div> -->
                </form>
            </center>
            <!-- form login -->
        </div>
    </div>
</body>

</html>

<style>
    body {
        background: #EEECB2;
        background-image: url("assets/img/template.png");
        background-size: cover;
        background-attachment: fixed;
    }

    .box {
        text-align: center;
        width: 600px;
        height: 500px;
        position: relative;
        padding: 10px;
        margin: auto;
        margin-top: 5%;
        border-radius: 15px;
    }

    .box h2 {
        font-weight: 700;
    }

    .box-login {
        border: solid 1px;
        padding: 30px;
        width: 400px;
        left: 100px;
        position: absolute;
        margin-top: 10px;
        border-radius: 15px;
        background: #DAA520;
        justify-content: center;
        border: solid 1px;
        cursor: pointer;

        /* background-image: url("askha.png");
  background-repeat: no-repeat;
  padding-left: 18px !important;
  background-size: 15%;
  background-position-y: 3%;
  background-position-x: 50%; */
    }

    .box .input {
        padding: 10px;
        margin: 10px;
        width: 250px;
        height: 50px;
        border: solid 1px;
        border-radius: 5px;
        background-color: #fff;
    }

    .box .input input {
        position: absolute;
        left: 125px;
        /* height: 35px; */
        border-color: transparent;
        width: 180px;

    }

    .box .input i {
        position: absolute;
        left: 83px;
    }

    .btn {
        border-color: black;
        width: 250px;
        background: #3DB056;
        font-weight: 500;
        color: black;
    }

    #show-password {
        float: right;
        vertical-align: bottom;
        margin-top: 10px;
        cursor: pointer;
        padding-bottom: 5px;

        max-width: 400px;
        width: 100%;
        z-index: 1;
        position: absolute;
        top: 151%;
        left: 75%;
        margin-left: -200px;
        margin-top: -286px;
    }
</style>