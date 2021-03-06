<?php
require_once "config/database.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Data Siswa</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/datepicker.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <script language="javascript">
      function getkey(e)
      {
        if (window.event)
          return window.event.keyCode;
        else if (e)
          return e.which;
        else
          return null;
      }

      function goodchars(e, goods, field)
      {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
       
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
       
        if (goods.indexOf(keychar) != -1)
            return true;
        if ( key==null || key==0 || key==8 || key==9 || key==27 )
          return true;
          
        if (key == 13) {
            var i;
            for (i = 0; i < field.form.elements.length; i++)
                if (field == field.form.elements[i])
                    break;
            i = (i + 1) % field.form.elements.length;
            field.form.elements[i].focus();
            return false;
            };
        return false;
    }
    </script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
            <i class="glyphicon glyphicon-check"></i>
            SIDASIS
          </a>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <?php
      if (empty($_GET["page"])) {
        include "tampil-data.php";
      } elseif ($_GET['page'] == 'tambah') {
        include "form-tambah.php";
      } elseif ($_GET['page'] == 'ubah') {
        include "form-ubah.php";
      } 
      ?>
    </div> 
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
      $(function () {

        $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        });

        $('[data-toggle="tooltip"]').tooltip();
      })
    </script>
  </body>
</html>