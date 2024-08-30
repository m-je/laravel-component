<?php

namespace App\PDF;

use TCPDF;
use App\Helpers\Folder;
use App\Models\Persetujuan;

class Safetyclearen extends TCPDF
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

	public function Content($idp)
	{
		$dt = $this->setdata( $idp );

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
		$this->MultiCell(0, 5,"<strong>Safety Clearen</strong>", 0, 'C', false, 1, '', '', true, 0, true);

		$this->SetFont("Helvetica",'',14);
		$kode = implode('',$dt->pluck('kode')->toArray() );
		// $kode = str_replace('#','', $kode);
		$this->MultiCell(0, 5,"<strong>KODE :</strong>".$kode, 0, 'C', false, 1, '', '', true, 0, true);

		$this->Ln(5);

		$kpl = ['No Verifikasi','Nama Kontraktor','Nama Projek','Menu','Tanggal Disetujui','Disetujui Oleh'];
		$html_table = "<table style='border:1px solid black;'>";
		$html_table .= "<tr>";
		$html_table .= "<th>";
		$html_table .= implode("</th><th>", $kpl );
		$html_table .= "</th></tr>";
		// ini isi dari tabel
		$isi = [];
		$n = 1;
		$left_style = "<p style='text-align:left;'>";
		$right_style = "<p style='text-align:right;'>";
		$pt = "</p>";
		foreach( $dt as $k => $v)
		{
			$isi[] = [
				$n++,$v->pemenang->kontraktor->nama_pt,$v->pemenang->projek->nama,ucwords(str_replace('_',' ', $v->jenis_menu)), date('d M Y H.i',strtotime( $v->setuju_at)),$v->setuju_by
			];
		}
		$isi_tabel = "";
		foreach( $isi as $k => $v)
		{
			$isi_tabel .= "<tr>";
			$isi_tabel .= "<td>";
			$isi_tabel .= implode("</td><td>",$v);
			$isi_tabel .= "</td>";
			$isi_tabel .= "</tr>";
		}
		$html_table .= $isi_tabel;
		$html_table .= "</table>";
		$this->SetFont("Helvetica",'',14);
		$this->MultiCell(0, 5,$html_table, 0, 'C', false, 1, '', '', true, 0, true);
		// $this->writeHTMLCell(0, 0, '', '', $html_table);
		$this->Ln(10);
		$ctt = "*Dengan ini kami menyatakan pekerjaan yang dilakukan oleh Perusahaan tersebut telah melakukan safety report dengan baik";
		$this->MultiCell(0, 5,$ctt, 0, 'C', false, 1, '', '', true, 0, true);
	}

	private function setdata($idp)
	{
		$p = Persetujuan::where('pemenang_id', $idp );
		if( auth()->guard('pegawai')->check() )
		{
			return $p->get();
		} else if( auth()->guard('kontraktor')->check() )
		{
			return $p->whereHas('pemenang', function( $query ){
				$query->where('kontraktor_id', auth()->guard('kontraktor')->user()->id );
			})->get();
		}
		return [];
	}
}