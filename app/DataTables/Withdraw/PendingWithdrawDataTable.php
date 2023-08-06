<?php

namespace App\DataTables\Withdraw;

use App\Models\Withdraw;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PendingWithdrawDataTable extends DataTable
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
            ->editColumn('pay_amount', function ($withdraw) {
                return $withdraw->amount - $withdraw->fees ?? '0';
            })
            ->editColumn('action', function ($customer) {
                return '<i class="ri-edit-2-line fs-3"></i> ';
            })
            ->rawColumns(['action']);
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PendingWithdraw $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Withdraw $model): QueryBuilder
    {
        return $model->where('status', 0)->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('pendingwithdraw-table')
            ->addColumn(['data' => 'user_id',       'name' => 'user_id',    'title' => __('User Id')])
            ->addColumn(['data' => 'method',        'name' => 'method',     'title' => __('Payment Method')])
            ->addColumn(['data' => 'amount',        'name' => 'amount',     'title' => __('Amount Requested')])
            ->addColumn(['data' => 'fee_rate',      'name' => 'fee_rate',   'title' => __('Fee')])
            ->addColumn(['data' => 'pay_amount',    'name' => 'pay_amount', 'title' => __('Amount To Pay'),  'searchable'     => false])
            ->addColumn(['data' => 'created_at',    'name' => 'created_at', 'title' => __('Day')])
            ->addColumn(['data' => 'action',        'name' => 'action',     'title' => __('Action'), 'width' => '5%', 'searchable'     => false])
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
        return 'PendingWithdraw_' . date('YmdHis');
    }
}
