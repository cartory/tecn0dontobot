<?php

namespace App\Exports;

use App\Models\Recetum;

use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class RecetumExport implements FromCollection, ShouldAutoSize, WithHeadings, WithColumnWidths, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Recetum::all();
    }

    public function headings(): array {
        return Recetum::columns();
    }

    public function columnWidths(): array {
        return [
            'A' => 5,

            'B' => 10,
            'C' => 20,

            'D' => 25,
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
