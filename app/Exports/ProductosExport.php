<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductosExport implements FromCollection
{


    public $precio;
    
    public function __construct($precio=0)
    {
        $this->precio = $precio;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       // return Producto::where("precio", ">", $this->precio)->get();
        // $sql = "select * from productos where precio > ?";
        $sql = "select * from productos where precio > $this->precio";

        // return collect(DB::select($sql, [$this->precio]));
        return collect(DB::select($sql));
    }
}
