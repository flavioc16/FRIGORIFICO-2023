<?php if(!class_exists('Rain\Tpl')){exit;}?>            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">  
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Encomenda</h6>
                                <button type="button" class="btn btn-danger btn-icon-split" onclick="deleteEncoemda()">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Deletar</span>
                                </button>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body" width="100%">
                                
                                <form role="form" method="post" action="/encomendas/<?php echo htmlspecialchars( $encomendas["idEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    <div class="form-group">
                                      <label for="descricaoEncomenda" class="text-gray-900"><b>Nova encomenda</b></label>
                                      <input type="text" class="form-control mb-2" id="descricaoEncomenda" name="descricaoEncomenda" value="<?php echo htmlspecialchars( $encomendas["descricaoEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required placeholder="Ex: Flavio sousa de Castro - 10kg - Panelada">
                                      <label for="dataEncomenda" class="text-gray-900 <?php echo htmlspecialchars( $encomendas["idEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><b>Data a notificar</b></label>
                                      <input type="date" class="form-control" id="dataEncomenda" name="dataEncomenda" value="<?php echo htmlspecialchars( $encomendas["dataEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                      <input type="hidden" name="statusEncomenda" value="0">
                                    </div>
                                    <a href="/encomendas" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-times"></i>
                                        </span>
                                        <span class="text">Cancelar</span>
                                    </a>
                                    <button type="submit" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Atualizar</span>
                                    </button>
                                  </form>
                                <div class="mb-3">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        <!-- End Page Content -->
        <script>
            
            <?php echo htmlspecialchars( $mensagem, ENT_COMPAT, 'UTF-8', FALSE ); ?> 

            function deleteEncoemda() {
                var id = "<?php echo htmlspecialchars( $encomendas["idEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>";
                alertify.confirm('Deletar Encomenda','Deseja deletar esta Encomenda?', function(){ window.location.href="/encomendas/"+id+"/delete"}
                , function(){});  
            }
            
        </script>  

