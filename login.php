<!DOCTYPE html>
<html lang="en">
  <head>
    <TITLE> Login</TITLE>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Selamat Datang!</title>
    <style >
      *{

        padding: 50;
        margin: 50;
        box-sizing: border-box;
      }

      body{
        background:#E9967A;
      }

      .row{
        background: yellow;
        border-radius: 40px;
        box-shadow: 0px 0px 0px black;
      }

      img{
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
      }

      .btnsatu{
        border: none;
        outline: none;
        height: 50px;
        width: 50%;
        background-color: #DAA520;
        color: white;
        border-radius: 8px;
        font-weight: bold;
      }


      .btnsatu:hover{
        background: white;
        border:5px solid;
        color: white;

      }

    </style>
  </head>
  <body>
  

<section class="form my-4 mx-5">
  
    <div class="container">
      <div class="row no-gutters" >
        <div class="col-lg-4">
          <img src="skl.jpeg" class="img-fluid">
        </div>
        <div class="col-lg-7 px-5 pt-5">
          <h1 class="font-weight-bold py-3 text-center" >Login Dulu</h1>
          <form method="POST" action="ceklogin.php">

            <div class="form-row">
               <div class="col-lg-12">
                 <input type="text" name ="username"  placeholder="Username" class="form-control my-2 p-2 ">
               </div>
            </div>


            <div class="form-row">
               <div class="col-lg-12">
                 <input type="password" name ="password"  placeholder="password" class="form-control my-2 p-2 ">
               </div>
            </div>

        

            <?php if (isset($_GET['msg'])): ?>
            <small class="text-danger"><?= $_GET['msg'];  ?></small>
          <?php endif ?>

             <div class="form-row">
               <div class="col-lg-12">
                 <input type="submit" class="btnsatu mt-2 mb-4"value="Login">
               </div>
            </div>

            <a href="#">Forget Password</a>
            <p> Belum Punya Akun ?  <a href="register.php">BUATAKUN</a></p>

          </form>
        </div> 
      </div>
    </div>

</section>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>