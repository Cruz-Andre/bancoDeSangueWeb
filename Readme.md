# bancoDeSangueWeb

<h3>Este projeto é uma Aplicação WEB do bancoDeSangue feito em JAVA e está em desenvolvimento para o PI-II.</h3>
<h3>Módulo D - Assistente de Desenvolvimento de Aplicativos Computacionais II - PI II - SenacTech.</h3>
<h3>O objetivo é facilitar o CRUD da aplicaçãoWeb para os funcionários cadastradores.</h3>
<h3>O projeto fornece o estoque de bolsas de sangue por tipo sanguíneo, plasma, e informações sobre os doadores.</h3>
<h3>Previsão de conclusão e entrega: 25 de junho de 2024</h3>
<h3>Autor: André Cruz</h3>

![](https://progress-bar.dev/100/?title=Overal%20Progress)
<br>

<br>

<h3>A aplicação web possui(rá) as seguintes funcionalidades:</h3>

- Página inicial com as informações dos estoques de bolsas de sangue por tipo sanguíneo em cada hospital ![](https://progress-bar.dev/100/)
- Página inicial de usuário logado com links para as páginas de manutenção ![](https://progress-bar.dev/100/)
- Página de cadastro de usuários/doadores ![](https://progress-bar.dev/100/)
- Página de login de usuários ![](https://progress-bar.dev/100/)
- Página de Manutenção Tipo Sanguíneo ![](https://progress-bar.dev/100/)
- Página de Manutenção de Plasma ![](https://progress-bar.dev/100/)
- Página de Manutenção de usuários/doadores ![](https://progress-bar.dev/100/)
- Back-End CRUD ![](https://progress-bar.dev/100/)
- ~~Agendamento de doação de sangue~~

<h3>O projeto está em desenvolvimento utilizando as seguintes tecnologias:</h3>

- HTML & CSS
- JavaScript
- PHP
- SQL
- ~~BootStrap 5~~
- ~~TailWindCSS~~
- ~~REACT? I hope not!~~
- ~~Java~~

# TO-DO
- ~~Novo logotipo;~~ :white_check_mark:
- ~~Novo design e substituir o bootstrap/tailwind por CSS vanila~~ :white_check_mark:
- ~~As funcionalidades descritas acima.~~ :white_check_mark:

# Como rodar o projeto
- Execute o XAMPP e inicie Apache e MySQL;
- Na maioria dos casos não é necessário reconfigurar o arquivo conexao.php;
- No seu SGDB de preferência abra o arquivo "bdSangueWEB comandos SQL.sql" e execute o scritpt para montar o banco;
- Copie a pasta do repositório para dentro do htdocs do xampp, geralmente: c:\xampp\htdocs
- Necessário mudar o endereço do fetch nos arquivos:
- - preencheTabelaDoadores.js
- - preencheTabelaPlasma.js
- - preencheTabelaTipoSangue.js

    #### Exemplo: apague apenas o "inf4n221/":
    ```
    function preencheTabelaDoadores() {
        de:
        fetch('http://localhost/inf4n221/bancoDeSangueWeb/php/selectBD/buscaDoadores.php')
        
        para:
        fetch('http://localhost/bancoDeSangueWeb/php/selectBD/buscaDoadores.php')
    
- No navegador digite: localhost\bancoDeSangueWeb
