<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MTK | Cart</title>
    <?php include('includes/links.php');?>
</head>

<body style="font-size: 20px;">
    <section>

    <?php include('includes/header.php');?>
    </section>
  <section id="cart"><div class="shopping-cart">
  <div class="px-4 px-lg-0">

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">



          <table class="table">
          <th colspan ="4">Cart </th>
<tr align="center">

<th scope="col" class="border-0 bg-light">#</th>
<th scope="col" class="border-0 bg-light">Booking Id</th>
<th scope="col" class="border-0 bg-light">Package Name</th>
<th scope="col" class="border-0 bg-light">Package Price(USD)</th>	

<th scope="col" class="border-0 bg-light">Remove</th>
</tr>
<?php 

$uemail=$_SESSION['login'];;
$sql = "SELECT tblbooking.BookingId as bookid,tblbooking.PackageId as pkgid,tblbooking.PackagePrice as pkgPrice,tbltourpackages.PackageName as packagename,tblbooking.FromDate as fromdate,tblbooking.ToDate as todate,tblbooking.Comment as comment,tblbooking.status as status,tblbooking.RegDate as regdate,tblbooking.CancelledBy as cancelby,tblbooking.UpdationDate as upddate from tblbooking join tbltourpackages on tbltourpackages.PackageId=tblbooking.PackageId where UserEmail=:uemail";
$query = $dbh->prepare($sql);
$query -> bindParam(':uemail', $uemail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
<tr align="center">
<td class="border-0 align-middle"><?php echo htmlentities($cnt);?></td>
<td class="border-0 align-middle">#BK<?php echo htmlentities($result->bookid);?></td>
<td class="border-0 align-middle"><a href="package-details.php?pkgid=<?php echo htmlentities($result->pkgid);?>"><?php echo htmlentities($result->packagename);?></a></td>
<td class="border-0 align-middle"><?php echo htmlentities($result->pkgPrice);?></td>
<td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>

<?php $cnt=$cnt+1; }} ?>
	</table>

          </div>
          <!-- End -->
        </div>
      </div>

      <div  class="bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
          <div class="p-4">
            <p class="font-italic mb-4">Tax is 10 percent of total.</p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$170.00</strong></li>

              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$17.00</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">$187.00</h5>
              </li>
            </ul><p style="text-align:center">Pay With</p>
            <!--Paypal Payment button-->
            <div id="paypal-button"></div>
            <div style="text-align:center">Or</div>
            <div class="rounded-pill" type='button' id="mpesa-button" style="color: white; background-color:green;shape:pill; text-align:center" onclick = "mpesa()" >M-Pesa</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</section>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="../assets/js/responsive-blog-card-slider-1.js"></script>
    <script src="../assets/js/responsive-blog-card-slider.js"></script>
    <script src="../assets/js/Swipe-Slider-9.js"></script>
    <!--Paypal-->
    <script src="https://www.paypal.com/sdk/js?client-id=AY-uotNqidCiQoRJcWvPc7snk5qtwtzuaJNfM_TDzjB0kJfrJqgZStTb6swbcjPFF1U4ysapwRyl57Gz&disable-funding=credit,card"></script>
    <script src="js/payment.js"></script>

    <?php include('includes/footer.php');?>
    <?php include('includes/signup.php');?>			

<!-- signin -->
<?php include('includes/signin.php');?>	

</body>

</html>