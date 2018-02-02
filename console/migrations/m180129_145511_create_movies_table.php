<?php

use yii\db\Migration;

/**
* Handles the creation of table `films`.
*/
class m180129_145511_create_movies_table extends Migration
{
  /**
   * @inheritdoc
   */
  public function up()
  {
    $this->createTable('movies', [
      'id' => $this->primaryKey(),
      'title' => $this->string(255)->notNull(),
	    'country' => $this->string(255)->notNull(),
	    'actors' => $this->text()->notNull(),
	    'poster' => $this->string(32)->notNull(),
	    'description' => $this->text()->notNull(),
	    'added' => $this->integer(10),
	    'views' => $this->integer(10),
    ]);
  }

  /**
   * @inheritdoc
   */
  public function down()
  {
    $this->dropTable('movies');
  }
}
