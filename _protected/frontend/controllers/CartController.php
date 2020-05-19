<?php

namespace frontend\controllers;

use common\models\DetailOrder;
use common\models\Produk;
use Yii;
use common\models\Order;
use common\models\OrderSearch;
use yii\db\Exception;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CartController implements the CRUD actions for Order model.
 */
class CartController extends Controller
{

	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'actions' => ['index','checkout','cart','add-to-cart','remove-cart'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
		];
	}


    /**
     * Lists all Order models.
     * @return mixed
     */
    public function actionIndex()
    {
       if(!isset(Yii::$app->session['cart'])  || empty(Yii::$app->session['cart'])){
       	Yii::$app->session->setFlash('error','Empty Cart');
       	return $this->redirect(['cart/cart','cart'=>Yii::$app->session['cart']]);
       }

       $this->updateCart();

	    return $this->render('cart',['cart'=>Yii::$app->session['cart']]);
    }


    /**
     * Finds the Order model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Order the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Order::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Halaman yang dicari tidak ditemukan.');
    }

    public function actionAddToCart($id){

    	if(!intval($id)|| empty($id)){
    		Yii::$app->session->setFlash('danger','Tidak bisa menemukan produk ini');
    		return $this->render('cart',['cart'=>Yii::$app->session['cart']]);
	    }

	    if(!isset(Yii::$app->session['cart'])){
    		Yii::$app->session['cart'] = [];
	    }
	    $this->addToCart($id);
    	return $this->redirect(['cart/index']);
       }

    public function addToCart($id){
    	$session = Yii::$app->session['cart'];
    	$session[$id] = 1;
    	Yii::$app->session['cart'] = $session;
    }




    protected function totalItems($cart){

    	$total = 0;
    	if(is_array($cart)){
    		foreach ($cart as $key=> $qty){
				$total +=1;
		    }
	    }
	    return $total;
    }
    public function actionCheckout(){

    	//set Order
	    $dataCart = Yii::$app->session['cart'];
	    $transaction = Yii::$app->db->beginTransaction();
	    $idOrder = Order::createOrder();

	    foreach ($dataCart as $key=>$value){
			$modelDetail = new DetailOrder();
			$modelDetail->id_produk = $key;
			$modelDetail->id_order = $idOrder;
			$modelDetail->save(false);
	    }
	    try {
		    $transaction->commit();
	    } catch ( Exception $e ) {
	    	echo '<pre>';
	    	echo  $e;
	    	exit();
	    }
	    $this->removeCart();

    	return	$this->render('checkout',['idOrder'=>$idOrder]);
    }

    public function removeCart(){
	    $session = Yii::$app->session['cart'];
	    foreach ($session as $item=>$value){
		    unset($session[$item]);
	    }

	    Yii::$app->session['cart'] = $session;
    }
    public function actionCart(){
    	return $this->render('cart',['cart'=>Yii::$app->session['cart']]);
    }

    public function findProduct($id){
	    if (($model = Produk::findOne($id)) !== null) {
		    return $model;
	    }

	    throw new NotFoundHttpException('Halaman yang dicari tidak ditemukan.');
    }

    public function actionRemoveCart($id){
    	$session = Yii::$app->session['cart'];
    	unset($session[$id]);
    	Yii::$app->session['cart'] = $session;
    	$this->redirect(['cart/index']);
    }
	private function updateCart() {

    	foreach (Yii::$app->session['cart'] as $id){
    		if(isset($_POST[$id])){
    			if($_POST[$id] == 0){
				    $session = Yii::$app->session['cart'];
				    unset($session['id']);
				    Yii::$app->session['cart'] = $session;
			    }
			    else{
    				$cart = Yii::$app->session['cart'];
    				$cart[$id] = $_POST[$id];
    				Yii::$app->session['cart'] = $cart;
			    }


		    }

	    }
	}

}
