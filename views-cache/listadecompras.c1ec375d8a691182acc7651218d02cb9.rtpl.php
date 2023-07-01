<?php if(!class_exists('Rain\Tpl')){exit;}?>            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">  
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary upper"><?php echo htmlspecialchars( $cliente["nomeCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?> | <?php echo htmlspecialchars( $cliente["apelidoCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </h6>
                                <a href="/clientes/novacompra/<?php echo htmlspecialchars( $cliente["idCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class=" mr-2">
                                    <i class="fas fa-plus-square"></i>
                                </a>
                            </div>
                            
                            <!-- Card Body -->
                            <div class="card-body" width="100%">
                                <!-- <?php if( $compras ){ ?>

                                <a href="/clientes/imprimir/<?php echo htmlspecialchars( $cliente["idCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank" class="btn btn-info mb-3 btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-print"></i>
                                    </span>
                                    <span class="text">Imprimir</span>
                                </a>
                                <?php } ?> -->
                                <div class="table table-sm" >
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >
                                        <thead >
                                            <tr >
                                                <th style="width: 5%;" class="bg-gray-400 text-gray-900">#</th>
                                                <th class="bg-gray-400 text-gray-900">Data</th>
                                                <th style="width: 60%;" class="bg-gray-400 text-gray-900">Descrição</th>
                                                <th class="bg-gray-400 text-gray-900">Valor</th>
                                                <th class="bg-gray-400 text-gray-900">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter1=-1;  if( isset($compras) && ( is_array($compras) || $compras instanceof Traversable ) && sizeof($compras) ) foreach( $compras as $key1 => $value1 ){ $counter1++; ?><tr class="bg-gray-100">
                                                <td><input type="checkbox" name="<?php echo htmlspecialchars( $value1["idCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" value="<?php echo htmlspecialchars( $value1["idCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></td>
                                                <td class="text-gray-900"><?php echo htmlspecialchars( $value1["dataCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["descricaoCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900"> R$ <?php echo htmlspecialchars( $value1["totalCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900"style="width: 75px; text-align: center;">
                                                    <a style="text-decoration: none;" href="/compras/<?php echo htmlspecialchars( $value1["idCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                                        <i class="fas fa-align-justify mr-2"></i>
                                                    </a>
                                                    <span style="color: red; cursor: pointer;" id="<?php echo htmlspecialchars( $value1["idCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                                        <i class="fas fa-minus-circle"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php } ?>

                                            <?php if( $compras ){ ?>

                                        <tfoot>
                                            <tr>
                                                <td class="text-gray-900"><b>TOTAL:</b></td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-gray-900"><b>R$ <?php echo htmlspecialchars( $totalMostra, ENT_COMPAT, 'UTF-8', FALSE ); ?></b> </td>
                                                <td>
                                                    <a id="delete" style="color: red; cursor: pointer;">
                                                        <i class="fas fa-trash ml-4" ></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>

                                        </tfoot>
                                        </tbody>
                                    </table>
                                    <a href="/" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-times"></i>
                                        </span>
                                        <span class="text">Cancelar</span>
                                    </a>
                                    <?php if( $compras ){ ?>

                                    <button id="pagamento"class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-dollar-sign"></i>
                                        </span>
                                        <span class="text">Pagamento</span>
                                    </button>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        <!-- End Page Content -->
        <script>
            
            <?php echo htmlspecialchars( $mensagem, ENT_COMPAT, 'UTF-8', FALSE ); ?> 

            function myFunction() {
                if(checked && checkboxs.length>0){
                    alertify.confirm('labels changed!').set('labels', {ok:'deletar', cancel:'Cancelar'});
                    alertify.confirm('Deletar compras', 'Deseja deletar os selecionados?', function(){ window.location.href="<?php echo htmlspecialchars( $cliente["idCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/deleteall"}
                , function(){});
                }else{
                    alertify.confirm('labels changed!').set('labels', {ok:'deletar', cancel:'Cancelar'});
                    alertify.confirm('Deletar compras', 'Deseja deletar TODAS as compras?', function(){ window.location.href="<?php echo htmlspecialchars( $cliente["idCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/deleteall"}
                , function(){});
                } 
            }
            function telaPagamento(){
              
                var zero = 0;
                var min = 1;
                var max = <?php echo htmlspecialchars( $totalJanela, ENT_COMPAT, 'UTF-8', FALSE ); ?>;

                const money = <?php echo htmlspecialchars( $totalJanela, ENT_COMPAT, 'UTF-8', FALSE ); ?>;

                const currency = function(number){
                    return new Intl.NumberFormat('de-DE', { minimumFractionDigits: 2}).format(number);
                };

                maxMoney = currency(money);

                alertify.prompt('labels changed!').set('labels', {ok:'realizar', cancel:'Cancelar'});
                alertify.prompt('Closable: false').set('closable', false); 

                alertify.prompt( 'Operação em débito', 'Total em débito : '+maxMoney+ '', max,
                function(evt, value) {
                    { 
                        if (value < min) {
                        alertify.error('Número baixo, entre com um número acima de ' + zero)
                        setTimeout(telaPagamento, 1);
                        } else if (value > max) {
                            alertify.error('Número alto para  valor do débito ' + maxMoney)
                            setTimeout(telaPagamento, 1);
                        } else { 
                            
                            var novaQtd = (max - value);
                            var valor = (Math.round(novaQtd, -1));
                            window.location.href="/clientes/listadecompras/<?php echo htmlspecialchars( $idCliente, ENT_COMPAT, 'UTF-8', FALSE ); ?>?valorRetirado="+value+"&restante="+valor
                        }
                        
                    }

                },function() {}).setting({type: 'text'});
                
            }  

            // document.getElementById("delete").addEventListener("click", myFunction);

            document.getElementById("pagamento").addEventListener("click", telaPagamento);
            
            var checkboxs = [];

            var checked = false;

            var td = document.querySelectorAll('td span');
            
            var checkebox = document.querySelectorAll('td input');      

            td.forEach((el) => {
                el.addEventListener('click', meuID);
            });

            checkebox.forEach((el) => {
                el.addEventListener('click', meuCkecked);
            });

            function meuID(e) {
                var id = e.currentTarget.id;
                alertify.confirm('labels changed!').set('labels', {ok:'deletar', cancel:'Cancelar'});
                alertify.confirm('Deletar compra','Deseja deletar esta compra?', function(){ window.location.href="/clientes/listadecompras/"+id+"/delete"}
                , function(){});  
            }
            function meuCkecked(e) {
                var id = e.currentTarget.name;
                var elemento = checkboxs.indexOf(id);

                if(elemento <0){
                    checkboxs.push(id);
                }else{
                    checkboxs.splice(checkboxs.indexOf(id), 1);
                }
                checked = true;
                console.log(checkboxs);

            }
            
            
        </script>  

