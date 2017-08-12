<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentBooking;

/**
 * StudentBookingSearch represents the model behind the search form about `app\models\StudentBooking`.
 */
class StudentBookingSearch extends StudentBooking
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'months', 'room_type', 'kit', 'validated', 'person_booking_id'], 'integer'],
            [['course', 'home_university', 'arrival_date', 'date', 'comment'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = StudentBooking::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'arrival_date' => $this->arrival_date,
            'months' => $this->months,
            'room_type' => $this->room_type,
            'kit' => $this->kit,
            'date' => $this->date,
            'validated' => $this->validated,
            'person_booking_id' => $this->person_booking_id,
        ]);

        $query->andFilterWhere(['like', 'course', $this->course])
            ->andFilterWhere(['like', 'home_university', $this->home_university])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
