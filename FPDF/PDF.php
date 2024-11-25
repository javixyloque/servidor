<?php
require_once'C:\Users\javier.alvcen\Documentos\htdocs\fpdf\fpdf.php';
$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(40, 10, 'PDF generado con FPDF');

// NOMBRE Y OPCIÓN DE DESCARGA
// LA I ES PARA MOSTRAR, LA D ES PARA DESCARGAR
$pdf ->Output("prueba.pdf", "I");
?>