<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }

   if  (isset($_SESSION['mensagem'])) {
?>
   <style>
      div.alert {
         z-index: 5;
         justify-content: center;
         position: absolute;
         top: 30px;

      }
   </style>
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <?php echo $_SESSION['mensagem']; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
   </div>    
<?php
    unset($_SESSION['mensagem']);
    }
?>