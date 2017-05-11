
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="stilsida.css">
</head>
<body>
 <?php 
session_start(); 

define('DS',  TRUE); // used to protect includes
define('USERNAME', $_SESSION);
define('SELF',  $_SERVER['PHP_SELF'] );

if (!USERNAME or isset($_GET['logout']))
 include('demo.php');

// everything below will show after correct login 
?>
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
    <p> Til haminglju þér hefur verið boðið á Rage agesnt the machine tónleika í gegnum facebook síðuna okkar. Það verð Rage against the machine hljómsveitinn verður hér á land í sumar og hafa ákveðið að halda tónleika þann <label>15. Júlí. </label>Tónleikarnir verða haldnir á Arnarhóli. 
    Þekktur eins mikið fyrir stjórnmál sín og tónlist þeirra, hjálpaði Rage Against the Machine enn að leggja grunninn að árásargjaldshreyfingum rock-rap tegundarinnar. Frontman Zack de la Rocha færði rappinn með árásargjarnum, pólitískum hlaðnum rímum sínum. Tom Morello framleiddi alls konar pönk, málm og funk hljómar með gítarnum sínum og skapar hörmulegt, bombastic hljóð sem passar við De la Rocha rím.</p>
    <p>

    Bæði de la Rocha og Morello voru fæddir í fjölskyldum aðgerðasinna. De la Rocha, sem ólst upp í úthverfum Irvine, Kaliforníu og Austur L.A., er sonur málarans, Beto, sem helgaði störf sín við Chicano-orsökin. Morelos fæddist í Harlem, sonur Kenískur uppreisnarmanna, sem var tvíþættur, og var hvítur borgaraleg réttindiarmaður móðir. Morello útskrifaðist frá Harvard með félagsfræðslu og flutti til Kaliforníu, þar sem hann fann pólitískan anda í de la Rocha. Með hljómsveitinni Brad Wilk og bassamanninum Tim Commerford (vinur de la Rocha frá bekkjarskóla) myndaði hann Rage Against the Machine árið 1991 og gaf út sjálfstætt framleidd 12-lagsspjald á næsta ári sem fljótt vann þá samning við Epic . Hljómsveitin skrifaði ekki fyrr en það var tryggt með fullan skapandi stjórn.</p> 
  </article>
  <aside>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1739.7315159805828!2d-21.935633333941674!3d64.14833313359603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48d674d2bc1b5567%3A0x32a53a77cc1907b8!2sArnarh%C3%B3ll!5e0!3m2!1sen!2sis!4v1494086065361" width="400" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

  </aside>
  <footer><h2> Hafið samband / Contact us<br></h2>
  <h3>Sími / phone: 7456789</h3>
  <h3>Email: bla.bla@bla.com</h3></footer>
</body>
</html>