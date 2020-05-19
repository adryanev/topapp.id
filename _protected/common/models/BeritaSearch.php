<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Berita;

/**
 * BeritaSearch represents the model behind the search form of `common\models\Berita`.
 */
class BeritaSearch extends Berita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_berita', 'penerbit_berita'], 'integer'],
            [['judul_berita', 'isi_berita', 'gambar_berita'], 'safe'],
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
        $query = Berita::find();

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
            'id_berita' => $this->id_berita,
            'penerbit_berita' => $this->penerbit_berita,
        ]);

        $query->andFilterWhere(['like', 'judul_berita', $this->judul_berita])
            ->andFilterWhere(['like', 'isi_berita', $this->isi_berita])
            ->andFilterWhere(['like', 'gambar_berita', $this->gambar_berita]);

        return $dataProvider;
    }
}
