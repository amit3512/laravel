<?php

namespace App\Exports;

use App\Subject;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SubjectsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Subject::all();
    }

    public function headings(): array
    {
        return [
            'S.N',
            'Subject ID',
            'Subject Name',
            'Created at',
            'Updated at'
            
            
        ];
    }
}
