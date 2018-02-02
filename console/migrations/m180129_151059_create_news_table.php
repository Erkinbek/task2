<?php

use yii\db\Migration;

/**
* Handles the creation of table `news`.
*/
class m180129_151059_create_news_table extends Migration
{
  /**
   * @inheritdoc
   */
  public function up()
  {
    $this->createTable('news', [
      'id' => $this->primaryKey(),
      'title' => $this->string(255)->notNull(),
	    'img' => $this->string(32)->notNull(),
	    'body' => $this->text()->notNull(),
	    'added' => $this->integer(10),
	    'views' => $this->integer(10),
    ]);
  }

  /**
   * @inheritdoc
   */
  public function down()
  {
    $this->dropTable('news');
  }
}
