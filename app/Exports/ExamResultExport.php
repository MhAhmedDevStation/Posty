<?php

namespace App\Exports;

use App\Models\ExamResult;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExamResultExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ExamResult::all();
    }
    
}
