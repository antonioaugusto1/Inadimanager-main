
<?php
require_once('../valida_session/valida_session.php');
require_once('../layout/header.php'); 
require_once('../layout/sidebar.php');
require_once('../bd/bd_promissoria.php');
require_once ("../bd/bd_cliente.php");

function formatarDinheiro($valor) {
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

$cod_promissoria = $_GET['cod'];

$promissoria = buscaPromissoria($cod_promissoria);
?>

<!-- Main Content -->
<div id="content">

    <?php require_once('../layout/navbar.php');?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-2">
            <div class="card-header py-3">

                <h6 class="m-0 font-weight-bold text-primary" id="title">EDITAR PROMISSÓRIA</h6>

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
                <form method="get" action="editar_promissoria_envia.php">
                    <div class="form-group">
                        <input class="form-control" id="cod" name="cod" type="hidden" value="<?= $cod_promissoria ?>">
                    </div>                 
                    <div class="form-group">
                    <label>Nome do Cliente</label>
                    <select class="form-control" id="cod_cliente" name="cod_cliente" required>
                        <option value="-1" disabled>Selecione um cliente</option>
                            <?php
                            $lista = listaClienteOrdemAlfabetica();
                            foreach ($lista as $linha) {
                                $codCliente = $linha['cod'];
                                $nome = $linha['nome'];
                                $cpf = $linha['cpf'];
                                if ($codCliente == $promissoria['cod_cliente']) {
                                    echo "<option selected value=\"$codCliente\">$nome - [$cpf]</option>";
                                }else{
                                    echo "<option value=\"$codCliente\">$nome - [$cpf]</option>";
                                }
                            }
                            ?>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição do Produto(s):</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" value="<?= $promissoria['descricao'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="valor">Valor:</label>
                        <input type="text" class="form-control" id="valor" name="valor" value="<?= $promissoria['valor'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="data_compra">Data da Compra:</label>
                        <input type="date" class="form-control" id="data_compra" name="data_compra" value="<?= $promissoria['data_compra'] ?>" required>
                    </div>    
                    <div class="form-group">
                        <label for="data_vencimento">Data de Vencimento:</label>
                        <input type="date" class="form-control" id="data_vencimento" name="data_vencimento" value="<?= $promissoria['data_vencimento'] ?>" required>
                    </div>    
                    <div class="card-footer text-muted" id="btn-form">
                        <div class=text-right>
                            <a title="Voltar" href="promissoria.php"><button type="button" class="btn btn-success"><i class="fas fa-arrow-circle-left"></i>&nbsp;</i>Voltar</button></a>
                            <a title="Atualizar"><button type="submit" name="updatebtn" class="btn btn-primary uptadebtn"><i class="fas fa-edit">&nbsp;</i>Atualizar</button> </a>
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


