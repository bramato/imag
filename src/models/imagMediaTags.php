<?php

namespace bramato\imag\models;

use Illuminate\Database\Eloquent\Model;

class imagMediaTags extends Model
{
    protected $table = 'imag_media_tags';

    public static function addTag($idTag, $idMedia, $Confidence)
    {
        $tags = new mediaTags();
        $ck = $tags->idMedia($idMedia)->idTag($idTag)->first();
        if (! $ck) {
            $tags->idMedia = $idMedia;
            $tags->idTag = $idTag;
            $tags->Confidence = $Confidence;
            $tags->save();
            $id = $tags->id;
        } else {
            $id = $ck->id;
        }

        return $id;
    }

    public function scopeIdMedia($query, $idMedia)
    {
        return $query->where('idMedia', $idMedia);
    }

    public function scopeIdTag($query, $idTag)
    {
        return $query->where('idTag', $idTag);
    }
}
