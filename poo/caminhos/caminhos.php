<?php
class caminhos
{
	
public $link;
public function quebralink(String $link)
{
	$arrUrl = explode('/', $link);
	unset($arrUrl[0]);
	$this->link=$arrUrl ;
	return $this->link;
}

public function validacaminho()
{
    $nome=$this->link[1].'.php';
	if (file_exists($nome) ) {
    echo 'Achou o arquivo<br>';
    // include do arquivo
    
    require_once($nome);
    
    if($this->link[2]=="")
    {
		$novo = new $this->link[1];
		$novo->index();
	}else
	{
		$novastring = $this->link[2];
		$novo2 = new $this->link[1];
    
    
    if($this->link[2]!="")
    {
		$novo2->$novastring();
    }else
    {
       $novo2->index(); 
    }
    
 
	}
	} else {
		echo 'arquivo não encontrado';
	}
	}
	public function mostrainstancia()
	{
		echo '<pre>';
		print_r($this->link); 
		echo '</pre>';
	}
	}