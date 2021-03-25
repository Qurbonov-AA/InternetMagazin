<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<style type="text/css">
    thead tr
        {
            font-size: 90%;
        }
    .btn-success
        {
            opacity: 0;
        }
    .edit_upd
        {
            display:flex;
            flex-direction: row;
        }
    .edit_upd button
        {
            margin-left: 0.5rem;

        }
    ul
        {
            padding-top: 15px;
        }
    li
        {
            border-radius: 10em;
            transition: 1s all;
        }
    li:hover
        {
            background-color: #14295e;
            color:white;        
            transform: translateX(4%);
            transition: 1s all;
            text-align: center;
        }
    li:active
        {
            transform: translateY(3px);
            box-shadow: 5px 3px 1px #e6e6e6;
        }
    #user,#basket
        {
            border-radius: 25px;
        }

		}
	ul
		{
			padding-top: 15px;
		}
	li
		{
			border-radius: 10em;
			transition: 1.5s all;
		}
	li:hover
		{
			background-color: #14295e;
			color:white;		
			transform: translateX(4%);
			transition: 1.5s all;
			text-align: center;
		}
	li:active
		{
			transform: translateY(3px);
			box-shadow: 5px 3px 1px #e6e6e6;
		}
	#user,#basket
		{
			border-radius: 25px;
		}</style>
<head>
    <meta charset="utf-8">
    <title>Admin panel</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">


</head>
<body>

    <div id="main_menu">
    

                     <a href="<?php echo base_url();?>"> <button @click="main_menu" class='btn btn-outline-success'>
                        <i class="fa fa-2x fa-home"> </i></button> </a>
                        <button @click="change_language('uz')" class="fa fa-2x btn btn-outline-success">UZ</button> 
                        <button @click="change_language('ru')" class="fa fa-2x btn btn-outline-success">RU</button>
                           
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3 col-3">
                 
                <ul class="list-group">

                   <template class="lang" v-if="lang === 'uz'">
                   
                      <li class="list-group-item" name="users" id="user">Foydalanuvchi yaratish</li>
                      <li class="list-group-item" name="brands">Brandlar</li>
                      <li class="list-group-item" name='kategories'>Kategoriya</li>
                      <li class="list-group-item" name='types'>Sub kategoriya</li>
                      <li class="list-group-item" name="groups">Groups</li>
                      <li class="list-group-item" name='menu'>Menu</li>
                      <li class="list-group-item" name="services">Xizmatlar</li>
                      <li class="list-group-item" name='goods'>Mahsulotlar</li>
                      <li class="list-group-item" name='hisob'>Hisob kitob</li>
                      <li class="list-group-item" name='basket' id="basket">Savatcha</li>
                      </template>
                      
                    
                   <template class="lang" v-else="lang === 'ru'">
                      <li class="list-group-item" name="users" id="user">Cоздание пользователя</li>
                      <li class="list-group-item" name="brands">Бренды</li>
                      <li class="list-group-item" name='kategories'>Категории</li>
                      <li class="list-group-item" name='types'>Суб категории</li>
                      <li class="list-group-item" name="groups">Группы</li>
                      <li class="list-group-item" name='menu'>Меню</li>
                      <li class="list-group-item" name="services">Сервисы</li>
                      <li class="list-group-item" name='goods'>Товары</li>
                      <li class="list-group-item" name='hisob'>Расчет</li>
                      <li class="list-group-item" name='basket' id="basket">Корзина</li>
                    </template> 
                </ul>
                
                
            </div>
            
            
            <div class="col-md-9 col-lg-9 col-xl-9 col-9" id="dinamic_menu">
                
            </div>
         </div>
        </div>
            <!-- graph -->
            <div id="container" style="height: 400px; min-width: 310px"></div>
            <!-- end -->

            <!-- barchart -->
   
			
			<div class="col-md-9 col-lg-9 col-xl-9 col-9" id="dinamic_menu">
				
			</div>
		</div>
			<!-- graph -->
			<div id="container" style="height: 400px; min-width: 310px"></div>
			<!-- end -->

			<!-- barchart -->

            <figure class="highcharts-figure">
                    <div id="container2"></div>
                    <p class="highcharts-description">
                        Chart showing browser market shares. Clicking on individual columns
                        brings up more detailed data. This chart makes use of the drilldown
                        feature in Highcharts to easily switch between datasets.
                    </p>
            </figure>

            <!-- end -->
            <div id="container3" style="height: 400px; min-width: 310px"></div>
<!-- graph -->
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/data.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/stock/modules/export-data.js"></script>
<!-- end  -->
<!-- vuejs   -->

<script src="https://kit.fontawesome.com/64d58efce2.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue2-filters/dist/vue2-filters.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<! end vuejs    -->



<!-- barchart -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<!-- end -->
        <div class="row">
            <div id="container" class="col-md-12 col-lg-12 col-12 col-sm-12">
                
              
            </div>
         </div>



<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>  
<script type="text/javascript">

      var app = new Vue({
         el : "#main_menu",
         data:
         {  
            tabs : "Waiting",
            lang      :'uz', 
            url_goods : "<?php echo base_url('index.php/ajax/get_admin_goods');?>",
            url_delete: "<?php echo base_url('index.php/ajax/admin_delete');?>",
            url_update: "<?php echo base_url('index.php/ajax/admin_update');?>",
           
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
                lang_change(lang);
            }
        }


     })



</script>
<script type="text/javascript">

    var data_kat ;
  


  
 var chart = Highcharts.stockChart('container3', {


        rangeSelector: {
            selected: 1
        },

        title: {
            text: 'AAPL Stock Price'
        },

        series: [{
            name: 'Kategoriyalar buyicha',
            data:[ 
                <?php 
                
                foreach($get_kat as $q)
                {
                  echo '["'.$q['t_name'].'",'.$q['all_summ'].','.$q['price'].'],';
                }
                echo "['dates',0,0]";
                
                ?>
            ],

                                   
            tooltip: {
                valueDecimals: 2
            }
        }]
    });

// graph
var seriesOptions = [],
    seriesCounter = 0,
    names = ['MSFT', 'AAPL', 'GOOG'];

/**
 * Create the chart when all data is loaded
 * @returns {undefined}
 */
function createChart() {

    Highcharts.stockChart('container', {

        rangeSelector: {
            selected: 4
        },

        yAxis: {
            labels: {
                formatter: function () {
                    return (this.value > 0 ? ' + ' : '') + this.value + '%';
                }
            },
            plotLines: [{
                value: 0,
                width: 2,
                color: 'silver'
            }]
        },

        plotOptions: {
            series: {
                compare: 'percent',
                showInNavigator: true
            }
        },

        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',
            valueDecimals: 2,
            split: true
        },

        series: seriesOptions
    });
}

function success(data) {
    var name = this.url.match(/(msft|aapl|goog)/)[0].toUpperCase();
    var i = names.indexOf(name);
    seriesOptions[i] = {
        name: name,
        data: data
    };

    // As we're loading the data asynchronously, we don't know what order it
    // will arrive. So we keep a counter and create the chart when all the data is loaded.
    seriesCounter += 1;

    if (seriesCounter === names.length) {
        createChart();
    }
}

Highcharts.getJSON(
    'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/msft-c.json',
    success
);
Highcharts.getJSON(
    'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/aapl-c.json',
    success
);
Highcharts.getJSON(
    'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/goog-c.json',
    success
);
// end

// barchart
// Create the chart
Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Харажатлар'
    },
    subtitle: {
        text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Уммумий харажатлар суммда'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f} сумм'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f} сумм</b> жами<br/>'
    },

    series: [
        {
            name: "Харажат",
            colorByPoint: true,
            data: [

            	<?php 
            		foreach($xarajat_turi as $x)
            		{
            			echo "{";
            			echo  " name : '".$x['xarajat_turi']."'  , y : ".intval($x['price']).",  drilldown : '".$x['xarajat_turi']."'";
            			echo "},";
            		}
            		
            	?>
                {
                    name: "Ишчилар маоши",
                    y: 6207040,
                    drilldown: "Ишчилар маоши"
                }
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "Ишчилар маоши",
                id: "Ишчилар маоши",
                data: [
                    [
                        "янв",
                        1000000
                    ],
                    [
                        "фев",
                        1030000
                    ],
                    [
                        "март",
                        3200000
                    ],
                    [
                        "апр",
                        1400000
                    ],
                    [
                        "май",
                        6800000
                    ],
                    [
                        "июн",
                        5600000
                    ],
                    [
                        "июл",
                        4500000
                    ],
                    [
                        "авг",
                        4000000
                    ],
                    [
                        "сен",
                        3200000
                    ],
                    [
                        "окт",
                        9000000
                    ],
                    [
                        "ноябр",
                        7900000
                    ],
                    [
                        "дек",
                        1800000
                    ]
                    
                ]
            },
        ]
    }
});

</script>
<script type="text/javascript">
     
    var lang ='uz'; 
    function lang_change(language)
    {
       lang = language; 
        
    }

    $(document).ready(function(){

        $("li").on("click",function(){

            var menu = $(this).attr('name');
            var url_menu  = "<?php echo base_url('index.php/ajax/menu');?>"; 

            $.ajax({
                url  : url_menu,
                type : "POST",
                data :{'menu' : menu, 'lang':lang},
                beforeSend: function() 
                {
                    $("#dinamic_menu").html("<img src=<?php echo base_url('img/loader/loader.gif');?> >");
                    
                },
                success : function(get_menu)
                    {
                        $("#dinamic_menu").html(get_menu);
                       
                    }
                });

            });
        });

/*                  create user start                */

       $('body').on('click', '.btn-outline-info', function(){
         $('.btn-success').css('opacity','100');
       });


       $('body').on('click','#btn_users_save', function()
       {
         var first_name = $("#first_name").val(),
             last_name  = $("#last_name").val(),
             company    = $("#Company_name").val(),
             email      = $("#user_email").val(),
             phone      = $("#user_mobile").val(),
             password   = $("#user_password").val();
         var url_user_create="<?php echo base_url('index.php/ajax/user_create')?>";
           $.ajax({
              url   : url_user_create,
              type  :'POST',
              data  :{'firstname':first_name,
                      'lastname':last_name, 
                      'company':company,
                      'email':email,
                      'phone':phone,
                      'password':password},
              success:function(form)
                    {
                        alert(form);
                        location.reload();
                    }       
            });
       });

/*                    create user finish         */

        $("body").on("click","#btn_brands_save", function(){
        
            var brand_name = $("#brand_name").val();
            var republic   = $("#republic").val();
            var end_date   = $("#end_date").val();
            var url_brand  = "<?php echo base_url('index.php/ajax/brands_ins');?>";
            $.ajax({
                url  : url_brand,
                type : "POST",
                data : {'b_name' : brand_name,
                        'b_republic' : republic, 
                        'b_end_date' : end_date,
                        'lang':lang },
                success :  function(get_ins)
                    {
                        alert(get_ins);
                        location.reload();
                    }
            }); 
        });

        $("body").on('click','#btn_kat_save',function(){
          var   kat_name    = $("#kat_name").val(),
                kat_name_ru = $("#kat_name_ru").val(),
                d_create    = $("#kat_c_date").val(),
                img         = $("#kat_image_path").val();
            var url_kategories  = "<?php echo base_url('index.php/ajax/kategories_ins');?>";
            $.ajax({
                url  : url_kategories,
                type : "POST",
                data : {'kat_name' : kat_name,
                        'kat_name_ru' : kat_name_ru, 
                        'd_create' : d_create, 
                        'img' : img },
                success :  function(get_ins)
                    {
                        alert(get_ins);
                        location.reload();
                    }
            });
        });

        $("body").on("click", "#btn_sub_kat_save", function(){

            var id_kat        = $("#sub_kat_id").val(),
                type_name     = $("#sub_kat_name").val(),
                type_name_ru  = $("#sub_kat_name_ru").val(),
                d_create      = $("#sub_kat_c_date").val(),
                date_delete   = $("#sub_kat_del_date").val(),
                sub_kat_state = $("#sub_kat_state").val();
            var url_types  = "<?php echo base_url('index.php/ajax/types_ins');?>";
            $.ajax({
                url  : url_types,
                type : "POST",
                data : {'kat_id'   : id_kat,
                        'kat_name' : type_name,
                        'kat_name_ru' : type_name_ru, 
                        'd_create' : d_create,
                        'd_delete' : date_delete,
                        'state'    : sub_kat_state},
                success :  function(get_ins)
                    {
                        alert(get_ins);
                        location.reload();
                    }
            });

        });


        $("body").on('click','#btn_groups_save', function(){

            var groups_name        =  $('#groups_name').val(),
                groups_discription =  $('#groups_Description').val();
            var url_groups = "<?php echo base_url('index.php/ajax/groups_ins');?>";
            $.ajax({
                url    :  url_groups,
                type   :  'POST',
                data   : {'groups_name':groups_name,'groups_Description':groups_discription},
                success: function(groups_save)
                    {
                        alert(groups_save);
                        location.reload();
                    }
            });
        });

        $("body").on('click','#btn_menu_save', function(){
            var menu      = $('#menu_name').val(),
                menu_ru   = $('#menu_name_ru').val(),
                parent    = $('#menu_parent').val(),
                id_parent = $('#menu_id_parent').val();
            var url_menu ="<?php echo base_url('index.php/ajax/menu_ins')?>";
            $.ajax({
                url    : url_menu,
                type   : "POST",
                data   : {'menu':menu,
                          'menu_ru':menu_ru, 
                          'parent':parent, 
                          'id_parent':id_parent},
                success: function(get_menu)
                    {
                        alert(get_menu);
                        location.reload();
                    }
            });
        });


        $("body").on("click","#btn_service_save",function(){
            var ser_name    = $("#service_name").val(),
                ser_name_ru = $("#service_name_ru").val();
            var url_service = "<?php echo base_url('index.php/ajax/service_ins'); ?>";
            $.ajax({
                url : url_service,
                type : "POST",
                data : {'ser_name'    : ser_name,
                        'ser_name_ru' : ser_name_ru,},
                success : function(ser)
                    {
                        alert(ser);
                        location.reload();
                    }
            });
        });

        $("body").on('click','#btn_goods_save', function(){
           var  goods_name      = $('#goods_name').val(),
                goods_name_ru   = $('#goods_name_ru').val(),
                goods_subkat    = $('#goods_subkat').val(),
                goods_brand     = $('#goods_brand').val(),
                goods_price     = $('#goods_price').val(),
                goods_service   = $('#goods_service').val(),
                goods_title     = $('#goods_title').val(),
                title_ru        = $('#goods_title_ru').val();
            var url_goods ="<?php echo base_url('index.php/ajax/goods_ins')?>";
            $.ajax({
                url    : url_goods,
                type   : "POST",
                data   : {'t_name'     :goods_name,
                          't_name_ru'  :goods_name_ru,
                          'id_type'    :goods_subkat,
                          'id_brand'   :goods_brand,
                          'price'      :goods_price,
                          'id_services':goods_service,
                          'title'      :goods_title,
                          'title_ru'   :title_ru},
                success: function(get_good)
                    {
                        alert(get_good);
                    }
            });
        });

        
/*                        users  update  starts         */
        $('body').on('click','.edit_users',function(){
            var id= $(this).attr('name');
            var first_name   = $("#"+id+" td:eq(0)").text(),
                last_name    = $("#"+id+" td:eq(1)").text(),
                company_name = $("#"+id+" td:eq(2)").text(),
                email        = $("#"+id+" td:eq(3)").text(),
                phone        = $("#"+id+" td:eq(4)").text();
            $("#"+id+" td:eq(0)").html("<input class='form-control' id='first_name"+id+"' value='"+first_name+"'>");
            $("#"+id+" td:eq(1)").html("<input class='form-control' id='last_name"+id+"' value='"+last_name+"'>");
            $("#"+id+" td:eq(2)").html("<input class='form-control' id='company_name"+id+"' value='"+company_name+"' >");
            $("#"+id+" td:eq(3)").html("<input type='email' class='form-control' id='email"+id+"' value='"+email+"'>");
            $("#"+id+" td:eq(4)").html("<input class='form-control' id='phone"+id+"' value='"+phone+"'>");          
        });

        $('body').on('click','.updusers',function(){
            var id =$(this).attr('name');
            var first_name   = $("#first_name"+id).val(),
                last_name    = $("#last_name"+id).val(),
                company_name = $("#company_name"+id).val(),
                email        = $("#email"+id).val(),
                phone        = $("#phone"+id).val();
            var  url_users_upd = "<?php echo base_url('index.php/ajax/users_upd')?>";
                $.ajax({
                    url : url_users_upd,
                    type: "POST",
                    data: {'id':id, 
                           'first_name'  :first_name,
                           'last_name'   :last_name,
                           'company_name':company_name,
                           'email'       :email,
                           'phone'       :phone},
                    success: function(user_upd)
                    {
                        alert(user_upd);
                    }
                }); 
        }); 
/*                         users  update  finish          */

/*                        brands  update  starts         */
        $('body').on('click','.edit_brands',function(){
      var id= $(this).attr('name');
      var brand_name   = $("#"+id+" td:eq(0)").text(),
          republic     = $("#"+id+" td:eq(1)").text(),
          end_date     = $("#"+id+" td:eq(2)").text();
      $("#"+id+" td:eq(0)").html("<input class='form-control' id='brand_name"+id+"' value='"+brand_name+"'>");
      $("#"+id+" td:eq(1)").html("<input class='form-control' id='republic"+id+"' value='"+republic+"'>");
      $("#"+id+" td:eq(2)").html("<input class='form-control' id='end_date"+id+"' value='"+end_date+"' >");      
    });

    $('body').on('click','.updbrands',function(){
      var id =$(this).attr('name');
      var brand_name  = $("#brand_name"+id).val(),
          republic    = $("#republic"+id).val(),
          end_date    = $("#end_date"+id).val();
      var  url_brand_upd = "<?php echo base_url('index.php/ajax/brands_upd')?>";
          $.ajax({
            url : url_brand_upd,
                type: "POST",
                data: {'id':id, 
                       'brand_name'  :brand_name,
                       'republic'    :republic,
                       'end_date'    :end_date},
                success: function(brands_upd)
              {
                alert(brands_upd);
              }
          }); 
    });
/*                         brands  update  finish          */

/*                        kategories  update  starts         */
    $('body').on('click','.edit_kategories',function(){
      var id= $(this).attr('name');
      var kat_name     = $("#"+id+" td:eq(0)").text(),
          kat_name_ru  = $("#"+id+" td:eq(1)").text(),
          d_create     = $("#"+id+" td:eq(2)").text(),
          img          = $("#"+id+" td:eq(3)").text()
      $("#"+id+" td:eq(0)").html("<input class='form-control' id='kat_name"+id+"' value='"+kat_name+"'>");
      $("#"+id+" td:eq(1)").html("<input class='form-control' id='kat_name_ru"+id+"' value='"+kat_name_ru+"'>");
      $("#"+id+" td:eq(2)").html("<input class='form-control' id='d_create"+id+"' value='"+d_create+"' >");
      $("#"+id+" td:eq(3)").html("<input class='form-control' id='img"+id+"' value='"+img+"'>");
        
    });

    $('body').on('click','.updkategories',function(){
      var id =$(this).attr('name');
      var kat_name       = $("#kat_name"+id).val(),
          kat_name_ru    = $("#kat_name_ru"+id).val(),
          d_create       = $("#d_create"+id).val(),
          img            = $("#img"+id).val()
          
      var  url_users_upd = "<?php echo base_url('index.php/ajax/kategories_upd')?>";
          $.ajax({
            url : url_users_upd,
                type: "POST",
                data: {'id':id, 
                       'kat_name'      :kat_name,
                       'kat_name_ru'   :kat_name_ru,
                       'd_create'      :d_create,
                       'img'           :img},   
                success: function(user_upd)
              {
                alert(user_upd);
              }
          }); 
    });
/*                        kategories  update  finish         */


/*                        menu  update  starts         */
        $('body').on('click','.edit_menu',function(){
      var id= $(this).attr('name');
      var  menu   = $("#"+id+" td:eq(0)").text(),
           menu_ru = $("#"+id+" td:eq(1)").text();
      $("#"+id+" td:eq(0)").html("<input class='form-control' id='menu"+id+"' value='"+menu+"'>");
      $("#"+id+" td:eq(1)").html("<input class='form-control' id='menu_ru"+id+"' value='"+menu_ru+"'>");     
    });

    $('body').on('click','.updmenu',function(){
      var id =$(this).attr('name');
      var menu   = $("#menu"+id).val(),
          menu_ru= $("#menu_ru"+id).val();
      var  url_menu_upd = "<?php echo base_url('index.php/ajax/menu_upd')?>";
          $.ajax({
            url : url_menu_upd,
                type: "POST",
                data: {'id':id, 
                       'menu'  :menu,
                       'menu_ru'  :menu_ru},
                success: function(menu_upd)
              {
                alert(menu_upd);
              }
          }); 
    });  
/*                         menu  update  finish          */


/*                        subkategoriya update start     */

        $("body").on("click", ".edit_types", function(){
        	var id = $(this).attr('name'),
                url_types_section="<?php echo base_url('index.php/ajax/get_id_types')?>"
        	var id_kat        = $("#"+id+" td:eq(0)").text(),
        	    type_name     = $("#"+id+" td:eq(1)").text(),
        	    type_name_ru  = $("#"+id+" td:eq(2)").text(),
        	    d_create_save = $("#"+id+" td:eq(3)").text(),
        	    data_delete   = $("#"+id+" td:eq(4)").text();
            	$.ajax({
            		url    : url_types_section,
            		type   :"POST",
            		data   :{'id':id,
                             'id_kat':id_kat},
            		success:function(types)
            			{
            				$("#"+id+" td:eq(0)").html("<select class='form-control' id='id_kat"+id+"'>"+types+"</select>");
            			}
            	});
        	
        	$("#"+id+" td:eq(1)").html("<input class='form-control' id='types_save"+id+"' value='"+type_name+"'>");
        	$("#"+id+" td:eq(2)").html("<input class='form-control' id='types_save_ru"+id+"' value='"+type_name_ru+"'>");
        	$("#"+id+" td:eq(3)").html("<input class='form-control' id='d_create_save"+id+"' value='"+d_create_save+"'>");
        	$("#"+id+" td:eq(4)").html("<input class='form-control' id='data_delete"+id+"' value='"+data_delete+"'>");

            var id = $(this).attr('name'), url_types_section="<?php echo base_url('index.php/ajax/get_id_types')?>"
            var id_kat        = $("#"+id+" td:eq(0)").text(),
                type_name     = $("#"+id+" td:eq(1)").text(),
                type_name_ru  = $("#"+id+" td:eq(2)").text(),
                d_create_save = $("#"+id+" td:eq(3)").text(),
                data_delete   = $("#"+id+" td:eq(4)").text();
                $.ajax({
                    url    : url_types_section,
                    type   :"POST",
                    data   :{'id':id},
                    success:function(types)
                        {
                            $("#"+id+" td:eq(0)").html("<select class='form-control' id='id_kat"+id+"'>"+types+"</select>");
                        }
                });
            
            $("#"+id+" td:eq(1)").html("<input class='form-control' id='types_save"+id+"' value='"+type_name+"'>");
            $("#"+id+" td:eq(2)").html("<input class='form-control' id='types_save_ru"+id+"' value='"+type_name_ru+"'>");
            $("#"+id+" td:eq(3)").html("<input class='form-control' id='d_create_save"+id+"' value='"+d_create_save+"'>");
            $("#"+id+" td:eq(4)").html("<input class='form-control' id='data_delete"+id+"' value='"+data_delete+"'>");

        });

        $("body").on("click",".updtypes",function(){
            var id = $(this).attr('id');
            var id_kat        = $("#id_kat"+id).val(),
                type_name     = $("#types_save"+id).val(),
                type_name_ru  = $("#types_save_ru"+id).val(),
                d_create_save = $("#d_create_save"+id).val(),
                data_delete   = $("#data_delete"+id).val();
            var url_types_upd = "<?php echo base_url('index.php/ajax/types_upd'); ?>";
            $.ajax({
                url : url_types_upd,
                type: "POST",
                data: {'id':id,
                       'id_kat'      :id_kat, 
                       'type_name'   :type_name,
                       'type_name_ru':type_name_ru,
                       'd_create'    :d_create_save,
                       'data_delete' :data_delete},
                success: function(types_upd)
                    {
                        alert(types_upd);
                    }
            });
        }); 
/*                       subkategoriya update finish     */

/*                        menu  update  starts         */
        $('body').on('click','.edit_groups',function(){
      var id= $(this).attr('name');
      var  name        = $("#"+id+" td:eq(0)").text(),
           description = $("#"+id+" td:eq(1)").text();
      $("#"+id+" td:eq(0)").html("<input class='form-control' id='name"+id+"' value='"+name+"'>");
      $("#"+id+" td:eq(1)").html("<input class='form-control' id='description"+id+"' value='"+description+"'>");     
    });

    $('body').on('click','.updgroups',function(){
      var id =$(this).attr('name');
      var name        = $("#name"+id).val(),
          description = $("#description"+id).val();
      var  url_groups_upd = "<?php echo base_url('index.php/ajax/groups_upd')?>";
          $.ajax({
            url : url_groups_upd,
                type: "POST",
                data: {'id':id, 
                       'name'  :name,
                       'description'  :description},
                success: function(groups_upd)
              {
                alert(groups_upd);
              }
          }); 
    });  
/*                         menu  update  finish          */

/*                       service     update   start             */
        $("body").on("click", ".edit_service", function(){
            var id      = $(this).attr('name');
            var name    = $("#"+id+" td:eq(0)").text(),
                name_ru = $("#"+id+" td:eq(1)").text();
            $("#"+id+" td:eq(0)").html("<input class='form-control' id='service_save"+id+"' value='"+name+"'>");
            $("#"+id+" td:eq(1)").html("<input class='form-control' id='service_save_ru"+id+"' value='"+name_ru+"'>");
        });

        $("body").on("click",".updservice",function(){
            var id = $(this).attr('name');
            var save_name    = $("#service_save"+id).val(),
                save_name_ru = $("#service_save_ru"+id).val();
            var url_service_upd = "<?php echo base_url('index.php/ajax/service_upd'); ?>";
            $.ajax({
                url : url_service_upd,
                type: "POST",
                data: {'id':id, 
                       'ser_name':save_name,
                       'ser_name_ru':save_name_ru},
                success: function(ser_upd)
                    {
                        alert(ser_upd);
                    }
            })
        }); 
/*                       service     update   finish             */

/*                       goods     update   start             */
        $("body").on("click", ".edit_goods", function(){

        	var id = $(this).attr('name'), url_type = "<?php echo base_url('index.php/ajax/get_types');?>", url_brand = "<?php echo base_url('index.php/ajax/get_brands');?>", url_services="<?php echo base_url('index.php/ajax/get_services');?>";
        	var t_name     = $("#"+id+" td:eq(0)").text(),
        	    t_name_ru  = $("#"+id+" td:eq(1)").text(),
        	    id_type    = $("#"+id+" td:eq(2)").text(),
                id_brand   = $("#"+id+" td:eq(3)").text(),
        	    price      = $("#"+id+" td:eq(4)").text(),
        	    id_services= $("#"+id+" td:eq(5)").text(),
        	    title      = $("#"+id+" td:eq(6)").text(),
        	    title_ru   = $("#"+id+" td:eq(7)").text();
        	    select_type= '';
        	    $.ajax({
        	    	url : url_type,
        	    	type : "POST",
        	    	data : {'id' :id,
                            'id_type':id_type},
        	    	success: function(types)
        	    		{
        	    			$("#"+id+" td:eq(2)").html("<select class='form-control' id='id_type"+id+"'>"+types+"</select>");
        	    		}

        	    });
        	    $.ajax({
        	    	url : url_brand,
        	    	type : "POST",
        	    	data : {'id' :id,
                            'id_brand':id_brand},
        	    	success: function(brands)
        	    		{
        	    			$("#"+id+" td:eq(3)").html("<select class='form-control' id='id_brand"+id+"'>"+brands+"</select>");
        	    		}
        	    });
        	     $.ajax({
        	     	url   : url_services,
        	     	type  : "POST",
        	     	data  : {"id":id,
                             'id_services':id_services},
        	     	success : function(services)
        	     		{
        	     			$("#"+id+" td:eq(5)").html("<select class='form-control' id='id_services"+id+"'>"+services+"</select>");
        	     		}
        	     });
        	$("#"+id+" td:eq(0)").html("<input class='form-control' id='t_name"+id+"' value='"+t_name+"'>");
        	$("#"+id+" td:eq(1)").html("<input class='form-control' id='t_name_ru"+id+"' value='"+t_name_ru+"'>");
        	$("#"+id+" td:eq(4)").html("<input class='form-control' id='price"+id+"' value='"+price+"'>");
        	$("#"+id+" td:eq(6)").html("<input class='form-control' id='title"+id+"' value='"+title+"'>");
        	$("#"+id+" td:eq(7)").html("<input class='form-control' id='title_ru"+id+"' value='"+title_ru+"'>");
        });

        $("body").on("click",".updgoods",function(){
            var id = $(this).attr('name');
        	var t_name     = $("#t_name"+id).val(),
        	    t_name_ru  = $("#t_name_ru"+id).val(),
        	    id_type    = $("#id_type"+id).val(),
        	    id_brand   = $("#id_brand"+id).val(),
        	    id_services= $("#id_services"+id).val(),
        	    price      = $("#price"+id).val(),
        	    title      = $("#title"+id).val(),
        	    title_ru   = $("#title_ru"+id).val();
        	var url_goods_upd = "<?php echo base_url('index.php/ajax/goods_upd');?>";
        	$.ajax({
        		url : url_goods_upd,
        		type: "POST",
        		data: {'id':id, 
        		       't_name'   	 :t_name,
        		       't_name_ru'	 :t_name_ru,
        		       'id_type'   	 :id_type,
        		       'id_brand'    :id_brand,
        		       'id_services' :id_services,
        		       'price'       :price,
        		       'title'       :title,
        		       'title_ru'    :title_ru},
        		success: function(types_upd)
        			{
        				alert(types_upd);
        			}
        	});
        });
/*                       goods     update   finish             */
=======
            var id = $(this).attr('name'), url_type = "<?php echo base_url('index.php/ajax/get_types');?>", url_brand = "<?php echo base_url('index.php/ajax/get_brands');?>", url_services="<?php echo base_url('index.php/ajax/get_services');?>";
            var t_name     = $("#"+id+" td:eq(0)").text(),
                t_name_ru  = $("#"+id+" td:eq(1)").text(),
                id_type    = $("#"+id+" td:eq(2)").text(),
                price      = $("#"+id+" td:eq(4)").text(),
                id_services= $("#"+id+" td:eq(5)").text(),
                title      = $("#"+id+" td:eq(6)").text(),
                title_ru   = $("#"+id+" td:eq(7)").text();
                select_type= '';
                $.ajax({
                    url : url_type,
                    type : "POST",
                    data : {'id' :id},
                    success: function(types)
                        {
                            $("#"+id+" td:eq(2)").html("<select class='form-control' id='id_type"+id+"'>"+types+"</select>");
                        }


                });
                $.ajax({
                    url : url_brand,
                    type : "POST",
                    data : {'id' :id},
                    success: function(brands)
                        {

                            // if (xarajat_turi.length == 0)
                            // {
                            //     alert("edit knopkasini ikki marta bosdiz! :)");
                            // }
                            // else
                            //{
                                $("#"+id+" td:eq(0)").html(" ");
                                $("#"+id+" td:eq(0)").html("<select class='form-control' id='xarajat_nomi"+id+"'>"+xarajat_turi+"</select>");
                            //}
                            

                            $("#"+id+" td:eq(3)").html("<select class='form-control' id='id_brand"+id+"'>"+brands+"</select>");

                        }


        $('body').on('click','.updhisob',function(){
            var id =$(this).attr('name'),
                xarajat_nomi = $("#xarajat_nomi"+id).val(); 
            var url_hisob_upd = "<?php echo base_url('index.php/ajax/hisob_upd')?>";
            $.ajax({
                url    : url_hisob_upd,
                type   : 'POST',
                data   : {'id'          : id,
                          'xarajat_nomi': xarajat_nomi},
                success:function(hisob_upd)
                    {
                       alert(hisob_upd)
                    }
            });


                });
                 $.ajax({
                    url   : url_services,
                    type  : "POST",
                    data  : {"id":id},
                    success : function(services)
                        {
                            $("#"+id+" td:eq(5)").html("<select class='form-control' id='id_services"+id+"'>"+services+"</select>");
                        }
                 });
            $("#"+id+" td:eq(0)").html("<input class='form-control' id='t_name"+id+"' value='"+t_name+"'>");
            $("#"+id+" td:eq(1)").html("<input class='form-control' id='t_name_ru"+id+"' value='"+t_name_ru+"'>");
            $("#"+id+" td:eq(4)").html("<input class='form-control' id='price"+id+"' value='"+price+"'>");
            $("#"+id+" td:eq(6)").html("<input class='form-control' id='title"+id+"' value='"+title+"'>");
            $("#"+id+" td:eq(7)").html("<input class='form-control' id='title_ru"+id+"' value='"+title_ru+"'>");

        });

/*                     xarajat_turi update start                     */
        $('body').on('click','.edit_xarajat_turi',function(){
            var id           = $(this).attr('name'),
                xarajat_turi = $("#"+id+" td:eq(0)").text();
            var url_xarajat_upd = "<?php echo base_url('index.php/ajax/xarajat_upd')?>";
              $.ajax({
              	url   : url_xarajat_upd,
              	type  : "POST",
              	data  : {'id':id,
                         'xarajat_turi':xarajat_turi},
                success: function(xarajat_turi_upd)
                	{
                        console.log(xarajat_turi_upd);
                        $("#"+id+" td:eq(0)").html(xarajat_turi_upd);
                	}
              });

        });

        $("body").on("click",".updgoods",function(){
            var id = $(this).attr('name');
            var t_name     = $("#t_name"+id).val(),
                t_name_ru  = $("#t_name_ru"+id).val(),
                id_type    = $("#id_type"+id).val(),
                id_brand   = $("#id_brand"+id).val(),
                id_services= $("#id_services"+id).val(),
                price      = $("#price"+id).val(),
                title      = $("#title"+id).val(),
                title_ru   = $("#title_ru"+id).val();
            var url_goods_upd = "<?php echo base_url('index.php/ajax/goods_upd');?>";
            $.ajax({
                url : url_goods_upd,
                type: "POST",
                data: {'id':id, 
                       't_name'      :t_name,
                       't_name_ru'   :t_name_ru,
                       'id_type'     :id_type,
                       'id_brand'    :id_brand,
                       'id_services' :id_services,
                       'price'       :price,
                       'title'       :title,
                       'title_ru'    :title_ru},
                success: function(types_upd)
                    {
                        alert(types_upd);
                    }
            });
        });
/*                       goods     update   finish             */

/*                       service     update   start             */

        $("body").on("click", ".edit_basket", function(){
            var id      = $(this).attr('name');
            var status    = $("#"+id+" td:eq(5)").text();
            $("#"+id+" td:eq(5)").html("<select class='form-control' id='status"+id+"' value='"+status+"'><option value='Waiting'>Yangi zakaz</option><option value='Active'>Qabul qilindi</option><option value='Success'>Yuborildi</option></select>");
         });
		
        $("body").on("click", ".edit_basket", function(){
        	var id      = $(this).attr('name');
        	var status    = $("#"+id+" td:eq(5)").text();
        	$("#"+id+" td:eq(5)").html("<select class='form-control' id='status"+id+"' value='"+status+"'><option value='Waiting'>Waiting</option><option value='Active'>Active</option><option value='Success'>Success </option></select>");

        });

        $("body").on("click",".updbasket",function(){
            var id = $(this).attr('name');
            var status    = $("#status"+id).val();
            var url_basket_upd = "<?php echo base_url('index.php/ajax/basket_upd'); ?>";
            $.ajax({
                url : url_basket_upd,
                type: "POST",
                data: {'id':id, 
                       'status':status},
                success: function(basket_upd)
                    {
                        alert(basket_upd);
                        location.reload();
                    }
            });
        });
/*                       service     update   finish             */

/*                       Delete knopkalari  start                */

        $('body').on('click','#btn_users_del',function(){
         var id = $(this).attr('name');
         var url_users_del="<?php echo base_url('index.php/ajax/users_btn_del')?>";
           $.ajax({ 
              url    :  url_users_del,
              type   : 'POST',
              data   :{'id':id},
              success:function(users_del)
                {
                    alert(users_del);
                    location.reload();
                }
           });
        });

        $("body").on('click','#btn_groups_del',function(){
            var id=$(this).attr('name');
            var url_del="<?php echo base_url('index.php/ajax/group_btn_del')?>";

            $.ajax({
                url   : url_del,
                type  :"POST",
                data  :{'id':id},
                success: function(btn_del)
                    {
                        alert(btn_del);
                        location.reload();
                    }
            });
        });

         $("body").on('click','#btn_kat_del',function(){
            var id=$(this).attr('name');
            var url_del="<?php echo base_url('index.php/ajax/btn_kat_del')?>";

            $.ajax({
                url   : url_del,
                type  :"POST",
                data  :{'id':id},
                success: function(btn_del)
                    {
                        alert(btn_del);
                        location.reload();
                    }
            });
        });  

        $('body').on('click','#btn_types_del',function(){
            var id=$(this).attr('name');
            var url_del="<?php echo base_url('index.php/ajax/btn_type_del')?>";

            $.ajax({
                url   : url_del,
                type  :"POST",
                data  :{'id':id},
                success: function(btn_del)
                    {
                        alert(btn_del);
                        location.reload();
                    }
            });
        }); 

        $('body').on('click','#btn_menu_del', function(){
            var id=$(this).attr('name');
            var url_menu_del= "<?php echo base_url('index.php/ajax/menu_btn_del')?>";
            $.ajax({
                url    : url_menu_del,
                type   : 'POST',
                data   : {'id':id},
                success: function(menu_del)
                    {
                        alert(menu_del);
                        location.reload();
                    }
            });
        });
 
        
       $('body').on('click','#btn_service_del', function(){
            var id=$(this).attr('name');
            var url_service_del= "<?php echo base_url('index.php/ajax/service_btn_del')?>";
            $.ajax({
                url    :  url_service_del,
                type   : 'POST',
                data   : {'id':id},
                success: function(service_del)
                    {
                        alert(service_del);
                        location.reload();
                    }
            });
        });

       $('body').on('click','#btn_brands_del', function(){
        var id=$(this).attr('name');
        var url_brand_del="<?php echo base_url('index.php/ajax/btn_brands_del')?>";
          $.ajax({ 
             url    : url_brand_del,
             type   :'POST',
             data   :{'id':id},
             success:function(brands_del)
                {
                    alert(brands_del);
                    location.reload();
                }
          });
       });

       $('body').on('click','#btn_goods_del', function(){
        var id= $(this).attr('name');
        var url_goods_del="<?php echo base_url('index.php/ajax/btn_goods_del')?>";
        $.ajax({
            url   :  url_goods_del,
            type  :'POST',
            data  :{'id':id},
            success: function(goods_del)
            {
                alert(goods_del);
            }
        });
       }); 


/*                 Delete knopkalari  finish                 */


</script>
</body>
</html>