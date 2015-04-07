<?php

namespace backend\modules\posts\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\posts\models\Posts;

/**
 * PostsSearch represents the model behind the search form about `backend\modules\posts\models\Posts`.
 */
class PostslatestSearch extends Posts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'author', 'author_role', 'created_at', 'updated_at', 'post_type'], 'integer'],
            [['posts_title', 'posts_body'], 'safe'],
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
        $query = Posts::find()
            ->orderBy('id')
            ->limit(5);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['id'=>SORT_DESC]]
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
            'post_type' => $this->post_type,
        ]);

        $query->andFilterWhere(['like', 'posts_title', $this->posts_title])
            ->andFilterWhere(['like', 'posts_body', $this->posts_body]);

        return $dataProvider;
    }
}
