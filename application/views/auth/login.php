<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>">
<link href="https://fonts.googleapis.com/css2?family=Ultra&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@1,500&display=swap" rel="stylesheet">
<style type="text/css">
  body
  	{
  		  background: linear-gradient(to bottom, #7d78c8,#7d78c8,#7d78c8,#7b76c6,#7b76c6,#7b76c6,#7b76c6,#7b76c6);
  	}
  .wrapper
	    {
	      display:flex;
	      flex-direction: column;
	      justify-content: center;
	      align-items: center;
	      height: 100vh;
		  background-image: url('/assets/imgs/online_shop_min1.jpg');
		  background-repeat: no-repeat;
		  background-size: 100%; 
	    }
	.wrapper p
	   	{
          font-family: 'Fraunces', serif;
          margin-right: 11%;
          text-align: center;
	   	}
	#infoMessage
		{
          width: 30%;
          margin-right: 8%;
		}
	h1
	   {
          font-family: 'Ultra', serif;
          color:white;
          margin-right:12%; 
	   }
    form
	   {
	      display: flex;
	      flex-direction: column;
	      justify-content: center;
	      align-items: center;
	      min-width: 30%;
	      min-height: 65%;
	      line-height: 14px;
	      letter-spacing: 4px;
	      border-radius: 10px;
	      box-shadow: 3px 3px 3px #5b56a1;
	      padding: 2rem;
	      background: linear-gradient(to bottom, #eeaa7d,#f3a483,#e9b09c,#e3ae97,#d8a9a1,#cba2aa,#c09bad,#ac91b4,#9785bf,#8a7fc3,#8079c7,#7d78c8,#7e79c9);
		  margin-right: 11%;
	   }
	span
		{
			background: linear-gradient(to bottom,#d8eaf4,#86a8f0,#4867c2 );		
		}
	span i
		{
			color:white;
		}
	span:hover
		{
			background: white;

		}
	span:hover i
		{
			color:#87a6f6;
		}
	#input_login
		{
			background-color: white;
			margin-left: 60%;
			width: 40%;
		}
	#input_login:hover
		{
            background: linear-gradient(to bottom,#d8eaf4,#86a8f0,#4867c2 );
		}
	.Forgot_your_password
		{
			margin-top: 10%;
			margin-left: 17%;
			color: black;
		}
	.Forgot_your_password:hover
		{
			color:white;
			text-decoration: none;
		}
     form p
       {
          display: flex;
          flex-direction: row;
          align-items: center;
          width: 100%;
       }
   
</style>
 <div class="wrapper"> 
    <h1><?php echo lang('login_heading');?></h1>
    <p><?php echo lang('login_subheading');?></p>
    <div id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open("auth/login");?>

        <p>
          <span for="identity" class="input-group-text"><i class="fa fa-2x fa-user" aria-hidden="true"></i></span>
          <input type="text" 
               name="identity" 
               class="form-control"
               id="identity"
               placeholder='Email/Username'
               > 
      </p>
      
      

      <p>
        <span for="password" class="input-group-text"><i class="fa fa-2x fa-lock" aria-hidden="true"></i></span>
        <input type="password" 
               name="password" 
               class="form-control"
               id="password"
               placeholder='Password'>
        
      </p>

      <p >
        <label for="remember" class="form-control-sm">Remember Me:</label>
        <input type="checkbox" name="remember" id="remember" >
      </p>


      <p>
      	<input type="submit" name="submit" value="Login" class="btn btn-outline" id="input_login">
      </p>


      <p> <a href="forgot_password" class="Forgot_your_password">Forgot your password?</a></p>
      
    <?php echo form_close();?>

    


 </div>

 <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
 	font-family: "Sofia", sans-serif;-->