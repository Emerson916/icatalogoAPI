<?php

session_start();

use App\Core\Controller;

class Categorias extends Controller{

    public function index(){

        $categoriaModel = $this->model("Categoria");

        $categorias = $categoriaModel->listarTodas();

        //para mostrar todas as categorias possiveis
       echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }

    public function find($id){

        $categoriaModel = $this->model("Categoria");

        $categorias = $categoriaModel->buscarPorId($id); 

       if($categorias){
            echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
       }else{
           http_response_code(404);
           echo json_encode(["erro" => "Categoria não encontrada!!"]);
       } 
    }
}