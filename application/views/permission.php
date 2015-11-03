<?php 
    $role=$this -> session -> userdata('role');
    $see = $this -> session -> userdata('views');
    function allowed ($sessdata,$action){
    
        return (preg_match($sessdata,$action) ==TRUE);    
   }
   function permission ($sessdata,$action){
    
        return (preg_match($sessdata,$action) ==TRUE);    
   }
     
 ?>