<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    /**
	 * 表名
	 * @var [type]
	 */
    protected $table='source';

    /**
     * 主键
     * @var string
     */
    protected $primaryKey='id';

    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;


    /**
	 * 黑名单属性
	 *
	 * @var array
	 */
	protected $guarded = [];
}
