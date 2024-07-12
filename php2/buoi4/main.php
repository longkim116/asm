<?php
require_once 'bt1.php';
require_once 'bt1.1.php';

$sansung = new loaiSP('001', 'sansung');
$sansungS22 = new sanpham('Sp01', 'samssungS22', '14000000', '1', '001');
// var_dump($sansung);
// var_dump($sansungS22);
$sp1 = new sanpham('SP001','samsungs22','21000000','1','001');
$sp2 = new sanpham('SP001','samsungs23','22000000','10','001');
$sp3 = new sanpham('SP001','samsungs24','23000000','20','001');
$sp4 = new sanpham('SP001','samsungs25','24000000','30','001');
$sp5 = new sanpham('SP001','samsungs26','25000000','40','001');
 $tongGia = $sp1->getGia() +  $sp2->getGia() + $sp3->getGia() + $sp4->getGia() + $sp5->getGia();
 echo $tongGia;