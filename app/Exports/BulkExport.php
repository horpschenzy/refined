<?php

namespace App\Exports;

use App\Models\Application;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BulkExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return Application::query()->with('user')->whereRaw('add_to_count = 1')->where('status', 'approved')->get();
        /*you can use condition in query to get required result
         return Bulk::query()->whereRaw('id > 5');*/
    }

    public function map($applicant): array
    {
        return [
            $applicant->id,
            $applicant->firstname,
            $applicant->lastname,
            $applicant->user->reg_no,
            $applicant->email,
            $applicant->phone,
            $applicant->telegram_phone,
            $applicant->country,
            $applicant->state,
            $applicant->maritalstatus,
            $applicant->gender,
        ];
    }

    public function headings(): array
    {
        return [
            'Id',
            'First Name',
            'Last Name',
            'Red No.',
            'Email',
            'Phone Number',
            'Telegram Phone Number',
            'Country',
            'State',
            'Marital Status',
            'Gender',
        ];
    }

}
