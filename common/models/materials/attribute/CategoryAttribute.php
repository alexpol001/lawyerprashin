<?php

namespace common\models\materials\attribute;

use common\components\Common;
use common\models\materials\Category;
use Yii;

/**
 * This is the model class for table "category_attribute".
 *
 * @property int $id
 * @property int $category_id
 * @property int $attribute_id
 * @property string $value
 * @property int $inherit
 * @property Attribute $attribute0
 */
class CategoryAttribute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category_attribute';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'attribute_id', 'inherit'], 'required'],
            [['category_id', 'attribute_id'], 'integer'],
            [['inherit'], 'boolean'],
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
            'category_id' => 'Category ID',
            'attribute_id' => 'Attribute ID',
            'value' => 'Value',
            'inherit' => 'Inherit',
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
     * @param $category Category
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public static function saveAttributes($category) {
        Common::deleteAll($category->attribute_list);
        $data = $category->PostData;
        if (!$data['attribute_id']) return;
        foreach ($data['attribute_id'] as $key => $value) {
            $elem = new self();
            $elem->category_id = $category->id;
            $elem->attribute_id = $value;
            $elem->value = $data['attribute_value'][$key];
            $elem->inherit = $data['attribute_inherit'][$key] ? 1 : 0;
            $elem->save();
        }
    }
}
