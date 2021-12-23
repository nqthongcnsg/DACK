<?php 
if (!defined('HOST')) exit;
class product extends Db
{


    function getAll()
    {
        return $this->selectQuery('select * from product');
    }

    function getById($maloai)
    {
        return $this->selectQuery('select * from product where idProduct=?', [$maloai]);
    }

    function random($n)
    {
        $sql="SELECT * FROM product order by rand() limit 0, $n";
        return $this->selectQuery($sql);
    }
    function delete($maloai)
    {
        return $this->selectQuery('delete from product where idProduct=?', [$maloai]);
    }
    function search($kw)
    {
        $sql ="select * from product where namProduct like ?";
        $arr =["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }

    
    function updateSach($sql, $arr=[])
    {
        return $this->updateQuery($sql, $arr);
    }

    function getType()
    {
        return $this->selectQuery('select * from type');
    }
    function getBrand()
    {
        return $this->selectQuery('select * from brand');
    }
    function getDiscount()
    {
        return $this->selectQuery('select * from discount');
    }
    function getCategories()
    {
        return $this->selectQuery('select * from categories');
    }
    
    
    


   

    

}