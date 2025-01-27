<?php error_reporting(0);
?>

<head>
   <meta charset="utf-8" />
   <title>test</title>
   <link rel="icon" href="images/fav.ico" type="image/x-icon" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="js/notification.js"></script>
   <link href="styles/bootstrap.css" rel='stylesheet' type='text/css'>
   <link href="styles/animate.css" rel='stylesheet' type='text/css'>
   <link href='styles/notification.css' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="styles/font-awesome.min.css">
</head>
<style type="text/css">
   @font-face {
      font-family: BebasNeue;
      src: url(fonts/BebasNeueThin.otf);
   }

   #down {
      margin: 30px;
   }
</style>
<div class="animated bounceInDown" id="formulario">
   <table class="display" id="example">
      <center>
         <!-- <i style="font-size:180px;" class="fa fa-envelope" aria-hidden="true"></i><br> -->
         <span style="font: 50px BebasNeue, serif;">TEST</span>
         <div class="form-inline">
            <textarea name="ccs" id="ccs" placeholder="email list" class="form-control" style="max-width: 800px; min-width: 400px; min-height: 200px; max-height: 200px; text-align: center;" placeholder=""></textarea>
            <textarea name="conteudo" id="conteudo" placeholder="content" class="form-control" style="max-width: 800px; min-width: 400px; min-height: 200px; max-height: 200px; text-align: center;" placeholder=""></textarea>
         </div>
         <br>
         <center>
            <div class="form-inline">
               <input value="" type="text" maxlength="30" style="height: 35px; width: 200px; text-align: center;" class="form-control" name="nome" id="nome" placeholder="name in email that shows">
               <input value="" type="text" maxlength="30" style="height: 35px; width: 150px; text-align: center;" class="form-control" name="assunto" id="assunto" placeholder="subject of email">
            </div>
            <br>
            <span>
               Information:
               <i id="demo">
                  <div class="label label-warning label-dismissible">Not started.</div>
               </i>
               | uploaded:
               <div id="carregada" class="label label-warning label-dismissible">0</div>
            </span>
         </center>
</div>
<br>
<div class="form-inline">
   <button type="submit" name="send" value="Iniciar " onclick="start()" class="fcbtn btn btn-warning btn-outline btn-1e btn-squared">SEND</button>
   <button type="submit" name="limpar" value="Limpar" onclick="limpar()" class="fcbtn btn btn-info btn-warning btn-1e btn-squared animated ">clean for new email</button>
   </table>
</div>
</div>
<!-- Copyright -->

</div>
<!-- Copyright -->

</html>