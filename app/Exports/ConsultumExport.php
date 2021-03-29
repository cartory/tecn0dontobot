<?php

namespace App\Exports;

use App\Models\Consultum;

use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class ConsultumExport implements FromCollection, ShouldAutoSize, WithHeadings, WithColumnWidths, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Consultum::all();
    }

    public function headings(): array {
        return Consultum::columns();
    }

    public function columnWidths(): array {
        return [
            'A' => 5,

            'B' => 25,
            'C' => 7,
            
            'D' => 25,
            'E' => 25,
            'F' => 25,
        ];
    }

    public function styles(Worksheet $sheet) {
        $sheet->getStyle('A1:F1')->getFont()->setSize(13);
    }
}
