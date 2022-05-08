<?php
require_once 'db/init.php';

//Verifica se está sendo utilizada a base de Produção ou de Teste/Manutenção

$PDO = db_connect_konfisio();
$sql = "SELECT status FROM sistemas WHERE id_sistema ='2'";
$stmt = $PDO->prepare($sql);
$stmt->execute();
$sistema = $stmt->fetchAll(PDO::FETCH_ASSOC);
$result = $sistema[0];
$status = $result['status'];

if ($status == 'Off') {
	echo "<div class='alert-danger text-center'><span class='css_blink'><b>O sistema est&aacute; em manuten&ccedil;&atilde;o</b></span></div>";
	exit;
}
?>
<!doctype html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Konfisio Cursos Profissionalizantes"/>
	<meta name="keywords" content="cursos, fisioterapia, estética, curso, acupuntura, drenagem, massagem, micropuntura, microagulhamento, ventosaterapia, pilates, aurículo, campos, goytacazes, macaé" />
	<meta name="author" content=""/>
	

	<link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" sizes="16x16 32x32 64x64" href="../img/favicon/favicon.ico">
	<link rel="icon" type="image/png" sizes="196x196" href="../img/favicon/favicon-192.png">
	<link rel="icon" type="image/png" sizes="160x160" href="../img/favicon/favicon-160.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96.png">
	<link rel="icon" type="image/png" sizes="64x64" href="../img/favicon/favicon-64.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16.png">
	<link rel="apple-touch-icon" href="../img/favicon/favicon-57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/favicon-114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/favicon-72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/favicon-144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/favicon-60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/favicon-120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/favicon-76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/favicon-152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/favicon-180.png">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="../img/favicon/favicon-144.png">
	<meta name="msapplication-config" content="../img/favicon/browserconfig.xml">

	<meta property="og:title" content="Konfisio"/>
	<meta property="og:description" content="Cursos Profissionalizantes"/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content="https://www.konfisio.com" />
	<meta property="og:image" content="https://www.konfisio.com/img/og.png" />

		
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<link rel="stylesheet" href="../css/animated-min.css">
	<link rel="stylesheet" href="../css/style2021.css">
	<link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet"> 
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,400italic,700' rel='stylesheet' type='text/css'>
	
	<title>Konfisio Cursos Profissionalizantes</title> 

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113649436-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-113649436-1');
	</script>
	
	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '297597444734384');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=297597444734384&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	
</head>

<body>	

	<!-- ##################### -->
	<!-- logo -->
	<div class="container-fluid" style="background: #fff;">
		<div class="row">
			<div class="col-12 col-lg-12">
				<a href="../"><img src="../img/logo-2021.webp" class="img-fluid mx-auto d-block mt-2" style="max-height: 100px;"/></a>
			</div>
		</div>
	</div>
	<!-- logo -->
	
<div class="container-fluid" style="margin-top: 15px;">

	<!--main-->
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-md-8 col-12" style="border: 0px solid #000;">

				<div class="modal-body text-justify">
					<h5 class="modal-title" id="exampleModalLongTitle">CONTRATO DE CURSO PROFISSIONALIZANTE</h5>
					<br/>
					<p>Pelo presente instrumento, a pessoa jurídica Konfisio, CNPJ número 29.228.309/0001-15, com sede na Avenida Gilberto Cardoso, número 44, Bairro: Turf-club, Campos dos Goytacazes/RJ, Cep: 28015-140, representado neste ato, pela sócia proprietária Karina Aparecida Barcelos Teixeira, brasileira, divorciada, inscrita no CPF número 081.036.457-37, portadora do RG número 09.806.793-7 , residente e domiciliada na Rua Doutor Silvio Bastos Tavares, número 348, Parque Rodoviário, Campos dos Goytacazes/RJ, CEP: 28051-250 e de outro lado o contratante cujo os dados serão fornecidos no cadastro do aluno, firmam o presente contrato de curso profissionalizante, conforme as cláusulas a seguir:</p>
					<b>DO OBJETO DO CONTRATO</b>
					<ul>
						<li><b>Cláusula primeira</b> - O presente contrato tem por objeto o curso livre escolhido pelo aluno no sítio da KONFISIO, sendo indispensável a observância das cláusulas deste instrumento para a conclusão da matrícula.
						</li>
					</ul>
					<b>DAS REGRAS PARA MATRÍCULA</b>
					<ul>
						<li><b>Cláusula segunda</b> - Após o envio da ficha de inscrição formulada pelo contratante no sítio da contratada, o contratante deverá efetuar o <b>pagamento da matrícula no mesmo dia ou valor integral para isenção da matrícula.</b>
						</li>
						<li><b>Cláusula terceira</b> - Caso o contratante não efetue o pagamento da matrícula, no prazo mencionado na cláusula anterior, será efetuado o cancelamento da matrícula do aluno.
						</li>
						<li><b>Cláusula quarta</b> - Ficará isento do pagamento da taxa de matrícula, o aluno que efetuar o pagamento do curso profissionalizante à vista, ou efetuar o pagamento ou parcelar o curso baixando o aplicativo Pic Pay, com ordem de pagamento à contratada ou dividir no cartão de crédito, devendo comparecer na sede da contratada, na Avenida Gilberto Cardoso, número 44, Bairro: Turf-club, Campos dos Goytacazes/RJ, Cep: 28015-140, com exceção das matrículas realizadas um dia antes do curso.
						</li>
						<li><b>Cláusula quinta</b> - As inscrições realizadas um dia antes do curso, independente da forma de pagamento não terá a isenção da matrícula.
						</li>
						<li><b>Cláusula sexta</b> - Caso o aluno preencha uma ficha de inscrição e não efetue o pagamento do curso, ele não poderá preencher uma segunda ficha de inscrição, com o beneficio da isenção da matrícula, independente da forma de pagamento que o aluno escolher.
						</li>
						<li><b>Cláusula sétima</b> - Caso a contratada faça a veiculação no seu sítio de alguma promoção de cursos, valerá as regras das promoções. 
						</li>
						<li><b>Cláusula oitava</b> - Caso sejam preenchidas todas as vagas de um curso profissionalizante oferecido pela contratada, o mesmo será avisado na coluna de datas de cursos.
						</li>
						<li><b>Cláusula nona</b> - A matrícula só será válida após o envio da ficha e o pagamento da matrícula, e após o pagamento enviar o comprovante para matriculas@konfisio.com. Ao enviar o comprovante é necessário o nome completo do estudante.
						</li>
						<li><b>Cláusula décima</b> - EEm caso de desistência do curso pelo contratante, só será devolvido 75%  (setenta e cinco por cento) do valor pago. Caso o aluno só tenha quitado a matrícula, o valor correspondente a matrícula não será estornado.
						</li>
						<li><b>Cláusula décima primeira</b> - A contratada reserva-se o direito de cancelar o curso caso não atinja o número mínimo de alunos, devendo estornar o valor integral pago pelo contratante.
						</li>
						<li><b>Cláusula décima segunda</b> - Não será emitido nota fiscal para os cursos profissionalizantes, só sendo emitido para os cursos de pós-graduações que poderá ser abatido no imposto de renda do contratante.
						</li>
						<li><b>Cláusula décima terceira</b> - A desistência do curso deve ser informada com até 48 hs de antecedência, caso contrário não será feito estorno do valor.
						</li>
					</ul>
					As partes elegem o foro da comarca de Campos dos Goytacazes/RJ para dirimir quaisquer controvérsias oriundas deste contrato, ficando excluído qualquer outro por mais privilegiado que seja.
					<br/>
					Campos dos Goytacazes, 
					<?php
					//Data e Hora local
					function getDatetimeContrato() {
						$tz_object = new DateTimeZone('Brazil/East');//date_default_timezone_set('Brazil/East');
						$datetime = new DateTime();
						$datetime->setTimezone($tz_object);
						return $datetime->format('d/m/Y');
					}
					echo $data_contrato = getDatetimeContrato();
					?>.

				</div>

		</div>
	</div>
</div> <!-- ./container -->
	
	<!--.main-->
</div>
	

</div>

	<!-- ##################### -->
	<!--footer-->
	<div class="container-fluid text-center" style="background: #3CA2A2;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 align-self-center">
					<b>Konfisio</b><sup style="font-size: 0.7em;">&reg;</sup> - Cursos de Capacitação
					<br/>
					<span class="copyright">&copy; Todos os direitos reservados</span>
				</div>
				<div class="col-lg-6 align-self-center">
					<img src="../img/frase.webp" class="img-fluid" style="max-height: 70px;"/>
				</div>
			</div>
	</div>
	<!--.footer-->	

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	
</body>
</html>