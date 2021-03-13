
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Navoiydagi Internet Magazine</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">



</head>
<body>
<!-- Menu items                   -->
<header>
    <div class="container">
        <input type="checkbox" name="" id="check">

        <div class="logo-container">
            <h3 class="logo">Gazzon.<span>uz</span></h3>
        </div>

        <div class="nav-btn">
            <div class="nav-links">
                <ul>

                    <li class="nav-link" style="--i: .85s">
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

                                echo '  <li class="dropdown-link">';
                                echo '    <a href="">'.$q['menu'].'</a>
                                              </li>';


                            }



                        }

                        ?>
                </ul>
            </div>

            </li>

            <li class="nav-link" style="--i: .85s">
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

                        echo '  <li class="dropdown-link">';
                        echo '    <a href="">'.$q['menu'].'</a>
                                              </li>';


                    }



                }

                ?>
                </ul>
        </div>

        </li>

        <li class="nav-link" style="--i: 1.1s">
            <a href="#">Ichimliklar<i class="fas fa-caret-down"></i></a>
            <div class="dropdown">
                <ul>
                    <li class="dropdown-link">
                        <a href="#">yaxna ichimliklar</a>
                    </li>
                    <li class="dropdown-link">
                        <a href="#">Quruq choy</a>
                    </li>
                    <li class="dropdown-link">
                        <a href="#">Qaxva<i class="fas fa-caret-down"></i></a>
                        <div class="dropdown second">
                            <ul>
                                <li class="dropdown-link">
                                    <a href="#">Qora qaxva</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="#">Kakao va shokolad</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="#">Silkvi</a>
                                </li>
                                <div class="arrow"></div>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown-link">
                        <a href="#">Sharbatlar</a>
                    </li>
                    <div class="arrow"></div>
                </ul>
            </div>
        </li>
        <li class="nav-link" style="--i: 1.1s">
            <a href="#">Services<i class="fas fa-caret-down"></i></a>
            <div class="dropdown">
                <ul>
                    <li class="dropdown-link">
                        <a href="#">Link 1</a>
                    </li>
                    <li class="dropdown-link">
                        <a href="#">Link 2</a>
                    </li>
                    <li class="dropdown-link">
                        <a href="#">Link 3<i class="fas fa-caret-down"></i></a>
                        <div class="dropdown second">
                            <ul>
                                <li class="dropdown-link">
                                    <a href="#">Link 1</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="#">Link 2</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="#">Link 3</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="#">More<i class="fas fa-caret-down"></i></a>
                                    <div class="dropdown second">
                                        <ul>
                                            <li class="dropdown-link">
                                                <a href="#">Link 1</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="#">Link 2</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="#">Link 3</a>
                                            </li>
                                            <div class="arrow"></div>
                                        </ul>
                                    </div>
                                </li>
                                <div class="arrow"></div>
                            </ul>
                        </div>
                    </li>


                    <li class="dropdown-link">
                        <a href="#">Link 4</a>
                    </li>
                    <div class="arrow"></div>
                </ul>
            </div>
        </li>
        <li class="nav-link" style="--i: 1.35s">
            <a href="#">About</a>
        </li>
        </ul>
    </div>

    <div class="log-sign" style="--i: 1.8s">
        <a href="<?php echo base_url('index.php/auth/login');?>" class="btn transparent">Log in</a>
        <a href="<?php echo base_url('index.php/auth/login');?>" class="btn solid">Sign up</a>
    </div>
    </div>

    <div class="hamburger-menu-container">
        <div class="hamburger-menu">
            <div></div>
        </div>
    </div>
    </div>
</header>

<div id="myvue">
    <div class="container-fluid">
     <div class="row">
       
        <div class="col-md-4" v-for="cat in categories">
          <template> 
                <div class="brc">
                <img width="100%"  :src="cat.img" alt="">
                <div class="title">  {{ cat.kat_name   }}</div>
                </div>
            </template>     
        </div> 
        
     </div>
    </div>
</div>

<style>
   
    .brc
    {
        
        border-radius: 5px;
        padding: 2rem;

    }
    .col-md-4
    {
         margin-top: 2rem;
         margin-bottom: 2rem;     
         
    }
    img
    {
        border-radius: 10px;
        transition: 1s all easy;
    }
    img:hover 
    {
        opacity: 1;
        transition: 1s all;   
        box-shadow: 10px 10px #4F4D4D; 
        background-color: #e7e7e7;  
        z-index: 10s;      
    }
    
    body::before{z-index: -1;}

    .title{
        font-family: "cursive";
        font-size: 14pt;
        position: absolute;
        word-wrap: break-word;
        text-transform: uppercase;
        color: black;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        
    }

</style>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://kit.fontawesome.com/64d58efce2.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    var app = new Vue({
        el: '#myvue',
        data: {
            msg: 'Hello WORLD Vue!',
            categories : [  ],          
            strong : [
                { brand : [ '1','2','3' ] },
                { brand : [ '4','5','6' ] },
                { brand : [ '7','8','9' ] },

            ],
            a : 12,
            url_get_cat: '<?php echo base_url('index.php/ajax/get_categories');?>',
        },
        methods: {
            calculate: function ()
            {
                this.a++
                console.log(this.a)
            },
            minus : function()
            {
                this.a--
                console.log(this.a)
            }
        },
        mounted()
        {
            axios.get(this.url_get_cat)
                .then(function (response) {
                    // handle success
                    app.categories = response.data
                    console.log(response.data);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        }
    });
</script>
</body>
</html>