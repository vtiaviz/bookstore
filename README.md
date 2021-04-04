# BookStore Web

![](../img/logo.png)

A BookStore Web é o sistema minimalista de presença digital composto por website e área administrativa da livraria ficticia BookStore. Lá é possivel realizar a gestão de cadastro de livros, autores e editoras para exibição no website. 
O website exibe todos os livros disponiveis na livraria, com as cores das capas variando de acordo com a categoria do livro. Exibe também informações institucionais sobre a livraria BookStore, sua categorias, autores, editoras e contato.

# Demo:
[link](https://webbookstoreapp.000webhostapp.com/)

# Instalação:
- Descompacte o conteúdo deste zip no webserver de sua preferência
- Crie um banco de dados chamado 'bd_bookstore' no phpmysql
- Importe o arquivo 'bd_bookstore.sql', que encontra-se na pasta 'sql', para o banco 'bd_bookstore'

# Uso
- Acesse o Website da livraria pelo navegador no endereço 'https://localhost/bookstore'
- Acesse a Área Administrativa da livraria pelo navegador no endereço 'https://localhost/bookstore/acesso'

![](../img/login.jpg)

- Informe os dados usuário: 'admin' e senha: '1234'e clique em 'Login'

![](../img/web.jpg)

- Na página inicial é possivel visualizar, cadastrar, editar e apagar um livro (CRUD).

![](../img/livro.jpg)

- Também é possivel cadastrar um novo autor e/ou editora na página inicial via modal.

![](../img/modal.jpg)

- Na página 'Autor' é possivel visualizar, cadastrar, editar e apagar um autor (CRUD).

![](../img/autor.jpg)

- Na página 'Editora' é possivel visualizar, cadastrar, editar e apagar uma editora (CRUD).

![](../img/editora.jpg)

- No link 'Sair' é possivel sair da área administrativa e retornar à página de Login.

# Funcionalidades:
- Frontend básica
- Painel de administração
- Sistema de login

# Tecnologias

## Frontend

- Bootstrap 3
- Font Awesome
- jQuery
- CSS personalizado em custom.css
- Uso do Tema Bootstrap Carroussel

## Login

- Autenticação minimalista de usuário e senha pré-cadastrado no banco de dados.

## Admin

- Uso do Framework CodeIgniter
- Uso do Tema Bootstrap Starmin
- Uso de Modal em JavaScript.

## Backend

- CodeIgniter 3
- PHP 7.1.33
- MySQL 5.7.31

# License
MIT
