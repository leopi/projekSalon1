

<div class="bs_breadcrumb">
    <div class="breadcrumb-container wrapper box no-padding">
        <div itemscope class="box no-padding inner-bc">
            <span itemprop="itemListElement" >
                <a itemprop="item" href='index.html' target="_self">
                    <span itemprop="name">HOME</span>
                </a>
                <meta itemprop="position" content="1" />
            </span>
            <span class="ico-bs-arrow-right"></span>
            <span itemprop="itemListElement" itemscope >
                <a itemprop="item" href="#" target="_self" style="cursor:default">
                    <span itemprop="name" class="active">Vendor List</span>
                </a>

                <meta itemprop="position" content="2" />
            </span>
        </div>      <!-- vendor categories -->
        <div class="vendor-drop-head">
            <a class="link">
                <span>Vendor Categories</span>
                <span class="icon-up-categories"></span>
            </a>
        </div>
    </div>
</div>

<?php ?>

<div class="wrapper box">
    <div class="vendor-head">
        <div class="text"> 
            ini vendor head
        </div>

        <div class="list-filter">
            <select id="subject" class="form-control" name="subject">
                <option value="featured" selected="">Featured</option>
                <option value="popularity">Most Popular</option>
                <option value="rate">Highest Rated</option>
                <option value="alphabetical_asc">Alphabetical (A-Z)</option>
                <option value="alphabetical_desc">Alphabetical (Z-A)</option>
            </select>
        </div>
    </div>

    
<?php
$i = 0;
foreach ($hasil as $x) {
    ?>

    <?php
if($i%4==0){
    echo "<div class='row'>";
} 

    ?>

    <div class="vendor-list box">
        <div class="box-vendor z-depth-1-half ">
            <div class="view-like">
                <span class="like fa fa-thumbs-o-up"><?php echo $x['jumlah_like'] ?></span>
                <span class="view fa fa-eye"><?php echo $x['jumlah_kunjungan'] ?></span>
            </div>
            <div class="pic">
                <a target="self">
                    <img src="http://localhost/projekSalon/asset/image/pkl.png">
                </a>
            </div>
            <a class="nama" href="#" target="self"><?php echo $x['namasalon'] ?></a>
            <span class="jenis-kelamin">
                <a href="#" target="_self"><?php echo $x['jeniskelamin'] ?></a>
            </span>
            <span class="prov">
                <a href="#" target="_self"><?php echo $x['provinsi'] ?></a>
            </span>
            <span class="kota">
                <a href="#" target="_self"><?php echo $x['kabupaten'] ?></a>
            </span>
            <div class="review">
                <span>Harga</span>
                <span>|</span>
                <a class="rate" href="#profil-juga">
                    (7 Reviews)
                </a>
            </div>
            <a class="bton bton-review bton-block" href="<?php echo base_url() ?>index.php/home/salon_detail/<?php echo $x['salon_id'] ?>">
                <i class="icon-bar"></i>
                "Lihat Layanan"
            </a>
        </div>
    </div>

    <?php
if($i%4==3){
    echo "</div>";
}
$i++;
    ?>
    <!--echo $x['namasalon']."<br/>";-->
    <?php } ?>
   
    <!--    <div class="box balok-bawah z-depth-1-half">
        </div>-->
</div>

</div>








