<?php

namespace App\DataTables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;


class UsersDataTable extends DataTable
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
            ->editColumn('f_name    ', function ($user) {
                return $user->f_name . " " . $user->l_name ?? '-';
            })
            ->editColumn('action', function ($customer) {
                return '<i class="ri-edit-2-line fs-3"></i> ';
            })
            ->rawColumns(['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model): QueryBuilder
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
            ->setTableId('users-table')
            ->addColumn(['data' => 'id',            'name' => 'id',         'title' => __('SL No')])
            ->addColumn(['data' => 'user_id',       'name' => 'user_id',   'title' => __('User Id')])
            ->addColumn(['data' => 'sponsor_id',    'name' => 'sponsor_id', 'title' => __('Sponser Id')])
            ->addColumn(['data' => 'f_name',        'name' => 'f_name',  'title' => __('Full Name')])
            ->addColumn(['data' => 'email',         'name' => 'email',      'title' => __('Email')])
            ->addColumn(['data' => 'phone',         'name' => 'phone',      'title' => __('Mobile')])
            ->addColumn(['data' => 'phone',         'name' => 'phone',      'title' => __('Blocked Status')])
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
        return 'Users_' . date('YmdHis');
    }
}
