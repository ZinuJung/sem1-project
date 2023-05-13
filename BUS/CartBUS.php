<?php
require_once "DAO/CartDAO.php";

class CartBUS
{
    public static function ShowPro($idAccount)
    {
        return CartDAO::ShowPro($idAccount);
    }

    public static function UpdateQuantity($quantity, $idAccount)
    {
        return CartDAO::UpdateQuantity($quantity, $idAccount);
    }

    public static function addCart($idPro, $idAccount, $quantity)
    {
        if (CartDAO::checkCart($idPro, $idAccount)) {
            return CartDAO::addPro2($idPro, $idAccount);
        }else{
            return CartDAO::addPro($idPro, $idAccount, $quantity);
        }
    }

    public static function updateSL($quantity, $idPro, $idAccount)
    {
        return CartDAO::updateSL($quantity, $idPro, $idAccount);    
    }

        public static function delCart($idPro, $idAccount)
    {
        return CartDAO::delCart($idPro, $idAccount);
    }

    public static function Total($idAccount)
    {
        return CartDAO::total($idAccount);
    }

}

