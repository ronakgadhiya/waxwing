<?php

namespace App\DataTables;

use App\Models\Contact;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ContactDataTable extends DataTable
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
            ->editColumn('status',function ($row) {
                if($row['status'] == 1 ){
                    return '<div class="form-check form-switch"><input class="form-check-input" onclick="changeStatus(event.target,'.$row['id'].',\'Contact\');" type="checkbox" checked=""></div>';
                }else{ 
                    return '<div class="form-check form-switch"><input class="form-check-input" onclick="changeStatus(event.target,'.$row['id'].',\'Contact\');" type="checkbox"></div>';
                }
            })
            ->addColumn('action',function ($row) {
                return $this->checkrights($row);
            })
            ->rawColumns(['action', 'status']);
    }

    public function checkrights($row)
    {
        $menu = '';
        $deleteurl = 'onclick="actiondelete('.$row->id.')"';
       
        $menu .= '<div class="dropdown ms-auto">
            <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown">  <i class="bx bx-dots-horizontal-rounded font-22"></i></div>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:;" '.$deleteurl.'><i class="fadeIn animated bx bx-trash-alt"></i>&nbsp;&nbsp;'. __('common.delete') .'</a></li>
            </ul>
            </div>';
        
        return $menu;
    }

    public function query(Contact $model)
    {
        $model = Contact::select()->orderBy('id','desc');

        if (request()->get('name', false)) {
            $model->where('name', 'like', "%" . request()->get("name") . "%");
        }

        return $this->applyScopes($model->newQuery());
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('contact-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
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
    protected function filename()
    {
        return 'Contact_' . date('YmdHis');
    }
}
