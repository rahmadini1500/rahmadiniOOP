<?php
class Matakuliah {
    var $name; 
    function set_Matakuliah($new_name) {
        $this->name = $new_name; 
    }

    function get_name() {
        return $this->name;
    }
}

$Matakuliah1 = new Matakuliah(); 
$Matakuliah1->set_Matakuliah("Pemrograman SQL I");
echo "MataKuliah Pertama adalah: " . $Matakuliah1->get_name(); 
$Matakuliah2 = new Matakuliah();
$Matakuliah2->set_Matakuliah("Pemrograman Web II");
echo "<br>MataKuliah Kedua adalah: " . $Matakuliah2->get_name(); 
?>