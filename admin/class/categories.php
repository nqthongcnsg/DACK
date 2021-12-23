<?php 
if (!defined('HOST')) exit;
class categories extends Db
{


    function getAll()
    {
        return $this->selectQuery('select * from categories');
    }

    function getById($maloai)
    {
        return $this->selectQuery('select * from categories where idCategories=?', [$maloai]);
    }

    
    function delete($maloai)
    {
        return $this->selectQuery('delete from categories where idCategories=?', [$maloai]);
    }
   
 
    function updateSach($sql, $arr=[])
    {
        return $this->updateQuery($sql, $arr);
    }
   

    

}