

<div class="container">
    <div class="bs_breadcrumb" style="font-weight: 500">
        <div class="breadcrumb-container wrapper box no-padding">
            <div itemscope="" class="box no-padding inner-bc left" >
                <span itemprop="itemListElement">
                    <a itemprop="item" href="index.html" target="_self">
                        <span itemprop="name">HOME</span>
                    </a>
                    <meta itemprop="position" content="1">
                </span>
                <span class="ico-bs-arrow-right"></span>
                <span itemprop="itemListElement" itemscope="">
                    <a itemprop="item" href="#" target="_self" style="cursor:default">
                        <span itemprop="name" class="active">Vendor List</span>
                    </a>

                    <meta itemprop="position" content="2">
                </span>
            </div>      <!-- vendor categories -->

        </div>
    </div>

    <div class="box wrapper">
        <div class="row">
            <div class="vendor-list box" style="margin-top: 0">
                <div class="box-profil z-depth-1-half">
                    <div class="pic">
                        <a target="self">
                            <img src="http://localhost/projekSalon/asset/image/pkl.png">
                        </a>
                    </div>
                    <a class="nama" href="#" target="self"><?php echo $namasalon ?></a>
                    <span class="jenis-kelamin">
                        <a href="#" target="_self"><?php echo $jeniskelamin ?></a>
                    </span>
                    <span class="kota">
                        <a href="#" target="_self"><?php $provinsi ?></a>
                    </span>

                    <div class="line" ></div>

                    <div class="bton bton-order mb5 ">
                        <i class="fa fa-envelope-o fa-2x"></i>
                        Pesan
                    </div>

                    <div class="line" ></div>
                    <ul class="ml0 pl0" style="list-style: none; padding-left: 0;">
                        <li><i class="fa fa-envelope-o fa-2x"></i> ini diisi info sosmed</li>
                        <li><i class="fa fa-envelope-o fa-2x"></i> ini diisi info sosmed</li>
                        <li><i class="fa fa-envelope-o fa-2x"></i> ini diisi info sosmed</li>
                    </ul>

                    <div class="like-view">
                        <div>
                            <span class="fa fa-thumbs-o-up" ><?php echo $jumlah_like ?></span>
                        </div>
                        <div>
                            <span class="fa fa-eye"><?php echo $jumlah_kunjungan ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box right box-tab z-depth-1-half">
                <ul class="nav nav-tabs">
                    <!-- Untuk Semua Tab.. pastikan a href=”#nama_id” sama dengan nama id di “Tap Pane” dibawah-->
                    <li class="active"><a href="#tentangkami" data-toggle="tab">Tentang Kami</a></li> <!-- Untuk Tab pertama berikan li class=”active” agar pertama kali halaman di load tab langsung active-->
                    <li><a href="#info" data-toggle="tab">Info</a></li>
                    <li><a href="#messages" data-toggle="tab">Pengalaman</a></li>
                    <li><a href="#settings" data-toggle="tab">Review</a></li>
                </ul>
                <!-- Tab panes, ini content dari tab di atas -->
                <div class="tab-content">
                    <div class="tab-pane active" id="tentangkami">
                        <div class="box isi">
                            Ini berisi profil dari salon yang ada.<br>
                            profil diisi saat edit profil nantinya.

                        </div>
                    </div><!-- Untuk Tab pertama berikan div class=”active” agar pertama kali halaman di load content langsung active-->
                    <div class="tab-pane" id="info">
                        <div class="box isi">
                            Ini berisi info jadwal dari salon yang ada.<br>
                            profil diisi saat edit profil nantinya.<br>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Jadwal
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Collapsible Group Item #2
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Collapsible Group Item #3
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane" id="messages">
                        <div class="box isi">
                            Ini berisi info jadwal dari salon yang ada.<br>
                            profil diisi saat edit profil nantinya.
                        </div>
                    </div>
                    <div class="tab-pane" id="settings">
                        <div class="box isi">
                            Ini berisi info jadwal dari salon yang ada.<br>
                            profil diisi saat edit profil nantinya.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box balok-bawah z-depth-1-half">
    </div>
</div>
