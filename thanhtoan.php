<?php
include './config.php';
include './pdo.php';
if(!isset($_SESSION)) session_start();
if(isset($_SESSION['user'])){
	
	
    $sql='select * from giohang join product on giohang.idProduct=product.idProduct where email =?';
    $a=[$_SESSION['user']];
    $tam=$objPDO->prepare($sql);
    $tam->execute($a);
    $data1=$tam->fetchALL(PDO::FETCH_OBJ);
    $sql='select * from user  where email =?';
    $a=[$_SESSION['user']];
    $tam=$objPDO->prepare($sql);
    $tam->execute($a);
    $user=$tam->fetch(PDO::FETCH_OBJ);
    $email=isset($_GET['email'])?$_GET['email']:$_SESSION['user'];
    $ten=isset($_GET['ten'])?$_GET['ten']:'';
    $diachi=isset($_GET['diachi'])?$_GET['diachi']:'';
    $dienthoai=isset($_GET['sdt'])?$_GET['sdt']:'';
    $datestart = date('Y/m/d h:i:s ');
    $dateend=date('Y/m/d');
    
    $timestamp = time();
    $mahd=$email.$timestamp;
    $sql='insert into hoadon(mahd,email,ngayhd,tennguoinhan,diachinguoinhan,ngaynhan,dienthoai) values(?,?,?,?,?,?,?)';
    $b=[$mahd,$email,$datestart,$ten,$diachi,$dateend,$dienthoai];
    $t=$objPDO->prepare($sql);
    $t->execute($b);
    
    $mahoadon=$mahd;
    $ipProduct='';
    $soluong=0;
    $gia=0;
    $s='';
    foreach($data1 as $v){
        $ipProduct=$v->idProduct;
       
        $soluong=$v->soluong;
        $gia=$v->gia;
        $s=$v->size;
        $sql='insert into chitiethd(mahd,idProduct,soluong,gia,size) values(?,?,?,?,?)';
        $c=[$mahoadon,$ipProduct,$soluong,$gia,$s];
        $t=$objPDO->prepare($sql);
        $t->execute($c);
    }
    $sql='delete from giohang where email= ?';
    $t=$objPDO->prepare($sql);
    $t->execute($a);
   
    echo '<script language="javascript">';
    echo 'alert("Bạn đã thanh toán thành công, Bạn hãy chờ hàng sẽ được giao trong vài ngày")';
    echo '</script>';
    header( "refresh:0.5;url=checkout.php" );

    
}else
{
    echo '<script language="javascript">';
    echo 'alert("Bạn hãy đăng nhập account")';
    echo '</script>';
    header( "refresh:0.5;url=login.php" );

}

