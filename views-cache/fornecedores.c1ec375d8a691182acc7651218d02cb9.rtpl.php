<?php if(!class_exists('Rain\Tpl')){exit;}?>            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Fornecedores Cadastrados</h6>
                                <a href="/fornecedores/create" class=" mr-2">
                                    <i class="fas fa-plus-square"></i>
                                </a>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body" width="100%">
                                <div class="table" >
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
                                        <thead >
                                            <tr>
                                                <th class="bg-gray-400 text-gray-900">Nome</th>
                                                <th class="bg-gray-400 text-gray-900">Endereço</th>
                                                <th class="bg-gray-400 text-gray-900">Felefone</th>
                                                <th class="bg-gray-400 text-gray-900">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter1=-1;  if( isset($fornecedores) && ( is_array($fornecedores) || $fornecedores instanceof Traversable ) && sizeof($fornecedores) ) foreach( $fornecedores as $key1 => $value1 ){ $counter1++; ?><tr class="bg-gray-100">
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["endereco"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td style="text-align: center;">
                                                    <a href="clientes/<?php echo htmlspecialchars( $value1["idFornecedor"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="text-decoration: none;" >
                                                        <i class="fas fa-align-justify"></i>
                                                    </a>
                                                    <a href="clientes/novacompra/<?php echo htmlspecialchars( $value1["idFornecedor"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="text-decoration: none;" class=" ml-1 mr-1">
                                                        <i class="fas fa-plus-square"></i>
                                                    </a>
                                                    <a href="clientes/listadecompras/<?php echo htmlspecialchars( $value1["idFornecedor"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" >
                                                        <i class="fas fa-info-circle"></i>
                                                    </a>
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

        </script>


        