<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

class EmployerSearch extends Employer
{

    public $groupSearch;
    public $skillSearch;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['last_name', 'groupSearch', 'skillSearch', 'is_working'], 'safe']
        ];
    }

    
    public function search($params)
    {
        $query = self::find();
        $query->joinWith(['group', 'skill'], false, 'INNER JOIN');
 
        $dataProvider = new ActiveDataProvider([
          'query' => $query,
          'sort' => false,
        ]);
        if (!($this->load($params) && $this->validate())) {
          return $dataProvider;
        }
        $query
          ->andFilterWhere(['like', 'last_name', $this->last_name])
          ->andFilterWhere(['id_group' => $this->groupSearch])
          ->andFilterWhere(['id_skill' => $this->skillSearch])
          ->andFilterWhere(['is_working' => $this->is_working]);
 
        return $dataProvider;
    }
}
