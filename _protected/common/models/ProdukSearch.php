<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Produk;

/**
 * ProdukSearch represents the model behind the search form of `common\models\Produk`.
 */
class ProdukSearch extends Produk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_produk', 'status', 'added_by'], 'integer'],
            [['nama_produk', 'developer', 'deskripsi_produk', 'fitur_produk', 'spesifikasi', 'video', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Produk::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_produk' => $this->id_produk,
            'status' => $this->status,
            'added_by' => $this->added_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'nama_produk', $this->nama_produk])
            ->andFilterWhere(['like', 'developer', $this->developer])
            ->andFilterWhere(['like', 'deskripsi_produk', $this->deskripsi_produk])
            ->andFilterWhere(['like', 'fitur_produk', $this->fitur_produk])
            ->andFilterWhere(['like', 'spesifikasi', $this->spesifikasi])
            ->andFilterWhere(['like', 'video', $this->video]);

        return $dataProvider;
    }
}
