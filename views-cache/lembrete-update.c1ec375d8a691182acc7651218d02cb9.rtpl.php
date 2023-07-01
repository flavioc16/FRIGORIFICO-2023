<?php if(!class_exists('Rain\Tpl')){exit;}?>            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">  
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Lembrete</h6>
                                <button type="button" class="btn btn-danger btn-icon-split" onclick="deleteLembrete()">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Deletar</span>
                                </button>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body" width="100%">
                                
                                <form role="form" method="post" action="/lembretes/<?php echo htmlspecialchars( $lembretes["idLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    <div class="form-group">
                                      <label for="descricaoLembrete" class="text-gray-900"><b>Descrição</b></label>
                                      <input type="input" class="form-control upper" name="descricaoLembrete" value="<?php echo htmlspecialchars( $lembretes["descricaoLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required placeholder="Ex: 15 dias antes do vencimento do produto tal.">
                                      <label for="dataLembrete" class="text-gray-900"><b>Data a notificar</b></label>
                                      <input type="date" class="form-control" id="dataLembrete" name="dataLembrete" value="<?php echo htmlspecialchars( $lembretes["dataLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                      <input type="hidden" name="statusLembrete" value="0">
                                    </div>
                                    <a href="/lembretes" class="btn btn-secondary btn-icon-split">
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

            function deleteLembrete() {
                var id = "<?php echo htmlspecialchars( $lembretes["idLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?>";
                alertify.confirm('Deletar Lembrete','Deseja deletar este Lembrete?', function(){ window.location.href="/lembretes/"+id+"/delete"}
                , function(){});  
            }
            
        </script>  

