<?php

namespace App\DataTables;

use App\Models\Application;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ApplicationDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'application.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Application $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Application $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('application-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax(url("/applicants"))
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('firstname'),
            Column::make('lastname'),
            Column::make('gender'),
            Column::make('agerange'),
            Column::make('pastor_wife'),
            Column::make('maritalstatus'),
            Column::make('email'),
            Column::make('phone'),
            Column::make('prefer_com'),
            Column::make('country'),
            Column::make('state'),
            Column::make('born_again'),
            Column::make('holyghost'),
            Column::make('church'),
            Column::make('setman'),
            Column::make('advert'),
            Column::make('denied_admission'),
            Column::make('take_refined'),
            Column::make('yearofattendance'),
            Column::make('graduate_refined'),
            Column::make('retake'),
            Column::make('expectation'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Application_' . date('YmdHis');
    }
}
