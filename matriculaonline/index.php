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

<body class="body-pad">	

	<!-- Modal Investimentos -->
	<div class="modal fade" id="investimentos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Dados para pagamento</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<?php include "tabeladeprecos.php"; ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>
	<!-- modal Investimentos -->
	
	<!-- Modal termos -->
	<div class="modal fade" id="termos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Termos</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<ul>
					<li>Em caso de desistência, o aluno matriculado nesse curso terá o ônus de 25% sobre o valor  pago a título de taxa administrativa. Caso tenha pago só a matrícula, a mesma não será estornada.</li>
					<li>A Konfisio reserva-se o direito de cancelar o curso caso não atinja o número mínimo de alunos e estornar o valor real ao aluno matriculado.</li>
					<li>Não emitimos nota fiscal. Curso de extensão não é debitado em Imposto de renda, apenas pós-graduações.</li>
					</ul>
					Contatos: (22) 999061385 / matriculas@konfisio.com 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>
	<!-- modal termos -->

	<!-- Modal contrato -->
	<div class="modal fade" id="contrato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">CONTRATO DE CURSO PROFISSIONALIZANTE</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body text-justify">
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
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>
	<!-- modal contrato -->
	
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
	
	<!-- ##################### -->
	<!-- nav -->	
	<div class="container-fluid sticky-top mt-2" style="background-color: #3CA2A2; box-shadow: 0px 2px 2px #ccc;">
		<nav class="navbar container sticky-top navbar-expand-lg navbar-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link menunav page-scroll" href="../">Início</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menunav page-scroll" href="../matriculaonline">Matrícula Online</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menunav page-scroll" href="../#agenda">Cursos Agendados</a>
						</li>					
						<li class="nav-item">
							<a class="nav-link menunav page-scroll" href="../#cursos">Cursos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menunav" href="../cursoonline">Cursos Online</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menunav" href="../ead">Plataforma EAD</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menunav page-scroll" href="../#posgraduacao">Pós-graduação</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menunav page-scroll" href="../#contato">Contato</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menunav page-scroll" href="../clinica">Clínica</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<!-- nav -->

<div class="container-fluid" style="margin-top: 15px;">

	<!--main-->
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-md-8 col-12" style="border: 0px solid #000;">
			<div class="text-justify">
				<span style="font-size: 1.3em; color: #000; font-weight: bold;">Ficha de Matrícula</span>
				<br/>
				<span style="color: blue;">
					A ficha é individual por curso, caso queira se matricular em mais de um curso favor preencher uma ficha por curso.
				</span>
			</div>
			<br/>
			<div class="text-justify">
				<a class="btn btn-danger" role="button" target="_blank" href="https://www.konfisio.com/matriculaonline/informacoes">Dados para pagamento</a>
				<br/>
			 </div>
			 <br/>
			<div class="text-justify" style="background: #FFFF00; padding: 10px;">
				<span style="background: #ffff00; color: black; font-weight: bold;">
					ATENÇÃO ALUNO:
					<br/>
					<span style="color: red; font-weight: bold;">- Após o envio da ficha é obrigatório efetuar o pagamento da matrícula do curso no mesmo dia ou sua ficha será invalidada.</span>
					<br/>
					- Fica isento de pagamento de matrícula o aluno que  efetuar o pagamento integral do Curso a vista ou a prazo segundo termos na tabela. (a prazo está explicado como fazer).
					<br/>
					- Matrículas realizadas um dia antes do Curso não terá isenção de matrícula.
					<br/>
					- Apenas é isento da taxa de matricula de 80,00 o aluno que efetuar o pagamento integral do curso à vista ou a prazo. Caso vc não efetue e preencha nova ficha para o mesmo curso , não haverá mais a possibilidade de isenção de matricula.
					<br/>
					- Em caso de promoções veiculadas em redes sociais fica valendo as regras da mesma em caráter especial.
					<br/>
					Obs.: Ao se esgotarem as vagas para cada curso, o mesmo será avisado na coluna de datas de cursos.
					<br/>
				</span>
			</div>
			<br/>
            <form id="cadaluno" method="post" action="#" class="form-horizontal needs-validation" novalidate role="form" style="border: 0px solid #000;">
				<div class="form-group">
					<div class="row justify-content-center">
						<div class="col-12 col-md-9 my-auto text-center">
							<label for="curso" class="col-sm-9 control-label">Qual curso deseja fazer? <!-- <a href="#" data-toggle="modal" data-target="#cursos">Lista de cursos</a> --></label>
							<input type="text" id="curso" name="curso" placeholder="Digite o nome do curso" class="form-control" required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-12 col-md-5">
							<label for="nome" class="col-sm-3 control-label">Nome</label>
							<input type="text" id="nome" name="nome" placeholder="Nome" class="form-control" required>
						</div>
						<div class="col-12 col-md-7">
							<label for="sobrenome" class="col-sm-3 control-label">Sobrenome</label>
							<input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" class="form-control" required>
						</div>
					</div>
                </div>
                <div class="form-group">
					<div class="row">
						<div class="col-12 col-md-5">
							<label for="cpf" class="col-sm-3 control-label">CPF</label>
							<input type="text" id="cpf" name="cpf" placeholder="CPF" class="form-control" required>
						</div>
						<div class="col-12 col-md-7">
							<label for="email" class="col-sm-3 control-label">Email</label>
							<input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
						</div>
					</div>
                </div>
                <div class="form-group">
					<div class="row">
						<div class="col-12 col-md-4">
							<label for="nascimento" class="col-sm-3 control-label">Nascimento</label>
							<input type="date" id="nascimento" name="nascimento" class="form-control" required>
						</div>
						<div class="col-12 col-md-4">
							<label for="celular" class="col-sm-3 control-label">Celular</label>
							<input type="text" id="celular" name="celular" placeholder="Celular" class="form-control" required>
						</div>
						<div class="col-12 col-md-4">
							<label for="telefone" class="col-sm-4 control-label">Telefone</label>
							<input type="text" id="telefone" name="telefone" placeholder="Telefone" class="form-control">
						</div>
					</div>
                </div>
                <div class="form-group">
					<div class="row">
						<div class="col-12 col-md-4">
							<label for="profissao" class="col-sm-3 control-label">Profissão</label>
							<input type="text" id="profissao" name="profissao" placeholder="Profissão" class="form-control">
						</div>
						<div class="col-12 col-md-4">
							<label for="carteiraprofissional" class="col-sm-12 control-label">Carteira Profissional</label>
							<input type="text" id="carteiraprofissional" name="carteiraprofissional" placeholder="Carteira Profissional" class="form-control">
						</div>             
						<div class="col-12 col-md-4">
							<label class="control-label col-sm-3">Gênero</label>
							<select class="form-control" id="genero" name="genero" required>
								<option></option>
								<option>Feminino</option>
								<option>Masculino</option>
							</select>
						</div>
					</div>
                </div>
                <div class="form-group">
					<div class="row">
						<div class="col-12 col-md-3">
							<label for="cep" class="col-sm-3 control-label">CEP</label>
							<input type="text" id="cep" name="cep" placeholder="CEP" class="form-control" required>
						</div>
						<div class="col-12 col-md-9">
							<label for="endereço" class="col-sm-3 control-label">Endereço</label>
							<input type="text" id="endereco" name="endereco" placeholder="Endereço" class="form-control" required>
						</div>
					</div>
                </div>
                <div class="form-group">
					<div class="row">
						<div class="col-12 col-md-5">
							<label for="bairro" class="col-sm-3 control-label">Bairro</label>
							<input type="text" id="bairro" name="bairro" placeholder="Bairro" class="form-control" required>
						</div>
						<div class="col-12 col-md-5">
							<label for="cidade" class="col-sm-3 control-label">Cidade</label>
							<input type="text" id="cidade" name="cidade" placeholder="Cidade" class="form-control" required>
						</div>
						<div class="col-12 col-md-2">
							<label for="uf" class="col-sm-3 control-label">UF</label>
							<input type="text" id="uf" name="uf" placeholder="UF" class="form-control" required>
						</div>
					</div>
                </div>
				<br/>
				<div class="form-group">
					<b>Investimento:</b> <a href="#" data-bs-toggle="modal" data-bs-target="#investimentos">Clique aqui</a> para visualizar as opções.
				</div>
				<br/>
				<div class="form-group text-justify">
					<b>Validação da Matrícula:</b> a matrícula só será válida após o envio da ficha e o pagamento da matrícula, e após o pagamento enviar o comprovante para matriculas@konfisio.com. Ao enviar o comprovante é necessário o nome completo do estudante.
				</div>
				<br/>
				<div class="text-justify">
					<span style="color: red; font-weight: bold; font-size: 1.5em;">
						Favor ler atentamente o contrato, as regras e os termos de matrícula. E  só enviar a ficha se realmente tiver intenção de validar sua matrícula efetuando o pagamento.
						<br/><br/>
					</span>
				</div>
				<br/>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="aceito" name="aceito" class="form-control" required>
					<label class="form-check-label" for="aceito"><b>Li e aceito o contrato.</b> <a href="#" data-bs-toggle="modal" data-bs-target="#contrato">Clique aqui</a> para ler.</label>
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="concordo" name="concordo" class="form-control" required>
					<label class="form-check-label" for="concordo"><b>Li e concordo com os termos.</b> <a href="#" data-bs-toggle="modal" data-bs-target="#termos">Clique aqui</a> para ler.</label>
				</div>
                <div class="form-group">
					<div class="row">
						<div class="col-12 col-md-12">
							<button id="cadastrar" type="submit" class="btn btn-primary">
								Enviar
							</button>
						</div>
					</div>
                </div>
            </form> <!-- /form -->
			<br/><br/>
		</div>
	</div>
		<!-- Modal Erro-->
		<div class="modal fade" id="modalerror" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header alert alert-danger">
						<h5 class="modal-title">Atenção!</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<p>Preencha todos os campos obrigatórios marcados em <span style="font-weight: bold; color: #DC143C;">vermelho</span>. E marque a opção <i class='fas fa-check-square modalbutton' aria-hidden='true'></i> concordando com os termos.</p>
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal CEP -->
		<div class="modal fade" id="modalcep" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header alert alert-danger">
						<h5 class="modal-title">Erro!</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<p>O CEP digitado não foi localizado. Tente novamente.</p>
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
					</div>
				</div>
			</div>
		</div>		

		<!-- Modal Confirma-->
		<div class='modal fade' id='modalconfirma' role='dialog'>
			<div class='modal-dialog modal-dialog-centered'>
				<!-- Modal content-->
				<div class='modal-content'>
					<div class='modal-header alert alert-info'>
						<h5 class='modal-title'>Confirmar?</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class='modal-body'>
						<p class="text-justify" style="background: yellow; padding: 10px;">
							Não complete a inscrição se não deseja efetuar o pagamento da matrícula ou do valor total do curso hoje. A não efetivação fará sua ficha ser excluída e sua vaga será disponibilizada a outro aluno.
							Todo curso que o aluno se matricular e não efetivar os devidos pagamentos, em uma segunda tentativa de inscrição para o mesmo curso não será isento da matrícula mais.						
						</p>
						<p>Deseja confirmar a inscrição?</p>
						<button id="sim" type='button' class='btn btn-success'>
							<i class='fas fa-check modalbutton' aria-hidden='true'></i>
							Sim
						</button>
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">
							<i class='fas fa-times modalbutton' aria-hidden='true'></i>
							Voltar
						</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- marca os campos obrigatórios ao tentar cadastrar sem preenche-los-->
		<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
		  'use strict';
		  window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
			  form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
				  event.preventDefault();
				  $("#modalerror").modal("show");
				  event.stopPropagation();
				}
				form.classList.add('was-validated');
				if (form.checkValidity() === true) {
					event.preventDefault();
					event.stopPropagation();
					$("#modalconfirma").modal("show");
				}
			  }, false);
			});
		  }, false);
		})();
		</script>
		
		<!-- marca os campos obrigatórios ao tentar cadastrar sem preenche-los-->
		<script>
			var form = document.getElementById("cadaluno");
			document.getElementById("sim").addEventListener("click", function () {
			  form.submit();
			});
		</script>
		
	</div>
</div> <!-- ./container -->

<!-- Modal Sucesso-->
<div class='modal fade' id='modalsucesso' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
	<div class='modal-dialog modal-dialog-centered'>
		<div class='modal-content'>
			<div class='modal-header alert alert-success'>
				<h5 class='modal-title' id='staticBackdropLabel'>Inscrição realizada com sucesso!</h5>
			</div>
			<div class='modal-body'>
				<p>
					<b>Número de inscrição:</b> ".$num_inscricao." <br/>
					<b>Aluno(a):</b> ".$nome." ".$sobrenome." <br/>
				</p>
				<p class='text-justify'>
					Em instantes um e-mail será enviado para <b>".$email."</b> com todas informações que você teve acesso durante o processo de inscrição. <span style='color: red; font-weight: bold;'>Faça o pagamento e responda o e-mail anexando o comprovante para poder confirmar sua matrícula.</span> Caso não localize o e-mail, verifique sua caixa de spam. Você também pode enviar o comprovante para matriculas@konfisio.com.
				</p>
			</div>
			<div class='modal-footer'>
				<a href='../'  class='modalbutton'>
					<button name='sair' type='button' class='btn btn-success'>
						<i class="fas fa-check"></i>
						Ok
					</button>
				</a>
			</div>
		</div>
	</div>
</div>
	
<!--.main-->

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

	<script src="../js/jquery.maskedinput.min.js"></script>
	<script type='text/javascript'>
		$(document).ready(function(){
			$('#cpf').mask('999.999.999-99');
			$('#celular').mask('(99)9-9999-9999');
			$('#telefone').mask('(99)9999-9999');
			$('#cep').mask('99999-999');
		});
	</script>
	<!-- CEP (preenche endereço automático) -->
	<script src="../js/cep.js"></script>
	
	<script type="text/javascript">
		$('body').on('show.bs.modal', function () {
			$('.sticky-top').css('margin-left', '-=0px');
			$('.body-pad').css('margin-left', '-=0px');
		});
		$('body').on('hidden.bs.modal', function () {
			$('.sticky-top').css('margin-left', 'auto');
			$('.body-pad').css('margin-left', 'auto');
		});
	</script>

<?php 
if (isset($_POST["nome"])) {
	//Armazenando os dados do formulário em variáveis
	$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
	$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
	$curso = isset($_POST['curso']) ? $_POST['curso'] : '';
	$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$nascimento = isset($_POST['nascimento']) ? $_POST['nascimento'] : '';
	$celular = isset($_POST['celular']) ? $_POST['celular'] : '';
	$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
	$profissao = isset($_POST['profissao']) ? $_POST['profissao'] : '';
	$carteiraprofissional = isset($_POST['carteiraprofissional']) ? $_POST['carteiraprofissional'] : '';
	$genero = isset($_POST['genero']) ? $_POST['genero'] : '';
	$cep = isset($_POST['cep']) ? $_POST['cep'] : '';
	$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';
	$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';
	$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
	$uf = isset($_POST['uf']) ? $_POST['uf'] : '';

	//Gerando o número de inscrição
	date_default_timezone_set('Brazil/East');//date_default_timezone_set('Brazil/East');								
	$dia = date('d');
	$mes = date('m');
	$ano = date('Y');
	$anom = date('y');
	$hora = date('H');
	$minuto = date('i');
	$idcpf = substr($cpf,0,3);
	//ano + mes + 3 primeiros dígitos do cpf + soma dia, mês e ano + soma hora e minuto
	$num_inscricao = "".$anom."".$mes."".$idcpf."".$dia+$mes+$anom."".$hora+$minuto."";
	
	//Data e Hora local
	function getDatetimeNow() {
		$tz_object = new DateTimeZone('Brazil/East');//date_default_timezone_set('Brazil/East');
		$datetime = new DateTime();
		$datetime->setTimezone($tz_object);
		return $datetime->format('d-m-Y H:i:s');
	}
	$data_atual = getDatetimeNow();
	
	//Conexão com o BD
	$PDO = db_connect_konfisio();

		//Inserindo no banco
		$sql = "INSERT INTO matriculaonline (num_inscricao, curso, nome, sobrenome, cpf, email, data_nascimento, celular, telefone, 
		profissao, carteiraprofissional, genero, cep, endereco, bairro, cidade, uf) 
		VALUES (:num_inscricao, :curso, :nome, :sobrenome, :cpf, :email, :data_nascimento, :celular, :telefone, :profissao, 
		:carteiraprofissional, :genero, :cep, :endereco, :bairro, :cidade, :uf)";
		$stmt = $PDO->prepare( $sql );
		$stmt->bindParam( ':num_inscricao', $num_inscricao );
		$stmt->bindParam( ':curso', $curso );
		$stmt->bindParam( ':nome', $nome );
		$stmt->bindParam( ':sobrenome', $sobrenome );
		$stmt->bindParam( ':cpf', $cpf );
		$stmt->bindParam( ':email', $email );
		$stmt->bindParam( ':data_nascimento', $nascimento );
		$stmt->bindParam( ':celular', $celular );
		$stmt->bindParam( ':telefone', $telefone );
		$stmt->bindParam( ':profissao', $profissao );
		$stmt->bindParam( ':carteiraprofissional', $carteiraprofissional );
		$stmt->bindParam( ':genero', $genero );
		$stmt->bindParam( ':cep', $cep );
		$stmt->bindParam( ':endereco', $endereco );
		$stmt->bindParam( ':bairro', $bairro );
		$stmt->bindParam( ':cidade', $cidade );
		$stmt->bindParam( ':uf', $uf );

		$result = $stmt->execute();
		 
		if ( ! $result )
		{
			var_dump( $stmt->errorInfo() );
			exit;
		} else {
			
			//Envia ficha de inscrição por e-mail
			ini_set('display_errors', 1);
			error_reporting(E_ALL);
			$to = "matriculas@konfisio.com";
			$subject = "Nova inscrição ".$num_inscricao." - ".$nome."";
			$message = "<h3><b>Nova inscrição online realizada.</b></h3>
							<br/><br/>
							<b>Número de inscrição:</b> ".$num_inscricao."<br/>
							<b>Nome:</b> ".$nome." ".$sobrenome."<br/>
							<b>Curso:</b> ".$curso."<br/>
							<b>CPF:</b> ".$cpf."<br/>
							<b>E-mail:</b> ".$email."<br/>
							<b>Data de nascimento:</b> ".date('d/m/Y', strtotime($nascimento))."<br/>
							<b>Celular:</b> ".$celular."<br/>
							<b>Telefone:</b> ".$telefone."<br/>
							<b>Profissão:</b> ".$profissao."<br/>
							<b>Carteira Profissional:</b> ".$carteiraprofissional."<br/>
							<b>Gênero:</b> ".$genero."<br/>
							<b>CEP:</b> ".$cep."<br/>
							<b>Endereço:</b> ".$endereco."<br/>
							<b>Bairro:</b> ".$bairro."<br/>
							<b>Cidade:</b> ".$cidade."<br/>
							<b>UF:</b> ".$uf."<br/>
							<b>Data/Hora:</b> ".date('d/m/Y H:i:s', strtotime($data_atual))."<br/>
							<a href='http://www.konfisio.com/sys/system/imprimir.php?cod=maton&id=".$num_inscricao."'>Ver ficha</a>
						";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: Konfisio Online <matriculas@konfisio.com>' . "\r\n";
			$headers .= "Cc: konfisio@gmail.com \r\n"; 
			mail($to, $subject, $message, $headers);

			//Envia informações para o aluno
			ini_set('display_errors', 1);
			error_reporting(E_ALL);
			$to = $email;
			$subject = "Nova inscrição ".$num_inscricao." - ".$nome."";
			$message = "
						<img src='http://www.konfisio.com/img/logo-2021.webp' style='max-height: 100px;'/>				
						<br/>
						<hr/>
						<b>Olá, seja bem-vindo(a).</b>
						<br/>
						Você realizou uma inscrição na <b>Konfisio Cursos de Capacitação</b>.
						<br/><br/>
						Número de inscrição: ".$num_inscricao."<br/>
						Nome: ".$nome." ".$sobrenome."<br/>
						Curso: ".$curso."<br/>
						<br/>
						<span style='color: red'>Responda este e-mail anexando o comprovante de pagamento para validar sua matrícula. Fique atento as formas de pagamento. NÃO HÁ RESERVA DE VAGA. </span>
						<br/>
						<a href='https://www.konfisio.com/matriculaonline/informacoes'>Clique aqui</a> para visualizar informações sobre formas de pagamento.				
						<br/><br/>
						<b>Em caso de dúvida responda este e-mail ou entre em contato (22) 999329536.</b>
						";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: Konfisio Online <matriculas@konfisio.com>' . "\r\n";
			mail($to, $subject, $message, $headers);
			
					echo "
					<!-- Modal Sucesso-->
					<div class='modal fade' id='modalsucesso' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
						<div class='modal-dialog modal-dialog-centered'>
							<div class='modal-content'>
								<div class='modal-header alert alert-success'>
									<h5 class='modal-title' id='staticBackdropLabel'>Inscrição realizada com sucesso!</h5>
								</div>
								<div class='modal-body'>
									<p>
										<b>Número de inscrição:</b> ".$num_inscricao." <br/>
										<b>Aluno(a):</b> ".$nome." ".$sobrenome." <br/>
									</p>
									<p class='text-justify'>
										Em instantes um e-mail será enviado para <b>".$email."</b> com todas informações que você teve acesso durante o processo de inscrição. <span style='color: red; font-weight: bold;'>Faça o pagamento e responda o e-mail anexando o comprovante para poder confirmar sua matrícula.</span> Caso não localize o e-mail, verifique sua caixa de spam. Você também pode enviar o comprovante para matriculas@konfisio.com.
									</p>
								</div>
								<div class='modal-footer'>
									<a href='../'  class='modalbutton'>
										<button name='sair' type='button' class='btn btn-success'>
											<i class='fas fa-check'></i>
											Ok
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
					<script type='text/javascript'>
						$(window).on('load', function() {
							$('#modalsucesso').modal('show');
						});
					</script>					
					";
		}
}
?>

</body>
</html>