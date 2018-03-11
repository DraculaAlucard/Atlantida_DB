<!DOCTYPE html>
<html>
<head>
	<title>Atlantida Database</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript">
		
	</script>
	<style type="text/css">
		.formulario{
			margin-top: 15%;
			height: 50%;
			margin-bottom: 25%;
		}
		.bc-color-blue{
			background-color: #000080;
		}
		.bc-color-blue2{
			background-color: #4682B4;
		}
		.nulo{
			margin:0px;
			padding: 0px;
		}
		.caption{
			box-shadow: 1px 1px black;
			background-color: #000000;
			color:white;
			font-weight: bolder;
			padding: 10px;
			border:0px;
			text-align:center;
		}
		.btn{
			box-shadow: 1px 1px black;
			background-color: #000000;
			color:white;
			font-weight: bolder;
			padding: 10px;
			border:0px;
			text-align:center;
		}
		.btn:hover{
			color:#000000;
			background-color: white;
			transition: 2s;
		}
		.bc-at{
			background-image: url("assets/midia/img/atlantida-02.jpg");
		}
	</style>
		
</head>
<body>
	<div class="container-fluid">
		<div class="row bc-color-blue2">
			
			<form class="formulario padding-left col-md-4">
				<div class="container">
					<label class="caption col-md-12">Faça seu login</label>
					<hr>
					<div class="row">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label for="login">Login</label>	
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" tabindex="1" name="login">
					</div>
					<br>
					<div class="row">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label for="senha">Senha</label>	
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="password" tabindex="2" name="senha">
					</div>
					<br>
					<div class="row">
							<div class="col-md-2"></div><button class="col-md-8 btn" type="submit">Enviar</button>
					</div>

				</div>
			</form>
			
			<div class="col-md-8 bc-color-blue bc-at"></div>
		</div>
	</div>
</body>
</html>