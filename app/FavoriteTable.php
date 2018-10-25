<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;

 trait FavoriteTable
 {
    public function favorites()
    {
        return $this->morphMany(\App\Models\Favorite\Favorite::class, 'favorited');
    }

    public function favorite()
    {


        if (!$this->favorites()->where(['user_id' => auth()->id()])->exists()) {

            $this->favorites()->create(['user_id' => auth()->id()]);
        }

    }

    public function isFavorited()
    {
        return !!$this->favorites->where('user_id', auth()->id())->count();
    }

    public function getFavoritesCountAttribute()
    {
        return $this->favorites->count();
    }
 }
 