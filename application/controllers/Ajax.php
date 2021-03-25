<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

  Public function menu()
  {
    $menu = $this->input->post("menu");
/* users start   */
     if($menu == 'users')
    {
      $data['users']= $this->db->query("SELECT * from ".$menu)->result_array();
      echo "<table class='table table-hover'>";
      echo "<thead>";
      if ($this->input->post("lang") == 'uz')
      {
        echo "<tr><th>Ismi</th><th>Familiyasi</th><th>Manzil</th><th>Email</th><th>Telefon raqami</th><th>Password</th><th>Settings</th></tr>";
         
      }
      else
      {
        echo "<tr><th>Имя</th><th>Фамилия</th><th>Адрес</th><th>Электронное почта</th><th>Телефонный номер</th><th>Password</th><th>Settings</th></tr>";
         
      }
      
      echo "</thead>";
      echo "<tbody>";

      echo "<tr><td><input type='text' class='form-control' id='first_name'></td><td><input type='text' class='form-control' id='last_name'></td><td><input type='text' class='form-control' id='Company_name'></td><td><input type='email' class='form-control' id='user_email'></td><td><input type='text' class='form-control' id='user_mobile'></td><td><input type='password' class='form-control' id='user_password'></td> <td><button class='btn btn-outline-success' id='btn_users_save'>Save </button></td></tr></tr>";
       foreach ($data['users'] as $u) 
       {
        echo "<tr  id='".$u['id']."'>";
        echo "<td>".$u['first_name']."</td><td>".$u['last_name']."</td><td>".$u['company']."</td><td>".$u['email']."</td><td>".$u['phone']."</td>";
              echo "<td><button type='button' class='btn btn-outline-danger' id='btn_users_del' name='".$u['id']."'>Delete</button></td><td><div class='edit_upd'><button type='button' class='btn btn-outline-info edit_users' name='".$u['id']."' >Edit</button><button class='btn btn-success updusers' name='".$u['id']."'>Update</button></div></td>"; 
        echo "</tr>";
       }

      echo "</tbody>";
      echo "</table>";

    } 
    else if($menu == 'brands')
     {
      $data['brand'] = $this->db->query("SELECT * from ".$menu)->result_array();
      echo "<table class='table table-hover'>";
      echo "<thead>" ;
      if ($this->input->post("lang") == 'uz'){
       echo" <tr> <th> Brand nomi </th><th> ICH Davlati </th> <th> Muddati </th> <th> Settings </th> </tr></thead>";
      }
      else{
        echo" <tr> <th>  Имя бренда </th><th> Государство </th> <th> Продолжительность</th> <th> Settings </th> </tr></thead>";
      }
      
      echo "<tbody>";
      echo "<tr><td><input type='text' class='form-control' id='brand_name'></td><td><input type='text' class='form-control' id='republic'></td><td><input type='text' class='form-control' id='end_date'></td><td><button class='btn btn-outline-success' id='btn_brands_save'>Save </button></td></tr>";
      foreach($data['brand'] as $b)
          {
            echo "<tr id='".$b['id']."'>";  
            echo "<td>".$b['brand_name']."</td><td>".$b['republic']."</td><td>".$b['end_date']."</td>";
            echo "<td><button class='btn btn-outline-danger' id='btn_brands_del' name='".$b['id']."'>Delete</button></td><td><div class='edit_upd'><button class='btn btn-outline-info edit_brands' name='".$b['id']."' >Edit</button><button class='btn btn-success updbrands' name='".$b['id']."'>Update</button></div></td>";
            echo "</tr>";
          }
      echo "</tbody>";
      echo "</table>";
     }
    else if ($menu == 'kategories')
    {
      $data['kategories'] = $this->db->query("SELECT * from ".$menu)->result_array();
      echo "<table class='table table-hover'>";
      echo "<thead> <tr> <th> Kategoriya nomi </th><th>Kategoriya nomi(ru)</th><th>Kategoriya yaratilgan sana </th> <th> rasm url i </th> <th> Settings </th> </tr></thead>";
      echo "<tbody>";
      echo "<tr><td><input type='text' class='form-control' id='kat_name'></td><td><input type='text' class='form-control' id='kat_name_ru'></td><td><input type='text' class='form-control' id='kat_c_date'></td><td><input type='text' class='form-control' id='kat_image_path'></td><td><button class='btn btn-outline-success' id='btn_kat_save'>Save </button></td></tr>";
             foreach($data['kategories'] as $k)
          {
            echo "<tr  id='".$k['id']."'>";
            echo "<td>".$k['kat_name']."</td><td>".$k['kat_name_ru']."</td><td>".$k['d_create']."</td><td>".$k['img']."</td>";
            echo "<td><button class='btn btn-outline-danger' id='btn_kat_del' name='".$k['id']."'>Delete</button></td><td><div class='edit_upd'><button class='btn btn-outline-info edit_kategories' name='".$k['id']."' >Edit</button><button class='btn btn-success updkategories' name='".$k['id']."'>Update</button></div></td>";
            echo "</tr>";
          }
      echo "</tbody>";
      echo "</table>";
    }
    else if ($menu == 'types')
    {
      $data['kats'] = $this->db->query("SELECT * from kategories")->result_array();
      $data['types'] = $this->db->query("SELECT k.kat_name as id_kat, t.type_name,t.type_name_ru,t.d_create,t.d_delete,t.state,t.id   from ".$menu." t, kategories k WHERE t.id_kat = k.id ")->result_array();
      echo "<table class='table table-hover'>";
      echo "<thead> <tr> <th> Kategoriya </th> <th> Sub kategoriya </th><th> Sub kategoriya(ru) </th> <th> Yaratilgan sana </th><th>O`chirilgan sana</th><th>State</th> <th>Settings</th></tr></thead>";
      echo "<tbody>";
      echo "<tr><td><select class='form-control' id='sub_kat_id'>";
          foreach($data['kats'] as $k)
          {
            echo "<option value='".$k['id']."'>".$k['kat_name']."</option>";
          }
      echo "</select></td><td><input type='text' class='form-control' id='sub_kat_name'></td><td><input type='text' class='form-control' id='sub_kat_name_ru'></td><td><input type='text' class='form-control' id='sub_kat_c_date'></td><td><input type='text' class='form-control' id='sub_kat_del_date'></td><td><input type='text' class='form-control' id='sub_kat_state'></td><td><button class='btn btn-outline-success' id='btn_sub_kat_save'>Save </button></td></tr>";
          foreach($data['types'] as $q)
        {
          echo "<tr  id='".$q['id']."'>";
          echo "<td>".$q['id_kat']."</td><td>".$q['type_name']."</td><td>".$q['type_name_ru']."</td><td>".$q['d_create']."</td><td>".$q['d_delete']."</td><td>".$q['state']."</td>";
          echo "<td><button class='btn btn-outline-danger' id='btn_types_del' name='".$q['id']."'>Delete</button></td><td><div class='edit_upd'><button class='btn btn-outline-info edit_types' name='".$q['id']."'>Edit</button><button class='btn btn-success updtypes' id='".$q['id']."' name='".$menu."' >Update</button></div></td>";
          echo "</tr>";
        }
      echo "</tbody>";
      echo "</table>";
    }
    else if($menu == 'groups')
    {
      $data['groups']= $this->db->query("SELECT * from ".$menu)->result_array();
      echo "<table class='table table-hover'>";
      echo "<thead>";
      echo "<tr><th>Name</th><th>Description</th><th>Settings</th></tr></thead>";
      echo "<tbody>";
      echo "<tr><td><input type='text' class='form-control' id='groups_name'></td><td><input type='text' class='form-control' id='groups_Description'></td><td><button class='btn btn-outline-success' id='btn_groups_save'>Save</button></td></tr>";
          foreach ($data['groups'] as $g) 
        {
            echo "<tr  id='".$g['id']."'>";
            echo "<td>".$g['name']."</td><td>".$g['description']."</td><td><button class='btn btn-outline-danger' id='btn_groups_del' name='".$g['id']."'>Delete</button></td><td><div class='edit_upd'><button class='btn btn-outline-info edit_groups' name='".$g['id']."' >Edit</button><button class='btn btn-success updgroups' name='".$g['id']."'>Update</button></div></td>";
            echo "</tr>";
        }
      echo "</tbody>";
      echo "</table>";
    }
    else if($menu == "menu")
    {
      $data['menu']= $this->db->query("SELECT * from ".$menu)->result_array();
      echo "<table class='table table-hover'>";
      echo "<thead>";
      echo "<tr><th>Menu</th><th>Menu(ru)</th></tr></thead>";
      echo "<tbody>";
      echo "<tr><td><input type='text' class='form-control' id='menu_name'></td><td><input type='text' class='form-control' id='menu_name_ru'></td><td><input type='number' class='form-control' id='menu_parent'></td><td><input type='number' class='form-control' id='menu_id_parent'></td><td><button class='btn btn-outline-success' id='btn_menu_save'>Save</button></td></tr>";
          foreach  ($data['menu'] as $m)
          {
                  echo "<tr  id='".$m['id']."'>";
                  echo "<td>".$m['menu']."</td><td>".$m['menu_ru']."</td><td></td><td></td><td><div class='edit_upd'><button class='btn btn-outline-danger' id='btn_menu_del' name='".$m['id']."'>Delete</button><button class='btn btn-outline-info edit_menu' name='".$m['id']."'>Edit</button><button class='btn btn-success updmenu' name='".$m['id']."'>Update</button></div></td>";
                  echo "</tr>";
          }
       echo "</tbody>";
       echo "</table>";
    }
    else if($menu == "services")
    {
      $data['service']= $this->db->query("SELECT * from ".$menu)->result_array();
      echo "<table class='table table-hover'>";
      echo "<thead>";
      echo "<tr><th>Xizmat turi</th><th>Xizmat turi(ru)</th><th>Settings</th></tr></thead>";
      echo "<tbody>";
      echo "<tr><td><input type='text' class='form-control' id='service_name'></td><td><input type='text' class='form-control' id='service_name_ru'></td><td><button class='btn btn-outline-success' id='btn_service_save'>Save</button></td></tr>";

      foreach($data['service'] as $s)
        {
          echo "<tr id='".$s['id']."'>";
          echo "<td>".$s['service_name']."</td><td>".$s['service_name_ru']."</td><td><button class='btn btn-outline-danger' id='btn_service_del' name='".$s['id']."'>Delete</button></td><td><div class='edit_upd'><button class='btn btn-outline-info edit_service' name='".$s['id']."' >Edit</button><button class='btn btn-success updservice' name='".$s['id']."' >Update</button></div></td>";
          echo "</tr>";
        }
      echo "</tbody>";
      echo "</table>";
    } 
    else if($menu == "goods")
    {
      $data['type']   = $this->db->query("SELECT * from types")->result_array();
      $data['brands'] = $this->db->query("SELECT * from brands")->result_array();
      $data['ser']    = $this->db->query("SELECT * from services")->result_array();
      $data['goods']  = $this->db->query("SELECT g.t_name,g.t_name_ru, t.type_name  as id_type , b.brand_name as id_brand, g.price, s.service_name as id_services,g.title_ru,g.title,g.id
      FROM ".$menu." g, types t, brands b, services s   where t.id = g.id_type and b.id = g.id_brand and s.id = g.id_services")->result_array();
      echo "<table class='table table-hover'>"; 
      echo "<thead>";
      echo "<tr><th>Mahsulot nomi</th><th>Mahsulot nomi(ru)</th><th>Sub kategoriya</th><th>Brandlar</th><th>Narxi</th><th>xizmatlar</th><th>Ma'lumot</th><th>Ma'lumot(ru)</th></tr></thead>";
      echo "<tbody>";
      echo "<tr><td><input type='text' class='form-control' id='goods_name'></td><td><input type='text' class='form-control' id='goods_name_ru'></td><td><select class='form-control' id='goods_subkat'>";
          foreach($data['type'] as $t)
          {
            echo "<option value='".$t['id']."'>".$t['type_name']."</option>";
          }
      echo "</select></td><td><select class='form-control' id='goods_brand'>";
          foreach($data['brands'] as $b)
          {
            echo "<option value='".$b['id']."'>".$b['brand_name']."</option>";
          }
      echo "<td><input type='number' class='form-control' id='goods_price'></td>";
      echo "<td><select class='form-control' id='goods_service'>";
          foreach($data['ser'] as $s)
          {
              echo "<option value='".$s['id']."'>".$s['service_name']."</option>";
          }
      echo "<td><input type='text' class='form-control' id='goods_title'></td><td><input type='text' class='form-control' id='goods_title_ru'></td><td><button class='btn btn-outline-success' id='btn_goods_save'>Save </button></td></tr>";
          foreach($data['goods'] as $g)
          {
            echo "<tr  id='".$g['id']."'>";
            echo "<td>".$g['t_name']."</td><td>".$g['t_name_ru']."</td><td>".$g['id_type']."</td><td>".$g['id_brand']."</td><td>".$g['price']."</td><td>".$g['id_services']."</td><td>".$g['title']."</td><td>".$g['title_ru']."</td><td><button class='btn btn-outline-danger' id='btn_goods_del' name=".$g['id'].">Delete</button></td><td><div class='edit_upd'><button class='btn btn-outline-info edit_goods' name='".$g['id']."' >Edit</button><button class='btn btn-success updgoods' name='".$g['id']."'>Update</button></div></td>";
            echo "</tr>";
          }
    }
    else if($menu == "basket")
    {
       $data['basket']=$this->db->query("SELECT * from ".$menu)->result_array();
       echo "<table class='table table-hover'>";
       echo "<thead>";
       echo "<tr><th>Tovar id si</th><th>Narxi</th><th>Soni</th><th>Foydalanuvchi</th><th>Sanasi</th><th>Holati</th></tr>";
       echo "</thead>";
       echo "<tbody>";
            foreach ($data['basket'] as $b)
                {
                  echo "<tr id='".$b['id']."'>";
                  echo "<td>".$b['id_good']."</td><td>".$b['price']."</td><td>".$b['count']."</td><td>".$b['user']."</td><td>".$b['dates']."</td><td>".$b['status']."</td><td><div class='edit_upd'><button class='btn btn-outline-info edit_basket' name='".$b['id']."' >Edit</button><button class='btn btn-success updbasket' name='".$b['id']."'>Update</button></div></td>";
                  echo "</tr>";
                }
       echo "</tbody>";
       echo "</table>";
    }
    else if($menu == "hisob")
    {
       $data['hisob']        =$this->db->query("SELECT h.*,x.xarajat_turi from ".$menu." h, xarajat_turi x where h.xarajat_nomi= x.id ")->result_array();
       $data['xarajat_turi'] = $this->db->query("SELECT * from xarajat_turi")->result_array();
       echo "<table class='table table-hover'>";
       echo "<thead>";
       echo "<tr><th>Xarajat nomi</th><th>Xarajat summasi</th><th>Sanasi</th></tr>";
       echo "</thead>";
       echo "<tbody>";
       echo "<tr><td><select class='form-control' id='xarajat_nomi'>";
          foreach($data['xarajat_turi'] as $x)
          {
               echo "<option value='".$x['id']."'>".$x['xarajat_turi']."</option>";
          }  
            echo "<td><input type='number' class='form-control' id='xarajat_summ'></td><td><button class='btn btn-outline-success' id='btn_hisob_save'>Save</button></td>"; 
      echo "</tr>";
            foreach ($data['hisob'] as $b)
                {
                  echo "<tr id='".$b['id']."'>";
                  echo "<td>".$b['xarajat_turi']."</td><td>".$b['xarajat_summ']."</td><td>".$b['data']."</td><td><div class='edit_upd'><button class='btn btn-outline-info edit_hisob' name='".$b['id']."'>Edit</button><button class='btn btn-success updhisob' name='".$b['id']."'>Update</button></div></td>";
                  echo "</tr>";
                }

       echo "</tbody>";
       echo "</table>";
    }
    else if($menu == "xarajat_turi")
    {
       $data['xarajat_turi']=$this->db->query("SELECT * from ".$menu)->result_array();
       echo "<table class='table table-hover'>";
       echo "<thead>";
       echo "<tr><th>Xarajat turining nomi</th></tr>";
       echo "</thead>";
       echo "<tbody>";
       echo "<td><input type='text' class='form-control' id='xarajat_turi'></td><td><button class='btn btn-outline-success' id='btn_xarajat_turi_save'>Save</button></td>";
            foreach ($data['xarajat_turi'] as $b)
                {
                  echo "<tr id='".$b['id']."'>";
                  echo "<td>".$b['xarajat_turi']."</td><td><button class='btn btn-outline-danger' id='btn_xarajat_turi' name=".$b['id'].">Delete</button></td><td><div class='edit_upd'><button class='btn btn-outline-info edit_xarajat_turi' name='".$b['id']."' >Edit</button><button class='btn btn-success updxarajat_turi' name='".$b['id']."'>Update</button></div></td>";
                  echo "</tr>";
                }
       echo "</tbody>";
       echo "</table>";
    }
  
  }

  Public function user_create()
 {
  $first_name = $this->input->post('firstname');
  $last_name  = $this->input->post('lastname'); 
  $company    = $this->input->post('company');
  $email      = $this->input->post('email');
  $phone      = $this->input->post('phone');
  $password   = $this->input->post('password');
   if(strlen($first_name)>1 and strlen($last_name)>1 and strlen($company)>1 and strlen($phone)>1)
   {      
    $additional_data = array(
              'first_name' => $first_name, 
              'last_name'  => $last_name,
              'company'    => $company,
              'phone'      => $phone,
              'email'      => $email,
              );
      $group = array('2'); // Sets user to admin    
              {
                $error= $this->db->insert('users',$additional_data);
                 if($error == 1)
                 {
                  echo "Ma'lumotlar bazaga yozildi";
                 }
                 else
                 {
                  echo "Ma'lumotlarni yozishda xatolik bor";
                 }
              }
   }
   else
   {
     echo "Hamma qatorlarni to`ldirish shart!";
   }    
  //$this->ion_auth->register($username,$email,$password, $additional_data, $group);
 } 


  Public function brands_ins()
  {
    $brand_name = $this->input->post('b_name');
    $republic   = $this->input->post('b_republic');
    $end_date   = $this->input->post('b_end_date');

      if(strlen($brand_name) > 1 and strlen($republic) > 1  and strlen($end_date) > 0 )
      {
         $data_ins = array(
          'brand_name' => $brand_name,
          'republic'   => $republic,
          'end_date'   => $end_date
         );
         $res = $this->db->query('SELECT count(*) as countt from brands where brand_name = "'.$brand_name.'" and republic = "'.$republic.'"')->row();
         if ($res->countt > 0)
         {
          echo  "Bu ma'lumot bazada mavjud";
         }
         else
         {
          $error =$this->db->insert('brands', $data_ins);

           if ($error == 1)
           {
            echo "ma'lumotlar bazaga yozildi;";
           }
           else
           {
            echo "ma'lumotlarni yozishda xatolik bor;";
           }
         }
         
      }
      else
      {
        echo "Hamma qatorlarni tuldirish shart!";
      }
  }

  Public function kategories_ins()
  {
    $kategories_name    = $this->input->post('kat_name');
    $kategories_name_ru = $this->input->post('kat_name_ru');
    $data_create           = $this->input->post('d_create');
    $img                = $this->input->post('img');

      if(strlen($kategories_name) > 0 and strlen($kategories_name_ru) > 0 and strlen($data_create) > 7  and strlen($img) > 0 )
      {
         $data_ins = array(
          'kat_name'   => $kategories_name,
          'kat_name_ru'=> $kategories_name_ru,
          'd_create'   => $data_create,
          'img'        => $img
         );
         $res = $this->db->query('SELECT count(*) as countt from kategories where kat_name = "'.$kategories_name.'" and kat_name_ru = "'.$kategories_name_ru.'" and d_create = "'.$data_create.'" and img="'.$img.'"')->row();
         if ($res->countt > 0)
         {
          echo  "Bu ma'lumot bazada mavjud";
         }
         else
         {
          $error =$this->db->insert('kategories', $data_ins);

           if ($error == 1)
           {
            echo "ma'lumotlar bazaga yozildi;";
           }
           else
           {
            echo "ma'lumotlarni yozishda xatolik bor;";
           }
         }
         
      }
      else
      {
        echo "Hamma qatorlarni tuldirish shart!";
      }
  }

  Public function types_ins()
  {
    $kat_id       = $this->input->post('kat_id');
    $type_name    = $this->input->post('kat_name');
    $type_name_ru = $this->input->post('kat_name_ru');
    $d_create     = $this->input->post('d_create');
    $d_delete     = $this->input->post('d_delete');
    $state        = $this->input->post('state');
    if(strlen($kat_id) > 0 and strlen($type_name) >= 1 and strlen($type_name_ru) >= 1 and strlen($d_create) > 0)
      {
         $data_ins = array(
          'id_kat'         => $kat_id,
          'type_name'      => $type_name,
          'type_name_ru'   => $type_name_ru,
          'd_create'       => $d_create,
          'd_delete'       => $d_delete,
          'state'          => $state
         );
         $res = $this->db->query('SELECT count(*) as countt from types where type_name = "'.$type_name.'" and type_name_ru = "'.$type_name_ru.'" and id_kat = "'.$kat_id.'"')->row();
         if ($res->countt > 0)
         {
          echo  "Bu ma'lumot bazada mavjud";
         }
         else
         {
          $error =$this->db->insert('types', $data_ins);

           if ($error == 1)
           {
            echo "Ma'lumotlar bazaga yozildi";
           }
           else
           {
            echo "Ma'lumotlarni yozishda xatolik bor";
           }
         }
      }
      else
      {
        echo "Hamma qatorlarni to`ldirish shart!";
      }

    
  }

 public function groups_ins()
  {
     $groups_name =$this->input->post('groups_name');
     $groups_discription=$this->input->post('groups_Description');

     if(strlen($groups_name)>0 and strlen($groups_discription)>0)
      {
        $data_ins = array(
            'name'        => $groups_name,
            'description' => $groups_discription
          );
          $res= $this->db->query('SELECT count(*) as countt from groups where name = "'.$groups_name.'" and description = "'.$groups_discription.'"')->row();
          if ($res->countt > 0)
         {
          echo  "Bu ma'lumot bazada mavjud";
         }
         else
         {
          $error =$this->db->insert('groups', $data_ins);

           if ($error == 1)
           {
            echo "Ma'lumotlar bazaga yozildi";
           }
           else
           {
            echo "Ma'lumotlarni yozishda xatolik bor";
           }
         }
    }
     else
    {
      echo "Hamma qatorlarni to`ldirish shart!";
    }
  }


 Public function menu_ins()
 {
    $menu      = $this->input->post('menu');
    $menu_ru   = $this->input->post('menu_ru');
    $parent    = $this->input->post('parent');
    $id_parent = $this->input->post('id_parent');

      if(strlen($menu)>1 and strlen($menu_ru)>1 and strlen($parent)>0 and strlen($id_parent)>0)
      {
          $data_ins=array(
                'Menu'      => $menu,
                'Menu_ru'   => $menu_ru,
                'Parent'    => $parent,
                'Id_parent' => $id_parent
              );  
              $res= $this->db->query('SELECT count(*) as countt from menu where Menu="'.$menu.'" and Menu_ru="'.$menu_ru.'" and Parent="'.$parent.'" and Id_parent="'.$id_parent.'"')->row();
              if($res->countt>0)
              {
                echo  "Bu ma'lumot bazada mavjud";
              }
              else
              {
                $error= $this->db->insert('menu',$data_ins);
                 if($error == 1)
                 {
                  echo "Ma'lumotlar bazaga yozildi";
                 }
                 else
                 {
                  echo "Ma'lumotlarni yozishda xatolik bor";
                 }
              }
      }
      else
      {
        echo "Hamma qatorlarni to`ldirish shart!";
      }   
 }


 Public function service_ins()
 {
    $ser_name = $this->input->post('ser_name');
    $ser_name_ru = $this->input->post('ser_name_ru');
    $res = $this->db->query('SELECT count(*) as countt from services where service_name ="'.$ser_name.'" and service_name_ru = "'.$ser_name_ru.'"')->row();
    if($res->countt >  0 )
    {
      echo  "Bu ma'lumot bazada mavjud";
    }
    else
    {
      $error = $this->db->query('INSERT INTO services( service_name,service_name_ru ) VALUES ("'.$ser_name.'","'.$ser_name_ru.'") ');

      if($error == 1)
      {
        echo "Ma'lumot bazaga yozildi!";
      }
      else
      {
        echo "Ma'lumotni yozishda qandaydir xatolik bor!";
      }
    }
 }

 Public function goods_ins()
  {
      $goods_name   = $this->input->post('t_name');
      $goods_name_ru= $this->input->post('t_name_ru');
      $goods_subkat = $this->input->post('id_type');
      $goods_brand  = $this->input->post('id_brand');
      $goods_price  = $this->input->post('price');
      $goods_service= $this->input->post('id_services');
      $goods_title  = $this->input->post('title');
      $title_ru     = $this->input->post('title_ru');
      $data_ins = array(
          't_name'       => $goods_name,
          't_name_ru'    => $goods_name_ru,
          'id_type'      => $goods_subkat,
          'id_brand'     => $goods_brand,
          'price'        => $goods_price,
          'id_services'  => $goods_service,
          'title'        => $goods_title,
          'title_ru'     => $title_ru,
         );
         $res = $this->db->query('SELECT count(*) as countt FROM goods WHERE t_name = "'.$goods_name.'" and t_name_ru ="'.$goods_name_ru.'" and id_type = "'.$goods_subkat.'" and id_brand="'.$goods_brand.'" and price="'.$goods_price.'" and id_services="'.$goods_service.'" and title="'.$goods_title.'" and title_ru="'.$title_ru.'"')->row();
         if ($res->countt > 0)
         {
          echo  "Bu ma'lumot bazada mavjud";
         }
         else
         {
          $error =$this->db->insert('goods', $data_ins);

           if ($error == 1)
           {
            echo "Ma'lumotlar bazaga yozildi";
           }
           else
           {
            echo "Ma'lumotlarni yozishda xatolik bor";
           }
         }  
  }

  Public function hisob_ins()
  {
    $xarajat_nomi = $this->input->post('xarajat_nomi');
    $xarajat_summ = $this->input->post('xarajat_summ');
    if( strlen($xarajat_summ)>0)
    {
      $data_ins = array(
        'xarajat_nomi'=> $xarajat_nomi,
        'xarajat_summ'=> $xarajat_summ,
        'data'        => Date('Y-m-d H:i:s')
      );
      $error =$this->db->insert('hisob', $data_ins);
        if ($error == 1)
          {
            echo "Ma'lumotlar bazaga yozildi";
          }
        else
          {
            echo "Ma'lumotlarni yozishda xatolik bor";
          }
      }
      else
      {
        echo "Hamma qatorlarni to`ldirish shart!";
      }
  }

  Public function xarajat_turi_ins()
  {
    $xarajat_turi = $this->input->post('xarajat_turi');
    if(strlen($xarajat_turi)>0)
    {
      $data_ins = array(
        'xarajat_turi'  => $xarajat_turi,
      );
      $error = $this->db->insert('xarajat_turi',$data_ins);
      if ($error == 1)
          {
            echo "Ma'lumotlar bazaga yozildi";
          }
        else
          {
            echo "Ma'lumotlarni yozishda xatolik bor";
          }
    }
    else
    {
      echo "Hamma qatorlarni to`ldirish shart!";
    }
  }

/*                       delete knopkalar start           */
 public function users_btn_del()
  {
    $id=$this->input->post('id');
    $this->db->where('id',$id);
    $error=$this->db->delete('users');
      if($error == 1)
        {
              echo "Ma`lumot bazadan o`chirildi";
        }
      else
        {
              echo "Ma`lumotni o`chirishda xatolik bor";
        }
  }

 public function btn_brands_del()
 {
   $id=$this->input->post('id');
   $this->db->where('id',$id);
   $error=$this->db->delete('brands');
    if($error == 1)
        {
          echo "Ma`lumot bazadan o`chirildi";
        }
    else
        {
          echo "Ma`lumotni o`chirishda xatolik bor";
        }
 }

 public function btn_kat_del()
 {
   $id=$this->input->post('id');
   $this->db->where('id',$id);
   $error=$this->db->delete('kategories');
    if($error == 1)
        {
          echo "Ma`lumot bazadan o`chirildi";
        }
    else
        {
          echo "Ma`lumotni o`chirishda xatolik bor";
        }
 } 

 public function btn_type_del()
  {
    $id=$this->input->post('id');
    $this->db->where('id',$id);
    $error=$this->db->delete('types');
    if($error == 1)
        {
          echo "Ma`lumot bazadan o`chirildi";
        }
    else
        {
          echo "Ma`lumotni o`chirishda xatolik bor";
        }
  } 

  Public function menu_btn_del()
 {
    $id = $this->input->post('id');
    $this->db->where('id',$id);
    $error=$this->db->delete('menu');
     if($error == 1)
        {
          echo "Ma`lumot bazadan o`chirildi";
        }
      else
        {
              echo "Ma`lumotni o`chirishda xatolik bor";
          }
 }


 Public function group_btn_del()
{
      $id = $this->input->post('id');
      $this->db->where('id',$id);
      $error=$this->db->delete('groups');  
      if($error==1)
          {
            echo "Ma`lumot bazadan o`chirildi";
          }
      else
          {
            echo "Ma`lumotni o`chirishda xatolik bor";
          }
} 
 
 
 Public function service_btn_del()
 {
    $id = $this->input->post('id');
    $this->db->where('id',$id);
    $error=$this->db->delete('services');
     if($error == 1)
        {
          echo "Ma`lumot bazadan o`chirildi";
        }
      else
        {
              echo "Ma`lumotni o`chirishda xatolik bor";
          }
 }

 Public function btn_goods_del()
  {
   $id=$this->input->post('id');
   $this->db->where('id',$id);
   $error=$this->db->delete('goods');
   if($error == 1)
      {
        echo "Ma`lumot bazadan o`chirildi";
      }
    else
      {
        echo "Ma`lumotni o`chirishda xatolik bor";
      }
  }


/*                       delete knopkalar finish             */

/*                       update knopkalar start              */

  Public function users_upd() 
 {
    $first_name   = $this->input->post("first_name");
    $last_name    = $this->input->post("last_name");
    $company_name = $this->input->post("company_name");
    $email        = $this->input->post("email");
    $phone        = $this->input->post("phone"); 
    $id           = $this->input->post('id');
    
    $error = $this->db->query('UPDATE users SET first_name ="'.$first_name.'", last_name ="'.$last_name.'", company = "'.$company_name.'", email = "'.$email.'", phone ="'.$phone.'" where id = "'.$id.'"');
      if ($error = 1)
      {
        echo "Ma'lumot muvofaqiyatli o'zgartirildi!";
      }
      else
      {
        echo "O'zgartirishda xatolik bor!";
      }
 }  

 Public function brands_upd() 
 {
    $brand_name  = $this->input->post("brand_name");
    $republic    = $this->input->post("republic");
    $end_date    = $this->input->post("end_date");
    $id          = $this->input->post('id');
    $error = $this->db->query('UPDATE brands SET brand_name ="'.$brand_name.'", republic ="'.$republic.'", end_date = "'.$end_date.'" where id = "'.$id.'"');
      if ($error = 1)
      {
        echo "Ma`lumot muvofaqiyatli o`zgartirildi!";
      }
      else
      {
        echo "O`zgartirishda xatolik bor!";
      }
 }

 Public function kategories_upd() 
 {
    $kat_name     = $this->input->post("kat_name");
    $kat_name_ru  = $this->input->post("kat_name_ru");
    $d_create     = $this->input->post("d_create");
    $img          = $this->input->post("img");
    $id           = $this->input->post('id');
    
    $error = $this->db->query('UPDATE kategories SET kat_name ="'.$kat_name.'", kat_name_ru ="'.$kat_name_ru.'", d_create = "'.$d_create.'", img = "'.$img.'" where id ="'.$id.'"');
      if ($error = 1)
      {
        echo "Ma'lumot muvofaqiyatli o'zgartirildi!";
      }
      else
      {
        echo "O'zgartirishda xatolik bor!";
      }
 }

 Public function types_upd()
 {
    $id_kat        = $this->input->post("id_kat");
    $type_name     = $this->input->post("type_name");
    $type_name_ru  = $this->input->post("type_name_ru");
    $d_create_save = $this->input->post("d_create");
    $data_delete   = $this->input->post("data_delete");
    $id            = $this->input->post('id');
    if (strlen($type_name) > 0 and strlen($type_name_ru) > 0 )
    {
      $error = $this->db->query('UPDATE types SET type_name ="'.$type_name.'", type_name_ru ="'.$type_name_ru.'",d_create="'.$d_create_save.'",d_delete="'.$data_delete.'",id_kat="'.$id_kat.'" where id ="'.$id.'"');

      if ($error = 1)
      {
        echo "Ma'lumot muvofaqiyatli o'zgartirildi!";
      }
      else
      {
        echo "O'zgartirishda xatolik bor!";
      }
    }
    else
    {
      echo "Ma'lumotni to'liq kiriting!";
    }
 }

public function groups_upd()
  {
    $name        = $this->input->post("name");
    $description = $this->input->post("description");
    $id          = $this->input->post('id');
    
    $error = $this->db->query('UPDATE groups SET name ="'.$name.'",description ="'.$description.'" where id="'.$id.'"');
      if ($error = 1)
      {
        echo "Ma'lumot muvofaqiyatli o'zgartirildi!";
      }
      else
      {
        echo "O'zgartirishda xatolik bor!";
      }
  }

 Public function get_id_types()
  {
    $id_kat            = $this->input->post('id_kat');
    $id                = $this->input->post('id');
    $data['kategories']= $this->db->query("SELECT id,kat_name FROM kategories")->result_array();
      echo "<option value='".$id."'>".$id_kat."</option>";
       foreach( $data['kategories'] as $k)
          {
             if($id <> $k['id'] and $id_kat <> $k['kat_name']) 
              { 
                echo "<option value='".$k['id']."'>".$k['kat_name']."</option>";
              }

          }
  }


 Public function menu_upd() 
 {
    $menu   = $this->input->post("menu");
    $menu_ru= $this->input->post("menu_ru");
    $id     = $this->input->post('id');
    
    $error = $this->db->query('UPDATE menu SET menu ="'.$menu.'",menu_ru ="'.$menu_ru.'" where id="'.$id.'"');
      if ($error = 1)
      {
        echo "Ma'lumot muvofaqiyatli o'zgartirildi!";
      }
      else
      {
        echo "O'zgartirishda xatolik bor!";
      }
 }

  Public function service_upd()
 {
    $name    = $this->input->post("ser_name");
    $name_ru = $this->input->post("ser_name_ru");
    $id      = $this->input->post('id');
    if (strlen($name) > 0 )
    {
      $error = $this->db->query('UPDATE services SET service_name = "'.$name.'",service_name_ru = "'.$name_ru.'" where id = "'.$id.'"');

      if ($error = 1)
      {
        echo "Ma'lumot muvofaqiyatli o'zgartirildi!";
      }
      else
      {
        echo "O'zgartirishda xatolik bor!";
      }
    }
    else
    {
      echo "Ma'lumotni to'liq kiriting!";
    }
 }

 Public function goods_upd()
 {
  $id          = $this->input->post("id");
  $t_name      = $this->input->post("t_name");
  $t_name_ru   = $this->input->post("t_name_ru");
  $id_type     = $this->input->post("id_type");
  $id_brand    = $this->input->post("id_brand");
  $id_services = $this->input->post("id_services");
  $price       = $this->input->post("price");
  $title       = $this->input->post("title");
  $title_ru    = $this->input->post("title_ru");
  if(strlen($t_name)>0 and strlen($t_name_ru)>0 and strlen($price)>0)
    {
      $error = $this->db->query('UPDATE goods SET t_name ="'.$t_name.'", t_name_ru = "'.$t_name_ru.'", id_type="'.$id_type.'" , id_brand="'.$id_brand.'" ,price = "'.$price.'", title= "'.$title.'", id_services="'.$id_services.'", title_ru= "'.$title_ru.'"   where id= "'.$id.'"');
      if($error = 1)
      {
        echo "Ma'lumot muvofaqiyatli o'zgartirildi!";
      }
      else
      {
        echo "O'zgartirishda xatolik bor!";
      }
    }
    else
    {
      echo "Ma'lumotni to'liq kiriting!";
    }
 }

 Public function basket_upd()
  {
    $id    = $this->input->post("id");
    $status = $this->input->post("status");
      $error = $this->db->query('UPDATE basket SET status ="'.$status.'" where id= "'.$id.'"');
      if($error = 1)
      {
        echo "Ma'lumot muvofaqiyatli o'zgartirildi!";
      }
      else
      {
        echo "O'zgartirishda xatolik bor!";
      }
  }

  Public function hisob_upd()
  {
    $id  =$this->input->post('id');
    $xarajat_nomi = $this->input->post('xarajat_nomi');
       $error = $this->db->query('UPDATE hisob SET xarajat_nomi = "'.$xarajat_nomi.'" where id = "'.$id.'"');
       if($error =1)
       {
        echo "Ma'lumot muvofaqiyatli o'zgartirildi!";
       }
       else
       {
        echo "O'zgartirishda xatolik bor!";
       }
  }

 Public function xarajat_turi_upd()
  {
    $id = $this->input->post('id');
    $xarajat_turi = $this->input->post('xarajat_turi');
    if (strlen($xarajat_turi)>0)
    {
       $error = $this->db->query('UPDATE xarajat_turi SET xarajat_turi = "'.$xarajat_turi.'" where id="'.$id.'"');
       if($error ==1)
         {
          echo "Ma'lumot muvofaqiyatli o'zgartirildi!";
         }
       else
         {
          echo "O'zgartirishda xatolik bor!";
         }
    }
    else
    {
      echo "Ma'lumotlarni to'liq kiritish shart";
    }
  }

Public function get_types()
  {
      $id            = $this->input->post('id');
      $id_type       = $this->input->post('id_type');
      echo "<option value='".$id."'>".$id_type."</option>";
      $data['types'] = $this->db->query("SELECT * from types ")->result_array();
         foreach ($data['types'] as $q) 
         {
             if( $id<> $q['id'] and $id_type<>$q['type_name'])
              {
                echo "<option value='".$q['id']."'>".$q['type_name']."</option>";
              }
         }
  }
Public function get_brands()
  {
       $id             = $this->input->post('id');
       $id_brand       = $this->input->post('id_brand');
       $data['brands'] = $this->db->query("SELECT id, brand_name from brands")->result_array();
        echo "<option value='".$id."'>".$id_brand."</option>"; 
         foreach ($data['brands'] as $q) 
         {
            if($id <> $q['id'] and $id_brand<>$q['brand_name']) 
              {
                echo "<option value='".$q['id']."'>".$q['brand_name']."</option>";
              }     
         }
  }
public function get_services()
  {
      $id               = $this->input->post('id');
      $id_services      = $this->input->post('id_services');
      $data['services'] = $this->db->query("SELECT id, service_name FROM services")->result_array();
       echo "<option value='".$id."'>".$id_services."</option>";
       foreach ($data['services'] as $s)
          {
            if($id <> $s['id'] and $id_services <> $s['service_name']) echo "<option value='".$s['id']."'>".$s['service_name']."</option>";
          }
  }


 public function get_xarajat_turi()
  {
    $id                   = $this->input->post('id');
    $xarajat_nomi         = $this->input->post('xarajat_nomi');
    $data['xarajat_turi'] = $this->db->query("SELECT id, xarajat_turi FROM xarajat_turi")->result_array();
     // if (strlen($xarajat_nomi) > 50 )
     //  {
     //      echo "Edit knopkasini ikki marta bosdiz :)";
     //  }
     //  else
     //  {
        echo "<option value='".$id."'>".$xarajat_nomi."</option>";
        foreach($data['xarajat_turi'] as $x)
            {
              if($id <> $x['id'] and $xarajat_nomi<>$x['xarajat_turi']) 
                {
                  echo "<option value='".$x['id']."'>".$x['xarajat_turi']."</option>";
                }
            }
      //}
  }
 

 Public function xarajat_upd()
  {
    $xarajat_turi         = $this->input->post('xarajat_turi');
    $id                   = $this->input->post('id');
    $data['xarajat_turi'] = $this->db->query('SELECT * FROM xarajat_turi')->result_array();
      echo "<input value='".$xarajat_turi."' id='xarajat_turi".$id."' class='form-control'></option>";
      /*foreach($data['xarajat_turi'] as $h)
          {
            if ($id <> $h['id'])
            {
                echo "<option value='".$h['id']."'><input type='text' value='".$h['xarajat_turi']."'></option>";
            }
            
            
          }
          */
  }


/*                        update knopkalar finish              */

Public function get_categories()
   {
  $res = $this->db->query('SELECT * from kategories')->result_array();
  echo json_encode($res);
}

Public function get_sub_categories()
{
   $data = json_decode(file_get_contents('php://input'), true);
   $id = $data['id'];
   $res = $this->db->query("select * from types where id_kat = '".$id."'")->result_array();
   echo json_encode($res);
}

Public function get_goods()
{
   $data = json_decode(file_get_contents('php://input'), true);
   $id = $data['id'];
   $res = $this->db->query("select g.*, t.type_name from goods g, types t where g.id_type in ( select id from types where id_kat = ".$id." ) and t.id = g.id_type")->result_array();
   echo json_encode($res);
}
Public function basket()
{
  
     if (!$this->ion_auth->logged_in())
			    {
			        $error['title'] = "Maxsulot xarid qilish uchun ro'yxatdan o'tishingiz shart!";
			        $error['status'] = 'Mehmon';
                    echo json_encode($error) ;
			    }
			else
				{
				  $data = json_decode(file_get_contents('php://input'), true);
                  $good_id = $data['good_id'];
                  $price = $data['price'];
                  $count = $data['count'];
                  $user = $data['user'];
                  if (strlen($good_id)>0 and strlen($price)>0 and strlen($count)>0 and strlen($user)>0 )
                   {
                       $data_ins = array(
                        'id_good' => $good_id,
                        'price'   => $price,
                        'user'    => $user,
                        'count'   => $count,
                        'dates'   => Date('Y-m-d'),
                        );
                        $this->db->insert('basket',$data_ins);
                   } 
                  $res ="tovar id si-".$good_id." narxi-".$price." soni-".$count." client-".$user;
                  echo json_encode($res);
				}
}

Public function count_basket()
  {
    $data = json_decode(file_get_contents('php://input'), true);    
    $user = $data['user'];
    if ($user == 'Mehmon')
    {
      $error = "Maxsulot xarid qilish uchun ro'yxatdan o'tishingiz shart!";
      echo json_encode($error) ;
    }
    else
    {
      $res = $this->db->query("select count(*) as countt from basket where user = '".$user."'")->row();
      echo json_encode($res);
    }
    
  }
Public function get_basket_goods()
  {
      $data = json_decode(file_get_contents('php://input'), true);    
      $user = $data['user'];
      if ($user)
      {
        $res['goods'] = $this->db->query("select g.t_name,g.t_name_ru, b.* from basket b, goods g where b.user = '".$user."' and g.id = b.id_good")->result_array();
        echo json_encode($res);
      }
      else
      {
        redirect('index.php/auth/login');
      }
  }
  
  Public function basket_update() 
      {
         $data   = json_decode(file_get_contents('php://input'), true);
         $upd_id = $data['upd_id'];
         $gcount = $data['gcount'];

         if(strlen($upd_id)>0 and strlen($gcount)>0)
         {
                $res['success'] = $this->db->query("UPDATE basket SET count=".$gcount." where id = '".$upd_id."'");
                echo json_encode($res);
         }
         else
         {
          $res['error']="Ma`lumotlarni to`liq yozish shart!";
          echo json_encode($res);
         }
         
      } 

   Public function basket_delete()
      {
        $data = json_decode(file_get_contents('php://input'), true);
        $id   = $data['id_basket'];
        $this->db->where('id',$id);
        $error = $this->db->delete('basket');
        
        if($error == 1)
        {
          $res['success'] = "Ma`lumot bazadan o`chirildi";
          echo json_encode($res);  
        }
        else
        {
          $res['error'] = "Ma`lumotni o`chirishda xatolik bor";
          echo json_encode($res);
        }
       
      }
    
    
    Public function get_goods_search()
        {
            $data = json_decode(file_get_contents('php://input'), true);
            $res['search'] = $this->db->query("SELECT * from goods WHERE t_name like '%".$data['name']."%'  or t_name_ru like '%".$data['name']."%'")->result_array();
            $res['sub_cat'] = $this->db->query("SELECt * FROM types WHERE id in (SELECT id_type from goods WHERE t_name like '%".$data['name']."%'  or t_name_ru like '%".$data['name']."%')")->result_array();
            echo json_encode($res);
        }
    

}
