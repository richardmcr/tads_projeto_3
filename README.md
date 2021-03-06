<h1>Projeto e Modelagem de Sistemas de Software</h1> <br/>
<h1>Dados da Turma</h1> <br/>

- Dia da semana: Quarta <br/>
- Período: Noturno <br/>

<h1>Integrantes</h1>

| RA                  |  NOME COMPLETO                      | CURSO    
| ------------------- | ------------------------------------| ---------
|  3021103570         |  Breno Mendes Moura                 | TADS      
|  3021103830         |  Victor França de Souza             | TADS      
|  3021100282         |  Victor de souza bernardo           | TADS      
|  3021104031         |  Cesar Augusto Martins Vallim       | TADS      
|  3021103269         |  Elias Yuri Yoshy Miyashiro         | TADS      
|  3021100805         |  Richard de Almeida Roberto         | TADS      
<br/>

<h1>Descrição do Projeto</h1>
Tendo como objetivo principal, visamos uma criação de site com base em html. Temos como foco a criação de uma página de feedback de jogos online, no qual, jogadores ao redor do mundo dariam a avaliação pessoal deles como base para futuros jogadores interessados em tal jogo <br/>

<h1>Endereço da Aplicação</h1> <br/>

- Endereço da aplicação : http://tads-1.herokuapp.com/games <br/>

<h1>Instalação</h1>

- Necessário instalar [Composer](https://getcomposer.org) 
- Fazer o clone do projeto
- Renomear o arquivo `.env.example` para `.env`e configurar as variáveis de banco de dados `DB_...`
- Executar o comando `composer install`
- Executar o comando `php artisan key:generate`
- Executar o comando `php artisan migrate`
- Executar o comando `php artisan db:seed`
- Executar o comando `php artisan serve`

<h1>Sincronização de jogos</h1>

- Necessário criar uma conta na [twitch](https://www.twitch.tv)
- Configurar a conta para utilizar a API [IGDB](https://api-docs.igdb.com/#account-creation)
- Executar o comando `php artisan vendor:publish --provider="MarcReichel\IGDBLaravel\IGDBLaravelServiceProvider"`
- Configurar as variáveis `TWITCH_CLIENT_ID` e `TWITCH_CLIENT_SECRET` no arquivo [config/igdb.php](https://github.com/marcreichel/igdb-laravel#basic-installation)
