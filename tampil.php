<?php

$database = new database;
$this->db = $database->db;

$i=1;
foreach($arraygambar as $data){
echo "<tr><td>".$data['nama']."</td>
          <td width=200>".$data[keterangan]." </td>
                                  <td><img src='foto/$data[filename]' width=70 height=50 ></td>
                                  </tr> ";
$i++;
}

?>