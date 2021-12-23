<?php 
if (!defined('HOST')) exit;
class discount extends Db
{


    function getAll()
    {
        return $this->selectQuery('select * from discount');
    }

    function getById($maloai)
    {
        return $this->selectQuery('select * from discount where idDiscount=?', [$maloai]);
    }

    
    function delete($maloai)
    {
        return $this->selectQuery('delete from discount where idDiscount=?', [$maloai]);
    }
   
 
    function updateSach($sql, $arr=[])
    {
        return $this->updateQuery($sql, $arr);
    }
   

    

}