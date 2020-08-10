<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Linha; 
use App\Model\Variacao; 
use App\Model\Promocao; 

class Produto extends Model
{
    //
    protected $fillable = array(
        'id', 'sku', 'codigo_barras', 'identificador_url', 'nome', 'descricao', 'palavras_chave', 'titulo_para_seo', 
        'descricao_para_seo', 'preco', 'preco_promocional', 'peso', 'altura', 'largura', 'comprimento', 'estoque', 'ordem',
        'ativo', 'frete_gratis', 'created_at', 'updated_at',
    );

        
    /**
     * linha
     *
     * @return void
     */
    public function linha()
    {
        $this->belongsTo(Linha::class);
    }
    
    /**
     * variacoes
     *
     * @return void
     */
    public function variacoes()
    {
        return $this->hasMany(Variacao::class);
    }
    
    /**
     * promocoes
     *
     * @return void
     */
    public function promocoes()
    {
        return $this->hasMany(Promocao::class);        
    }
}