<?php

namespace backend\models;

use Yii;

/**
* This is the model class for table "movies".
*
* @property int $id
* @property string $title
* @property string $country
* @property string $actors
* @property string $poster
* @property string $description
* @property string $added
* @property string $views
*/
class Movies extends \yii\db\ActiveRecord
{
  /**
   * @inheritdoc
   */
  public static function tableName()
  {
      return 'movies';
  }

  /**
   * @inheritdoc
   */
  public function rules()
  {
    return [
      [['title', 'country', 'actors', 'poster', 'description'], 'required'],
      [['actors', 'description'], 'string'],
      [['added', 'views'], 'safe'],
      [['title', 'country'], 'string', 'max' => 255],
      [['poster'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
    ];
  }

  /**
   * @inheritdoc
   */
  public function attributeLabels()
  {
    return [
      'title' => 'Title',
      'country' => 'Country',
      'actors' => 'Actors',
      'poster' => 'Poster',
      'description' => 'Description',
    ];
  }

	public function upload()
	{
		if ($this->validate()) {
			$path = Yii::getAlias('@frontend') .'/web/uploads/posters/';
			$name = time() . '.' . $this->poster->extension;
			$this->poster->saveAs($path . $name);
			return $name;
		} else {
			return false;
		}
	}
}
