<?php if(!class_exists('Rain\Tpl')){exit;}?> 
            <script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>
            <script>
                window.onload = function () {
                    JsBarcode(".barcode").init();
                }
            </script>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div id="la" style="text-align: center;">
                            <td>
                                <svg class="barcode mb-2" id="barcode"  
                                    format="EAN13" 
                                    jsbarcode-value="<?php echo htmlspecialchars( $codigoProduto, ENT_COMPAT, 'UTF-8', FALSE ); ?>" 
                                    jsbarcode-textmargin="2" 
                                    jsbarcode-height="240"
                                    jsbarcode-width="4"
                                    jsbarcode-fontoptions="sans">
                                </svg>
                            </td>
                        </div>
                    </div>
                </div>
            </div>
              
            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">  
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Dados do Produto</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body" width="100%">
                                <form role="form" action="/produtos/<?php echo htmlspecialchars( $produto["idProduto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" > 
                                    <h5><b class="text-gray-900">Nome Produto</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="nomeProduto" id="nomeProduto" value="<?php echo htmlspecialchars( $produto["nomeProduto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required class="form-control bg-light border-4 small" autofocus placeholder="Ex: Boi">
                                    </div>
                                    <h5><b class="text-gray-900">Marca</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="marcaProduto" id="marcaProduto" value="<?php echo htmlspecialchars( $produto["marcaProduto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control bg-light border-4 small" placeholder="Ex: Friboi">
                                    </div>
                                    <h5><b class="text-gray-900">A vista</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="valorProduto" id="valorProduto" size="6" onKeyUp="mascaraMoeda(this, event)" value="<?php echo htmlspecialchars( $produto["valorProduto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required class="form-control bg-light border-4 small" placeholder="Ex: 50,00">
                                    </div>
                                    <h5><b class="text-gray-900">Fiado</b></h5>
                                    <div class="input-group mb-3">
                                        <input type="text" name="valorProdutoP" id="valorProdutoP" size="6" onKeyUp="mascaraMoeda(this, event)" value="<?php echo htmlspecialchars( $produto["valorProdutoP"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required class="form-control bg-light border-4 small" placeholder="Ex: 50,00">
                                    </div>
                                    <input type="hidden" name="promocaoProduto" id="promocaoProduto" value="0">
                                    <input type="hidden" name="idUsuario" id="idUsuario"  value="5">
                                    <div id="modalBarcode" data-toggle="modal" data-target=".bd-example-modal-lg" style="cursor: pointer;" >
                                        <td>
                                            <svg class="barcode mb-2" id="barcode"   
                                                format="EAN13" 
                                                jsbarcode-value="<?php echo htmlspecialchars( $codigoProduto, ENT_COMPAT, 'UTF-8', FALSE ); ?>" 
                                                jsbarcode-textmargin="2" 
                                                jsbarcode-height="60"
                                                jsbarcode-width="1"
                                                jsbarcode-fontoptions="sans">
                                            </svg>
                                        </td>
                                    </div>
                                    <br>
                                    <a href="/produtos" class="btn btn-secondary btn-icon-split">
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
                    
                    document.addEventListener('keydown', function(e) {
                    e = e || window.event;
                    var code = e.which || e.keyCode;

                    if(code == 113){
                        window.location.href="/";
                    }
                });

                document.getElementById("modalBarcode").addEventListener("click", printScreen);
                function printScreen(){
                    var content = document.getElementById('modalBarcode'), screenshot = document.getElementById('modalBarcode');

                html2canvas(content, {
                    onrendered: function(canvas) {
                        screenshot.appendChild(canvas);
                    }
});
                }

    
            </script>