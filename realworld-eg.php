database table - training ( title, desc )
<?php
use DbConnect;

class Training {

    // properties
    private $title;      // all classes can access
    private $desc;      // only this class can access

    // methods/functions
    public function create($title, $desc){
        $sql = 'insert into Training title, desc VALUES ($title, $desc)';
        $res = DbConnect::query($sql);
        return $res;
    }

    public function delete(){
        // delete sql command and run
    }

    public function getData(){
        $sql = 'select * from Training';
        $arr = $mysql->query($sql);
        $objarr = [];
        foreach ($arr as $key => $val) {
            $obj = new Training();
            $obj->title = $val['title'];
            $obj->desc = $val['desc'];
            $objarr[] = $obj;
        }
        return $objarr;
    }
}

$train = new Training();
$train->create('oop', 'object orient');








