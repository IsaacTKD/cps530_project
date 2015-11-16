<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Movie".
 *
<<<<<<< HEAD
 * @property integer $movie_id
=======
>>>>>>> cps530_project
 * @property string $movie_name
 * @property string $movie_runningtime
 * @property integer $movie_year
 * @property string $movie_director
 * @property string $movie_genre
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Movie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['movie_name', 'movie_runningtime', 'movie_year', 'movie_director', 'movie_genre'], 'required'],
            [['movie_year'], 'integer'],
            [['movie_name', 'movie_director', 'movie_genre'], 'string', 'max' => 50],
            [['movie_runningtime'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
<<<<<<< HEAD
            'movie_id' => 'Movie ID',
=======
>>>>>>> cps530_project
            'movie_name' => 'Movie Name',
            'movie_runningtime' => 'Movie Runningtime',
            'movie_year' => 'Movie Year',
            'movie_director' => 'Movie Director',
            'movie_genre' => 'Movie Genre',
        ];
    }
}
