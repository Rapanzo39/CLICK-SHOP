<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="css/bootstrap-reboot.css">
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-utilities.css">

<script type="text/javaScript" src="js/bootstrap.bundle.js"></script>
<script type="text/javaScript" src="js/bootstrap.js"></script>
<script type="text/javaScript" src="js/bootstrap.esm.js"></script>
<style>
.search_bar
  {
    margin-left:50px;
  
  } 
.menu1:hover
  {
    color:#ff99ff !important;
    text-decoration:underline ;
    border-radius:15px;
    font-family: -apple-system, "Helvetica Neue", sans-serif, "Mier Book"; 
  }
  .btn:hover
  {
    background-color: #ff99ff  !important;
  }


.wrapper {
  height: 20px;
  width: 30px;
  background-color: #3760C9;
  position: relative;
  display: flex;
  justify-content: center;
  z-index: 0;
  margin-left:-40px;
}
  .lid {
  position: absolute;
  height: 10px;
  width: 10px;
  top: 0;
  left: 0;
  border-right: 15px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid transparent;
  transform-origin: top;
  transition: transform 0.25s linear;
}

/* Lid when closed */
.lid.one {
  border-top: 10px solid #658ced;
  transform: rotateX(0deg);
  z-index: 3;
  transition-delay: 0.75s;
}

/* Lid when opened */
.lid.two {
  border-top: 10px solid #3760C9;
  transform: rotateX(90deg);
  z-index: 1;
  transition-delay: 0.5s;
}

.envelope {
  position: absolute;
  height: 10px;
  width: 10px;
  top: 0;
  left: 0;
  border-top: 10px solid transparent;
  border-right: 15px solid #C4DFF0;
  border-bottom: 10px solid #C4DFF0;
  border-left: 15px solid #a4d4f2;
  z-index: 3;
}
.wrapper:hover .lid.one {
    transform: rotateX(90deg);
    transition-delay: 0s;
}

.wrapper:hover .lid.two {
    transform: rotateX(180deg);
    transition-delay: 0.25s;
}
</style>
</head>
<body style="background-color:black; color:white;"> 

<?php  
 require_once('header1.php');
 ?>

<br />





<hr />
<div style="margin-left:80px; display:inline-table;">
<img src="images/contactl1.jpg" style="height:25px; margin-left:-30px; margin-bottom:-0px;">
<h4 style="display:inline-table; margin-top:0px; margin-left:8px;">Contact</h4>
<br />
9622306138
<br />
9975453583
</div>

<div style="margin-left:500px; display:inline-table;">
<div class="wrapper" style="margin-bottom:-25px;">
      <div class="lid one"></div>
      <div class="lid two"></div>
      <div class="envelope"></div>
      </div>
<h4 style="display:inline-table; margin-top:0px;">Email ID</h4><br />
click&shop@gmail.com
</div>

<div style="margin-left:400px; display:inline-table;">
<img src="images/address.jpg" style="height:30px; margin-left:-30px; margin-bottom:2px;">
<h4 style="display:inline-table; margin-top:0px; margin-left:8px;">Address</h4><br />
Dream Technology,<br />
Asra,Hotgi Road, <br />
Solapur, Maharashtra 413003.
</div>

<br />
<hr style="box-shadow:0px 0px 10px 4px;"/>
<br />
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15209.045539128301!2d75.919773!3d17.637775!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da1ed3381eed%3A0x6fdb8e3ff8ffd70c!2sDream%20Technology!5e0!3m2!1sen!2sin!4v1688799703865!5m2!1sen!2sin" width="90%" height="500px" style="border:1px solid white; box-shadow:0px 0px 10px 4px; margin-left:75px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
<br />
<hr style="box-shadow:0px 0px 10px 4px;"/>
<center><h4>Find Us On</h4>
<div>
<a href="https://www.instagram.com/click_shop124?r=nametag"><img src="images/insta.jpg" style="height:32px; margin-left:10px; margin-bottom:2px; display:inline-table;" /></a>
<a href=""><img src="images/facebook.jpg" style="height:32px; margin-left:20px; margin-bottom:2px; display:inline-table;" /></a>
<a href=""><img src="images/twitter.jpg" style="height:32px; margin-left:15px; margin-bottom:2px; display:inline-table;" /></a>
</div>
<hr style="box-shadow:0px 0px 10px 4px;"/>


<img src="images/qr.jpg" style="height:80px; float:right; margin-top:-10px; display:inline-table; margin-right:30px;"/>

<button id="rzp-button1" style=" float:right; margin-top:75px; margin-right:-50px;">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_zQ6qLDJqxz6gSe", // Enter the Key ID generated from the Dashboard
    "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "clickshop",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

</center>
</body>
</html>

=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="css/bootstrap-reboot.css">
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-utilities.css">

<script type="text/javaScript" src="js/bootstrap.bundle.js"></script>
<script type="text/javaScript" src="js/bootstrap.js"></script>
<script type="text/javaScript" src="js/bootstrap.esm.js"></script>
<style>
.search_bar
  {
    margin-left:50px;
  
  } 
.menu1:hover
  {
    color:#ff99ff !important;
    text-decoration:underline ;
    border-radius:15px;
    font-family: -apple-system, "Helvetica Neue", sans-serif, "Mier Book"; 
  }
  .btn:hover
  {
    background-color: #ff99ff  !important;
  }


.wrapper {
  height: 20px;
  width: 30px;
  background-color: #3760C9;
  position: relative;
  display: flex;
  justify-content: center;
  z-index: 0;
  margin-left:-40px;
}
  .lid {
  position: absolute;
  height: 10px;
  width: 10px;
  top: 0;
  left: 0;
  border-right: 15px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid transparent;
  transform-origin: top;
  transition: transform 0.25s linear;
}

/* Lid when closed */
.lid.one {
  border-top: 10px solid #658ced;
  transform: rotateX(0deg);
  z-index: 3;
  transition-delay: 0.75s;
}

/* Lid when opened */
.lid.two {
  border-top: 10px solid #3760C9;
  transform: rotateX(90deg);
  z-index: 1;
  transition-delay: 0.5s;
}

.envelope {
  position: absolute;
  height: 10px;
  width: 10px;
  top: 0;
  left: 0;
  border-top: 10px solid transparent;
  border-right: 15px solid #C4DFF0;
  border-bottom: 10px solid #C4DFF0;
  border-left: 15px solid #a4d4f2;
  z-index: 3;
}
.wrapper:hover .lid.one {
    transform: rotateX(90deg);
    transition-delay: 0s;
}

.wrapper:hover .lid.two {
    transform: rotateX(180deg);
    transition-delay: 0.25s;
}
</style>
</head>
<body style="background-color:black; color:white;"> 

<?php  
 require_once('header1.php');
 ?>

<br />





<hr />
<div style="margin-left:80px; display:inline-table;">
<img src="images/contactl1.jpg" style="height:25px; margin-left:-30px; margin-bottom:-0px;">
<h4 style="display:inline-table; margin-top:0px; margin-left:8px;">Contact</h4>
<br />
9622306138
<br />
9975453583
</div>

<div style="margin-left:500px; display:inline-table;">
<div class="wrapper" style="margin-bottom:-25px;">
      <div class="lid one"></div>
      <div class="lid two"></div>
      <div class="envelope"></div>
      </div>
<h4 style="display:inline-table; margin-top:0px;">Email ID</h4><br />
click&shop@gmail.com
</div>

<div style="margin-left:400px; display:inline-table;">
<img src="images/address.jpg" style="height:30px; margin-left:-30px; margin-bottom:2px;">
<h4 style="display:inline-table; margin-top:0px; margin-left:8px;">Address</h4><br />
Dream Technology,<br />
Asra,Hotgi Road, <br />
Solapur, Maharashtra 413003.
</div>

<br />
<hr style="box-shadow:0px 0px 10px 4px;"/>
<br />
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15209.045539128301!2d75.919773!3d17.637775!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da1ed3381eed%3A0x6fdb8e3ff8ffd70c!2sDream%20Technology!5e0!3m2!1sen!2sin!4v1688799703865!5m2!1sen!2sin" width="90%" height="500px" style="border:1px solid white; box-shadow:0px 0px 10px 4px; margin-left:75px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
<br />
<hr style="box-shadow:0px 0px 10px 4px;"/>
<center><h4>Find Us On</h4>
<div>
<a href="https://www.instagram.com/click_shop124?r=nametag"><img src="images/insta.jpg" style="height:32px; margin-left:10px; margin-bottom:2px; display:inline-table;" /></a>
<a href=""><img src="images/facebook.jpg" style="height:32px; margin-left:20px; margin-bottom:2px; display:inline-table;" /></a>
<a href=""><img src="images/twitter.jpg" style="height:32px; margin-left:15px; margin-bottom:2px; display:inline-table;" /></a>
</div>
<hr style="box-shadow:0px 0px 10px 4px;"/>


<img src="images/qr.jpg" style="height:80px; float:right; margin-top:-10px; display:inline-table; margin-right:30px;"/>

<button id="rzp-button1" style=" float:right; margin-top:75px; margin-right:-50px;">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_zQ6qLDJqxz6gSe", // Enter the Key ID generated from the Dashboard
    "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "clickshop",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

</center>
</body>
</html>

>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
