
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Adicionar Autor</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <?php

                        $id = $this->uri->segment(3);   //verifica se há pedido de edição
                        if(!$id) {
                            $autor = "";             //Caso não tenha envia $autor em branco
                            $button = "Adicionar";  //Altera estado do botão
                            $autor_id = "";
                        }else {
                            $button = 'Atualizar';  //Altera estado do botão
                            $autor_id = $autor[0]->id_autor ;
                        }

                        function valor($name, $autor) {     //Função para verificar se é edição ou novo registro
                            if($autor) { 
                                return $autor[0]->$name;
                            }else  {
                                return set_value($name);
                            }
                        }
                        ?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?= base_url('autor/salvar/' . $id) ?>" method="post" name="autor">
                                        <div class="form-group col-lg-3">
                                            <label>Nome</label>
                                            <input name="nome_autor" id="nome_autor" class="form-control" value="<?= valor('nome_autor', $autor) ?>">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Biografia</label>
                                            <input name="biografia_autor" id="biografia_autor" class="form-control" value="<?= valor('biografia_autor', $autor) ?>">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Contato</label>
                                            <input name="contato_autor" id="contato_autor" class="form-control" value="<?= valor('contato_autor', $autor) ?>">
                                        </div>
                                        
                                        <div class="form-group col-lg-12">
                                            <button type="button" onclick="valida_autor()" class="btn btn-primary"><?= $button ?></button>
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
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Listagem de Autores</h4>
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Biografia</th>
                                            <th>Contato</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($autores as $row): ?>
                                        <tr> 		
                                            <td><?= $i++; ?></td> 
                                            <td><?= $row->nome_autor; ?></td> 
                                            <td><?= $row->biografia_autor; ?></td> 
                                            <td><?= $row->contato_autor; ?></td>                  
                                            <td class="actions">
                                                <a href="<?= base_url('autor/0/' . $row->id_autor) ?>"><i class="fa fa-pencil"></i></a>
                                                <a href="<?= base_url('autor/apagar/0/' . $row->id_autor) ?>" class="delete-row" onclick="return confirm('Deseja realmente excluir este autor?')"><i class="fa fa-trash-o"></i></a>
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
        </div>
    </div>

</div>
