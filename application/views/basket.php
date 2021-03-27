<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Navoiy Internet Magazine</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/menu.css');?>">
</head>
<body>
<!--                    Menu items                   -->
<div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <div class="dropdown">
        
                <?php
                foreach($menu as $q)
                {
                    if ($q['parent'] == '0' and $q['id_parent'] == '1')
                    {
                        echo "<a href='#'>".$q['menu']."</a>";
                        echo '<div class="dropdown"><ul>';
                    }
                    elseif ($q['parent'] == '1' and $q['id_parent'] == '0')
                    {

                        echo '  <li class="dropdown-content">';
                        echo '    <a href="">'.$q['menu'].'</a>
                                        </li>';


                    }



                }

                ?>
            </div>

            <div class="dropdown">
        
                <?php
                foreach($menu as $q)
                {
                    if ($q['parent'] == '30' and $q['id_parent'] == '20')
                    {
                        echo "<a href='#'>".$q['menu']."</a>";
                        echo '<div class="dropdown"><ul>';
                    }
                    elseif ($q['parent'] == '20' and $q['id_parent'] == '30')
                    {

                        echo '  <li class="dropdown-content">';
                        echo '    <a href="">'.$q['menu'].'</a>
                                    </li>';


                    }



                }

                ?>
            </div>
            <div class="dropdown">
        
                    <?php
                    foreach($menu as $q)
                    {
                        if ($q['parent'] == '25' and $q['id_parent'] == '26')
                        {
                            echo "<a href='#'>".$q['menu']."</a>";
                            echo '<div class="dropdown"><ul>';
                        }
                        elseif ($q['parent'] == '26' and $q['id_parent'] == '25')
                        {

                            echo '  <li class="dropdown-content">';
                            echo '    <a href="">'.$q['menu'].'</a>
                                        </li>';


                        }



                    }

                    ?>
            </div>
            <div class="dropdown">
        
                    <?php
                    foreach($menu as $q)
                    {
                        if ($q['parent'] == '3' and $q['id_parent'] == '44')
                        {
                            echo "<a href='#'>".$q['menu']."</a>";
                            echo '<div class="dropdown"><ul>';
                        }
                        elseif ($q['parent'] == '44' and $q['id_parent'] == '3')
                        {

                            echo '  <li class="dropdown-content">';
                            echo '    <a href="">'.$q['menu'].'</a>
                                        </li>';


                        }



                    }

                    ?>
            </div>
  </div>
 
</div>

</div><br>

</div>
</div>
<nav class="navbar ">
<button class="openbtn" onclick="openNav()">☰ Gazzon.Uz</button> 
<div class="log-sign" style="--i: 1.8s" id="mymenu" >
        <a href="<?php echo base_url('index.php/welcome/admin');?>"><button class="btn btn-outline-success"><i class="fa fa-2x fa-unlock" aria-hidden="true"></i></button> </a>        
        <a href="<?php echo base_url('index.php/basket');?>"><button  class="btn btn-outline-success"><i class="fa fa-2x fa-shopping-cart"> {{basket_count}} </i> </button>  </a>
        <a href="<?php echo base_url('auth/create_user');?>"><button class="btn btn-outline-success"><i class="fa fa-2x fa-sign-in"> </i></button></a>
        <a href="<?php echo base_url('index.php/auth/logout');?>"><button class="btn btn-outline-success"><i class="fa fa-2x fa-sign-out"> </i></button></a> 
        <a href="#"><button @click="change_language('ru')" class="btn btn-outline-success "><i class="fa fa-2x"> RU </i></button></a>
        <a href="#"><button @click="change_language('uz')" class="btn btn-outline-success "><i class="fa fa-2x"> UZ </i></button></a>
 
 </div>
</nav>


  
  


    </div>
    </div>
</header>
<div class="container-fluid" id="basket">
    <div class="row">
      <div class="table-responsive">
        <table class="table">
          <thead>
          <tr>
            <template class="lang" v-if="lang === 'uz'"> 
               <th> Tovarning nomi </th>
               <th> Tovarning narxi </th> 
               <th> buyurtmalar soni </th> 
               <th> buyurtma berilgan sana </th> 
               <th> Buyurtma holati </th>
               <th><button class="btn btn-success" @click="change_filter('Waiting')"> Qabulda</button></th>
               <th><button class="btn btn-success" @click="change_filter('Active')">Qayta ishlash</button></th>
               <th><button class="btn btn-success" @click="change_filter('Success')">Yetkazib berildi</button></th>
            </template>
            <template class="lang" v-else="lang === 'ru'"> 
               <th> Имя бренда </th>
               <th> Цена товара </th>             
               <th> количество заказов </th>           
               <th> Дата заказа </th>              
               <th> Статус заказа </th>
                <th><button class="btn btn-success" @click="change_filter('Waiting')">На ресепшене</button></th>
                <th><button class="btn btn-success" @click="change_filter('Active')">Обработка</button></th>
                <th><button class="btn btn-success" @click="change_filter('Success')">Доставленный</button></th>
            </template>    
             
                                  

     
          </tr> 
          </thead>
          <tbody>
              <tr v-for="upd in basket_update" class="upd_tr" >
                <template class="lang" v-if="lang==='uz'">
                <td> {{upd.t_name}}</td>
                </template>
                <template class="lang" v-else="lang==='ru'">
                <td> {{upd.t_name_ru}}</td>
                </template>
                <td> {{upd.price}}</td>
                <td> <input type="number" class="form-control" :value="upd.count" @change="get_gcount($event.target.value)"></td>
                <td> {{ upd.dates }} </td>
                <td> {{ upd.status }} </td>
                <td><button class="btn btn-info" @click="fn_save(upd.id)">Save</button></td>
              </tr>
              <tr>
                <td>  </td><td> {{totalQuantity}} </td> <td> {{ totalPrice }} </td><td></td><td></td>
              </tr>
              <tr v-for="(good,i) in basket_goods">
                <template class="lang" v-if="good.status === tabs">
                <td v-if="lang==='uz'"> {{ good.t_name }}</td>
                <td v-else="lang==='ru'"> {{ good.t_name_ru }}</td>
                <td> {{ good.price }} </td>
                <td> {{ good.count }} </td>
                <td> {{ good.dates }} </td>
                <td> {{ good.status }} </td>
                <td><button class="btn btn-outline-danger" @click = "fn_delete(i)">Delete</button></td><td><button class='btn btn-outline-info edit_basket' @click="fn_edit(i)">Edit</button></td>
                </template>
              </tr>          
          </tbody>             
       </table> 
       </div>                
    </div>
</div>



<?php $user =  $this->ion_auth->user()->row(); ?>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://kit.fontawesome.com/64d58efce2.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
<script>
      var app = new Vue({
         el : "#basket",
         data:
        {
            basket_goods : [],    
            basket_update: [],      
            gcount : 0,  
            tabs : "Waiting",
            lang      :'uz', 
            url_goods : "<?php echo base_url('index.php/ajax/get_basket_goods');?>",
            url_delete: "<?php echo base_url('index.php/ajax/basket_delete');?>",
            url_update: "<?php echo base_url('index.php/ajax/basket_update');?>",
        },      
        mounted()
        {
            axios.post(this.url_goods, {
                   'user' : "<?php   echo $user->first_name; ?>",                                     
            })
            .then( (basket_goods) => {    
                        
                this.basket_goods = basket_goods.data.goods;                                
                    
            })
            .catch(function (error) {
                    // handle error
              console.log(error);
            });
        },
        computed:{
            
            filteredClients: function () 
                {
                return this.basket_goods.filter(c => c.status == this.tabs)
                },
            totalQuantity: function(){
                return this.filteredClients.reduce(function(total, item)
                {
                        return Number(total) + Number(item.price*item.count);
                },0);
              }, 
            totalPrice: function(){
                return this.filteredClients.reduce(function(total, item)
                {
                    return Number(total) + Number(item.count);
                    
                },0);
              }, 
              
        },
        methods:
        {
            fn_delete:function(id)
                {
                    console.log(id+'DELETE  array id-'+ this.basket_goods[id].id);
                    axios.post(this.url_delete,{
                          'id_basket'  : this.basket_goods[id].id, 
                        })
                        .then( (basket_delete) =>{
                            console.log(basket_delete.data);
                        })
                        .catch(function(error){
                            console.log(error);
                        });
                        
                    this.basket_goods.splice(id,1);
                    
                    axios.post(this.url_goods, {
                               'user' : "<?php   echo $user->first_name; ?>",                                     
                        })
                        .then( (basket_goods) => {    
                                    
                            this.basket_goods = basket_goods.data.goods;                                
                                
                        })
                        .catch(function (error) {
                                // handle error
                          console.log(error);
                        });
                },
            fn_edit:function(id)
               {
                   this.basket_update.splice(0);
                   this.basket_update.push(this.basket_goods[id]);
               },
            fn_save:function(upd_id)
                {
                   for (var i = 0; this.basket_goods.length -1  >= i; i++)
                   {
                       if (this.basket_goods[i].id === upd_id)
                       {
                            this.basket_goods[i].count = this.gcount;
                               axios.post(this.url_update, {
                                   'upd_id' : upd_id,
                                   'gcount'  : this.gcount,           
                               })
                                .then( (basket_update) => {    
                                console.log(basket_update.data);   
                                    //this.basket_goods = basket_goods.data.goods;                                
                                    
                                })
                                .catch(function (error) {
                                    // handle error
                                    console.log(error);
                                });
                       }
                       else
                       {
                          console.log(this.basket_goods[i].id);
                          console.log(upd_id);
                          console.log(this.gcount);
                       }
                   }
                },
            get_gcount:function(count)
                {
                    this.gcount = count;
                },
            change_filter:function(types)
                {
                    this.tabs = types;
                    console.log(types);
                }
        },
        
       
          
     


      })
      
      var menu = new Vue({
        el : "#mymenu",
        data:
        {
            msg: 'Hello WORLD Vue!',
            basket_count : 0,
            basket_goods : [],
            language  :'uz',
            url_count : "<?php echo  base_url('index.php/ajax/count_basket'); ?>",  
            url_goods : "<?php echo  base_url('index.php/ajax/get_basket_goods'); ?>",
            
        },
        methods: {
            main_menu:function()
            {
                app.show_cat = true;
                app.show_scat = false;
                console.log("show menu");
            },
            change_language: function(lang)
            { 
                app.lang = lang;
            }
        },
        mounted()
        {
            axios.post(this.url_count, {
                   'user' : "<?php   echo $user->first_name; ?>",                 
                    
               })
                .then( (bcount) => {    
                    this.basket_count = bcount.data.countt;                
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });

            
            axios.post(this.url_goods, {
                   'user' : "<?php   echo $user->first_name; ?>",                 
                    
               })
                .then( (basket_goods) => {    
                        
                    this.basket_goods = basket_goods.data.goods;   
                    console.log(basket_goods)                             
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
        },


    })                    
</script>
<script>
  function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<script>

 $(function() {

$("[data-drilldown-button]").click(function() {
  $('[data-drilldown-sub]').addClass("open");
  $("[data-drilldown-item], [data-drilldown-button]").addClass("close");

  $(".wrapper").css("height", $('[data-drilldown-sub]').outerHeight())
  return false;
});

$("[data-drilldown-back]").click(function() {
  $('[data-drilldown-sub]').removeClass("open");
  $("[data-drilldown-item], [data-drilldown-button]").removeClass("close");

  $(".wrapper").css("height", "auto");
  return false;
});

$("[data-drilldown-button-2]").click(function() {
  $('[data-drilldown-sub-2]').addClass("open-sub-2");
  $("[data-drilldown-sub], [data-drilldown-button-2]").addClass("close");

  $(".wrapper").css("height", $('[data-drilldown-sub-2]').outerHeight());
  return false;
});

$("[data-drilldown-back-2]").click(function() {
  $('[data-drilldown-sub-2]').removeClass("open-sub-2");
  $("[data-drilldown-sub], [data-drilldown-button-2]").removeClass("close");

  $(".wrapper").css("height", $('[data-drilldown-sub]').outerHeight());
  return false;
});

});

</script>
</body>
</html>