<h2>Deploy do crud</h2>
<ol>
  <li>Rodar o comando 'docker-compose up -d --build'</li>
  <li>Trazer as dependencias do composer com 'docker-compose run composer install'</li>
  <li>Entrar na pasta app e copiar o arquivo '.env.example' para um '.env' e verificar se as configurações de banco estão ok</li>
  <li>gerar a chave 'docker-compose run artisan key:generate'</li>
  <li>dar permissão no diretório app do projeto 'chmod -R 777 app/'</li>
  <li>rodar as migrations 'docker-compose run artisan migrate'</li>
  <li>Popular o banco 'docker-compose run artisan db:seed'</li>
</ol> 

<h2>Explicando o Dockerfile e o docker-compose.yml</h2>
<ol>
  <li>O Dockerfile especifica a imagem a ser utilizada no container do php e traz as dependências plugins e libs necessários do php</li>
  <li>O docker-compose.yml automatiza o deploy de todos containers necessários e os mapeia como serviços, também foi criado um volume para a aplicação em /app e um volume para o banco de dados em /db</li>
  <li>Também posso definir uma ordem de "subida" dos containeres com o depends on</li>
</ol> 
