<?php

namespace App\Exports;

use App\Models\DataPemakaian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DataPemakaianExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataPemakaian::all();
    }

    public function headings(): array
    {
        return [
            'Pemakaian ID',
            'Kode Pemakaian',
            'Nama Barang',
            'Nama Pemakai',
            'Jumlah Pakai',
            'Nama Ruangan',
            'Keterangan',
        ];
    }
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:I1')->getFont()->setBold(true);
        $sheet->getStyle('A:I')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        // size sesuai value
        foreach (range('A', 'I') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        $sheet->setTitle('DataPemakaian');
    }
}
