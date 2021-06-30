<?php

namespace App\Imports;

use App\Models\ApplicationAssignment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToArray;

class ApplicationAssignmentImport implements ToModel, ToArray,WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return $row;
        // return new ApplicationAssignment([
        //     //
        // ]);
    }

    public function array(array $row)
    {
        // return $row;
        // return new ApplicationAssignment([
        //     //
        // ]);
    }
}
