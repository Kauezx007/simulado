<?php
namespace App;

class Produto{
    public $id;
    public $nome;
    public $descricao;
    public $codigo;
    public $marca;
    public $dtn_validade;
    public $quantidade;
    public $valor;
    public function cadastrar(){
    
    $db = new DataBase('produto');
    $this->id = $db->insert([
        'nome' => $this->nome,
        'descricao' => $this->descricao,
        'codigo' => $this->codigo,
        'marca' => $this->marca,
        'dtn_validade' => $this->dtn_validade,
        'quantidade' => $this->quantidade,
        'valor' => $this->valor
    ]);
    return true;
    }

    public function alterar()
    {
        return (new DataBase('produto'))->update('id = ' . (int) $this->id, [
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'codigo' => $this->codigo,
            'marca' => $this->marca,
            'dtn_validade' => $this->dtn_validade,
            'quantidade' => $this->quantidade,
            'valor' => $this->valor
        ]);
    }

    public static function buscarPorId($id)
    {
        return (new DataBase('produto'))->select('id = ' . (int) $id)->fetchObject(self::class);
    }

    public function excluir(){
        return (new DataBase('produto'))->delete('id = '.$this->id);
    }
    public static function listar() {
        return (new DataBase('produto'))
            ->select()
            ->fetchAll(\PDO::FETCH_CLASS, self::class);
    }

}



//    public function alterar()
// {
//     $db = new DataBase();

//     return $db->update($this->id, [
//         'nome' => $this->nome,
//         'descricao' => $this->descricao,
//         'patrimonio' => $this->patrimonio
//     ]);
// }

// public function excluir()
// {
//     $db = new DataBase();

//     return $db->delete($this->id);
// }

// public function select()
// {
//     $db = new DataBase();

//     return $db->select($this->id);
// }
    
