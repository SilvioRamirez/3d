<?php

namespace App\DataTables;

use App\Models\Votante;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class VotantesDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Votante $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('votantes-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom("<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>"."<'row'<'col-sm-12'tr>>"."<'row'<'col-sm-5'i><'col-sm-7'p>>")
                    ->orderBy(1)
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
     */
    public function getColumns(): array
    {
        return [
            /* Column::make('id'), */
            Column::make('nac')->title('nac'),
            Column::make('cedula')->title('cedula'),
            Column::make('p_apellido')->title('p_apellido'),
            Column::make('s_apellido')->title('s_apellido'),
            Column::make('p_nombre')->title('p_nombre'),
            Column::make('s_nombre')->title('s_nombre'),
            Column::make('sexo')->title('sexo'),
            Column::make('fec_nac')->title('fec_nac'),
            Column::make('edad')->title('edad'),
            Column::make('estado')->title('estado'),
            Column::make('municipio')->title('municipio'),
            Column::make('parroquia')->title('parroquia'),
            Column::make('cod_cv')->title('cod_cv'),
            Column::make('centro_votacion')->title('centro_votacion'),
            Column::make('voto_esequibo')->title('voto_esequibo'),
            Column::make('estructura')->title('estructura'),
            Column::make('comision')->title('comision'),
            //Column::make('direccion')->title('direccion'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Votantes_' . date('YmdHis');
    }
}
