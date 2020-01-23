<?php
  foreach ($customers as $user){
    echo "<td>".$user->id."</td>";
    echo "<td>".$user->name."</td>";
    echo "<td>".$user->Phone."</td>";
  }
?>