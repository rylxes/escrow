<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Transaction",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="title",
 *          description="title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="description",
 *          description="description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="price",
 *          description="price",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="sender_email",
 *          description="sender_email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sender_phone",
 *          description="sender_phone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="recipient_phone",
 *          description="recipient_phone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="recipient_email",
 *          description="recipient_email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transaction';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description',
        'price',
        'sender_email',
        'sender_phone',
        'recipient_phone',
        'recipient_email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'price' => 'integer',
        'sender_email' => 'string',
        'sender_phone' => 'string',
        'recipient_phone' => 'string',
        'recipient_email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'price' => 'required',
        'sender_email' => 'required|email',
        'sender_phone' => 'required',
        'recipient_phone' => 'required',
        'recipient_email' => 'required|email'
    ];

    
}
