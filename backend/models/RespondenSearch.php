<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Responden;

/**
 * RespondenSearch represents the model behind the search form of `backend\models\Responden`.
 */
class RespondenSearch extends Responden
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nama', 'jenis_kelamin','verif_data_pelamar', 'verif_wawancara', 'verif_kesehatan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Responden::find()->where(['is_sample' => false])->orWhere(['is_sample' => NULL]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,'pagination' => false,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin]);

        return $dataProvider;
    }
    public function searchFisik($params)
    {
        $query = Responden::find()->where(['verif_data_pelamar' => "1"])->andWhere(['is_sample' => false])->orWhere(['is_sample' => NULL]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,'pagination' => false,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin]);

        return $dataProvider;
    }
    public function searchWawancara($params)
    {
        $query = Responden::find()->where(['verif_data_pelamar' => "1"])->andWhere(['verif_kesehatan' => "1"])->andWhere(['is_sample' => false])->orWhere(['is_sample' => NULL]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,'pagination' => false,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin]);

        return $dataProvider;
    }
}
