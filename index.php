<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head>
<body>
	<table border=1>
	
		<thead>
			<tr>
				<th>Num</th>
				<th>Inscrição</th>
				<th>Nome</th>                                
				<th>Cargo / Perfil / Localidade de Lotação</th>
				<th>Cidade de Prova</th>
				<th>Língua estrangeira</th>
			</tr>
		</thead>
		
		<tbody>
<?php
include_once('simple_html_dom.php');

$aux2 = 0;

for ($i = 1; $i <= 301; $i++) {
	
	unset($articles);
	$html = file_get_html('http://www.cetroconcursos.org.br/Projetos/deferidosDataPrev.aspx?pag='.$i);
	$aux = 0;

	foreach($html->find('table.table') as $article) {
		for ($j = 1; $j <= 100; $j++) {
			echo("\n\t\t<tr>\n");
			echo("\t\t\t<td>".($j+($aux2*100))."</td>\n");
			for ($k = 1; $k <= 5; $k++)
				echo("\t\t\t<td>".$article->find('span', $aux++)->plaintext."</td>\n");
			echo("\t\t</tr>");
		}
	}	
	
	$aux2++;
}
?>

		</tbody>
	</table>
</body>
</html>