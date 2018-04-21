<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>E-mail</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body style="margin: 0; padding: 0;">
 <table align="center" border="1" cellpadding="0" cellspacing="0" width="70%">
	<tr>
		<td align="center" bgcolor="#5b5b5d" style="padding: 40px 0 30px 0;">
		<img src="{{asset('img/logo-gdigital.gif')}}" alt="QRcode_{{$dados['nome_visitante']}}" width="298" height="115" style="display: block;" />
		</td>
	</tr>
		<tr>
			<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
				<table border="1" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td>
						Olá <strong>{{$dados['nome_visitante']}}</strong>
						</td>
					</tr>
					<tr>
						<td style="padding: 20px 0 30px 0">
						Sua entrada no condominio BUTANTÂ foi autorizado pelo condomino <strong>{{$dados['nome_auth']}}</strong> <br>
						Data: 
						<?php 
						setlocale(LC_ALL, 'pt_BR');
						date_default_timezone_set('America/Sao_Paulo');
						echo utf8_encode($dados['date'] = strftime('%A, %d de %B de %Y', strtotime($dados['date'])))?> <br>
						hora entrada: {{($dados['starttime'])}} <br>
						Hora saida: {{($dados['endtime'])}} <br><br>

						<strong>Obs: QRcode em anexo para validação da sua entrada.</strong>
						</td>
					</tr>
					<tr>
						<tr>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<td bgcolor="#5b5b5d" style="padding: 30px 30px 30px 30px; color: #fff">
									Rua Alvarenga, 718, Sala 11 - Butantã
									São Paulo – SP,  CEP: 05509-001 - condominio Butantã.
								</td>				
							</table>
						</tr>
					</tr>
				</table>
			</td>
		</tr>
		
 </table>
</body>


</html>