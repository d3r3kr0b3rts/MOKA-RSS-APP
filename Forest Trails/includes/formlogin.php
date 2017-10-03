</div id="bodydiv">
<div id="bodydiv" class="col-md-6 offset-md-3">
<div id="login" class="container">
  <h1>Please Login to <?php echo $residence; ?></h1>
  <a id="toggle" class="btn btn-secondary" href="/" style="width:100%;border:solid 1px white;margin-top:10px;margin-bottom:10px;">
    <h5>
      MOKA Home Page
    </h5>
  </a>
  <form action="./be/logiclogin.php" method="post">

    <div class="btn-group" data-toggle="buttons" style="width:100%;">
      <label class="btn btn-outline-secondary">
        <input type="checkbox" autocomplete="off" name="staylogged">Keep Me Logged In
      </label>
    </div>

    <input class="form-control" type="number" placeholder="MOKA Login PIN ####" name="userpin" autofocus required>
    <input class="form-control" type="password" placeholder="Password" name="password" required>
    <button type="button" class="btn btn-warning" onclick="if(password.type=='text')password.type='password'; else password.type='text';" name="showpass" style="margin-top:10px;">Show Password</button><br>
    <button type="submit" class="btn btn-primary" style="margin-top:10px;">Login</button>

  </form>
</div>
