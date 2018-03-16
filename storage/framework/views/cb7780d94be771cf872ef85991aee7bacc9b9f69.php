<!-- 
  <nav style="background-color: white">
    <div class="nav-wrapper">
    	<img src="bck/logo.jpg" style="height: 64px; width: 255px;">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li style="background-color: #ff9800"><a href="<?php echo e(url('/')); ?>">Home</a></li>
        <li style="background-color: #ff9800"> <a href="<?php echo e(url('/produk')); ?>">Product</a></li>
        <li style="background-color: #ff9800"> <a href="<?php echo e(url('/about')); ?>">About us</a></li>
        <li style="background-color: #ff9800"> <a href="<?php echo e(url('/partner')); ?>">Partner</a></li>
        <li style="background-color: #ff9800"> <a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
      </ul>
    </div>
  </nav> -->
<div class="navbar-fixed">
<nav style="background-color: #F2F2F2; height:80px;
    padding-left: 118px;
    padding-right: 100px;">
  <div class="nav-wrapper">
    <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('bck/logogam.png')); ?>" style="margin:0px;"></a>
    <ul class="right hide-on-med-and-down">
      <div style="margin:10px; content: 50px">
      <li><a href="<?php echo e(url('/')); ?>"><font face="arial" color="#FFA300" size="4px">HOME</font></a></li>
      <li><a href="<?php echo e(url('/produk')); ?>"><font face="arial" color="#FFA300" size="4px">PRODUK</font></a></li>
      <li><a href="<?php echo e(url('/about')); ?>"><font face="arial" color="#FFA300" size="4px">ABOUT US</font></a></li>
      <li><a href="<?php echo e(url('/partner')); ?>"><font face="arial" color="#FFA300" size="4px">PARTNERS</font></a></li>
      <li><a href="<?php echo e(url('/contact')); ?>"><font face="arial" color="#FFA300" size="4px">CONTACT</font></a></li></font>
    </div>
    </ul>
  </div>
</nav>
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript">
$('.dropdown-button').dropdown({
hover:true
}
);
  </script>
