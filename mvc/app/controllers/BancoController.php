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

    private function enviar(){
        if($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST['capital'], $_POST['interes'], $_POST['cuotas'])){
            $capital = $_POST['capital'];
            //$interes = $_POST['interes'];
            //$coutas = $_POST['cuotas'];
            //echo '.'.$capital.'.'.$interes.'.'.$coutas;
            return $this->view("EnviadosView", [
                'capital'=>$capital,
            ]);
        }else{
            echo "No se encontro.";
        }
    }
}
?>