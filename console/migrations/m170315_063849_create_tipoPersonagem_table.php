<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tipoPersonagem`.
 */
class m170315_063849_create_tipoPersonagem_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tipoPersonagem', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(200)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tipoPersonagem');
    }
}
