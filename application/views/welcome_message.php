<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Navoiy Internet Magazine</title>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/basket.png');?>" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.theme.green.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>">
	<link rel="icon" type="image/png" href="basket.png" sizes="32x32">
	<link rel="apple-touch-icon" sizes="32x32" href="basket.png">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <style>
      .dropdown {

  display: inline-block;
}
      
.dropdown-content {
  display: none;
  
  background-color: #111;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:active .dropdown-content {
  display: block;
}

      body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1000000;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.navbar{
  background-color: #111;
}
    </style>
</head>
<body>
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
</div><br>
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
<!--                container for reclame                                    -->
<div class="topshop owl-carousel owl-theme">
    <div class="item animate__animated"><img src="<?php echo base_url('assets/reclame/reclame.png'); ?>" class="img-bordered"><h4>1</h4></div>
    <div class="item animate__animated"><img src="<?php echo base_url('assets/reclame/reclame.png'); ?>" class="img-bordered"><h4>2</h4></div>
    <div class="item animate__animated"><img src="<?php echo base_url('assets/reclame/reclame.png'); ?>" class="img-bordered"><h4>3</h4></div>
    <div class="item animate__animated"><img src="<?php echo base_url('assets/reclame/reclame.png'); ?>" class="img-bordered"><h4>4</h4></div>
    <div class="item animate__animated"><img src="<?php echo base_url('assets/reclame/reclame.png'); ?>" class="img-bordered"><h4>5</h4></div>
    <div class="item animate__animated"><img src="<?php echo base_url('assets/reclame/reclame.png'); ?>" class="img-bordered"><h4>6</h4></div>
    <div class="item animate__animated"><img src="<?php echo base_url('assets/reclame/reclame.png'); ?>" class="img-bordered"><h4>7</h4></div>
    <div class="item animate__animated"><img src="<?php echo base_url('assets/reclame/reclame.png'); ?>" class="img-bordered"><h4>8</h4></div> 
    <div class="item animate__animated"><img src="<?php echo base_url('assets/reclame/reclame.png'); ?>" class="img-bordered"><h4>9</h4></div>
    <div class="item animate__animated"><img src="<?php echo base_url('assets/reclame/reclame.png'); ?>" class="img-bordered"><h4>10</h4></div>
    <div class="item animate__animated"><img src="<?php echo base_url('assets/reclame/reclame.png'); ?>" class="img-bordered"><h4>11</h4></div>
    <div class="item animate__animated"><img src="<?php echo base_url('assets/reclame/reclame.png'); ?>" class="img-bordered"><h4>12</h4></div>

</div>
 

<div id="myvue" class="main" >
    <div class="container-fluid">
     <div class="row" v-if="show_cat">       
        <div class="col-md-6 col-lg-3 col-sm-6 col-6" v-for="cat in categories">
          <template  name="slide-fade"> 
                <div class="brc" >
                <a href="#" @click="subcategories(cat.id)">
                <img width="100%" height="auto" class="imgg" :src="cat.img" alt="" @mousemove="show_animations" @mouseleave="hide_animations"></a>
                <transition name="fade">
                <template class="lang" v-if="lang==='uz'">
                <div class="title" id="title" v-if="show" >  {{ cat.kat_name   }}
                </div>
                </template>
                <template class="lang" v-else="lang==='ru'">
                <div class="title" id="title" v-if="show" >  {{ cat.kat_name_ru }}
                </div>
                </template>
                </transition>
                </div>
            </template>     
        </div> 
       
     </div>
    </div>
    
    <div class="container-fluid">
    <div class="row" v-if="show_scat">
    <input type="text" class="form-control" v-model="sfilter" placeholder="Filter and searching..." @keypress="search_goods">
        <template name="slide-fade">             
            <div class="brc_cat col-md-12" >
                <div class="col-md-6 col-lg-3 col-sm-6 col-6" v-for="scat in scategories" >  
                    <div class="brc_cat" >                    
                    <transition name="fade">
                    <a href="#" @click="subcatsearch(scat.type_name)">
                    <template class="lang" v-if="lang==='uz'">
                    <div class="title" v-if="show">  {{ scat.type_name   }}</div> </template>
                    <template class="lang" v-else="lang==='ru'">
                    <div class="title" v-if="show">  {{ scat.type_name_ru   }}</div> </template>
                    </a>
                    </transition>
                    </div>        
                </div>                          
            </div>    
            <HR>
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-3 col-sm-6 col-6" v-for="good in filterBy(goods, this.sfilter )" >  
                    <div class="goods" >
                        <template class="lang" v-if="lang==='uz'">                    
                        <h3> {{ good.type_name }} </h3>
                        <hr>
                        <h4>{{ good.t_name }}</h4>
                        <br>
                        <p> narxi : {{  good.price}} s</p>
                        <img class="goodsimg" src="<? echo base_url('assets/imgs/chokopay.jpg')?>" alt="goods img">
                        <br>
                        <button id="show-modal" @click="modal_view(good.id)"  class="btn btn-outline-success">Batafsil</button>
                        </template>
                        <template class="lang" v-else="lang==='ru'">                    
                        <h3> {{ good.type_name_ru }} </h3>
                        <hr>
                        <h4>{{ good.t_name_ru }}</h4>
                        <br>
                        <p> цена : {{  good.price}} s</p>
                        <br>
                        <button id="show-modal" @click="modal_view(good.id)"  class="btn btn-outline-success">более</button>
                        </template>
                    </div>        
                </div>   
            </div>
            </div>
          
        </template>                
      </div>
    </div>  
    <modal v-if="showModal" @close="showModal = false" :good='this.goods' :gid='this.good_id' @bcount="basket_count($event)" :lang='this.lang'>
        
        <h3 slot="header">custom header</h3>
    </modal>                    
</div>
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
<script type="text/javascript" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://kit.fontawesome.com/64d58efce2.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue2-filters/dist/vue2-filters.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.js');?>"></script>
<script type="text/javascript">
    $('.topshop').owlCarousel({
    animateOut: 'animate__fadeOut',
    animateIn: 'animate__fadeIn',
    items:1,
    margin:30,
    loop:true,
    stagePadding:30,
    smartSpeed:450,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true
});
</script>
<script type="text/javascript">
       Vue.component("modal", {
        
        props : ['good','gid','lang'],   
        data: function () {
            return {
                count: 1,
                summ : 0,
                good_id : '',
                url_bas : "<?php echo base_url('index.php/ajax/basket'); ?>",
                msg_error   : '',

            }
            },     
        template : `<transition name="modal">
        <div class="modal-mask">
          <div class="modal-wrapper">
            <div class="modal-container">
              <div class="modal-header">
                <slot name="header">
                
                </slot>
              </div>

              <div class="modal-body">
                <slot name="body">
                      <h3 v-for="glist in good">
                         <p v-if="glist.id == gid">
                        <?php $user =  $this->ion_auth->user()->row();
                                if ($user)
                                {
                                   echo $user->first_name; 
                                }
                                else
                                {
                                    $user = 'Mehmon';
                                    echo $user ;
                                }
                                ?> 
                          </p>
                         <template class="lang" v-if="lang==='uz'">
                         <p v-if="glist.id == gid"> {{ glist.t_name }} </p>
                         <p v-if="glist.id == gid"> narxi : {{ glist.price }} so'm</p>
                         <p v-if="glist.id == gid"> <input type="number" min="1"  class="incom form-control"  @change="show($event.target.value, glist.price,glist.id)"> {{count*glist.price}} so'm </p>
                         </template>
                         <template class="lang" v-else="lang==='ru'">
                         <p v-if="glist.id == gid"> {{ glist.t_name_ru }} </p>
                         <p v-if="glist.id == gid"> narxi : {{ glist.price }} сумм</p>
                         <p v-if="glist.id == gid"> <input type="number" min="1"  class="incom form-control"  @change="show($event.target.value, glist.price,glist.id)"> {{count*glist.price}} сумм </p>
                         </template>
                         
                      </h3>
                      <p ><div class="alert alert-danger"> {{msg_error}} </div> </p>
                </slot>
              </div>
                    
              <div class="modal-footer">
                <slot name="footer">
                   
                  <button class="btn btn-outline-danger" @click="$emit('close')">
                   Yopish
                  </button>
                  <button class="btn btn-outline-success" @click="baskets">
                   Saqlash
                  </button>
                  
                </slot>
              </div>
            </div>
          </div>
        </div>
      </transition>`,
      methods : 
      {
          show : function(val, price,good_id)
          {
            this.count =  val  
            this.summ = price   
            this.good_id = good_id   
          },
           baskets : function()
          {
            axios.post(this.url_bas, {
                   'user' : "<?php if($user == 'Mehmon') {echo $user; } else { echo $user->first_name;} ?>",
                   'count' : this.count,
                   'price' : this.summ,
                   'good_id' : this.good_id,
                    
               })
                .then((msg) => {                    
                   
                    if (msg.data.status == 'Mehmon')
                    {
                        this.msg_error = "Ilmimos Tizimdan ro'yxatdan uting!";
                    }
                    else
                    {
                        this.msg_error = "Xaridingiz qabul qilindi!";
                    }
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });

            axios.post(this.url_basket, {
                   'user' : "<?php if($user == 'Mehmon') {echo $user; } else { echo $user->first_name;} ?>",                 
                    
               })
                .then((bcount) => {            

                    this.$emit('bcount',bcount.data.countt)                         
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
          }
      }
        
      
            
      });

    
    var menu = new Vue({
        el : "#mymenu",
        data:
        {
            msg: 'Hello WORLD Vue!',
            basket_count : 0,
            language : 'uz',
            url_count : "<?php echo  base_url('index.php/ajax/count_basket'); ?>",  
            
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
                   'user' : "<?php if($user == 'Mehmon') {echo $user; } else { echo $user->first_name;} ?>",                 
                    
               })
                .then( (bcount) => {    
                    this.basket_count = bcount.data.countt;                
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
        },

    })                              

    var app = new Vue({
        el: '#myvue',
        data: {
            msg: 'Hello WORLD Vue!',
            categories  : [  ],
            scategories : [  ],     
            goods       : [  ],  
            show : true, 
            show_cat : true,
            show_scat : false, 
            sfilter : '',
            showModal : false,
            lang      :'uz',
            url_get_cat: '<?php echo base_url('index.php/ajax/get_categories');?>',
            url_get_sub_cat : '<?php echo base_url('index.php/ajax/get_sub_categories');?>',
            url_get_goods : '<?php echo base_url('index.php/ajax/get_goods');?>',
            url_get_search : '<?php echo base_url('index.php/ajax/get_goods_search');?>',
        },
        methods: {
           
            show_animations: function()
            {
                
                this.show = true;
            },
            hide_animations: function()
            {
                this.show = false;
            },
            subcategories:function(id)
            {
            axios.post(this.url_get_sub_cat, {
                   'id' : id
               })
                .then(function (sub_cat) {                    
                    app.scategories = sub_cat.data;              
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            axios.post(this.url_get_goods, {
                   'id' : id
               })
                .then(function (goods) {                    
                    app.goods = goods.data;                             
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });


                this.show_cat = false;
                this.show_scat = true;
            }, 
            subcatsearch:function(title)
            {
                this.sfilter = title;
            },  
            modal_view:function(id)
            {
                this.showModal = true;
                this.good_id = id;
            },
            basket_count:function(countt)
            {
                menu.basket_count = countt;
            },
            search_goods:function()
            {
              axios.post(this.url_get_search, {
                   'name' : this.sfilter,
               })
                .then(function (goods) {                    
                    app.goods = goods.data.search; 
                    app.scategories = goods.data.sub_cat; 
                    console.log(goods.data.search)
                    console.log(goods.data.sub_cat)
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            }
            
        },
        mounted()
        {
            axios.get(this.url_get_cat)
                .then(function (response) {
                    // handle success
                    app.categories = response.data                   

                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        mixins: [Vue2Filters.mixin],
    });
</script>
<footer class="footer-distributed">

<div class="footer-left">

    <h3><span>Gazzon.Uz</span></h3>

    <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="#">Blog</a>
        |
        <a href="#">About</a>
        |
        <a href="#">Contact</a>
    </p>

    <p class="footer-company-name">© 2021 Copyright: Gazzon.Uz </p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
          <p><span>Manzil eski shaxar  va GUM savdo majmuasi</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+998943700808</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@eduonix.com">barattojiyev@gmail.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>About the company</span>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta veniam dignissimos corporis nihil accusamus numquam nisi et perferendis.</p>
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
</div>
</footer>
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