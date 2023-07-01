<?php if(!class_exists('Rain\Tpl')){exit;}?>            <!-- Begin Page Content -->
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">  
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Lembretes Promocionais</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body" width="100%">
                                <form role="form" method="post" action="/promocionais">
                                    <div class="form-group">
                                        <label for="descricaoLembrete" class="text-gray-900"><b>Novo lembrete</b></label>
                                        <input type="text" class="form-control mb-2" id="descricaoLembrete" autofocus name="descricaoLembrete" required placeholder="Ex: Dia do Frango">
                                        <label for="dataLembrete " class="text-gray-900 "><b>Dia a notificar</b></label>
                                        <select name="promocaoLembrete" class="form-control" required>
                                            <option value="1">Segunda</option>
                                            <option value="2">Terça</option>
                                            <option value="3">Quarta</option>
                                            <option value="4">Quinta</option>
                                            <option value="5">Sexta</option>
                                            <option value="6">Sábado</option>
                                        </select>
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
                                                <th class="bg-gray-400 text-gray-900">Dia</th>
                                                <th style="width: 60%;" class="bg-gray-400 text-gray-900">Descrição</th>
                                                <th class="bg-gray-400 text-gray-900">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter1=-1;  if( isset($lembretes) && ( is_array($lembretes) || $lembretes instanceof Traversable ) && sizeof($lembretes) ) foreach( $lembretes as $key1 => $value1 ){ $counter1++; ?><tr class="bg-gray-100">
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["dataLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"><?php echo htmlspecialchars( $value1["descricaoLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td class="text-gray-900 upper"style="width: 75px; text-align: center; ">
                                                    <span style="color: red; cursor: pointer;" id="<?php echo htmlspecialchars( $value1["idLembrete"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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
                alertify.confirm('Deletar Lembrete','Deseja deletar este Lembrete?', function(){ window.location.href="/promocionais/"+id+"/delete"}
                , function(){});  
            }
            
        </script>  

