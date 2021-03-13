<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@1,500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
<style type="text/css">
  .wrapper
	    {
	      display:flex;
	      flex-direction: column;
	      justify-content: center;
	      align-items: center;
	      height: 100vh;
          background: -webkit-linear-gradient(to right, #eeaa7d,#f3a483,#e9b09c,#e3ae97,#d8a9a1,#cba2aa,#c09bad,#ac91b4,#9785bf,#8a7fc3,#8079c7,#7d78c8,#7e79c9);  
          background: linear-gradient(to right,#eeaa7d,#f3a483,#e9b09c,#e3ae97,#d8a9a1,#cba2aa,#c09bad,#ac91b4,#9785bf,#8a7fc3,#8079c7,#7d78c8,#7e79c9); 
	    }
   form
	    {
	      display: flex;
	      flex-direction: column;
	      justify-content: center;
	      align-items: center;
	      min-width: 25%;
	      min-height: 40%;
	      line-height: 14px;
	      letter-spacing: 4px;
	      border-radius: 10px;
	      box-shadow: 3px 3px 3px #5b56a1;
	      padding: 1rem;
		  background-color: rgba(0,0,0,.3);
	    }
	h1 
		{
			color: white;
		}
	p b
		{
			font-family: 'Libre Baskerville', serif;
		}
	p label
		{
            font-family: 'Fraunces', serif;
		}
    #infoMessage
    	{
    		color: red;
    		font-size: 60%;
    		color: white;
    		margin-top:-7%;
    	}
    #Email_btn
    	{
            display: flex; 
            flex-direction: row; 
            margin-bottom: 12%;
    	}
    #Email_btn label
    	{
    		border: 0;
    		outline: none;
    		background-color: rgba(0,0,0,.3);
    		color: white;  
    	}
    #Email_btn label:hover
    	{
    		
    		background-color: white;
    		color: rgba(0,0,0,.8);
    	}
    #Email_btn input
    	{
    		border: 0;
    		outline: none;
    	}
    .submit
    	{
    		border: 0;
    		width: 200%;
    		height: 200%;
    		background: linear-gradient(to right,#eeaa7d,#f3a483,#e9b09c,#e3ae97,#d8a9a1,#cba2aa,#c09bad,#ac91b4,#9785bf,#8a7fc3,#8079c7,#7d78c8,#7e79c9);
    		box-shadow: 3px 3px 0px #805538;
    		outline: 0;
    		margin-left: 90%;
    		margin-top: 8%
    	}
    .submit:active
    	{
    		border: 0;
    		width: 200%;
    		height: 200%;
    		background: linear-gradient(to right,#eeaa7d,#f3a483,#e9b09c,#e3ae97,#d8a9a1,#cba2aa,#c09bad,#ac91b4,#9785bf,#8a7fc3,#8079c7,#7d78c8,#7e79c9);
    		box-shadow: 3px 3px 0px #805538;
    		transform: translateY(3px);
    		outline: 0;
    	}
</style>
	  <div class="wrapper">
	  <h1><?php echo lang('forgot_password_heading');?></h1>
	  <p><b ><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></b></p>
	  <?php echo form_open("auth/forgot_password");?>
      
      <div id="Email_btn"> 
      		<label for="identity" class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></label>
      		<br/>
      	    <input type="text" name="identity" id="identity" class="form-control-lg" value="" placeholder="Email">
      </div>
      <div id="infoMessage"><?php echo $message;?></div>
      <p><input type="submit" name="submit" value="Submit" class="submit"></p>
<?php echo form_close();?>
