<?php
require_once "../DAO/CategoryDAO.php";

class CategoryBUS
{
    public static function addCategory($nameCategory)
    {
        return CategoryDAO::addCategory($nameCategory);
    }

    public static function getDataById($idCategory)
    {
        return CategoryDAO::getDataById($idCategory);
    }


    public static function repairCategory($nameCategory, $status, $idCategory)
    {
        return CategoryDAO::repairCategory($nameCategory, $status, $idCategory);
    }

    public static function checkCategory($idCategory)
    {
        return CategoryDAO::checkCategory($idCategory);
    }
}
