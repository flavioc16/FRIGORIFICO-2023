<?php if(!class_exists('Rain\Tpl')){exit;}?>

<style>
    .olho {
    cursor: pointer;
    left: 120px;
    bottom: 2px;
    position: absolute;
    width: 15px;
    /* color:#5085C7; */
    }
</style>

<div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <nav class="navbar navbar-expand  navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell fa-lg"></i> 
                                <span class="badge badge-danger badge-counter "><?php echo htmlspecialchars( $contadorNotificacao, ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Central de Notificações
                                </h6>
                                <?php $counter1=-1;  if( isset($listLembretesPromocionais) && ( is_array($listLembretesPromocionais) || $listLembretesPromocionais instanceof Traversable ) && sizeof($listLembretesPromocionais) ) foreach( $listLembretesPromocionais as $key1 => $value1 ){ $counter1++; ?>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-info">
                                            <i class="fas fa-bell text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-900">Lembrete Promocional - <?php echo htmlspecialchars( $dataAtual, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
                                        <?php if( $value1["statusLembrete"] == 0 ){ ?><span class="font-weight-bold upper"><?php echo htmlspecialchars( $value1["descricaoLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><?php }else{ ?><span class="upper"><?php echo htmlspecialchars( $value1["descricaoLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><?php } ?>

                                    </div>
                                </a>
                                <?php } ?>

                                <?php $counter1=-1;  if( isset($countEncomendas) && ( is_array($countEncomendas) || $countEncomendas instanceof Traversable ) && sizeof($countEncomendas) ) foreach( $countEncomendas as $key1 => $value1 ){ $counter1++; ?>

                                <a class="dropdown-item d-flex align-items-center" href="/encomendas/<?php echo htmlspecialchars( $value1["idEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-900 ">
                                        Encomenda para Hoje - <?php echo htmlspecialchars( $value1["dataEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?>


                                    </div>
                                    <?php if( $value1["statusEncomenda"] == 0 ){ ?><span class="font-weight-bold upper"><?php echo htmlspecialchars( $value1["descricaoEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><?php }else{ ?><span class="upper"><?php echo htmlspecialchars( $value1["descricaoEncomenda"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><?php } ?>

                                    
                                </div>
                                </a>
                                <?php } ?>

                                <?php $counter1=-1;  if( isset($verificaDias) && ( is_array($verificaDias) || $verificaDias instanceof Traversable ) && sizeof($verificaDias) ) foreach( $verificaDias as $key1 => $value1 ){ $counter1++; ?>

                                <a class="dropdown-item d-flex align-items-center" href="/clientes/listadecompras/<?php echo htmlspecialchars( $value1["idCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                <div class="mr-3">
                                    <div class="icon-circle bg-danger">
                                        <i class="fas fa-exclamation text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-900 ">
                                        Débito Mensal - Data -  <?php echo htmlspecialchars( $value1["dataCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?>


                                    </div>
                                    <span class=" font-weight-bold upper"><?php echo htmlspecialchars( $value1["nomeCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
                                    
                                </div>
                                </a>

                                <?php } ?>

                                <?php $counter1=-1;  if( isset($listLembretes) && ( is_array($listLembretes) || $listLembretes instanceof Traversable ) && sizeof($listLembretes) ) foreach( $listLembretes as $key1 => $value1 ){ $counter1++; ?>

                                <a class="dropdown-item d-flex align-items-center" href="/lembretes/<?php echo htmlspecialchars( $value1["idLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-900">Lembrete para Hoje - <?php echo htmlspecialchars( $value1["dataLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
                                        <?php if( $value1["statusLembrete"] == 0 ){ ?><span class="font-weight-bold upper"><?php echo htmlspecialchars( $value1["descricaoLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><?php }else{ ?><span class="upper"><?php echo htmlspecialchars( $value1["descricaoLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span><?php } ?>

                                    </div>
                                </a>
                                <?php } ?>

                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 lg"><?php echo htmlspecialchars( $usuario, ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
                                <img class="img-profile rounded-circle" src="res/site/img/rosto.jpg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuração
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" id="sair" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>  
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Caixa atual (Compras)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <span id="totalDiario">*******</span>
                                            <i class="fa fa-eye olho"  id="olho" aria-hidden="true" onmouseenter="mostraCompra();" onmouseout="escondeCompra();"></i>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Por conta (Recebidos)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <span id="pagamentosDiario">*******</span>
                                            <i class="fa fa-eye olho"  id="olho" aria-hidden="true" onmouseenter="mostraRecebidos();" onmouseout="escondeRecebidos();"></i>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4 ">
                        <a href="/clientes/create" style="text-decoration:none">
                            <div class="card border-left-info shadow h-200 py-2  ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Cadastrar Clientes
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-900"><?php echo htmlspecialchars( $contadorCliente, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-user-plus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="/produtos/create" style="text-decoration:none">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Cadastrar Produtos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo htmlspecialchars( $contadorProdutos, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-plus-square fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Clientes Cadastrados</h6>
                            </div>
                            <div class="card-body" width="100%">
                                <div class="table" >
                                    <table class=" table" id="dataTable" width="100%" cellspacing="0"  >
                                        <thead >
                                            <tr>
                                                <th class="bg-gray-400 text-gray-900">Nome</th>
                                                <th class="bg-gray-400 text-gray-900">Referência</th>
                                                <th class="bg-gray-400 text-gray-900">Endereço</th>
                                                <th class="bg-gray-400 text-gray-900">Felefone</th>
                                                <th class="bg-gray-400 text-gray-900">Limite</th>
                                                <th class="bg-gray-400 text-gray-900">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>

                                            <tr class="bg-gray-100">
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["nomeCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["apelidoCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["enderecoCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["telefoneCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["limiteCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td>
                                                    <a href="clientes/novacompra/<?php echo htmlspecialchars( $value1["idCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="text-decoration: none;" class=" mr-2">
                                                        <i class="fas fa-plus-square"></i>
                                                    </a>
                                                    <a href="clientes/listadecompras/<?php echo htmlspecialchars( $value1["idCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" >
                                                        <i class="fas fa-info-circle"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <script> 
        
        <?php echo htmlspecialchars( $mensagem, ENT_COMPAT, 'UTF-8', FALSE ); ?>

        
            function myFunction() {
                alertify.confirm('Sair', 'Deseja realmente sair? <?php echo htmlspecialchars( $usuario, ENT_COMPAT, 'UTF-8', FALSE ); ?>.' , function(){ window.location.href="login"}
                , function(){});
                
            }

            document.getElementById("sair").addEventListener("click", myFunction);
            
            function mostraCompra() {
                document.getElementById("totalDiario").innerHTML = "R$ <?php echo htmlspecialchars( $totalDiario, ENT_COMPAT, 'UTF-8', FALSE ); ?>";
            }

            function escondeCompra() {
                document.getElementById("totalDiario").innerHTML = "*******";
            }

            function mostraRecebidos() {
                document.getElementById("pagamentosDiario").innerHTML = "R$ <?php echo htmlspecialchars( $pagamentosDiario, ENT_COMPAT, 'UTF-8', FALSE ); ?>";
            }

            function escondeRecebidos() {
                document.getElementById("pagamentosDiario").innerHTML = "*******";
            }

            $(function() { //onload
                setEvent();

            });

            var timeout = null;
            
            function setEvent(){
                timeout = setTimeout(function() {
                    var table = $('#dataTable').DataTable();
                    function foco(){
                        $('div.dataTables_filter input', table.table().container()).focus();
                    }
                    setTimeout(foco, 1)   
                }, 3000); //tempo do timer
            }

            $(document).on('mousemove', function() { //mouse move 
                if (timeout !== null) {
                    clearTimeout(timeout); //clear no timer
                }
                setEvent(); //seta ele novamente para caso aja inatividade faça o evento
            });
                        
        </script>