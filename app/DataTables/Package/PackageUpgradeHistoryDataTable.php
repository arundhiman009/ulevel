<?php

namespace App\DataTables\Package;

use App\Models\PackageUpgradeHistory;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PackageUpgradeHistoryDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('action', function ($customer) {
                return '<i class="ri-edit-2-line fs-3"></i> ';
            })
            ->rawColumns(['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PackageUpgradeHistory $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PackageUpgradeHistory $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('packageupgradehistory-table')
            ->addColumn(['data' => 'id',                'name' => 'id',                'title' => __('SL NO')])
            ->addColumn(['data' => 'user_id',           'name' => 'user_id',           'title' => __('User ID')])
            ->addColumn(['data' => 'current_package',   'name' => 'current_package',   'title' => __('Old Package Name')])
            ->addColumn(['data' => 'new_package',       'name' => 'new_package',       'title' => __('Package Name')])
            ->addColumn(['data' => 'amount',            'name' => 'amount',            'title' => __('Amount')])
            ->addColumn(['data' => 'payment_method',    'name' => 'payment_method',    'title' => __('Payment Option')])
            ->addColumn(['data' => 'created_at',        'name' => 'created_at',        'title' => __('Date')])
            ->addColumn(['data' => 'action',            'name' => 'action',            'title' => __('Action'), 'width' => '5%', 'searchable'     => false])
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::make('id'),
            Column::make('add your columns'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'PackageUpgradeHistory_' . date('YmdHis');
    }
}
