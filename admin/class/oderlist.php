<?php 
if (!defined('HOST')) exit;
class oderlist extends Db
{


    function getAll()
    {
        return $this->selectQuery('SELECT * FROM hoadon ');
    }

    

    
   
   

   

    

}