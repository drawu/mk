<?php

use yii\db\Migration;

/**
 * Handles the creation of table `personagem`.
 */
class m170315_073712_create_personagem_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('personagem', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(200)->notNull(),
            'sexo' => $this->string(1)->notNull(),
            'origem_etnica' => $this->string(80)->null(),
            'local_nascimento' => $this->string(100)->null(),
            'data_nascimento' => $this->timestamp()->null(),
            'local_casamento' => $this->string(100)->null(),
            'data_casamento' => $this->timestamp()->null(),
            'local_falecimento' => $this->string(100)->null(),
            'data_falecimento' => $this->timestamp()->null(),            
            'formacao' => $this->string(50)->null(),
            'ocupacoes' => $this->string(200)->null(),
            'titulos' => $this->string(200)->null(),
            'tipo_id' => $this->integer(11)->notNull(), 
            'fontes' => $this->string(255)->null(),
            'observacoes' => $this->string(255)->null(),
        ]);
        
        // creates index for column `tipo_id`
        $this->createIndex(
            'idx-personagem-tipo_id',
            'personagem',
            'tipo_id'
        );  
        
        // add foreign key for table `tipopersonagem`
        $this->addForeignKey(
            'fk-personagem-tipo_id',
            'personagem',
            'tipo_id',
            'tipopersonagem',
            'id',
            'CASCADE'
        ); 
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('personagem');
    }
}
