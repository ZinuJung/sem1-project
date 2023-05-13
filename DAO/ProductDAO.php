<?php
require_once "Connect.php";

class ProductDAO
{
    public static function gettop()
    {
        $sql = "SELECT * FROM Category JOIN Product ON Category.IdCategory = Product.IdCategory JOIN Brands ON Product.IdBrands = Brands.IdBrands LIMIT 5,4";
        return ExecuteSelectQuery($sql);
    }

    public static function GetPro($idPro)
    {
        $sql = "SELECT * FROM Category JOIN Product ON Category.IdCategory = Product.IdCategory JOIN Brands ON Product.IdBrands = Brands.IdBrands WHERE IdPro = :idPro";
        $params = array ("idPro" => $idPro);
        return ExecuteSelectQuery($sql, $params);
    }

    public static function SearchGetInfo($namePro){
        $sql = "SELECT * FROM Category JOIN Product ON Category.IdCategory = Product.IdCategory JOIN Brands ON Product.IdBrands = Brands.IdBrands WHERE NamePro LIKE '%$namePro%' LIMIT 0, 4";
        return ExecuteSelectQuery($sql);
    }

    public static function getData()
    {
        $sql = "SELECT * FROM Category JOIN Product ON Category.IdCategory = Product.IdCategory JOIN Brands ON Product.IdBrands = Brands.IdBrands LIMIT 3,4";
        return ExecuteSelectQuery($sql);
    }
}
