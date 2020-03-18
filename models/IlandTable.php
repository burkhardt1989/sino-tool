<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iland_table".
 *
 * @property string $table_name
 * @property string $operator_name
 * @property string $create_time
 * @property string $update_time
 */
class IlandTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'iland_table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['table_name', 'operator_name'], 'required'],
            [['create_time', 'update_time'], 'safe'],
            [['table_name', 'operator_name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'table_name' => 'Table Name',
            'operator_name' => 'Operator Name',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
