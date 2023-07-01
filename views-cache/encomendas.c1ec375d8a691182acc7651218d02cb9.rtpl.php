<?php if(!class_exists('Rain\Tpl')){exit;}?>            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">  
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Encomendas</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body" width="100%">
                                <form role="form" method="post" action="/encomendas">
                                    <div class="form-group">
                                      <label for="descricaoEncomenda" class="text-gray-900"><b>Nova encomenda</b></label>
                                      <input type="text" class="form-control mb-2" id="descricaoEncomenda" autofocus name="descricaoEncomenda" required placeholder="Ex: Flavio sousa de Castro - 10kg - Panelada">
                                      <label for="dataEncomenda" class="text-gray-900"><b>Data a notificar</b></label>
                                      <input type="date" class="form-control inputdata" id="dataEncomenda" name="dataEncomenda" required>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Cadastrar</span>
                                    </button>
                                  </form>
                                <div class="mb-3">
                                    
                                </div>
                                <div class="table table-sm" >
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
                                        <thead >
                                            <tr >
                                                <th class="bg-gray-400 text-gray-900">Data</th>
                                                <th style="width: 60%;" class="bg-gray-400 text-gray-900">Descrição</th>

                                                <th class="bg-gray-400 text-gray-900">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter1=-1;  if( isset($encomendas) && ( is_array($encomendas) || $encomendas instanceof Traversable ) && sizeof($encomendas) ) foreach( $encomendas as $key1 => $value1 ){ $counter1++; ?><tr class="bg-gray-100">
                                                <td class="text-gray-900"><?php echo htmlspecialchars( $value1["dataEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["descricaoEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900"style="width: 75px; text-align: center;">
                                                    <a href="/encomendas/<?php echo htmlspecialchars( $value1["idEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="text-decoration: none;">
                                                        <i class="fas fa-align-justify mr-2"></i>
                                                    </a>
                                                    <span style="color: red; cursor: pointer;" id="<?php echo htmlspecialchars( $value1["idEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                                        <i class="fas fa-minus-circle"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php } ?>
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

            var td = document.querySelectorAll('td span');

            td.forEach((el) => {
                el.addEventListener('click', meuID);
            });

            function meuID(e) {
                var id = e.currentTarget.id;
                alertify.confirm('labels changed!').set('labels', {ok:'deletar', cancel:'Cancelar'});
                alertify.confirm('Deletar Encomenda','Deseja deletar esta Encomenda?', function(){ window.location.href="/encomendas/"+id+"/delete"}
                , function(){});  
            }
            
        </script>  

