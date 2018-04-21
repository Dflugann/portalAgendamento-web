,<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-mail</title>
</head>
<body>
	<h2>Olá {{$dados['nome_visitante']}}</h2>
	<p>Visita agendada: {{$dados['date']}} , Hora entrada {{($dados['starttime'])}} e hora saida: {{($dados['endtime'])}}</p>
	<p><strong>Autorizado por: {{$dados['nome_auth']}}</strong></p>
	<img src="http://flaviosantos.xyz/public/{{$dados['imagem']}}">
</body>
</html>