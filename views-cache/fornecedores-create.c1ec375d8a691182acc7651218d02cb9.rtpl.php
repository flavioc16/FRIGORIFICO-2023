<?php if(!class_exists('Rain\Tpl')){exit;}?> 
            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">  
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Cadastrar Fornecedor</h6>
                            </div>
                            <!-- Card Body -->
                            
                            <div class="card-body" width="100%">
                                <form role="form" action="/fornecedores/create" method="post" > 
                                    <h5><b class="text-gray-900">Nome Fornecedor</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="nomeCliente" id="nomeCliente" required class="form-control bg-light border-4 small" autofocus placeholder="Ex: Flavio sousa de Castro">
                                    </div>
                                    <h5><b class="text-gray-900">Referência</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="apelidoCliente" id="apelidoCliente" class="form-control bg-light border-4 small" placeholder="Ex: Fulano">
                                    </div>
                                    <h5><b class="text-gray-900">Endereço</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="enderecoCliente" id="enderecoCliente" required class="form-control bg-light border-4 small" placeholder="Ex: Miguel Custódio 294">
                                    </div>
                                    <h5><b class="text-gray-900">Telefone</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="telefoneCliente" id="telefoneCliente" class="form-control bg-light border-4 small" maxlength="11" placeholder="Ex: 88999874309">
                                    </div>
                                    <a href="/" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-times"></i>
                                        </span>
                                        <span class="text">Cancelar</span>
                                    </a>
                                    <button type="submit" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Cadastrar</span>
                                    </button>
                                </form>   
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Page Content -->  
            <script type="text/javascript">
                window.addEventListener("load", function(event) {
                  <?php echo htmlspecialchars( $mensagem, ENT_COMPAT, 'UTF-8', FALSE ); ?>  
                });
            </script>