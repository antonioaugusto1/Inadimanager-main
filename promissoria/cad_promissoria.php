
<?php
require_once('../valida_session/valida_session.php');
require_once('../layout/header.php'); 
require_once('../layout/sidebar.php');
require_once ("../bd/bd_cliente.php");

?>

<!-- Main Content -->
<div id="content">

    <?php require_once('../layout/navbar.php');?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-2">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-8">
                        <h6 class="m-0 font-weight-bold text-primary" id="title">ADICIONAR PROMISSÓRIA</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
             <?php
             if (isset($_SESSION['texto_erro'])):
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<?= $_SESSION['texto_erro'] ?></strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                unset($_SESSION['texto_erro']);
            endif;
            ?>
            <?php
            if (isset($_SESSION['texto_sucesso'])):
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><i class="fas fa-check"></i>&nbsp;&nbsp;<?= $_SESSION['texto_sucesso'] ?></strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                unset($_SESSION['texto_sucesso']);
            endif;
            ?>
                <form class="user" action="cad_promissoria_envia.php" method="post">
                    
                    <div class="form-group">
                        <label>Nome do Cliente</label>
                        <select class="form-control" id="cod_cliente" name="cod_cliente" required>
                            <option value="-1" disabled selected>Selecione um cliente</option>
                                <?php
                                $lista = listaClienteOrdemAlfabetica();
                                foreach ($lista as $linha) {
                                    $codCliente = $linha['cod'];
                                    $nome = $linha['nome'];
                                    $cpf = $linha['cpf'];
                                    $opcao = "<option value=\"$codCliente\">$nome - [$cpf]</option>";
                                    echo $opcao;
                                }
                                ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <input type="text" class="form-control form-control-user" name="descricao" placeholder="Descrição" required>
                    </div>

                    <div class="form-group">
                        <label>Valor</label>
                        <input type="number" class="form-control form-control-user" name="valor" step=".01" placeholder="Valor" required>
                    </div>

                    <div class="form-group">
                        <label>Data de Compra</label>
                        <input type="date" class="form-control form-control-user" name="data_compra" placeholder="Data de Compra" required>
                    </div>

                    <div class="form-group">
                        <label>Data de Vencimento</label>
                        <input type="date" class="form-control form-control-user" name="data_vencimento" placeholder="Data de Vencimento" required>
                    </div>

                    <div class="card-footer text-muted" id="btn-form">
                        <div class=text-right>
                            <a title="Voltar" href="promissoria.php"><button type="button" class="btn btn-success"><i class="fas fa-arrow-circle-left"></i>&nbsp;Voltar</button></a>
                            <a title="Adicionar"><button type="submit" name="updatebtn" class="btn btn-primary uptadebtn"><i class="fas fa-fw fa-clipboard-list">&nbsp;</i>Adicionar</button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>

<!-- End of Main Content -->
<?php
require_once('../layout/footer.php');
?>


