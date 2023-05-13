<?php
require_once "DAO/ProductDAO.php";

class ProductBUS
{
    public static function gettop()
    {
        return ProductDAO::gettop();
    }

    public static function GetPro($idPro)
    {
        return ProductDAO::GetPro($idPro);
    }

    public static function SearchGetInfo($namePro)
    {
        return ProductDAO::SearchGetInfo($namePro);
    }

    public static function getData()
    {
        return ProductDAO::getData();
    }
}
