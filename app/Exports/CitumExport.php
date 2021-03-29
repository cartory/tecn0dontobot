<?php

namespace App\Exports;

use App\Models\Citum;
use Maatwebsite\Excel\Concerns\FromCollection;

class CitumExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Citum::all();
    }
}
