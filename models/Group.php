<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emp_group".
 *
 * @property integer $id
 * @property string $name
 *
 * @property EmpEmployerGroup[] $empEmployerGroups
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emp_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpEmployerGroups()
    {
        return $this->hasMany(EmpEmployerGroup::className(), ['id_group' => 'id']);
    }
}
