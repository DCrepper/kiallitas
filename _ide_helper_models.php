<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $status
 * @property string|null $image_from_disc
 * @property string|null $image_text
 * @property string|null $video_from_disc
 * @property int $possition
 * @property bool $is_active
 * @property int|null $slide_length
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Element newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Element newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Element query()
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereImageFromDisc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereImageText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element wherePossition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereSlideLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereVideoFromDisc($value)
 */
	class Element extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $text
 * @property int $possition
 * @property bool $is_active
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TextElement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextElement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextElement query()
 * @method static \Illuminate\Database\Eloquent\Builder|TextElement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextElement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextElement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextElement whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextElement wherePossition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextElement whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextElement whereUpdatedAt($value)
 */
	class TextElement extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \TomatoPHP\FilamentMediaManager\Models\Folder> $folders
 * @property-read int|null $folders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \TomatoPHP\FilamentMediaManager\Models\Folder> $myFolders
 * @property-read int|null $my_folders_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

