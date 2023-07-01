<?php if(!class_exists('Rain\Tpl')){exit;}?> 
            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">  
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary upper"><?php echo htmlspecialchars( $cliente["nomeCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?> | <?php echo htmlspecialchars( $cliente["apelidoCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h6>
                                <a href="/clientes/listadecompras/<?php echo htmlspecialchars( $cliente["idCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class=" mr-2">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                            </div>
                            
                            <!-- Card Body -->
                            
                            <div class="card-body" width="100%">
                                <form role="form" action="/clientes/novacompra/<?php echo htmlspecialchars( $idCliente, ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" > 
                                    <h5><b class="text-gray-900">Data da compra</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="date" name="dataCompra" id="dataCompra" required value="<?php echo htmlspecialchars( $dataAtual, ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control bg-light border-4 small">
                                    </div>
                                    <h5><b class="text-gray-900">Descrição</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="descricaoCompra" id="descricaoCompra" class="form-control bg-light border-4 small" autocomplete="on" autofocus required placeholder="Ex: Boi, porco, frango">
                                    </div>
                                    <h5><b class="text-gray-900">Total</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="totalCompra" size="6" onKeyUp="mascaraMoeda(this, event)" id="totalCompra" required class="form-control bg-light border-4 small" placeholder="Ex: 50,00">
                                    </div>
                                    <input type="hidden" name="statusCompra" id="statusCompra" value="0">
                                    <input type="hidden" name="idCliente" id="idCliente" value="<?php echo htmlspecialchars( $cliente["idCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    <h5><b class="text-gray-900">Tipo</b></h5>
                                    <div class="input-group mb-3">
                                        <select class="form-control bg-light border-4 small"  name="tipoCompra" id="tipoCompra">
                                            <option value="0">Compra</option>
                                            <option value="1">Restante</option>
                                        </select>
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
            <script>
            
                <?php echo htmlspecialchars( $mensagem, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                String.prototype.reverse = function(){
                    return this.split('').reverse().join(''); 
                };
                function mascaraMoeda(campo,evento){
                    var tecla = (!evento) ? window.event.keyCode : evento.which;
                    var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
                    var resultado  = "";
                    var mascara = "###,##".reverse();
                    for (var x=0, y=0; x<mascara.length && y<valor.length;) {
                        if (mascara.charAt(x) != '#') {
                        resultado += mascara.charAt(x);
                        x++;
                        } else {
                        resultado += valor.charAt(y);
                        y++;
                        x++;
                        }
                    }
                    campo.value = resultado.reverse();
                    }
    
            </script>