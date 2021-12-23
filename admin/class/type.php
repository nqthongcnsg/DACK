<?php 
if (!defined('HOST')) exit;
class type extends Db
{


    function getAll()
    {
        return $this->selectQuery('select * from type');
    }

    function getById($maloai)
    {
        return $this->selectQuery('select * from type where idType=?', [$maloai]);
    }

    
    function delete($maloai)
    {
        return $this->selectQuery('delete from type where idType=?', [$maloai]);
    }
   
 
    function updateSach($sql, $arr=[])
    {
        return $this->updateQuery($sql, $arr);
    }
   

    

}