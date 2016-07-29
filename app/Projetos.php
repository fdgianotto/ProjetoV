<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projetos extends Model
{
    protected $table = 'projeto';
    protected $primaryKey = 'id_proj';

    protected $fillable = [
        'id_proj','nome_proj','pdf','resumo','submit_data','aprovado','tags','curso','user_responsavel'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id_proj','submit_data','aprovado', 'remember_token',
    ];

}
