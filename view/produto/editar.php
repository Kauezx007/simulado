<?php
use App\Produto;
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");

$id = $_GET['id'];
if (!$id) {
    die('ID do produto não foi informado!');
}
$produto = Produto::buscarPorId($id);
?>
<main class="container">
    <form action="/simulado/action/action_produto.php?action=alterar&id=<?= $id ?>" method="post">
        Nome * : <input type="text" name="nome" value="<?= $produto->nome ?>" required class="form-control"><br>
        Descrição : <input type="text" name="descricao" value="<?= $produto->descricao ?>" class="form-control"><br>
        Codigo * : <input type="number" name="codigo" value="<?= $produto->codigo ?>" required class="form-control"><br>
        Marca * : <input type="text" name="marca" value="<?= $produto->marca ?>" required class="form-control"><br>
        Data Validade * : <input type="date" name="dtn_validade" value="<?= $produto->dtn_validade ?>" required class="form-control"><br>
        Quantidade * : <input type="number" name="quantidade" value="<?= $produto->quantidade ?>" required class="form-control"><br>
        Valor * : <input type="number" name="valor" value="<?= $produto->valor ?>" required class="form-control"><br>
        <input type="submit" value="Alterar" class="btn btn-primary">
    </form>
</main>
<?php include("../includes/rodape.php"); ?>