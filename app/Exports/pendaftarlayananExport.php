<?php

namespace App\Exports;

use App\Pendaftarlayanan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class pendaftarlayananExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pendaftarlayanan::all();
    }
     public function map($pendaftarlayanan): array
    {
        return [
        	$pendaftarlayanan->id,
            $pendaftarlayanan->nama_pendaftar,
            $pendaftarlayanan->nip,
            $pendaftarlayanan->nohp,
            $pendaftarlayanan->pekerjaan
        ];
    }

     public function headings(): array
    {
        return [
            'ID',
            'NAMA PENDAFTAR',
            'NIP/NIM/NIK',
            'NO HP',
            'PEKERJAAN'
        ];
    }
}
