            <!-- Conteúdo -->
            </div>
    </div>

</div>

<!-- jQuery -->
<script src="<?=base_url()?>admin/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>admin/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?=base_url()?>admin/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?=base_url()?>admin/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>admin/js/dataTables/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?=base_url()?>admin/js/startmin.js"></script>

<!-- Validação JavaScript -->
<script src="<?=base_url()?>admin/js/validar.js"></script>

<script type="text/javascript">

    $(document).ready(function()
        {
            $('#dataTables-example').dataTable({
                scrollY: 250,
                paging: false,
                "oLanguage": {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Total de Registros: _TOTAL_",
                    "sInfoEmpty": "Exibindo 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Buscar por:",
                    "sSearchPlaceholder": "Pesquisar...",
                    "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                }
            });

            $('.dataTables_filter input[type="search"]').css(
            {'width':'60%','display':'inline-block', 'margin':'5px 20px 5px 5px'}
        );
        });

</script>

</body>
</html>
