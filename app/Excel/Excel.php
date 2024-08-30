<?php

namespace App\Excel;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PHPExcel_Worksheet_PageSetup;
use PHPExcel_Style_Alignment;
use PHPExcel_Style_Border;
use PHPExcel_Style_Fill;
use PHPExcel_Style_NumberFormat;

class Excel
{

    private $data;
    private $kolom;

    public function __construct( $data, $kolom )
    {
        $this->data = $data;
        $this->kolom = $kolom;
    }

    public function save()
    {
        $data = $this->data;
        $kol = $this->kolom;
        // Buat file Excel dan atur konfigurasinya
        Excel::create('Report', function($excel) use ($data, $kol) {
            // Buat worksheet baru
            $excel->sheet('Sheet1', function($sheet) use ($data,$kol) {
                // Atur header
                $sheet->row(1, $kol);

                // Atur data
                $row = 2;
                foreach( $data as $item )
                    $sheet->row( $row++, $item);

                // Atur styling
                $kolawal = 65; // kode ascii untuk A
                $kolakhir = $kolawal + count( $kol );
                $sheet->getStyle('A1:'.chr( $kolakhir ).'1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 14
                    ],
                    'fill' => [
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => ['rgb' => 'e6e6e6']
                    ],
                    'borders' => [
                        'allborders' => [
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                            'color' => ['rgb' => '000000']
                        ]
                    ]
                ]);

                $sheet->getStyle('A2:' . chr($kolakhir) . ($row - 1))->applyFromArray([
                    'borders' => [
                        'allborders' => [
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                            'color' => ['rgb' => '000000']
                        ]
                    ]
                ]);

                $sheet->getStyle('A1:' . chr($kolakhir) . ($row - 1))->getAlignment()->setWrapText(true);
                $sheet->getStyle('A1:' . chr($kolakhir) . ($row - 1))->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $sheet->getStyle('A1:' . chr($kolakhir) . ($row - 1))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

                $sheet->getColumnDimension('A')->setWidth(30);
                $sheet->getColumnDimension('B')->setWidth(30);
                $sheet->getColumnDimension('C')->setWidth(30);

                $sheet->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
                $sheet->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

                // $sheet->getStyle('A2:C' . ($row - 1))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
            });
        })->export('xlsx');
    }
}
