<?php if(!class_exists('Rain\Tpl')){exit;}?>
            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Produtos Cadastrados</h6>
                                <a href="/produtos/create" class=" mr-2">
                                    <i class="fas fa-plus-square"></i>
                                </a>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body" width="100%">
                                <div class="table" >
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
                                        <thead >
                                            <tr >
                                                <th class="bg-gray-400 text-gray-900">Nome</th>
                                                <th class="bg-gray-400 text-gray-900">Marca</th>
                                                <th class="bg-gray-400 text-gray-900">A Vista</th>
                                                <th class="bg-gray-400 text-gray-900">Fiado</th>
                                                <th class="bg-gray-400 text-gray-900">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?><tr class="bg-gray-100">
                                                <td class="text-gray-900 upper" id="<?php echo htmlspecialchars( $value1["nomeProduto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nomeProduto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["marcaProduto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"> R$ <?php echo htmlspecialchars( $value1["valorProduto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"> R$ <?php echo htmlspecialchars( $value1["valorProdutoP"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"style="width: 75px; text-align: center;">
                                                    <a href="/produtos/<?php echo htmlspecialchars( $value1["idProduto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="text-decoration: none;">
                                                        <i class="fas fa-align-justify"></i>
                                                    </a>
                                                    <span class="ml-2" style="color: red; cursor: pointer;" id="<?php echo htmlspecialchars( $value1["idProduto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                                        <i class="fas fa-minus-circle"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php } ?></tbody>
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

            var td = document.querySelectorAll('td span'); 

            td.forEach((el) => {
                el.addEventListener('click', meuID);
            });
            
            function meuID(e) {
                var id = e.currentTarget.id;
                alertify.confirm('labels changed!').set('labels', {ok:'deletar', cancel:'Cancelar'});
                alertify.confirm('Deletar produto','Deseja deletar este produto?', function(){ window.location.href="/produtos/"+id+"/delete"}
                , function(){});  
            }

            

            
            
        </script>   

