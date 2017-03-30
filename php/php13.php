$raj = array('name'=>"raj",'age'=>15,'totm'=>85);
$ram = array('name'=>"ram",'age'=>15,'totm'=>95);
$rahul = array('name'=>"rahul",'age'=>15,'totm'=>75);
//print_r($raj)."<br>".print_r($ram)."<br>".print_r($rahul);
$a=array($raj,$ram,$rahul);

print_r($a);
print_r($a[0]["totm"]);


Array ( [0] => Array ( [name] => raj [age] => 15 [totm] => 85 ) [1] => Array ( [name] => ram [age] => 15 [totm] => 95 ) [2] => Array ( [name] => rahul [age] => 15 [totm] => 75 ) ) 85