<!DOCTYPE html>
<?php
session_start();

 
if (!isset($_SESSION["pass"]) && !isset($_SESSION["user"])) {
	header("Location: ../index.php");
}

?>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PEJENE <?php echo date('Y');?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script language="javascript" type="text/javascript"> 

		function LightGreen(e){ 
		var r = null; 
		if (e.parentNode && e.parentNode.parentNode) { 
		r = e.parentNode.parentNode;} 
		else if (e.parentElement && e.parentElement.parentElement) { 
		r = e.parentElement.parentElement;} 
		if (r) { 
		(r.className == "row_white") 
		r.className = "row_green";} 
		} 		
		
		function LightRed(e){ 
		var r = null; 
		if (e.parentNode && e.parentNode.parentNode) { 
		r = e.parentNode.parentNode;} 
		else if (e.parentElement && e.parentElement.parentElement) { 
		r = e.parentElement.parentElement;} 
		if (r) { 
		(r.className == "row_white") 
		r.className = "row_red";} 
		} 

		function Unhighlight(e){ 
		var r = null; 
		if (e.parentNode && e.parentNode.parentNode) { 
		r = e.parentNode.parentNode;} 
		else if (e.parentElement && e.parentElement.parentElement) { 
		r = e.parentElement.parentElement;} 

		if (r) { 
		(r.className == "row_green") 
		r.className = "row_white";} 
		} 

	</script> 
	<style>
		tr.spaceUnder > td
		{
		  padding-bottom: 1em;
		}
		
		tr.spaceLeft > td
		{
		  padding-left: 1em;
		}
		
		.row_white {background-color : #ffffff;} 
		.row_green {background-color : #CAFFCA; } 
		.row_red {background-color : #FFDFDF; } 

		table {
			border-collapse: collapse;
		}

        /* FG */
        .listaResultados{margin-top: 50px;}
        .listaResultados > div{width: 800px;}
        .listaResultados input{float: right;}
	</style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">PEJENE <?php echo date('Y');?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
			<?php
					// $mysqli = new mysqli("localhost","root","","jcibd");
					$mysqli = new mysqli("localhost","c27cartao2","t_0PlqOhWyOG1","c28jovms");
					/* check connection */
					if (mysqli_connect_errno()) {
						printf("Error de ligação: %s\n", mysqli_connect_error());
						exit();
					}
											
							$count1 = $mysqli->query('SELECT * FROM utilizadorpejene WHERE pass like"'.$_SESSION["pass"].'";');
							while($row = $count1->fetch_assoc()) {
								echo $row['nome'];
							}		
							
			?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../sair.php"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li  class="active">
                            <a  href="#"><i class="fa fa-users fa-fw"></i> Estagiários<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Pendentes</a>
                                </li>
                                <li>
                                    <a href="#">Deferidos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Pré-seleccionados</a>
                                        </li>
                                        <li>
                                            <a href="#">Seleccionados</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
								<li>
                                    <a href="#">Indeferidos</a>
                                </li>								
								<li>
                                    <a class="active" href="../pagina/estagiarios-eliminados.php" >Eliminados</a>
                                </li>								
								<li>
                                    <a href="../pagina/estagiarios-duplicados.php" >Duplicados</a>
                                </li>								
								<li>
                                    <a href="../pagina/estagiarios-listaNegra.php" >Lista Negra</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-briefcase fa-fw"></i> Empresas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a  href="../pagina/empresas.php">Pendentes</a>
                                </li>
                                <li>
								<li>
                                    <a href="../pagina/empresas-deferidas.php" >Deferidas<span class="fa arrow"></span></a>
								</li>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">- Pré-seleccionadas</a>
                                        </li>
                                        <li>
                                            <a href="#">- Seleccionadas</a>
                                        </li>
                                        <li>
                                            <a href="#">- C/ Protocolo</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
								 <li>
                                    <a href="../pagina/empresas-indeferidas.php">Indeferidas</a>
                                </li>								 
								<li>
                                    <a href="../pagina/empresas-desistentes.php">Desistentes</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-search fa-fw"></i>Pesquisar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="pesquisa-estagiarios.php">Estagiários</a>
                                </li>
                                <li>
                                    <a href="#">Empresas</a>
                                </li>
                                <li>
                                    <a href="#">Port. Def.</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-envelope-o fa-fw"></i> Lista de e-mails</a>
                     </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->   
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" >
                        <h1 class="page-header">Gerir Estagiários Eliminados</h1>
						<?php 
						
							if(isset($_GET['ins']))
							{
								$ins = $_GET['ins'];
								
								$query = "UPDATE estudante SET pendente=1 , eliminado=0, duplicado=0 WHERE idEstudante=";
								
								$insertHistory ='INSERT INTO `jcibd`.`pejene_historico_estudante` (`id`, `idEstudante`, `idpasso`, `data`) 
												VALUES (NULL, "'.$ins.'", "5", "'.date("Y-m-d H:i:s", time()-1*3600).'");';
								
								$query .=  $ins . ";";	
								
								if($mysqli->query($query) && $mysqli->query($insertHistory));
								{	
									
									echo '<p>A candidatura nº'.$ins.' foi recuperada para o estádo de pendente.</p>';
								}
								echo '<p><input TYPE="button" VALUE="Voltar para lista Estagiários Eliminados" onClick="location.replace(document.referrer);" ></p>';
							
							}
							else
							{
								echo '<p>Não foi selecionada nenhuma candidatura.</p>';
								$link ="'estagiarios-eliminados.php'";
								echo '<p><input TYPE="button" VALUE="Voltar para lista Estagiários Eliminados" onClick="location.href='.$link.'"  ></p>';
							}

						?>
                    </div>
					
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

 
</body>

</html>
