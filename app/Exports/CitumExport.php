<?php

namespace App\Exports;

use App\Models\Citum;

use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class CitumExport implements FromCollection, ShouldAutoSize, WithHeadings, WithColumnWidths, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Citum::all();
    }

    public function headings(): array {
        return Citum::columns();
    }

    public function columnWidths(): array {
        return [
            'A' => 5,
            
            'B' => 10,
            'C' => 10,
            'D' => 5,
            'E' => 5,

            'F' => 25,
            'G' => 25,
            'H' => 25,
        ];
    }

    public function styles(Worksheet $sheet) {
        $sheet->getStyle('A1:H1')->getFont()->setSize(13);
    }
}
