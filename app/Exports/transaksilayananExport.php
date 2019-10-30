<?php

namespace App\Exports;

use App\Pesanlayanan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class transaksilayananExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pesanlayanan::all();
    }

    public function map($transaksilayanan): array
    {
        return [
        	$transaksilayanan->id,
            $transaksilayanan->nama_alat,
            $transaksilayanan->nama_pesanan,
            $transaksilayanan->nama_pendaftar_pesanan,
            $transaksilayanan->model_warna,
            $transaksilayanan->bahan,
            $transaksilayanan->ukuran,
            $transaksilayanan->gram,
            $transaksilayanan->cast,
            $transaksilayanan->biaya,
            $transaksilayanan->tanggal_mulai,
            $transaksilayanan->tanggal_selesai,
            $transaksilayanan->upload_gambar
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
            'CAST',
            'TOTAL BIAYA',
            'TANGGAL MULAI',
            'TANGGAL SELESAI',
            'UPLOAD GAMBAR'

        ];
    }
}
