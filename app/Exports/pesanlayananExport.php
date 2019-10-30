<?php

namespace App\Exports;

use App\Pesanlayanan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class pesanlayananExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pesanlayanan::all();
    }

    public function map($pesanlayanan): array
    {
        return [
        	$pesanlayanan->id,
            $pesanlayanan->nama_alat,
            $pesanlayanan->nama_pesanan,
            $pesanlayanan->nama_pendaftar_pesanan,
            $pesanlayanan->model_warna,
            $pesanlayanan->bahan,
            $pesanlayanan->ukuran,
            $pesanlayanan->gram,
          //  $pesanlayanan->cast,
          //  $pesanlayanan->biaya,
          //  $pesanlayanan->tanggal_mulai,
          //  $pesanlayanan->tanggal_selesai,
            $pesanlayanan->upload_gambar
        ];
    }

     public function headings(): array
    {
        return [
            'ID',
            'NAMA ALAT',
            'NAMA PESANAN',
            'NAMA PENDAFTAR PESANAN',
            'MODEL ATAU WARNA',
            'BAHAN',
            'UKURAN',
            'GRAM',
           // 'CAST',
           // 'TOTAL BIAYA',
           // 'TANGGAL MULAI',
           // 'TANGGAL SELESAI',
            'UPLOAD GAMBAR'

        ];
    }
}
