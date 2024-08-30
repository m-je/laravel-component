<?php

namespace App\PDF;

use TCPDF;
use App\Helpers\Folder;

class Sertifikat extends TCPDF
{

	public function __construct()
	{
		parent::__construct('L','mm','A4',true, 'UTF-8',false);
	}
	public function Header()
	{
		// header
	}

	public function Footer()
	{
		// footer
	}

	public function Content($mdl, $level)
	{
		$n = $mdl->id;
		$jmlid = strlen( $n );
		$n = str_repeat('0', 3-$jmlid).$n;
		$bln = (int)date('m',strtotime($mdl->disetujui_at));
		$arr_bln = ['I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII'];
		$blns = $arr_bln[$bln-1];
		$bln = str_repeat('0',2-(strlen($bln))).$bln;
		$thn = (int)date('Y',strtotime($mdl->disetujui_at));
		$nosert = $n.'/CSMS-TPPI/'.$blns.'/'.$thn;
		$nama_pt = $mdl->kontraktor->nama_pt;
		$nama_pt = strtoupper( $nama_pt );
		$berlaku = "01 - ".$bln." - ".($thn+2);
		$dibuat = date('d - m - Y',strtotime($mdl->disetujui_at));
		$lvl = $level['huruf'];

		$this->SetMargins(0,0,0, true);
		$this->SetAutoPageBreak(false,0);
		$fld = new Folder();
		$folder = $fld->getStatic('sertifikat.jpg');
		// $folder = public_path().'/media/static/sertifikat.jpg';
		$resolusi = 500;
		$lebar = $this->getPageWidth();
		$tinggi = $this->getPageHeight();
		$x = 0;
		$y = 0;
		$this->Image($folder, $x, $y, $lebar, $tinggi, '', '', '', false, $resolusi, '', false, false, 0, false, false, false);

		$this->Ln(25);

				$this->SetFont("Helvetica",'',28);
		        $this->MultiCell(0, 5,"<strong>SERTIFIKAT CSMS</strong>", 0, 'C', false, 1, '', '', true, 0, true);

		        $this->SetFont("Helvetica",'',14);
		        $this->MultiCell(0, 5,"No. ".$nosert, 0, 'C', false, 1, '', '', true, 0, true);

		        $this->Ln(7);

		        $this->SetFont("Helvetica",'',14);
		        $this->MultiCell(0, 5,"PT TRANS-PACIFIC PETROCHEMICAL INDOTAMA", 0, 'C', false, 1, '', '', true, 0, true);

		        $this->SetFont("Helvetica",'',14);
		        $this->MultiCell(0, 5,"MENYATAKAN BAHWA", 0, 'C', false, 1, '', '', true, 0, true);

		        $this->Ln(9);

		        $this->SetFont("Helvetica",'',30);
		        $this->MultiCell(0, 5,"<strong>".$nama_pt."</strong>", 0, 'C', false, 1, '', '', true, 0, true);

		        $this->Ln(9);

		        $this->SetFont("Helvetica",'',14);
		        $this->MultiCell(0, 5,"LULUS", 0, 'C', false, 1, '', '', true, 0, true);

		        $this->SetFont("Helvetica",'',14);
		        $this->MultiCell(0, 5,"DENGAN KATEGORI RISIKO <strong>".$lvl."</strong>", 0, 'C', false, 1, '', '', true, 0, true);

		        $this->SetFont("Helvetica",'',14);
		        $this->MultiCell(0, 5,"Berlaku sampai dengan <strong>".$berlaku."</strong>", 0, 'C', false, 1, '', '', true, 0, true);

		        $this->Ln(8);

		        $this->SetFont("Helvetica",'',11);
		        $this->MultiCell(0, 5,"Tuban," .$dibuat, 0, 'C', false, 1, '', '', true, 0, true);

		        $this->SetFont("Helvetica",'',11);
		        $this->MultiCell(0, 5,"PT Trans-Pacific Petrochemical Indotama", 0, 'C', false, 1, '', '', true, 0, true);

		        $this->Ln(11);
		        // ini bagian dari tanda tangan
		        $ttd1 = "Procurement Vice President";
		        $ttd2 = "HSSE Vice President";
		        $spasi = str_repeat("&nbsp;", 80);
		        $this->SetFont("Helvetica",'',11);
		        // $this->MultiCell(0, 5,$ttd1.$spasi.$ttd2, 0, 'C', false, 1, '', '', true, 0, true);
		        $this->MultiCell(0, 5,$ttd2, 0, 'C', false, 1, '', '', true, 0, true);

		        $this->Ln(25);

		        $ttd1 = "<strong>Joko Purnomo</strong>";
		        $ttd2 = "<strong>Rochadi Sugeng I.</strong>";
		        $spasi = str_repeat("&nbsp;", 93);
		        $spasi1 = str_repeat("&nbsp;",14);
		        $spasi2 = str_repeat("&nbsp;", 8);
		        $this->SetFont("Helvetica",'',11);
		        // $this->MultiCell(0, 5,$spasi1.$ttd1.$spasi.$ttd2.$spasi2, 0, 'C', false, 1, '', '', true, 0, true);
		        $this->MultiCell(0, 5,$ttd2, 0, 'C', false, 1, '', '', true, 0, true);
	}
}