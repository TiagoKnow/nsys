<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Os extends Model
{
    protected $table = 'tb_os';

    public function mesesProcessamento()
    {
        return $this->hasMany('tb_os\Enderecos', 'usuario_id');
    }
}
