<?php

namespace Modules\Platform\Companies\Datatables;

use Modules\Platform\Companies\Entities\Company;
use Modules\Platform\Core\Datatable\PlatformDataTable;
use Modules\Platform\Core\Helper\DataTableHelper;
use Yajra\DataTables\EloquentDataTable;

/**
 * Companies datatable
 *
 * Class CompaniesDatatable
 * @package Modules\Platform\Companies\Datatables
 */
class CompaniesDatatable extends PlatformDataTable
{
    const SHOW_URL_ROUTE = 'settings.companies.show';

    protected $editRoute = 'settings.companies.edit';

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        $this->applyLinks($dataTable, self::SHOW_URL_ROUTE);

        $dataTable->filterColumn('created_at', function ($query, $keyword) {
            $dates = DataTableHelper::getDatesForFilter($keyword);

            if ($dates != null) {
                $query->whereBetween('bap_companies.created_at', array($dates[0], $dates[1]));
            }
        });

        $dataTable->filterColumn('subscription_valid_until', function ($query, $keyword) {
            $dates = DataTableHelper::getDatesForFilter($keyword);

            if ($dates != null) {
                $query->whereBetween('bap_companies.subscription_valid_until', array($dates[0], $dates[1]));
            }
        });

        $dataTable->filterColumn('updated_at', function ($query, $keyword) {
            $dates = DataTableHelper::getDatesForFilter($keyword);

            if ($dates != null) {
                $query->whereBetween('bap_companies.updated_at', array($dates[0], $dates[1]));
            }
        });


        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Company $model)
    {
        return $model->newQuery()
            ->leftJoin('bap_companies_plan', 'bap_companies.plan_id', '=', 'bap_companies_plan.id')
            ->select(
                'bap_companies.*',
                'bap_companies_plan.name as company_plan'
            );
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->setTableAttribute('class', 'table table-hover')
            ->parameters([
                'dom' => 'lBfrtip',
                'responsive' => false,
                'stateSave' => true,
                'headerFilters' => true,
                'buttons' => DataTableHelper::buttons(),
                'regexp' => true
            ]);
    }

    /**
     * @return array
     */
    protected function getColumns()
    {
        return
            $this->btnQuick_edit +
            [
                'name' => [
                    'data' => 'name',
                    'name' => 'bap_companies.name',
                    'title' => trans('companies::companies.table.name'),
                    'data_type' => 'text',
                    'filter_type' => 'text'
                ],
                'plan' => [
                    'data' => 'company_plan',
                    'name' => 'bap_companies_plan.name',
                    'title' => trans('companies::companies.table.plan_name'),
                    'data_type' => 'text',
                    'filter_type' => 'text'
                ],
                'is_enabled' => [
                    'title' => trans('companies::companies.table.is_enabled'),
                    'data_type' => 'boolean',
                    'filter_type' => 'select',
                    'select_type' => 'select2',
                    'select_type_options' => [
                        'theme' => "bootstrap",
                        'width' => '100%'
                    ],
                    'filter_data' => [

                        [
                            'value' => 1,
                            'label' => trans('core::core.yes')
                        ],
                        [
                            'value' => 0,
                            'label' => trans('core::core.no')
                        ]
                    ]
                ],
                'user_limit' => ['data' => 'user_limit', 'title' => trans('companies::companies.table.user_limit'), 'data_type' => 'text', 'filter_type' => 'text'],
                'storage_limit' => ['data' => 'storage_limit', 'title' => trans('companies::companies.table.storage_limit'), 'data_type' => 'text', 'filter_type' => 'text'],
                'subscription_valid_until' => ['data' => 'subscription_valid_until', 'title' => trans('companies::companies.table.subscription_valid_until'), 'data_type' => 'date', 'filter_type' => 'bap_date_range_picker',],
                'created_at' => ['data' => 'created_at', 'title' => trans('companies::companies.table.created_at'), 'data_type' => 'datetime', 'filter_type' => 'bap_date_range_picker',],
                'updated_at' => ['data' => 'updated_at', 'title' => trans('companies::companies.table.updated_at'), 'data_type' => 'datetime', 'filter_type' => 'bap_date_range_picker',]
            ];
    }
}
