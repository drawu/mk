<?php

use yii\db\Migration;

/**
 * Handles the creation of table `empreendimento`.
 */
class m170315_153105_create_empreendimento_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('empreendimento', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(200)->notNull(),
            'ano_fundacao' => $this->integer(4)->null(),
            'socio_fundador_incorporador_id' => $this->integer(11)->null(),
            'valor_acoes' => $this->string(255)->null(),
            'valor_acoes_data' => $this->timestamp()->null(),
            'tipo_id' => $this->integer(11)->notNull(), 
            'ramo_atividade' => $this->string(100)->null(),
            'mercados' => $this->string(255)->null(),
            'capital_inicial' => $this->string(255)->null(),
            'empreendimento_chave' => $this->integer(1)->null(),            
        ]);
        // creates index for column `socio_fundador_incorporador_id`
        $this->createIndex(
            'idx-empreendimento-socio_fundador_incorporador_id',
            'empreendimento',
            'socio_fundador_incorporador_id'
        );  
        
        // add foreign key for table `personagem`
        $this->addForeignKey(
            'fk-empreendimento-socio_fundador_incorporador_id',
            'empreendimento',
            'socio_fundador_incorporador_id',
            'personagem',
            'id',
            'CASCADE'
        ); 
        
        // creates index for column `tipo_id`
        $this->createIndex(
            'idx-emprendimento-tipo_id',
            'empreendimento',
            'tipo_id'
        );  
        
        // add foreign key for table `tipoempreendimento`
        $this->addForeignKey(
            'fk-empreendimento-tipo_id',
            'empreendimento',
            'tipo_id',
            'tipoempreendimento',
            'id',
            'CASCADE'
        );        
    }
    /**

     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('empreendimento');
    }
}
