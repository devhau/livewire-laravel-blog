<?php
namespace App\Traits;

use Auth;
trait WithAuth
{
    public function initializeWithAuth()
    {
        self::creating(function($model){
            // ... code here
            $model->created_by = Auth::user()->id;
            $model->updated_by = Auth::user()->id;
        });

        self::created(function($model){
            // ... code here
        });

        self::updating(function($model){
            // ... code here
            $model->updated_by = Auth::user()->id;
        });

        self::updated(function($model){
            // ... code here
        });

        self::deleting(function($model){
            // ... code here
        });

        self::deleted(function($model){
            // ... code here
        });
    }
}