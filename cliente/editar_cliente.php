<?php
require_once('../valida_session/valida_session.php');
require_once('../layout/header.php'); 
require_once('../layout/sidebar.php'); 
require_once ('../bd/bd_cliente.php');

$codigo = $_GET['cod'];
$dados = buscaClienteeditar($codigo);
$nome = $dados["nome"];
$cpf = $dados["cpf"];
$email = $dados["email"];
$endereco = $dados["endereco"];
$numero = $dados["numero"];
$bairro = $dados["bairro"];
$cidade = $dados["cidade"];
$telefone = $dados["telefone"];
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
                        <h6 class="m-0 font-weight-bold text-primary" id="title">ATUALIZAR DADOS DO CLIENTE</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <form class="user" action="editar_cliente_envia.php" method="post">
                    <input type="hidden" name="cod" value="<?=$codigo?>">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label> Nome Completo </label>
                            <input type="text" class="form-control form-control-user" id="nome" name="nome" placeholder="Nome Completo" value="<?php echo $nome ?>" required>
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label> CPF </label>
                            <input type="cpf" class="form-control form-control-user" id="cpf" name="cpf" placeholder="CPF" value="<?php echo $cpf ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label> Email </label>
                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Endereço de Email" value="<?php echo $email ?>" required>
                        </div>
                        <div class="col-sm-6">
                            <label> Telefone </label>
                            <input type="tel" class="form-control form-control-user" id="telefone" name="telefone" placeholder="(xx)xxxxx-xxxx" maxlength="15" value="<?php echo $telefone ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label> Endereço </label>
                            <input type="text" class="form-control form-control-user" id="endereco" name="endereco" placeholder="Endereço" value="<?php echo $endereco ?>" required>
                        </div>
                        <div class="col-sm-6">
                            <label> Número </label>
                            <input type="number" class="form-control form-control-user" id="numero" name="numero" placeholder="Número" value="<?php echo $numero ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label> Bairro </label>
                            <input type="text" class="form-control form-control-user" id="bairro" name="bairro" placeholder="Bairro" value="<?php echo $bairro ?>" required>
                        </div>
                        <div class="col-sm-6">
                            <label> Cidade </label>
                            <input type="text" class="form-control form-control-user" id="cidade" name="cidade" placeholder="Cidade" value="<?php echo $cidade ?>" required>
                        </div>
                    </div>

                    <div class="card-footer text-muted" id="btn-form">
                        <div class=text-right>
                            <a title="Voltar" href="cliente.php"><button type="button" class="btn btn-success"><i class="fas fa-arrow-circle-left"></i>&nbsp;</i>Voltar</button></a>
                            <button type="submit" name="updatebtn" class="btn btn-primary uptadebtn"><i class="fas fa-fw fa-user">&nbsp;</i>Atualizar Dados</button>
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


