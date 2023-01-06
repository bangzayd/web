<? include"koneksi.php";?>

<html lang="en">

<?php include"up.php";?>

  <div class="col-sm-5 col-sm-offset-2 col-md-8 col-md-offset-0">
    <table class="table table-bordered">
     <tr class="navbar-default">
      <th class="text-center">Silahkan Login</th>
    </tr>
 <form class="form-signin" action="validasi" method="POST">
                <tr style="text-align: Center"> <td>  <input type="text"  name="username" placeholder="Username" required autofocus></td></tr>
                <tr style="text-align: Center">  <td>  <input type="password"  name="password" placeholder="Password" required autofocus></td></tr>
                    <?php
                    // menampilkan validasi jika username atau password salah
                    if(isset($_SESSION['pesan'])){
                        echo $_SESSION['pesan'];
                        unset($_SESSION['pesan']);
                    }
                    else{
                    // apabila login gagal lanjut tampilkan form login
                    }
                    ?>
              <tr style="text-align: Center">    <td>  <button>Sign in</button></td></tr>
                    </form>
  </table>
</div>
<br>
</div>

<?php include"down.php";?>

</body>
</html>

