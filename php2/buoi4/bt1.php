<?php
 class sanpham{
    private $ma_sanpham;
    private $ten;
    private $gia;
    private $soluong;
    private $loai;
    public function getGia(){
        return $this->gia;
    }
    public function __construct($ma_sanpham,$ten,$gia,$soluong,$loai){
        $this->ma_sanpham =$ma_sanpham;
        $this->ten =$ten;
        $this->gia =$gia;
        $this->soluong =$soluong;
        $this->loai =$loai;
    }
 }