<?php

use App\Produto;

include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");

$produtos = Produto::listar();


?>

<main class="container">
    <h2 class="text-center">Lista de Produtos</h2>

    <a href="/simulado/view/produto/cadastrar.php" class="btn btn-success mb-3">
        Cadastrar Produto
    </a>

    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Código</th>
                <th>Marca</th>
                <th>Data Validade</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($produtos as $produto) { ?>
                <tr>
                    <td><?= $produto->id ?></td>
                    <td><?= $produto->nome ?></td>
                    <td><?= $produto->descricao ?></td>
                    <td><?= $produto->codigo ?></td>
                    <td><?= $produto->marca ?></td>
                    <td><?= $produto->dtn_validade ?></td>
                    <td><?= $produto->quantidade ?></td>
                    <td><?= $produto->valor ?></td>
                    <td>
                        <a href="/simulado/view/produto/editar.php?id=<?= $produto->id ?>" class="btn btn-primary">Editar</a>

                        <a href="/simulado/action/action_produto.php?action=excluir&id=<?= $produto->id ?>"
                           class="btn btn-danger"
                           onclick="return confirm('Deseja excluir este produto?');">
                            Excluir
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>

<?php include("../includes/rodape.php"); ?>