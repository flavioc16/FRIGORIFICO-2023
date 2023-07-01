<?php if(!class_exists('Rain\Tpl')){exit;}?>            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">  
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Dados do Cliente</h6>
                                <button class="btn btn-danger btn-icon-split"data-toggle="modal" data-target="#logoutModal">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Deletar Cliente</span>
                                </button>
                            </div>
                            
                            <!-- Card Body -->
                            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Deletar Cliente</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Deseja realmente deletar este cliente?</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                            <a href="/clientes/delete?<?php echo htmlspecialchars( $user["idCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                <span class="text">Confirmar</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-body" width="100%">
                                <form role="form" action="/clientes/<?php echo htmlspecialchars( $user["idCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" > 
                                    <h5><b>Nome Cliente</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="nomeCliente" id="nomeCliente" value="<?php echo htmlspecialchars( $user["nomeCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required class="form-control bg-light border-4 small" autofocus placeholder="Ex: Flavio sousa de Castro">
                                    </div>
                                    <h5><b>Apelido</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="apelidoCliente" id="apelidoCliente" value="<?php echo htmlspecialchars( $user["apelidoCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control bg-light border-4 small" placeholder="Ex: Fulano">
                                    </div>
                                    <h5><b>Endereço</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="enderecoCliente" id="enderecoCliente" value="<?php echo htmlspecialchars( $user["enderecoCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"required class="form-control bg-light border-4 small" placeholder="Ex: Miguel Custódio 294">
                                    </div>
                                    <h5><b>Telefone</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="telefoneCliente" id="telefoneCliente" value="<?php echo htmlspecialchars( $user["telefoneCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control bg-light border-4 small" maxlength="11" placeholder="Ex: 88999874309">
                                    </div>
                                    <h5><b>Limite</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="number" name="limiteCliente" id="limiteCliente" value="<?php echo htmlspecialchars( $user["limiteCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control bg-light border-4 small" placeholder="Ex: 500.00">
                                    </div>
                                    <a href="/clientes" class="btn btn-secondary btn-icon-split">
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
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Page Content -->  
            <!-- End Page Content -->  
            <script type="text/javascript">
            window.addEventListener("load", function(event) {
                alertify.success('Tudo certo :)');
                //alertify.error('Ops, algo deu errado.');
                });
            </script>


