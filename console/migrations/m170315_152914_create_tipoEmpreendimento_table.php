<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tipoEmpreendimento`.
 */
class m170315_152914_create_tipoEmpreendimento_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tipoEmpreendimento', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(200)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tipoEmpreendimento');
    }
}
