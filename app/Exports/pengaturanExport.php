<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class pengaturanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
    public function map($pengaturan): array
    {
        return [
        	$pengaturan->id,
            $pengaturan->name,
            $pengaturan->email,
            $pengaturan->password
        ];
    }

     public function headings(): array
    {
        return [
            'ID',
            'NAMA',
            'EMAIL',
            'PASSWORD'
        ];
    }
}
