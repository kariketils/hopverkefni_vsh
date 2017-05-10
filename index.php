<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="stilsida.css">
</head>
<body>
<div id="toppanel">

<div id="panel">
<div class="content clearfix">
<div class="left">
<h1>The Sliding jQuery Panel</h1>
<h2>A register/login solution</h2>
<p class="grey">You are free to use this login and registration system in you sites!</p>
<h2>A Big Thanks</h2>
<p class="grey">This tutorial was built on top of <a href="http://web-kreation.com/index.php/tutorials/nice-clean-sliding-login-panel-built-with-jquery" title="Go to site">Web-Kreation</a>'s amazing sliding panel.</p>
</div>

<?php
if(!$_SESSION['id']):
// If you are not logged in
?>

<div class="left">
<!-- Login Form -->
<form class="clearfix" action="" method="post">
<h1>Member Login</h1>

<?php
if($_SESSION['msg']['login-err'])
{
  echo '<div class="err">'.$_SESSION['msg']['login-err'].'</div>';
  unset($_SESSION['msg']['login-err']);
  // This will output login errors, if any
}
?>

<label class="grey" for="username">Username:</label>
<input class="field" type="text" name="username" id="username" value="" size="23" />
<label class="grey" for="password">Password:</label>
<input class="field" type="password" name="password" id="password" size="23" />
<label><input name="rememberMe" id="rememberMe" type="checkbox" checked="checked" value="1" /> &nbsp;Remember me</label>
<div class="clear"></div>
<input type="submit" name="submit" value="Login" class="bt_login" />
</form>

</div>

<div class="left right">

<!-- Register Form -->

<form action="" method="post">
<h1>Not a member yet? Sign Up!</h1>

<?php

if($_SESSION['msg']['reg-err'])
{
  echo '<div class="err">'.$_SESSION['msg']['reg-err'].'</div>';
  unset($_SESSION['msg']['reg-err']);
  // This will output the registration errors, if any
}

if($_SESSION['msg']['reg-success'])
{
  echo '<div class="success">'.$_SESSION['msg']['reg-success'].'</div>';
  unset($_SESSION['msg']['reg-success']);
  // This will output the registration success message
}

?>

<label class="grey" for="username">Username:</label>
<input class="field" type="text" name="username" id="username" value="" size="23" />
<label class="grey" for="email">Email:</label>
<input class="field" type="text" name="email" id="email" size="23" />
<label>A password will be e-mailed to you.</label>
<input type="submit" name="submit" value="Register" class="bt_register" />
</form>

</div>

<?php
else:
// If you are logged in
?>

<div class="left">
<h1>Members panel</h1>
<p>You can put member-only data here</p>
<a href="registered.php">View a special member page</a>
<p>- or -</p>
<a href="?logoff">Log off</a>
</div>
<div class="left right">
</div>

<?php
endif;
// Closing the IF-ELSE construct
?>

</div>
</div> <!-- /login -->

<!-- The tab on top -->
<div class="tab">
<ul class="login">
<li class="left">&nbsp;</li>
<li>Hello <?php echo $_SESSION['usr'] ? $_SESSION['usr'] : 'Guest';?>!</li>
<li class="sep">|</li>
<li id="toggle">
<a id="open" class="open" href="#"><?php echo $_SESSION['id']?'Open Panel':'Log In | Register';?></a>
<a id="close" style="display: none;" class="close" href="#">Close Panel</a>
</li>
<li class="right">&nbsp;</li>
</ul>

</div> <!-- / top -->
</div> <!--panel -->







<nav class="navbar navbar-inverse"s">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="sida2midar.html">Miðar</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Vörur<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Spotify</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Meira</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="page-header">
  <h1>Rage Against The Machine</h1>
  <h3>Tónleikar</h3>
</div>
  <article>
    <h1>Rage against the machine tónleikar</h1> 
    <p>Það verð Rage against the machine hljómsveitinn verður hér á land í sumar og hafa ákveðið að halda tónleika þann <label>15. Júlí. </label>Tónleikarnir verða haldnir á Arnarhóli. 
    Þekktur eins mikið fyrir stjórnmál sín og tónlist þeirra, hjálpaði Rage Against the Machine enn að leggja grunninn að árásargjaldshreyfingum rock-rap tegundarinnar. Frontman Zack de la Rocha færði rappinn með árásargjarnum, pólitískum hlaðnum rímum sínum. Tom Morello framleiddi alls konar pönk, málm og funk hljómar með gítarnum sínum og skapar hörmulegt, bombastic hljóð sem passar við De la Rocha rím.</p>
    <p>

    Bæði de la Rocha og Morello voru fæddir í fjölskyldum aðgerðasinna. De la Rocha, sem ólst upp í úthverfum Irvine, Kaliforníu og Austur L.A., er sonur málarans, Beto, sem helgaði störf sín við Chicano-orsökin. Morelos fæddist í Harlem, sonur Kenískur uppreisnarmanna, sem var tvíþættur, og var hvítur borgaraleg réttindiarmaður móðir. Morello útskrifaðist frá Harvard með félagsfræðslu og flutti til Kaliforníu, þar sem hann fann pólitískan anda í de la Rocha. Með hljómsveitinni Brad Wilk og bassamanninum Tim Commerford (vinur de la Rocha frá bekkjarskóla) myndaði hann Rage Against the Machine árið 1991 og gaf út sjálfstætt framleidd 12-lagsspjald á næsta ári sem fljótt vann þá samning við Epic . Hljómsveitin skrifaði ekki fyrr en það var tryggt með fullan skapandi stjórn.</p> 
  </article>
  <aside>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1739.7315159805828!2d-21.935633333941674!3d64.14833313359603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48d674d2bc1b5567%3A0x32a53a77cc1907b8!2sArnarh%C3%B3ll!5e0!3m2!1sen!2sis!4v1494086065361" width="400" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>>

  </aside>
  <footer><h2> Hafið samband / Contact us<br></h2>
  <h3>Sími / phone: 7456789<br></h3>
  <h3>Email: bla.bla@bla.com</h3></footer>
</body>
</html>