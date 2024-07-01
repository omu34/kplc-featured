<?php

namespace App\Nova;


use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Http\Requests\NovaRequest;


class LatestGallery extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\LatestGallery>
     */
    public static $model = \App\Models\LatestGallery::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'Latest gallery';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'likes',
        'link',
        'views',
        'description',
        'is_featured',
        'file'
    ];

    public static function search($query)
    {
        return static::where('likes', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->get();
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Link', 'link')->sortable(),
            Text::make('Likes', 'likes')->sortable(),
            Text::make('Views', 'views')->sortable(),
            TextArea::make('Description', 'description')->sortable(),
            File::make('Gallery File', 'file_path')
                ->disk('public')
                ->path('gallerys'),
            Boolean::make('Is Featured ?', 'is_featured'),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}