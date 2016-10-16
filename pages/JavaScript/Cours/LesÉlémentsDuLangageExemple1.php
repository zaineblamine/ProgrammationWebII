<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
    header('location:../../../login/main_login.php');
}
?>
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

  <div id="wrapper">
    <?php include '../../enteteExemples.php'; ?>
  <br><br><br>
<div id="container">
  <div id="textareacontainer">
    <div id="textarea">
      <div id="textareawrapper">
        <textarea autocomplete="off" id="textareaCode" spellcheck="false" wrap="logical" disabled >
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;script language="Javascript"&gt;
var  bonjour ="Bonjour!";
var question ="Comment allez vous?";
var phrase = bonjour+"<br>"+question;
document.write( phrase, "aujourd'hui ?" );
&lt;/script  &gt;
&lt;/body&gt;
&lt;/html&gt;
    </textarea>
        <form autocomplete="off" style="margin:0px;display:none;">
          <input name="code" id="code" type="hidden">
          <input id="bt" name="bt" type="hidden">
        </form>
       </div>
    </div>
  </div>
  <div id="iframecontainer">
    <div id="iframe">
      <div id="iframewrapper"><iframe id="iframeResult" frameborder="0"></iframe></div>
    </div>
  </div>
</div>

</div>
<script src="../../../dist/js/exemples.js"></script>
  <script src="../../../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="../../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Metis Menu Plugin JavaScript -->
  <script src="../../../bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="../../../dist/js/sb-admin-2.js"></script>

</body>
</html>
