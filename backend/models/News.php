<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property string $body
 * @property int $added
 * @property int $views
 */
class News extends \yii\db\ActiveRecord
{
	public static function tableName()
	{
		return 'news';
	}

	/**
   * @inheritdoc
   */
  public function rules()
  {
    return [
      [['title', 'body'], 'required'],
      [['body'], 'string'],
      [['added', 'views'], 'integer'],
      [['title'], 'string', 'max' => 255],
	    [['img'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
    ];
  }

  /**
   * @inheritdoc
   */
  public function attributeLabels()
  {
    return [
      'title' => 'Title',
      'img' => 'Image',
      'body' => 'Body',
    ];
  }

	public function upload()
	{
		if ($this->validate()) {
			$path = Yii::getAlias('@frontend') .'/web/uploads/news/';
			$name = time() . '.' . $this->img->extension;
			$this->img->saveAs($path . $name);
			return $name;
		} else {
			return false;
		}
	}
}
