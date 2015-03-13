<?php

namespace backend\modules\management;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\management\Student;

/**
 * StudentSearch represents the model behind the search form about `backend\modules\management\Student`.
 */
class StudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['first_name', 'last_name', 'student_id', 'contactnum', 'course', 'e-mail_address', 'address', 'section'], 'safe'],
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
        $query = Student::find();

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
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'student_id', $this->student_id])
            ->andFilterWhere(['like', 'contactnum', $this->contactnum])
            ->andFilterWhere(['like', 'course', $this->course])
            ->andFilterWhere(['like', 'e-mail_address', $this->e-mail_address])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'section', $this->section]);

        return $dataProvider;
    }
}
