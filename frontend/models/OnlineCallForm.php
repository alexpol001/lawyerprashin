<?php

namespace frontend\models;

use common\models\setting\Setting;
use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class OnlineCallForm extends Model
{
    public $name;
    public $phone;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['phone', 'name'], 'required'],
            [['phone'], 'match', 'pattern' => '/^\+7\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{2}\s[0-9]{2}$/', 'message' => 'Неверный формат сотового телефона'],
            // email has to be a valid email address
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'verifyCode' => 'Введите капчу*',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer
            ->compose(
                ['html' => 'online-call/html', 'text' => 'online-call/text'],
                ['model' => $this]
            )
            ->setTo($email)
            ->setFrom([$email => Setting::take()->title])
            ->setSubject('Обратный звонок | ' . Setting::take()->title)
            ->send();
    }
}
