
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Adicionar Editora</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <?php

                        $id = $this->uri->segment(3);   //verifica se há pedido de edição
                        if(!$id) {
                            $editora = "";             //Caso não tenha envia $editora em branco
                            $button = "Adicionar";  //Altera estado do botão
                            $editora_id = "";
                        }else {
                            $button = 'Atualizar';  //Altera estado do botão
                            $editora_id = $editora[0]->id_editora ;
                        }

                        function valor($name, $editora) {     //Função para verificar se é edição ou novo registro
                            if($editora) { 
                                return $editora[0]->$name;
                            }else  {
                                return set_value($name);
                            }
                        }
                        ?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form  action="<?= base_url('editora/salvar/' . $id) ?>" method="post" name="editora">
                                        <div class="form-group col-lg-4">
                                            <label>Nome</label>
                                            <input name="nome_editora" id="nome_editora" class="form-control" value="<?= valor('nome_editora', $editora) ?>">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label>Website</label>
                                            <input name="site_editora" id="site_editora" class="form-control" value="<?= valor('site_editora', $editora) ?>">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label>Contato</label>
                                            <input name="contato_editora" id="contato_editora" class="form-control" value="<?= valor('contato_editora', $editora) ?>">
                                        </div>
                                        
                                        <div class="form-group col-lg-12">
                                            <button type="button" onclick="valida_editora()" class="btn btn-primary"><?= $button ?></button>
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
                            <h4>Listagem de Editoras</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Website</th>
                                            <th>Contato</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($editoras as $row): ?>
                                            <tr> 		
                                                <td><?= $i++; ?></td> 
                                                <td><?= $row->nome_editora; ?></td> 
                                                <td><?= $row->site_editora; ?></td> 
                                                <td><?= $row->contato_editora; ?></td>                  
                                                <td class="actions">
                                                    <a href="<?= base_url('editora/0/' . $row->id_editora) ?>"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?= base_url('editora/apagar/0/' . $row->id_editora) ?>" class="delete-row" onclick="return confirm('Deseja realmente excluir esta editora?')"><i class="fa fa-trash-o"></i></a>
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
       