<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ExportMulti implements WithMultipleSheets
{
    /**
    
@return \Illuminate\Support\Collection*/
  public function sheets(): array{
   return["Data User" => new UsersExport(),
   "Data Pemakaian" => new DataPemakaianExport(),
   "Data Barang" => new DataBarangExport(),
   "Data Pembelian" => new DataPembelianExport(),
   "Data Ruangan" => new DataRuanganExport(),];
  }
}
