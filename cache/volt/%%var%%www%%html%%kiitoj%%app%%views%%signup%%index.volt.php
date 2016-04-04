
<?php echo $this->tag->stylesheetLink('css/login.css'); ?>

<?php echo $this->getContent(); ?>
<div class="wrapper">
  <form class="form-signin" method="post">
    <h2 class="form-signin-heading">Signup</h2>
    <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
 <input type="text" class="form-control" name="roll" placeholder="Roll No" required="" autofocus="" />
 <input type="text" class="form-control" name="name" placeholder="Full Name" required="" autofocus="" />
    <input type="password" class="form-control" name="pass" placeholder="Password" required="" />
    <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="" />
    
    <button class="btn btn-lg btn-primary btn-block" type="submit">Signup</button>
  </form>
</div>
