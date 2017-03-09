<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */


use Theme\Models\Post;
use Themosis\Facades\DB;

Route::get('home', function()
{

    dd(Post::select(DB::raw( "CONCAT_WS(' ', post_title, post_content ) AS description " ))->get()->toArray());
});
