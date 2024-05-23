
<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="form.css">
	<title>Payment page</title>

	<link rel="icon" type="image/icon" href="image/1658326507295grocery/image/favicon.png">

	


<!-- Code for font awesome cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--End  Code for font awesome cdn -->



</head>
<body>

	<!-- Code for header section -->
<header class="header">
	<a href="#" class="logo">  <i class="fa fa-shopping-basket"></i>Payment Page</a>


<nav class="navbar">
	<a href="index.html">home</a>
	<a href="#features">features</a>
	<a href="#products">products</a>
	<a href="#categories">categories</a>
	<a href="#review">review</a>
	<a href="#blogs">blogs</a>
</nav>	

<div class="icons">
	<div class="fa fa-bars" id="menu-button"></div>
	<div class="fa fa-search" id="search-button"></div>
	<div class="fa fa-shopping-cart" id="cart-button"></div>
	<div class="fa fa-user" id="login-button"></div>
</div>

</header>


<!-- Code for banner/home section -->

<section class="pay" id="pay">
	<div class="content">
		<h3>Fresh And <span>Organic</span> Vegetables For You</h3>
		<p>WELCOME TO OUR PAYMENT SITE. MAKE ALL YOUR TRANSACTIONS WITH EASE.</p>

		
	</div>
	
</section>
<!--  End Code for banner section -->


<section class="feature" id="feature">
	<h1 class="heading">Payment<span>Methods</span></h1>


<br><p>We offer a variety of convienient payment methods to suit your preferences. Whether you prefer to pay with credit card, debit card, PayPal, Mobile Money (MoMo) or other electronic payment option, we have got you covered.<br><br>Your security is our topmost priority, so you can shop with confidence knowing that your payment informatin is encrypted ad protected. Choose the payment method that works best for you and enjoy a seamless checkout experience with us every time.<br><br>
</p>

<p><b>Please Fill the form below to make Payment for both the Product and for the Delivery(Note that Amount to be Paid for Delivery is not on the form because
	DELIVERY IS FREE FOR ALL PRODUCTS.)<br><br><br><br>
</b></p>
</section>




	
<div class="container">
    <form action="#" method="POST">
        <div class="row">
        <div class="col">
            <h3 class="title">Billing Address</h3>

            <div class="inputBox">
                <span>Full Name:</span>
                <input type="text" placeholder="John Doe" name="fname">
            </div>

            <div class="inputBox">
                <span>Email:</span>
                <input type="text" placeholder="example@example.com" name="email">
            </div>    

            <div class="inputBox">
                <span>Address:</span>
                <input type="text" placeholder="room - street - locality" name="address">
            </div>

            <div class="inputBox">
                <span>State:</span>
                <input type="text" placeholder="Kumasi" name="state">
            </div>

           
                <div class="inputBox">
                <span>Area:</span>
                <input type="text" placeholder="Dubai" name="area">
            </div>

            <div class="inputBox">
                <span>Phone Number:</span>
                <input type="text" placeholder="+233 xxxxxxxxx" name="phoneN">
            </div>
                
            

        </div>

        <div class="col">
            <h3 class="title">Payment</h3>


            <div class="inputBox">
                <span>Card accepted:</span>
               <img src="payment.png">
            </div> 

            <div class="inputBox">
                <span>name on card:</span>
                <input type="text" placeholder="mr. John Doe" name="nameOnCard">
            </div>
   

            <div class="inputBox">
                <span>credit card number:</span>
                <input type="text" placeholder="0011223344" name="cardNum">
            </div>

            <div class="inputBox">
                <span>exp. Date:</span>
                <input type="date"  name="expDate">
            </div>

            <div class="inputBox">
                <span>ITEMS:</span>
                <input type="text" placeholder="Tomatoes, cabbage, onion" name="item">
            </div>

            <div class="inputBox">
                <span>Delivery Method:</span>
                <select name="deliveryMetd">
                    <option>Select</option>
                    <option>Motor Bike</option>
                    <option>Bicycle</option>
                    <option>Car</option>
                </select>
            </div>
                

            </div>
        <div class="btnCheck">
            <input type="submit" value="Checkout" class="button" name="checkout">
        </div>

        </div>
    </form>
</div>
       



<section class="credits" id="credits">
<div class="credit">Created By <span>Group Four</span> | © All Rights Reserved</div>
</section>



</body>
</html>


<?php
    if($_POST['checkout'])
    {
        $fname          = $_POST['fname'];
        $email          = $_POST['email'];
        $address        = $_POST['address'];
        $state          = $_POST['state'];
        $area           = $_POST['area'];
        $phoneN         = $_POST['phoneN'];
        $nameOnCard     = $_POST['nameOnCard'];
        $cardNum        = $_POST['cardNum'];
        $expDate        = $_POST['expDate'];
        $item           = $_POST['item'];
        $deliveryMetd   = $_POST['deliveryMetd'];


       $query ="INSERT INTO FORM VALUES('$fname','$email','$address','$state','
            $area','$phoneN','$nameOnCard','$cardNum','$expDate',
            '$item','$deliveryMetd')";

       $data = mysqli_query($con,$query);

       if($data)
       {
        echo "Data Inserted into Database";
       }

      else
       {
        echo "Failed";
       }



    }
?>