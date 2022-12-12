<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cadastro".
 *
 * @property int $id
 * @property string $nomeDoUsuario
 * @property string $nomeDoLivro
 * @property string $tipoDoLivro
 * @property float $valor
 */
class Cadastro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cadastro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomeDoUsuario', 'nomeDoLivro', 'tipoDoLivro', 'valor'], 'required'],
            [['valor'], 'number'],
            [['nomeDoUsuario'], 'string', 'max' => 191],
            [['nomeDoLivro'], 'string', 'max' => 150],
            [['tipoDoLivro'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomeDoUsuario' => 'Nome Do Usuario',
            'nomeDoLivro' => 'Nome Do Livro',
            'tipoDoLivro' => 'Tipo Do Livro',
            'valor' => 'Valor',
        ];
    }
}
