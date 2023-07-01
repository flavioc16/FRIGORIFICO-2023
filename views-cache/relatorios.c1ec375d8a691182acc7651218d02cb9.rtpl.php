<?php if(!class_exists('Rain\Tpl')){exit;}?>            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">  
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary upper">Relatórios</h6>
                            </div>
                            
                            <!-- Card Body -->
                            <div class="card-body" width="100%">
                                <div class="mb-3">
                                    <form role="form" action="/relatorios" method="post">
                                        <span><b class="text-gray-900">Data inicio:</b></span>
                                        <input type="date" value="<?php echo htmlspecialchars( $dataInicio, ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="dataInicio" class="form-control bg-light border-4 small " >

                                        <span><b class="text-gray-900">Data final:</b></span>
                                        <input type="date" value="<?php echo htmlspecialchars( $dataAtual, ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="dataFinal" class="form-control bg-light border-4 small mb-2" >
                                        <button type="submit" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-search"></i>
                                            </span>
                                            <span class="text">Consultar</span>
                                        </button>
                                    </form>
                                </div>
                                <div class="table table-sm" >
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
                                        <thead >
                                            <tr >
                                                <th class="bg-gray-400 text-gray-900">Data</th>
                                                <th class="bg-gray-400 text-gray-900 ">Nome</th>
                                                <th class="bg-gray-400 text-gray-900">Descrição</th>
                                                <th class="bg-gray-400 text-gray-900">Valor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter1=-1;  if( isset($relatorio) && ( is_array($relatorio) || $relatorio instanceof Traversable ) && sizeof($relatorio) ) foreach( $relatorio as $key1 => $value1 ){ $counter1++; ?><tr class="bg-gray-100">
                                                <td class="text-gray-900"><?php echo htmlspecialchars( $value1["dataCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["nomeCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?> | <?php echo htmlspecialchars( $value1["apelidoCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["descricaoCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900"> R$ <?php echo htmlspecialchars( $value1["totalCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            </tr>
                                            <?php } ?>
                                        <tfoot>
                                            <tr>
                                                <td class="text-gray-900"><b>TOTAL VENDAS:</b></td>
                                                <td></td>
                                                <td></td>
                                                
                                                <td class="text-gray-900"><b>R$ <?php echo htmlspecialchars( $total, ENT_COMPAT, 'UTF-8', FALSE ); ?></b> </td>
                                            </tr>
                                        </tbody>
                                        </tbody>
                                    </table>
                                    <a href="/" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-times"></i>
                                        </span>
                                        <span class="text">Cancelar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        <!-- End Page Content -->
        <script>
            
            <?php echo htmlspecialchars( $mensagem, ENT_COMPAT, 'UTF-8', FALSE ); ?> 
            function myFunction() {
                if(checked && checkboxs.length>0){
                    alertify.confirm('Deletar compras', 'Deseja deletar os selecionados?', function(){ window.location.href="deleteall"}
                , function(){});
                }else{
                    alertify.confirm('Deletar compras', 'Deseja deletar TODAS as compras?', function(){ window.location.href="deleteall"}
                , function(){});
                } 
            }
            document.getElementById("delete").addEventListener("click", myFunction);
            
            var checkboxs = [];

            var checked = false;

            var td = document.querySelectorAll('td span');
            
            var checkebox = document.querySelectorAll('td input');      

            td.forEach((el) => {
                el.addEventListener('click', meuID);
            });

            checkebox.forEach((el) => {
                el.addEventListener('click', meuCkecked);
            });

            function meuID(e) {
                var id = e.currentTarget.id;
                alertify.confirm('Deletar compra','Deseja deletar esta compra?', function(){ window.location.href="/clientes/listadecompras/"+id+"/delete"}
                , function(){});  
            }
            function meuCkecked(e) {
                var id = e.currentTarget.name;
                var elemento = checkboxs.indexOf(id);

                if(elemento <0){
                    checkboxs.push(id);
                }else{
                    checkboxs.splice(checkboxs.indexOf(id), 1);
                }
                checked = true;
                console.log(checkboxs);

            }
            
            
        </script>  

