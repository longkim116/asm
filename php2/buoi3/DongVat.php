<?php

    class DongVat{
        // phạm vi truy cập, access modifier
        // Private, Public, Protected, default
       
        //Thuộc tính (Protected)
        public $name;
        public $mauLong;
        public $soChan;
         // hàm tạo (constructor)
         public function __construct($name, $mauLong, $soChan){
            $this->name = $name;
            $this->mauLong = $mauLong;
            $this->soChan = $soChan;
         }

        //Phương thức (method)
        public function tiengKeu($tieng){
            echo $tieng;
        }
        //getter
        public function getName(){
            return $this->name;
        }
        // Setter
        public function setName($name){
            $this->name =$name;
        }
        // hàm hủy (destructor)
        public function __destruct(){
            echo "đối tượng đã bị hủy";
        }
    }
    // Khởi tọa opject
    $choA = new DongVat('Đạt', 'vàng','4');
    echo $choA->getName();
    $choA->setName('dương');
    echo $choA->getName();
    $choA->tiengKeu('gâu gâu');