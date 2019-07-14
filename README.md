<h1>MVC Padrão</h1>
<p>Sistema base para os novos projetos</p>
<a href="#versão-0015">Versão 0.0.15</a>
<a href="#versão-0014">Versão 0.0.14</a>
<a href="#versão-0013">Versão 0.0.13</a>
<a href="#configurações-iniciais">Configurações Iniciais</a>
<hr>
<h2>Versão 0.0.16</h2>
<ul>
	<li>Atualizacao do readme</li>
</ul>
<h2>Versão 0.0.15</h2>
<ul>
	<li>Organizado o arquivo do Banco de Dados para a pasta #BD</li>
</ul>

<h2>Versão 0.0.14</h2>
<ul>
	<li>Exclusão de arquivos inúteis</li>
	<li>Adicionado o .gitignore</li>
</ul>
<p>Script CEP no também foi adicionar ao arquivo script_painel.js (Javascript responsável pelo painel):</p>
<pre>
//Scritp javascritp com ajax para busca de cep
$('#cep').blur(function(){    
   $.ajax({
        url : BASE_URL+'ajax/consultar_cep',  
        type : 'POST', 
        data: 'cep=' + $('#cep').val(), 
        dataType: 'json', 
        success: function(data){
            if(data.sucesso == 1){
                $('#rua').val(data.rua);
                $('#bairro').val(data.bairro);
                $('#cidade').val(data.cidade);
                $('#estado').val(data.estado);
                $('#numero').focus();
            }
        }
   });   
return false;    
})
</pre>
<h2>Versão 0.0.13</h2>

<ul>
	<li>Aprimorado o A busca de CEP para o javascritp do site e do painel</li>
	<li>Adicionado o ajaxController com o action consulta_cep()</li>
	<li>Atualização do ReadME</li>
</ul>
<p>Script CEP no Arquivo script.js:</p>
<pre>
//Scritp javascritp com ajax para busca de cep
$('#cep').blur(function(){    
   $.ajax({
        url : BASE_URL+'ajax/consultar_cep',  
        type : 'POST', 
        data: 'cep=' + $('#cep').val(), 
        dataType: 'json', 
        success: function(data){
            if(data.sucesso == 1){
                $('#rua').val(data.rua);
                $('#bairro').val(data.bairro);
                $('#cidade').val(data.cidade);
                $('#estado').val(data.estado);
                $('#numero').focus();
            }
        }
   });   
	return false;    
	})
</pre>
<p>A consulta fica no arquivo controller ajax (ajaxController.php):</p>
<pre>
public function consultar_cep(){
    $cep = $_POST['cep'];
    $reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
    $dados['sucesso'] = (string) $reg->resultado;
    $dados['rua']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
    $dados['bairro']  = (string) $reg->bairro;
    $dados['cidade']  = (string) $reg->cidade;
    $dados['estado']  = (string) $reg->uf;
    echo json_encode($dados);
}
</pre>	

<h2>Configurações Iniciais:</h2>
<p>1. A configuração é feita no arquivo config.php</p>
<pre>
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "URL_LOCAL");
	$config['dbname'] = 'BANCO_LOCAL';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'USUARIO_LOCAL';
	$config['dbpass'] = 'SENHA_BANCO';
} else {
	define("BASE_URL", "URL_REMOTO");
	$config['dbname'] = 'BANCO_REMOTO';
	$config['host'] = 'HOST';
	$config['dbuser'] = 'USUARIO_REMOTO';
	$config['dbpass'] = 'SENHA_BANCO';
}
</pre>
<P>2. No arquivo environment.php configura o ambiente de desenvolvimento ou produção:</P>
<pre>
	define("ENVIRONMENT", "development");
	//define("ENVIRONMENT", "production");
</pre>
<p>3. Também é necessário ajustar o .htaccess de acordo o servidor. O padrão é esse:</p>
<pre>
	RewriteEngine On
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.*)$ /C02_meusClientes/mvc_padrao/index.php?q=$1 [QSA,L]
	#RewriteRule ^(.*)$ /index.php?q=$1 [QSA,L]
</pre>
<p><strong>OBS:</strong> Deve-se alterar de acordo com a url de desenvolvimento ou de produção.</p>