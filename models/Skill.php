<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emp_skill".
 *
 * @property integer $id
 * @property string $name
 *
 * @property EmpEmployerSkill[] $empEmployerSkills
 */
class Skill extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emp_skill';
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
    public function getEmpEmployerSkills()
    {
        return $this->hasMany(EmpEmployerSkill::className(), ['id_skill' => 'id']);
    }
}
