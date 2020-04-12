<?php

namespace App\Exports;

use App\Sale;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SalesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sale::select(
            'id', 
            'service_1', 
            'price_1', 
            'service_2', 
            'price_2', 
            'service_3', 
            'price_3', 
            'service_4', 
            'price_4', 
            'service_5', 
            'price_5',
            'price_extra',
            'change', 
            'total',
            'created_at'
            )->orderBy('created_at', 'DESC')->get();
    }

    public function headings(): array{
        return [
            'Código',
            'Servicio 1',
            'Precio',
            'Servicio 2',
            'Precio',
            'Servicio 3',
            'Precio',
            'Servicio 4',
            'Precio',
            'Servicio 5',
            'Precio',
            'Cargo adicional',
            'Cambio',
            'Total',
            'Fecha',
        ];
    }
}
