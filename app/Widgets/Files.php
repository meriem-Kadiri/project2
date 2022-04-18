<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Files extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Models\file::count();
        $string = 'Dossiers';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-folder',
            'title'  => "{$count} {$string}",
            'text'   => 'Vous avez '.strval($count).' dossiers dans la base des données.',
            'button' => [
                'text' => 'Voir tous les dossiers',
                'link' => route('voyager.files.index'),
            ],
            'image' => '/Files.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('Post'));
    }
}
