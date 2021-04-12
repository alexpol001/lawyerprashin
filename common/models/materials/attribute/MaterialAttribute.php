<?php

namespace common\models\materials\attribute;

use common\components\Common;
use common\models\materials\Material;
use Yii;

/**
 * This is the model class for table "material_attribute".
 *
 * @property int $id
 * @property int $material_id
 * @property int $attribute_id
 * @property string $value
 * @property Attribute $attribute0
 */
class MaterialAttribute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'material_attribute';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['material_id', 'attribute_id'], 'required'],
            [['material_id', 'attribute_id'], 'integer'],
            [['value'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'material_id' => 'Material ID',
            'attribute_id' => 'Attribute ID',
            'value' => 'Value',
        ];
    }

    public function getSelf() {
        return $this;
    }

    public function getAttribute0()
    {
        return $this->hasOne(Attribute::className(), ['id' => 'attribute_id']);
    }

    /**
     * @param $materail
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public static function saveAttributes($materail) {
        Common::deleteAll($materail->attribute_list);
        $data = $materail->PostData;
        if (!$data['attribute_id']) return;
        foreach ($data['attribute_id'] as $key => $value) {
            $elem = new self();
            $elem->material_id = $materail->id;
            $elem->attribute_id = $value;
            $elem->value = $data['attribute_value'][$key];
            $elem->save();
        }
    }
}
