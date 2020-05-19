<?php
/**
 * Created by PhpStorm.
 * User: Adryan Eka Vandra
 * Date: 4/14/2018
 * Time: 7:15 PM
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$profil = \common\models\Profil::findOne(1);
?>

<div class="payment">
	<p>Hello <?= Html::encode($user->username) ?>,</p>

	<p>Jika aplikasi yang anda beli berbayar, Silahkan lakukan pembayaran ke rekening berikut:</p>
	<br>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-responsive table-striped">
				<tr>
					<td>No Rekening</td>
					<td> 130-00-1100435-8</td>
					</td>
				</tr>
				<tr>
					<td>Atas nama</td>
					<td>Nazruddin Safaat H</td>
					</td>
				</tr>
				<tr>
					<td>Nama Bank</td>
					<td>Mandiri</td>
					</td>
				</tr>
				<tr>
					<td>Nominal</td>
					<td><?=Yii::$app->formatter->asCurrency(Yii::$app->session['total_price'])?></td>
					</td>
				</tr>
			</table>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-primary">
					<h3 class="text-capitalize">Jika aplikasi anda gratis, silahkan tunggu email selanjutnya dari admin kami.</h3>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success">
					<h3 class="text-capitalize">Setelah transfer, harap konfirmasi ke admin dengan wa ke <?=$profil->hp?>.</h3>
				</div>
			</div>
		</div>
	</div>
</div>
