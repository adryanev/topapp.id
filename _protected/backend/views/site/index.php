<?php

/* @var $this yii\web\View */

$this->title = 'Beranda | Inkubator TIF';
?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-user">
                        <div class="text-center">
                            <h2 class="text-warning" data-plugin="counterup"><?php $a = Yii::$app->db->createCommand('select count(*) as total_produk from produk')->queryAll(); echo $a[0]['total_produk'] ?></h2>
                            <h5>Jumlah Produk</h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-user">
                        <div class="text-center">
                            <h2 class="text-custom" data-plugin="counterup"><?php $a = Yii::$app->db->createCommand('select count(*) as total_berita from berita')->queryAll(); echo $a[0]['total_berita'] ?></h2>
                            <h5>Jumlah berita</h5>
                        </div>
                    </div>
                </div>
               <!-- end col -->


                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-user">
                        <div class="text-center">
                            <h2 class="text-success" data-plugin="counterup"><?php $a = Yii::$app->db->createCommand('select count(*) as total_pengguna from user')->queryAll(); echo $a[0]['total_pengguna'] ?></h2>
                            <h5>Jumlah Pengguna</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-user">
                        <div class="text-center">
                            <h2 class="text-danger" data-plugin="counterup"><?php $a = Yii::$app->db->createCommand('select count(*) as total_tag from tag ')->queryAll(); echo $a[0]['total_tag'] ?></h2>
                            <h5>Jumlah Tag</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Selamat datang di Backend.</h4>

                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->

