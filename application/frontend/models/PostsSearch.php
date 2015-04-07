<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Posts;

/**
 * PostsSearch represents the model behind the search form about `frontend\models\Posts`.
 */
class PostsSearch extends Posts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'author', 'author_role', 'created_at', 'updated_at'], 'integer'],
            [['posts_title', 'posts_body', 'post_attachment', 'post_type'], 'safe'],
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
        $query = Posts::find();

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
            'author' => $this->author,
            'author_role' => $this->author_role,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'posts_title', $this->posts_title])
            ->andFilterWhere(['like', 'posts_body', $this->posts_body])
            ->andFilterWhere(['like', 'post_attachment', $this->post_attachment])
            ->andFilterWhere(['like', 'post_type', $this->post_type]);

        return $dataProvider;
    }
}
