<h3>
    <center>Car Purchase Agreement</center>
</h3>
<hr>
<form action="#" method="post" ENCTYPE="multipart/form-data">
    @csrf
    <p>This Agreement made on the <input type="date" name="date"></p>
    <hr>
    <h5><i>Between</i></h5>

    <h5>Name And Signature(<i>Seller/Supplier</i>) <input type="text" name="name"></h5>
    <hr>
    <center><h5>AND</h5></center>
    <hr>
    <h5>Name And Signature(<i>Buyer</i>) <input type="text" name="name"></h5>
    <hr>
    Whereas the Seller and the Buyer have entered into a contarct of purchase and sale in which the Seller has agreed
    to transfer and sell to the Buyer and the Buyer has agreed to Purchase from the Seller a certain car which is the
    property of the Seller.
    <hr>
    Now therefore this Agreement is a witness that for the partial sum of <input type="number" name="amount"> paid to
    the seeler by the Buyer, as agreed with the full amount <input type="number" name="amount2">, that the transfer
    of the car will be done to the buyer as per the agreed and accepted terms and <br>terms and conditions,including
    all intrests involved.
    <hr>
    <h5>Terms and Conditions</h5><input type="checkbox" name="terms">
    <hr>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
