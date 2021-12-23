<?php 
if (!defined('HOST')) exit;
class chitiet extends Db
{


    function getAll()
    {
        return $this->selectQuery('SELECT * FROM  chitiethd JOIN product on chitiethd.idProduct=product.idProduct ');
    }
    function select($sql, $arr=[])
    {
        return $this->selectQuery($sql, $arr);
    }


    

    
   
   

   

    

}