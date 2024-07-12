<?php
class loaiSP{
    private $ma_loai;
    private $ten;
    public function __construct($ma_loai,$ten){
        $this->ma_loai = $ma_loai;
        $this->ten = $ten;
    }
}