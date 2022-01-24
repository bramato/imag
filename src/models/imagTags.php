<?php

namespace bramato\imag\models;

use Illuminate\Database\Eloquent\Model;

class imagTags extends Model
{
    protected $table = 'imag_tags';

    public static function addTag($tag)
    {
        $name = $tag['Name'];
        $parents = $tag['Parents'];
        $tags = new tags();
        $ck = $tags->where('tag', $tag)->first();
        if (! $ck) {
            $tags->tag = $name;
            $tags->save();
            $idTag = $tags->id;
        } else {
            $idTag = $ck->id;
        }

        return $idTag;
    }
}
