<?php

declare(strict_types=1);

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\UserStamps;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Mail
 *
 * @property int $id
 * @property int $mailbox_id
 * @property string $letter_type
 * @property string $status
 * @property string $letter_photo_1_path
 * @property string|null $letter_photo_2_path
 * @property string|null $answer
 * @property int $created_by
 * @property int $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property User $user
 * @property Mailbox $mailbox
 * @property Ticket $ticket
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Mail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mail query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereLetterPhoto1Path($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereLetterPhoto2Path($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereLetterType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereMailboxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereUpdatedBy($value)
 *
 * @mixin IdeHelperLetter
 *
 * @property string $type
 * @property int $awswer_to
 * @property int $has_ticket
 * @property string $photo_path
 * @property-read User|null $creator
 * @property-read Mail|null $from
 * @property-read Mail|null $to
 * @property-read User|null $updater
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereAwswerTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereHasTicket($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail wherePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereType($value)
 *
 * @mixin \Eloquent
 */
final class Answers extends Model
{
    use UserStamps;

    protected $table = 'answers';

    protected $casts = [
        'mail_id' => 'int',
        'created_by' => 'int',
        'updated_by' => 'int',
    ];

    protected $fillable = [
        'mail_id',
        'content',
        'attached_file_path',
        'created_by',
        'updated_by',
    ];

    public function mail(): BelongsTo
    {
        return $this->belongsTo(Mail::class);
    }
}
