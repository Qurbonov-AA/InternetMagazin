<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graph extends CI_Controller {
    
    
    Public function get_kat()
    {
         $dates = $this->db->query("SELECT g.t_name , b.count*b.price  as all_summ, b.dates FROM `basket` b , goods g
               WHERE g.id = b.id_good
               group by g.id")->result_array();
               echo json_encode($dates);
                echo "[";
                foreach($dates as $q)
                {
                  echo '["'.$q['t_name'].'",'.$q['all_summ'].'],';
                }
                echo "['dates',0]";
                echo "]";
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}