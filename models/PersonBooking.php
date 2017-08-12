<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person_booking".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $sex
 * @property string $country
 * @property integer $smoker
 * @property string $photo
 *
 * @property StudentBooking[] $studentBookings
 */
class PersonBooking extends \yii\db\ActiveRecord
{
     public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person_booking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','surname','country'], 'match', 'pattern' => '/^[a-zA-Z\s]*$/i'],
            [['name', 'surname', 'email', 'sex', 'country', 'smoker', 'photo'], 'required'],
            [['smoker'], 'integer'],
            [['file'],'file', 'skipOnEmpty' => false],
            [['name', 'surname', 'email', 'sex', 'country'], 'string', 'max' => 45],
            [['photo'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'First name',
            'surname' => 'Last name',
            'email' => 'Email',
            'sex' => 'Sex',
            'country' => 'Country',
            'smoker' => 'Are you a smoker?',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentBookings()
    {
        return $this->hasMany(StudentBooking::className(), ['person_booking_id' => 'id']);
    }
}
