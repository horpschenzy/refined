<?php

namespace App\Exports;

use App\Models\Application;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BulkExport implements FromQuery,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id',
            'First Name',
            'Last Name',
            'Email',
            'Phone Number',
            'Telegram Phone Number',
            'Country',
            'State',
            'Marital Status',
            'Gender',
        ];
    }
    public function query()
    {
        return Application::query()->with('user')->whereRaw('add_to_count = 1')->where('status', 'approved')->select('id','firstname','lastname','email','phone','telegram_phone','country','state','maritalstatus','gender');
        /*you can use condition in query to get required result
         return Bulk::query()->whereRaw('id > 5');*/
    }

    public function map($applicant): array
    {
        return [
            $applicant->id,
            $applicant->firstname,
            $applicant->lastname,
            $applicant->email,
            $applicant->phone,
            $applicant->telegram_phone,
            $applicant->country,
            $applicant->state,
            $applicant->maritalstatus,
            $applicant->gender,
        ];
    }

}
