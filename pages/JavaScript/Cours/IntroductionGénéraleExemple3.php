<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../../login/main_login.php");
}
?>

<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Programmation Web II</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="../../../dist/css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../../../bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../../dist/css/exemples.css" rel="stylesheet">


</head>
<body>
  <?php include("../../enteteExemples.php"); ?>
  <div id="page-wrapper2">
<div class="container-fluid">
    <div class="row">
      <br><br><br>
      <!--div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-heading">
                Exemple
            </div>
            <div class="panel-body">
              <span style="color:blue">&lt;</span><span style="color:brown">!DOCTYPE</span> <span style="color:red">html</span><span style="color:blue">&gt;</span><br>
              <span style="color:blue">&lt;</span><span style="color:brown">html</span><span style="color:blue">&gt;</span><br>
              <span style="color:blue">&lt;</span><span style="color:brown">head</span><span style="color:blue">&gt;</span><br>
              <span style="color:blue">&lt;</span><span style="color:brown">title</span><span style="color:blue">&gt;</span>une page contenant du Javascript<span style="color:blue">&lt;</span><span style="color:brown">/title</span><span style="color:blue">&gt;</span><br>
              <span style="color:blue">&lt;</span><span style="color:brown">/head</span><span style="color:blue">&gt;</span><br>
              <span style="color:blue">&lt;</span><span style="color:brown">body</span><span style="color:blue">&gt;</span><br>
              <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span>

              <span style="color:blue">&gt;<br>
               </span>alert(<span style="color:red">"Voici un message d\'alerte!"</span>);<br>
             <span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>
              <span style="color:blue">&lt;</span><span style="color:brown">/body</span><span style="color:blue">&gt;</span><br>
              <span style="color:blue">&lt;</span><span style="color:brown">/html</span><span style="color:blue">&gt;</span>
            </div>
            <div class="panel-footer">
              <p><a class="btn btn-primary btn-lg sizebtn" role="button" onClick="alert('Voici un message d\'alerte!');">Essayer le code</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                  Default Buttons
              </div-->
              <!-- /.panel-heading -->
<!-------------------------------------------ddddd-->


<div id="textareacontainer">
  <div id="textarea">
    <div id="textareawrapper">

        <div class="panel-body">
          <span style="color:blue">&lt;</span><span style="color:brown">!DOCTYPE</span> <span style="color:red">html</span><span style="color:blue">&gt;</span><br>
          <span style="color:blue">&lt;</span><span style="color:brown">html</span><span style="color:blue">&gt;</span><br>
          <span style="color:blue">&lt;</span><span style="color:brown">head</span><span style="color:blue">&gt;</span><br>
          <span style="color:blue">&lt;</span><span style="color:brown">title</span><span style="color:blue">&gt;</span>une page contenant du Javascript<span style="color:blue">&lt;</span><span style="color:brown">/title</span><span style="color:blue">&gt;</span><br>
          <span style="color:blue">&lt;</span><span style="color:brown">/head</span><span style="color:blue">&gt;</span><br>
          <span style="color:blue">&lt;</span><span style="color:brown">body</span><span style="color:blue">&gt;</span><br>
          <span style="color:blue">&lt;</span><span style="color:brown">script</span> <span style="color:red">language=</span><span style="color:blue">"Javascript"</span>

          <span style="color:blue">&gt;<br>
           </span>alert(<span style="color:red">"Voici un message d\'alerte!"</span>);<br>
         <span style="color:blue">&lt;</span><span style="color:brown">/script</span><span style="color:blue">&gt;</span><br>
          <span style="color:blue">&lt;</span><span style="color:brown">/body</span><span style="color:blue">&gt;</span><br>
          <span style="color:blue">&lt;</span><span style="color:brown">/html</span><span style="color:blue">&gt;</span>
        </div>

      <form autocomplete="off" style="margin:0px;display:none;">
        <input type="hidden" name="code" id="code">
        <input type="hidden" id="bt" name="bt">
      </form>
      <button class="w3-green w3-hover-white w3-hover-text-green" onclick="submitTryit(1)">Run</button>

     </div>
  </div>

</div>
<div id="iframecontainer">
  <div id="iframe">
    <div id="iframewrapper"><iframe frameborder="0" id="iframeResult" src="exp3.html"></iframe></div>
  </div>
</div>
<!----------------------ddd-------------------------------->
            </div>
          </div>
</div>

  <?php include("../../footer.php"); ?>
    <script src="../../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../../../dist/js/sb-admin-2.js"></script>
    <script src="../../../dist/js/exemples.js"></script>

</body>
</html>
