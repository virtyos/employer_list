<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emp_employer".
 *
 * @property integer $id
 * @property string $last_name
 * @property integer $is_working
 * @property integer $id_group
 * @property integer $id_skill
 *
 * @property EmpSkill $Skill
 * @property EmpGroup $Group
 */
class Employer extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emp_employer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_working', 'id_group', 'id_skill'], 'integer'],
            [['last_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_name' => 'Last Name',
            'is_working' => 'Is Working',
            'id_group' => 'Id Group',
            'id_skill' => 'Id Skill',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSkill()
    {
        return $this->hasOne(Skill::className(), ['id' => 'id_skill'])->from(['skill' => Skill::tableName()]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'id_group'])->from(['group' => Group::tableName()]);
    }
    
}
