<?php

/** @var yii\web\View $this */

$this->title = 'Toko Klontong';
?>

<style>
    .Header{
        text-align: center;
        background: transparent;
        margin-top: 5px;
        margin-bottom: 50px;
    }
    .judul-bio{
        text-align: left;
        font-family: 'Arial', sans-serif;
        font-weight: bold;
        gap: 20px;
        margin-bottom: 30px;
    }
    .Table{
        text-align: left;
        flex: 1px;
        padding: 10px;
        border: 1px;
        padding: 10px;
        display: flex;
        gap: 20px;
        font-size: small;
    }
    .bio{
        text-align: left;
        margin-bottom: 100px;
    }
</style>
<div class="site-index">

    <div class="Header">
        <h1 class="display-4">Toko Klontong.</h1>

        <p class="lead"></p>
    </div>

    <div class="body-content">

        <div>
            <div class="text-center">

                <h1 class="judul-bio">
                    ABOUT US.
                </h1>

                <p class="bio">Welcome to our toko klontong, your trusted neighborhood convenience store! We are here to meet your everyday needs with a wide selection of quality products, from groceries and snacks to household essentials. Whether you're looking for fresh ingredients for your meals or quick treats on the go, we've got you covered. At [Your Store Name], we pride ourselves on offering friendly service, affordable prices, and a convenient shopping experience. Visit us today and discover why we’re your go-to store for all your daily essentials!</p>

                <h2 style="
                font-size: 20px;
                font-weight: normal;
                text-align: left; 
                ">Tables: </h2>

            <div class="Table">

                <a href="http://localhost:8080/index.php?r=table-barang" style = "text-decoration: none; 
                color: black;
                padding: 10px; 
                border: 3px solid #f77f00;
                border-radius: 10px;
                margin: 5px;
                ">Table-Barang</a>

                <a href="http://localhost:8080/index.php?r=tabel-pemasok" style = "text-decoration: none;
                color: black; 
                padding: 10px; 
                border: 3px solid #f77f00;
                border-radius: 10px;
                margin: 5px;
                ">Table-pemasok</a>

                <a href="http://localhost:8080/index.php?r=tabel-penjualan" style = "text-decoration: none;
                color: black;
                padding: 10px; 
                border: 3px solid #f77f00;
                border-radius: 10px;
                margin: 5px;
                ">Table-penjual</a>

                <a href="http://localhost:8080/index.php?r=table-detail-beli" style = "text-decoration: none;
                color: black;
                padding: 10px;
                border: 3px solid #f77f00;
                border-radius: 10px;
                margin: 5px;
                ">Table-detail-beli</a>

                <a href="http://localhost:8080/index.php?r=table-pembeli" style = "text-decoration: none;
                color: black;
                padding: 10px;
                border: 3px solid #f77f00;
                border-radius: 10px;
                margin: 5px;
                ">Table-pembeli</a>

                <a href="http://localhost:8080/index.php?r=table-owner" style = "text-decoration: none;
                color: black;
                padding: 10px;
                border: 3px solid #f77f00;
                border-radius: 10px;
                margin: 5px;
                ">Table-owner</a>
                </div>
                
            </div>
            </div>
        </div>

    </div>
</div>
