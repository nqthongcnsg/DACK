<?php 
if (!defined('HOST')) exit;
class brand extends Db
{


    function getAll()
    {
        return $this->selectQuery('select * from brand');
    }

    function getById($maloai)
    {
        return $this->selectQuery('select * from brand where idBrand=?', [$maloai]);
    }

    
    function delete($maloai)
    {
        return $this->selectQuery('delete from brand where idBrand=?', [$maloai]);
    }
   
 
    function updateSach($sql, $arr=[])
    {
        return $this->updateQuery($sql, $arr);
    }
   

    

}