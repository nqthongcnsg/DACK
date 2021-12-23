<?php 
if (!defined('HOST')) exit;
class size extends Db
{


    function getAll()
    {
        return $this->selectQuery('select * from zise');
    }

    function getById($maloai)
    {
        return $this->selectQuery('select * from zise where idzise=?', [$maloai]);
    }

    
    function delete($maloai)
    {
        return $this->selectQuery('delete from zise where idzise=?', [$maloai]);
    }
   
 
    function updateSach($sql, $arr=[])
    {
        return $this->updateQuery($sql, $arr);
    }
   

    

}