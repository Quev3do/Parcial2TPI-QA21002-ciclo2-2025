<?php
namespace app\controllers;

class BancoController{
    public function index(){
        return $this->view("BancoView", [
            'title'=>'Banco',
        ]);
    }

    private function view($vista, $data=[]){
        extract($data);
        if(file_exists("../app/views/$vista.php")){
            ob_start();
            include("../app/views/$vista.php");
            $content = ob_get_clean();
            return $content;
        }else{
            return "No se encontro la vista.";
        }
        return "Hola";
    }
}
?>