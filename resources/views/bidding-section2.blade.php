<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidding</title>
    <link rel="stylesheet" href="../css/style-Home2.css">
</head>
<body>
<div id="navbar">
        <ul>
        <img src="../assets/logoBeedie.png" alt="" id="logo">
        </ul>
        <label for="SearchItem">Search Item:</label>
        <input type="search" id="SearchItem" name="">
        <input type="Submit">
        <ul>
        <a href=""><li>Sell Item</li></a>
        <a href=""><li>Deposit</li></a>
        <a href="./home.blade.php"><li>Home</li></a>
        <a href="./about-us.blade.php"><li>About US</li></a>
        </ul>
</div>
<!-- Bagian Bawah Navbar -->
<div id="TotalSaldo">
<br>
<!-- Display Total saldo berdasarkan deposit -->
<p class="Currency">Total Saldo: <span>5.000.000</span></p>
<!-- Inset Command: ... -->
</div>

<div class="services-list">
	<div class="kartu-service">
			<img src="../assets/testing.png"/ width ="200" height ="200">
			<p>Nama Barang : Spongebob</p>
            <p>Nilai limit : Rp200.000</p>
            <p><input type="textbox" id="BidItem" name="" placeholder = "5.500.000"></p>
            <button href="">Click to Bid</button>
	</div>
</div>

<div class="services-list">
	<div class="kartu-service">
			<p>Time remaining</p>
            <p>00:00</p>
	</div>
</div>

<div class="services-list">
	<div class="kartu-service">
			<p>History Bid</p>
            <p>1. You (Rp 5.500.000)</p>
            <p>2. Agus (Rp 5.000.001)</p>
            <p>3. Helen (Rp 4.900.000)</p>
	</div>
</div>

</body>
</html>