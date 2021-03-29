<?php

namespace App\Exports;

use App\Models\Agenda;

use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class AgendaExport implements FromCollection, ShouldAutoSize, WithHeadings, WithColumnWidths, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Agenda::all();
    }

    public function headings(): array {
        return Agenda::columns();
    }

    public function columnWidths(): array {
        return [
            'A' => 5,
            'B' => 15,
            'G' => 25,
            'H' => 25,
            'I' => 25,
        ];
    }

    public function styles(Worksheet $sheet) {
        $sheet->getStyle('A1:I1')->getFont()->setSize(13);
    }
}
