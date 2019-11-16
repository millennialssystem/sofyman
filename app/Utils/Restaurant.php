<?php


namespace  App\Utils;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Restaurant extends Model
{
    public static  function GetCheckInfo($id)
    {              
        $DATA = DB::connection('inforestaurant')->select("select * from p1011997 WHERE CODCLIENTE = ? ", [$id]);
        var_dump($DATA);
        return DB::select('SELECT id, id as counts, username as about, id as pricesingle, id as pricetotal, id as total FROM actors', []);    
    }

    public static  function GetRestaurante()
    {   
        //return DB::select('SELECT id, id as name, username as about, id as pricesingle, id as pricetotal, id as total FROM actors', []);
        return DB::connection('inforestaurant')->select("select id, nombre as name, slogan2 as about from empresas ", []);
    }

    public static  function GetGroupArticles()
    {        
        return DB::connection('inforestaurant')->select("select id, IMAGEN as imgurl, NOMBRE as groups from fa011997 ", [])->get()->toArray();
    }

    public static  function GetArticles()
    {   
    //var_dump( DB::connection('inforestaurant')->select("select * from at011997", []));     
        return DB::connection('inforestaurant')->select("select id, DESCRIPCIO, IMPSICOMBINADO, STOCK, IMAGEN, familia from at011997", []);
    }
}
