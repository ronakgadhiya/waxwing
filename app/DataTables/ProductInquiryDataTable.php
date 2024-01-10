<?php

namespace App\DataTables;

use App\Models\ProductInquiry;
use App\Models\Product;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProductInquiryDataTable extends DataTable
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
            ->editColumn('product',function ($row) {
                return $row['productName']['name'];
            })
            ->addColumn('action',function ($row) {
                return $this->checkrights($row);
            })
            ->rawColumns(['action', 'product']);
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

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ProductInquiry $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ProductInquiry $model)
    {
        $model = ProductInquiry::with(['productName'])->select()->orderBy('id','desc');

        if (request()->get('name', false)) {
            $model->where('name', 'like', "%" . request()->get("name") . "%");
        }
        if (request()->get('product', false)) {
            $model->where('product_id', 'like', "%" . request()->get("product") . "%");
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
                    ->setTableId('productinquiry-table')
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
        return 'ProductInquiry_' . date('YmdHis');
    }
}
