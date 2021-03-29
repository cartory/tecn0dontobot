<?php

namespace App\Exports;

use App\Models\Odontologo;

use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class OdontologoExport implements FromCollection, WithStyles, WithHeadings, ShouldAutoSize, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Odontologo::all();
    }

    public function headings(): array {
        return Odontologo::columns();
    }

    public function columnWidths(): array {
        return [
            'A' => 5,
            'B' => 15,
            'C' => 20,
            'D' => 10,
            'E' => 15,
            'F' => 7,
            'G' => 25,
            'H' => 25,
            'I' => 25,
        ];
    }

    public function styles(Worksheet $sheet) {
        $sheet->getStyle('A1:I1')->getFont()->setSize(13);
    }
}
