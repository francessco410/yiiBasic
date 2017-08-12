<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student_booking".
 *
 * @property integer $id
 * @property string $course
 * @property string $home_university
 * @property string $arrival_date
 * @property integer $months
 * @property integer $room_type
 * @property integer $kit
 * @property string $date
 * @property integer $validated
 * @property string $comment
 * @property integer $person_booking_id
 *
 * @property PersonBooking $personBooking
 */
class StudentBooking extends \yii\db\ActiveRecord
{
    public $reCaptcha;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_booking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course', 'home_university', 'arrival_date', 'months', 'room_type', 'kit', 'date', 'person_booking_id'], 'required'],
            //[['arrival_date', 'date'], 'safe'],
            [['home_university','course'], 'match', 'pattern' => '/^[a-zA-Z\s\-]+$/'],
            [['months', 'room_type', 'kit', 'validated', 'person_booking_id'], 'integer'],
            [['course', 'home_university', 'comment'], 'string', 'max' => 45],
            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6Lf2cywUAAAAAIW4_0Z4utcqE8GuSLTwuMQsTbGY', 'uncheckedMessage' => 'Please confirm that you are not a bot.'],
            [['person_booking_id'], 'exist', 'skipOnError' => true, 'targetClass' => PersonBooking::className(), 'targetAttribute' => ['person_booking_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course' => 'Study Course',
            'home_university' => 'Home University',
            'arrival_date' => 'When do you plan to arrive in Braganca?',
            'months' => 'How many months would you stay in Braganca?',
            'room_type' => 'Type of room you want to reserve',
            'kit' => 'Would you like to reserve utility kit?',
            'date' => 'Date',
            'validated' => 'Validated',
            'comment' => 'Comment',
            'person_booking_id' => 'Person Booking ID',
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonBooking()
    {
        return $this->hasOne(PersonBooking::className(), ['id' => 'person_booking_id']);
    }
}
