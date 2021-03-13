<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
<style type="text/css">
  body
    {
      background: #fafafa; 
      
    }
  .row
    {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    
    }
  .container
    {
      background-color: #fff;
      margin-top: 1.5%;
      border-radius: 5px;
      box-shadow: 0 3px 6px rgb(0 0 0 / 30%);
      overflow: hidden;
      width: 450px;
      max-width: 100%;
    }
    .header
      {
        background:#14295e;
        color: white;
        width: 450px;
        text-align: center;
        border-radius: 7px;
      }
    form
      {
        padding: 2rem;
      }
    .input-group-text
      {
        color: black;
        background:#fafafa;
      }
    .create_user
      {
        color: white;
        background-color: #14295e;
      }
    .create_user:hover
      {
        color:#14295e; 
        background-color:#fafafa; 
      }
</style>
<div id="infoMessage" class="container">
  <div class="row">
  <div class="header">
    <h2>Foydalanuvchi yaratish</h2>
    <p>Iltimos, foydalanuvchi ma'lumotlarini kiriting</p>
  </div>

<!-- action="http://internetMagazine.uz/index.php/auth/create_user"  -->
<!-- <?php echo form_open("auth/create_user");?> -->
   <form 
         method="post" 
         accept-charset="utf-8">
     <p class="input-group mb-3"> 
        <label for="first_name"
               id="first_name"
               class="input-group-text">Familiya:</label>
        <input type="text" 
               name="first_name" 
               id="first_name" 
               value="<?php echo $this->session->userdata('message'); ?>" 
               class="form-control" 
               placeholder="familiya" 
               aria-describedby="first_name">
     </p>

      <p class="input-group mb-3">
         <label for="last_name"
                id="last_name"
                class="input-group-text">Ism:</label>
         <input type="text" 
                name="last_name" 
                id="last_name" 
                value="" 
                class="form-control" 
                placeholder="ism" 
                aria-describedby="last_name">
      </p>
      
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>

      <p class="input-group mb-3">
          <label for="company" 
                 id="company"
                 class="input-group-text">Ish joyi:</label>
          <input type="text" 
                 name="company"
                 id="company"
                 value=""
                 class="form-control"
                 placeholder="Ish joyi" 
                 aria-describedby="company">
      </p>

      <p class="input-group mb-3">
          <label for="email"
                 id="email"
                 class="input-group-text">Email:</label>
          <input type="text" 
                 name="email"
                 id="email"
                 value=""
                 class="form-control"
                 placeholder="user@gmail.com"
                 aria-describedby="email">
      </p>

      <p class="input-group mb-3">
          <label for="phone"
                 id="email"
                 class="input-group-text">Telefon raqam:</label>
          <input type="text" 
                 name="phone"
                 id="phone"
                 value=""
                 class="form-control"
                 placeholder="telefon raqam"
                 aria-describedby="phone">
      </p>

      <p class="input-group mb-3">
          <label for="password"
                 id="password"
                 class="input-group-text">Parol:</label>
          <input type="password" 
                 name="password"
                 value=""
                 id="password"
                 class="form-control"
                 placeholder="parol"
                 aria-describedby="password">
      </p>

      <p class="input-group mb-3">
          <label for="password_confirm"
                 id="password_confirm"
                 class="input-group-text">Parolni tasdiqlang:</label>
          <input type="password" 
                 name="password_confirm"
                 id="password_confirm"
                 value=""
                 class="form-control"
                 placeholder="Parolni tasdiqlang"
                 aria-describedby="password_confirm">
      </p>


      <p><input type="submit" name="submit" value="Foydalanuvchi yaratish" class="create_user form-control"></p>
  </form>
<!--<?php echo form_close();?>-->
  </div>
</div>



