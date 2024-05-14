<?php
include("include/header.php");
$_SESSION['id']=$_GET['id'];
?>
<form action="dbfiles/payment.inc.php" method="POST">
<div class="pay">
    <div>
    <label for="">Select Your City:</label>
    <select name="city" id=""> 
    <option value="mangalore">mangalore</option>
    <option value="udupi">udupi</option>
    <option value="mysore">mysore</option>
    <option value="Bangalore">Bangalore</option>
    <option value="shivamogga">shivamogga</option>
    </select>
    </div>
<img src="../Mca_minor_project/Images/pay_using.png" alt="">
<img src="../Mca_minor_project/Images/scanner.png" alt="">
</div>
<div class="paydetails pay  ">
    <p>If your payment is done..</p>
    <label for="">Enter the payment Reference Number:</label>
    <input type="text" name="refno" id="" maxlength="20" required>
    <label for="">Enter the bank name:</label>
    <input type="text" name="bank" id="" maxlength="20" required>
    <button type="submit" name="submit" value="submit">SUBMIT</button>
</div>
</form>

<?php
    include("include/footer.php");
?>