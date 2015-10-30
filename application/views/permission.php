<?php 
    
    function allowed ($sessdata,$action){
    
        return (strpos($sessdata,$action) ==TRUE);    
   }
     $see = $this -> session -> userdata('views');
 ?>