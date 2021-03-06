﻿<?php

session_start();
if(isset($_SESSION['user'])){
	header("location:http://localhost/production/BuscaRep/production/loged_page_user.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.ico">
    <title>BuscaRep</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="http://localhost/production/BuscaRep/production/user_connect.php" method="POST">
              <h1>Login</h1>
              <div>
                <input name="user_name" type="text" class="form-control" placeholder="Nome de Usuário" required="required" />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="Senha" required="required" />
              </div>
              <div>
                <input class="btn btn-default submit" value="Entrar" type="submit">
                <!--<a class="reset_pass" href="#">Esqueceu a senha?</a>-->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Novo no site?
                  <a href="#signup" class="to_register"> Criar Conta </a>
                </p>

                <div class="clearfix"></div>
                <br />
				
                <div>
                  <h1><img src="production/images/buscarep.png" width="40" height="40"> Sistema BuscaRep</h1>
                  <p>©Developed by Atares IT</p>
                </div>
              </div>
            </form>
            <?php if(isset ($_GET['error'])):
			  if($_GET['error'] == true):?>
            <div class="panel panel-danger">
            <div class="panel-heading">Erro no Login</div>	
			 </div>
            <?php endif; endif?>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="http://localhost/production/BuscaRep/production/user_insert.php" method="POST" name="dados">
              <h1>Nova Conta</h1>
              <div>
                <input name="user_name" id="user_name" type="text" class="form-control" placeholder="Usuário" required="required" />
              </div>
              <div>
                <input name="name" id="name" type="text" class="form-control" placeholder="Nome Completo" required="required" />
              </div>
              <div>
                <input name="email" id="email" type="email" class="form-control" placeholder="Email" required="required" />
              </div>
              <div>
                <input name="password" id="password" type="password" class="form-control" placeholder="Senha" required="required" />
              </div>
              <div>
                <input name="confirm_password" id="confirm_password" type="password" class="form-control"  placeholder="Confirme a Senha" required="required"/>
              </div>
              <div>
                <input id="button" class="btn btn-default submit" value="Criar"  onClick="enviardados()">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Já é membro?
                  <a href="#signin" class="to_register"> Logar </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="production/images/buscarep.png" width="40" height="40"> Sistema BuscaRep</h1>
                  <p>©Developed by Atares IT</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    
    <script language="JavaScript" >
		function enviardados(){
			
			password = document.dados.password.value
			confirm_password = document.dados.confirm_password.value
			
			if(document.dados.user_name.value==""){
			alert( "Preencha campo Usuário corretamente!" );
			document.dados.tx_nome.focus();

			}


			if(document.dados.name.value==""){
			alert( "Preencha campo Nome corretamente!" );
			document.dados.tx_nome.focus();

			}
			
			if( document.dados.email.value=="")
			{
			alert( "Preencha campo e-Mail corretamente!" );
			document.dados.tx_email.focus();
			}
			
			if(document.dados.password.value==""){
			alert( "Preencha campo Senha corretamente!" );
			document.dados.tx_nome.focus();

			}
			
			if(document.dados.confirm_password.value==""){
				alert( "Preencha campo Confirma a Senha corretamente!" );
				document.dados.tx_nome.focus();

			}
			
			if (password != confirm_password){
				alert("Senhas não conferem!")
				document.dados.tx_nome.focus();
			}

			document.dados.submit();
		}
 
</script>
    
    
    <script language="javascript" type="text/javascript">
		
		function validarSenha(){
			password = document.f1.password.value
			confirm_password = document.f1.confirm_password.value

			if (password != confirm_password){
				alert("Senhas não conferem!")
			}
			
			else{
				document.f1.submit();
			}
		
		}
   </script>
 
  </body>
</html>
