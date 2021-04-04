            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Adicionar Livro</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <?php

                        $id = $this->uri->segment(3);   //verifica se há pedido de edição
                        if(!$id) {
                            $livro = "";             //Caso não tenha envia $livro em branco
                            $button = "Adicionar";  //Altera estado do botão
                            $editora_id = "";
                            $autor_id = "";
                        }else {
                            $button = 'Atualizar';  //Altera estado do botão
                            $editora_id = $livro[0]->editora_id ;
                            $autor_id = $livro[0]->autor_id ;
                        }

                        function valor($name, $livro) {     //Função para verificar se é edição ou novo registro
                            if($livro) { 
                                return $livro[0]->$name;
                            }else  {
                                return set_value($name);
                            }
                        }
                        ?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?= base_url('livro/salvar/' . $id) ?>" method="post" name="livro">
                                        <div class="form-group col-lg-2">
                                            <label>Autor</label>
                                            <select name="autor_id" id="autor_id" class="form-control">
                                                <option value="">Selecione...</option>
                                                <?php foreach ($autores as $row): ?>
                                                <option value="<?= $row->id_autor ?>" <?= ($row->id_autor == $autor_id) ? 'selected' : '' ?>><?= $row->nome_autor ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-1">
                                            <button type="button" class="btn btn-info form-control mt3" data-toggle="modal" data-target="#modalAutor">Novo+</button>
                                            
                                        </div>
                                        <div class="form-group col-lg-2">
                                            <label>Editora</label>
                                            <select name="editora_id" class="form-control" id="editora_id">
                                                <option value="">Selecione...</option>
                                            <?php foreach ($editoras as $row): ?>
                                                <option value="<?= $row->id_editora ?>" <?= ($row->id_editora == $editora_id) ? 'selected' : '' ?>><?= $row->nome_editora  ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-1">
                                            <button type="button" class="btn btn-info form-control mt3" data-toggle="modal" data-target="#modalEditora">Novo+</button>
                                            
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Categoria</label>
                                            <select name="categoria_livro" class="form-control" id="categoria_livro">
                                                <option value="">Selecione...</option>
                                                <option value="<?= $var = 1 ?>" <?= ($var == valor('categoria_livro', $livro)) ? 'selected' : '' ?>>Desenvolvimento Pessoal</option>
                                                <option value="<?= $var = 2 ?>" <?= ($var == valor('categoria_livro', $livro)) ? 'selected' : '' ?>>Ficção</option>
                                                <option value="<?= $var = 3 ?>" <?= ($var == valor('categoria_livro', $livro)) ? 'selected' : '' ?>>Romance</option>
                                                <option value="<?= $var = 4 ?>" <?= ($var == valor('categoria_livro', $livro)) ? 'selected' : '' ?>>Técnico</option>
                                                <option value="<?= $var = 5 ?>" <?= ($var == valor('categoria_livro', $livro)) ? 'selected' : '' ?>>Drama</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Estoque</label>
                                            <input name="estoque_livro" id="estoque_livro" class="form-control" value="<?= valor('estoque_livro', $livro) ?>">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Titulo</label>
                                            <input name="titulo_livro" id="titulo_livro" class="form-control" value="<?= valor('titulo_livro', $livro) ?>">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Descrição</label>
                                            <input name="descricao_livro" id="descricao_livro" class="form-control" value="<?= valor('descricao_livro', $livro) ?>">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Preço</label>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">R$</span>
                                                <input name="preco_livro" id="preco_livro" type="text" class="form-control" value="<?= valor('preco_livro', $livro) ?>">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <a href="javascript:valida_livro()" class="btn btn-primary"><?= $button ?></a>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- Modal Autor-->
            <div class="modal fade" id="modalAutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Adicionar Autor</h4>
                        </div>
                        <form action="<?= base_url('autor/salvar') ?>" method="post" name="autor">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Nome</label>
                                        <input name="nome_autor" id="nome_autor" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Biografia</label>
                                        <textarea name="biografia_autor" id="biografia_autor" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Contato</label>
                                        <input name="contato_autor" id="contato_autor" class="form-control">
                                    </div>
                                    <input type="hidden" name="landing" value="<?= $this->uri->segment(1)?>">
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <a href="javascript:valida_autor()" type="button" class="btn btn-primary">Salvar</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal autor-->
            <!-- Modal Editora-->
            <div class="modal fade" id="modalEditora" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Adicionar Editora</h4>
                        </div>
                        <form action="<?= base_url('editora/salvar') ?>" method="post" name="editora">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Nome</label>
                                        <input name="nome_editora" id="nome_editora" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Website</label>
                                        <input name="site_editora" id="site_editora" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Contato</label>
                                        <input name="contato_editora" id="contato_editora" class="form-control">
                                    </div>
                                    <input type="hidden" name="landing2" value="<?= $this->uri->segment(1)?>">
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <a href="javascript:valida_editora()" type="button" class="btn btn-primary">Salvar</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal editora-->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Listagem de Livros</h4> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Autor</th>
                                            <th>Editora</th>
                                            <th>Categoria</th>
                                            <th>Preço</th>
                                            <th>Estoque</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($livros as $row): ?>
                                            <?php       //Verifica a categoria do livro
                                                if($row->categoria_livro == '1'){ $categoria = 'Desenvolvimento Pessoal'; }
                                                elseif($row->categoria_livro == '2'){ $categoria = 'Ficção'; }
                                                elseif($row->categoria_livro == '3'){ $categoria = 'Romance'; }
                                                elseif($row->categoria_livro == '4'){ $categoria = 'Técnico'; }
                                            ?>
                                            <tr> 
                                                <td><?= $row->titulo_livro; ?></td> 
                                                <td><?= $row->nome_autor; ?></td> 
                                                <td><?= $row->nome_editora; ?></td> 
                                                <td><?= $categoria; ?></td> 
                                                <td>R$ <?= $row->preco_livro; ?></td> 
                                                <td><?= $row->estoque_livro; ?></td>                      
                                                <td class="actions">
                                                    <a href="<?= base_url('livro/0/' . $row->id_livro) ?>"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?= base_url('livro/apagar/0/' . $row->id_livro) ?>" class="delete-row" onclick="return confirm('Deseja realmente excluir este livro?')"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
