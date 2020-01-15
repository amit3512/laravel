<?php

namespace App\Exports;

use App\Sudent;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SudentsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sudent::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Address',
            'Email',
            'Phone No.',
            'Created at',
            'Updated at'
        ];
    }
}
