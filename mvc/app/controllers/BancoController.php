<?php
namespace app\controllers;

class BancoController{
    public function index(){
        return $this->view("BancoView", [
            'title'=>'Banco',
        ]);
    }

    public function inicio(){
        return $this->view("InicioView");
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

    public function enviar(){
        if($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST['capital'], $_POST['interes'], $_POST['cuotas'])){
            $capital = $_POST['capital'];
            $i = $_POST['interes'];
            $coutas = $_POST['cuotas'];

            $Pago = $capital * (($i*(1+$i)**$coutas) / ((1+$i)**$coutas -1));

            return $this->view("EnviadosView", [
                'capital'=>$capital,
                'pago'=>$Pago,
            ]);
        }else{
            echo "No se encontro.";
        }
    }
}
?>