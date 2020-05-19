<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Profil;

/**
 * ProfilSearch represents the model behind the search form of `common\models\Profil`.
 */
class ProfilSearch extends Profil
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_profil'], 'integer'],
            [['foto_profil', 'isi_profil', 'nama_app', 'alamat', 'email', 'hp', 'created_at', 'updated_at'], 'safe'],
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
        $query = Profil::find();

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
            'id_profil' => $this->id_profil,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'foto_profil', $this->foto_profil])
            ->andFilterWhere(['like', 'isi_profil', $this->isi_profil])
            ->andFilterWhere(['like', 'nama_app', $this->nama_app])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'hp', $this->hp]);

        return $dataProvider;
    }
}
