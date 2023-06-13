<?php

namespace App\Exports;

use App\Models\siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SiswaExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return siswa::with('kelasid')->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
            'nisn',
            'kelas',
            'ttl',
            'gender',
        ];
    }

    public function map($siswa): array
    {
        return [
            $siswa->id,
            $siswa->name,
            $siswa->nisn,
            $siswa->kelasid->name,
            $siswa->ttl,
            $siswa->gender,
        ];
    }

}