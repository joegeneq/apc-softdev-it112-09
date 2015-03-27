<?php

namespace backend\modules\internship\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\internship\models\Internship;

/**
 * InternshipSearch represents the model behind the search form about `backend\modules\internship\models\Internship`.
 */
class InternshipSearch extends Internship
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id', 'iprofessor_id', 'company_id'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
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
        $query = Internship::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'student_id' => $this->student_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'iprofessor_id' => $this->iprofessor_id,
            'company_id' => $this->company_id,
        ]);

        return $dataProvider;
    }
}
