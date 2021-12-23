<?php 
if (!defined('HOST')) exit;
class admin extends Db
{


    function getAll()
    {
        return $this->selectQuery('SELECT * FROM quantri ');
    }
    function select($sql, $arr=[])
    {
        return $this->selectQuery($sql, $arr);
    }


    

    
   
   

   

    

}