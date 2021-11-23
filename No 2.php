<?php 

require_once '../Interface Abstract/Interface.php';

class Airplane implements Flyer {
    public function takeOff() {
        return 'Pesawat lepas landas..';
    }
    
    public function land() {
        return 'Pesawat mendarat';
    }

    public function fly() {
        return 'Pesawat dalam perjalanan';
    }
}

class Bird implements Flyer {
    public function takeOff() {
        return 'Burung mencari makan';
    }
    
    public function land() {
        return 'Burung kembali pulang';
    }

    public function fly() {
        return 'Burung terbang';
    }

    public function buildNest() {
        return 'Burung membuat sarang';
    }

    public function layEggs() {
        return 'Burung bertelur';
    }
}

class Superman implements Flyer {
    public function takeOff() {
        return 'Ironman mengejar Thanos';
    }
    
    public function land() {
        return 'Ironman melawan Thanos';
    }

    public function fly() {
        return 'Ironman melancarkan pukulan';
    }

    public function leapBuilding() {
        return 'Thanos terpental menabrak bangunan pencakar langit';
    }

    public function stopBullet() {
        return 'Polisi menembaki Ironman namun ditangkis';
    }
}
$airplane = new Airplane;
$bird = new Bird;
$superman = new Superman;