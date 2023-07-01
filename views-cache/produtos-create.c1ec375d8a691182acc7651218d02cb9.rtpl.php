<?php if(!class_exists('Rain\Tpl')){exit;}?> 
            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">  
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Cadastrar Produto</h6>
                            </div>
                            <!-- Card Body -->
                            
                            <div class="card-body" width="100%">
                                <form role="form" action="/produtos/create" method="post" > 
                                    <h5><b class="text-gray-900">Nome Produto</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="nomeProduto" id="nomeProduto" required class="form-control bg-light border-4 small" autofocus placeholder="Ex: Boi">
                                    </div>
                                    <h5><b class="text-gray-900">Marca</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="marcaProduto" id="marcaProduto" class="form-control bg-light border-4 small" placeholder="Ex: Friboi">
                                    </div>
                                    <h5><b class="text-gray-900">A vista</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="valorProduto" id="valorProduto" size="6" onKeyUp="mascaraMoeda(this, event)" required class="form-control bg-light border-4 small" placeholder="Ex: 50,00">
                                    </div>
                                    <h5><b class="text-gray-900">Fiado</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="valorProdutoP" id="valorProdutoP" size="6" onKeyUp="mascaraMoeda(this, event)" required class="form-control bg-light border-4 small" placeholder="Ex: 50,00">
                                    </div>
                                    <input type="hidden" name="promocaoProduto" id="promocaoProduto" value="0">
                                    <input type="hidden" name="idUsuario" id="idUsuario"  value="5">
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