
$prova = $this->provas_modal->getProva(1);

$prova = array(
	'titulo'
	'ano'
	'instituicao'
	'questoes[]' = array(
		'tipo'
		'texto'
		'imagem'
		'alternativas[]' = array()
	)
);


function getProva($id){
	
	$prova = $this->db->provaPorId($id);

	$prova->questoes = $this->db->getQuestosPorProva($prova->id);


	foreach($prova->questoes as $i => $questao)
		echo $prova->questoes[i]->alternativas = $this->getAlternativasPorQuestao($questao->id);

	return $prova;

}


