<?php

namespace App\Exports;

use App\Models\DataBarang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DataBarangExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataBarang::all();
    }

    public function headings(): array
    {
        return [
            'Barang ID',
            'Kode Barang',
            'Kode Pembelian',
            'Nama Barang',
            'Merk',
            'Stok',
            'Harga',
            'Total Harga',
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

    
    }
    
    public function title() : string{
        return 'Data Barang';
    }

    
}
