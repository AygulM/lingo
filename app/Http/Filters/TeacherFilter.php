<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class TeacherFilter extends AbstractFilter
{

// protected $builder;

// public function __construct($builder){
//     $this->builder=$builder;
// }

// public function apply(){
//     return $this->builder;
// }

    public const FNAME = 'fname';
    public const LNAME = 'lname';
    //public const CONTENT = 'content';
    public const LANG_ID = 'lang_id';


    protected function getCallbacks(): array
    {
        return [
            self::FNAME => [$this, 'fname'],
            self::LNAME => [$this, 'lname'],
            //self::CONTENT => [$this, 'content'],
            self::LANG_ID => [$this, 'lang_id'],
        ];
    }

    public function fname(Builder $builder, $value)
    {
        $builder->where('fname', 'like', "%{$value}%");
    }

    public function lname(Builder $builder, $value)
    {
        $builder->where('lname', 'like', "%{$value}%");
    }

    public function lang_id(Builder $builder, $value)
    {
        $builder->where('lang_id', $value);
    }
}
