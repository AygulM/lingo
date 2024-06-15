<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const LANG_ID = 'lang_id';


    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            //self::CONTENT => [$this, 'content'],
            self::LANG_ID => [$this, 'lang_id'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function lang_id(Builder $builder, $value)
    {
        $builder->where('lang_id', $value);
    }
}
