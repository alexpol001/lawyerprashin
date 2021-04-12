<?php

namespace common\models\setting;

use Yii;

/**
 * This is the model class for table "mail".
 *
 * @property int $id
 * @property int $setting_id
 * @property int $protocol
 * @property string $host
 * @property string $username
 * @property string $password
 * @property int $port
 * @property string $encryption
 */
class Mail extends \yii\db\ActiveRecord
{
    private static $protocols = [
        '0' => 'Mail',
        '1' => 'SMTP',
    ];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['host', 'username', 'password', 'encryption'], 'trim'],
            [['id', 'setting_id','protocol', 'port'], 'integer'],
            [['host', 'username', 'password'], 'string', 'max' => 255],
            [['encryption'], 'string', 'max' => 7],
            [['protocol'], 'default', 'value' => 0],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'setting_id' => 'Setting_ID',
            'protocol' => 'Почтовый протокол',
            'host' => 'SMTP Имя сервера',
            'username' => 'SMTP Логин',
            'password' => 'SMTP Пароль',
            'port' => 'SMTP Порт',
            'encryption' => 'SMTP Протокол шифрования',
        ];
    }

    public static function getProtocols()
    {
        return self::$protocols;
    }
}
