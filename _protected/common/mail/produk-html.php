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

	<p>Terima kasih telah membeli produk kami.</p>
	<br>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-responsive table-bordered">
				<thead>
				<th>Nama Produk</th>
				<th>Source Code</th>
				<th>Demo</th>
				<th>Rancangan</th>
				<th>Manual</th>
				</thead>
				<tbody>
					<?php foreach ($produk as $item): ?>
					<tr>
						<td class="text-center"><?=$item->nama_produk?></td>
						<td class="text-center"><?= empty($item->source_code)? 'Tidak ada': Html::a('Download',Yii::$app->urlManager->createAbsoluteUrl('upload/source_code/'.$item->source_code)) ?></td>
						<td class="text-center"><?= empty($item->demo)? 'Tidak ada': Html::a('Demo',$item->demo)?></td>
						<td class="text-center"><?= empty($item->rancangan)? 'Tidak ada': Html::a('Rancangan',Yii::$app->urlManager->createAbsoluteUrl('upload/rancangan/'.$item->rancangan))?></td>
						<td class="text-center"><?= empty($item->manual_book)? 'Tidak ada' :Html::a('Manual book',Yii::$app->urlManager->createAbsoluteUrl('upload/manual/'.$item->manual_book))?></td>
					</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		</div>
        <br>
        <br>
		<div class="clearfix"></div>
	</div>
</div>
