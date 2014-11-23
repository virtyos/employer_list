<?php
  use yii\grid\GridView;
  use yii\helpers\ArrayHelper;
  use app\models\Group;
  use app\models\Skill;
?>
<div class="site-index">
    <div class="body-content">
      <?php
        echo GridView::widget([
          'id' => 'employers-grid',
          'dataProvider' => $provider,
          'filterModel'  => $model,
          'columns' => [
            [
              'attribute' => 'last_name',
              'label' => 'Фамилия',
            ],
            [
              'attribute' => 'groupSearch',
              'value' => 'group.name',
              'label' => 'Группа',
              'filter' => ArrayHelper::map(Group::find()->all(), 'id', 'name'),
            ],
            [
              'attribute' => 'skillSearch',
              'value' => 'skill.name',
              'label' => 'Навык',
              'filter' => ArrayHelper::map(Skill::find()->all(), 'id', 'name'),
            ],
            [
              'attribute' => 'is_working',
              'label' => 'На месте',
              'value' => function ($model, $key, $index, $column){return $model['is_working']?'да':'нет';},
              'filter' => ['0' => 'нет', '1' => 'да'],
            ],
          ]
        ]);
      ?>
    </div>
</div>
