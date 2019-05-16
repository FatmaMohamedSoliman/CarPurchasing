<?php
require_once  __DIR__.'/../customer/model.customer.php';
$customer = new customer();
$customerlist = $customer->get_all("","");
 ?>
    <link href="style.css" rel="stylesheet">



    <section class="dorne-listing-destinations-area section-padding-100-50">
        <div class="container">
                      <div class="row">
<?php
for($i = 0 ; $i < count($customerlist); $i++)
{
 ?>
               <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="img/bg-img/user_3.jpg" alt="">

                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5><?php echo $customerlist[$i]['username'] ?></h5>
								<p> address:<?php echo $customerlist[$i]['address'] ?> </p>
                <p> Phone number : <?php echo $customerlist[$i]['phone'] ?> </p>
								<p>Email : <?php echo $customerlist[$i]['email'] ?> </p>
								<a href="Car_php/customer/do_deleteuser.php?id=<?php echo $customerlist[$i]['id'] ?>">Delete User</a>
                            </div>

                        </div>
                    </div>
                </div>

<?php } ?>
            </div>
        </div>
    </section>
