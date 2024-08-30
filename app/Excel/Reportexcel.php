<?php

namespace App\Excel;

use PHPExcel;
use PHPExcel_IOFactory;
use PHPExcel_Style_Alignment;

use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;

class Reportexcel
{
    private $data;
    private $kol;

    public function __construct( $dt, $kol )
    {
        $this->data = $dt;
        $this->kol = $kol;
    }

    public function save($fname='excel')
    {
        $excel = new PHPExcel();
        $excel->setActiveSheetIndex(0);

        // Isi data pada file excel
        $sheet = $excel->getActiveSheet();
        // buat kolom header pada excel
        $kole = 65;
        foreach( $this->kol as $k => $v)
            $sheet->setCellValue(chr( $kole++ ).'1', $v );

        // lakukan pengisian data pada body excel mulai dari row 2
        $row = 2;
        $kole = 65;
        foreach( $this->data as $dt )
        {
            $kole = 65;
            foreach( $dt as $k => $v)
            {
                $sheet->setCellValue(chr($kole++).$row, (string)$v);
            }
            $row++;
        }
        // Atur style pada file excel
        // mengatur bold pada header
        $sheet->getStyle('A1:'.chr( $kole ).'1')->getFont()->setBold(true);
        $sheet->getStyle('A1:'.chr( $kole ).'1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        // $sheet->getColumnDimension('A')->setWidth(30);
        $kole = 65;
        foreach( $this->kol as $k => $v)
            $sheet->getColumnDimension(chr($kole++))->setAutoSize(true);

        // mengatur halaman
        // $sheet->getPageSetup()->setOrientation(PageSetup::ORIENTATION_POTRAIT);
        // $sheet->getPageSetup()->setPaperSize(PageSetup::PAPERSIZE_A4);
        // Set nama file excel
        $filename = $fname."-" . date('YmdHis') . ".xlsx";
        // Buat file excel dan download
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $writer = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $writer->save('php://output');
        exit;
    }

}