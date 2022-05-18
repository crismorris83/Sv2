<?php

    require_once "../../controller/user.controller.php";
    require_once "../../model/dao/user.dao.php";
    require_once "../../model/dto/user.dto.php";
    require_once "../../model/conexion.php";
    class Reporte{

        private $pdf;

        public function __construct(){
            include "vendor/fpdf.php";
            

        }

        public function viewAll(){

           
            $pdf->AddPage();
            
           

            try {
                $objDtoUser = new User();
                $objDaoUser = new UserModel($objDtoUser);
                $respon = $objDaoUser -> mldSearchAllUser() -> fetchAll();
            } catch (exeption $e) {
                print "there was a mistake on the creation of the display controller ". $e ->getMesagge();
            }

            $fila = 10;

            foreach($respon as $key => $value){

                $pdf->Cell(10,$fila,'POO');
                $pdf->Ln(10);
                $fila+=10;
                
            }
            $pdf->Output();

        }

        public function headReport(){
            $pdf ->SetFont('Arial','B',16);

            $pdf ->cell(80);

            $pdf ->cell(30,10,"title");

        }
    }

    $pdf = new FPDF();
    $objView = new Reporte();
    $objView -> viewAll();

?>