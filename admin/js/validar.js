/* Função Valida Livro */
function valida_livro() {
	var titulo = document.getElementById("titulo_livro");
	var descricao = document.getElementById("descricao_livro");
	var preco = document.getElementById("preco_livro");
	var editora = document.getElementById("editora_id");
	var autor = document.getElementById("autor_id");
	var estoque = document.getElementById("estoque_livro");
	var categoria = document.getElementById("categoria_livro");
	
	if (autor.value == "") {
		alert("Autor não informado");
		autor_id.focus();
		return;
	  }
	if (editora.value == "") {
		alert("Editora não informada");
		editora_id.focus();
		return;
	  }
	if (categoria.value == "") {
	  alert("Categoria não informada");
	  categoria_livro.focus();
	  return;
	}
	if (estoque.value == "") {
	  alert("Estoque não informado");
	  estoque_livro.focus();
	  return;
	}
	if (titulo.value == "") {
	  alert("Titulo não informado");
	  titulo_livro.focus();
	  return;
	}
	if (descricao.value == "") {
	  alert("Descrição não informada");
	  descricao_livro.focus();
	  return;
	}
	if (preco.value == "") {
	  alert("Preço não informado");
	  preco_livro.focus();
	  return;
	}
	document.livro.submit()
  }

  /* Função Valida Autor */
function valida_autor() {
	var autor = document.getElementById("nome_autor");
	var biografia = document.getElementById("biografia_autor");
	var contato = document.getElementById("contato_autor");
	
	if (autor.value == "") {
		alert("Nome do autor não informado");
		nome_autor.focus();
		return;
	  }
	if (biografia.value == "") {
		alert("Biografia não informada");
		biografia_autor.focus();
		return;
	  }
	if (contato.value == "") {
	  alert("Contato não informada");
	  contato_autor.focus();
	  return;
	}
	document.autor.submit()
  }

 /* Função Valida Editora */
function valida_editora() {
var editora = document.getElementById("nome_editora");
var site = document.getElementById("site_editora");
var contato = document.getElementById("contato_editora");

if (editora.value == "") {
	alert("Nome da editora não informado");
	nome_editora.focus();
	return;
	}
if (site.value == "") {
	alert("Website não informada");
	site_editora.focus();
	return;
	}
if (contato.value == "") {
	alert("Contato não informada");
	contato_editora.focus();
	return;
}
document.editora.submit()
}

/* Função Valida Login */
function valida_login() {
	var login = document.getElementById("username");
	var senha = document.getElementById("password");
	
	if (login.value == "") {
		alert("Nome do usuário não informado");
		username.focus();
		return;
		}
	if (senha.value == "") {
		alert("Senha não informada");
		password.focus();
		return;
		}
	document.login.submit()
	}