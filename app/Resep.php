<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 't_resep';

  /**
  * The database primary key value.
  *
  * @var string
  */
  protected $primaryKey = 'id_resep';

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
   protected $fillable = [
                  'id_resep',
                  'id_user',
                  'judul',
                  'deskripsi',
                  'bahan',
                  'cara_memasak',
                  'foto',
                  'video'];

}
