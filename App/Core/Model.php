<?php

namespace App\Core;

class Model {

    //vamos aplicar o padrão de projeto Singleton
    private static $conexao;

    public static function getConexao(){
        //se a conexão não estiver criada, criamos ela
        if(!isset($conexao)){
            self::$conexao = new \PDO("mysql:host=localhost;port=3306;dbname=icatalogo2;", "root", "bcd127");
        }
        
        //retornamos a conexão
        return self::$conexao;
    }
}