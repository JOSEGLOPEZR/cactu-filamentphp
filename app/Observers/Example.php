<?php

namespace App\Observers;

use App\Models\Mail;
use App\Enums\MailStatus;
use Filament\Notifications\Notification;


class Example
{
    /**
     * Handle the Mail "created" event.
     */
    public function created(Mail $mail): void
    {
        if ($mail->status->value === MailStatus::Sent->value) {
            $user = $mail->creator;

        Notification::make()
        ->title('Mail Viewed')
        ->info()
        ->body('Mail has been viewed')
        ->sendToDatabase($user);
        }
    }

    /**
     * Handle the Mail "updated" event.
     */
    public function updated(Mail $mail): void
    {
        //
    }

    /**
     * Handle the Mail "deleted" event.
     */
    public function deleted(Mail $mail): void
    {
        //
    }

    /**
     * Handle the Mail "restored" event.
     */
    public function restored(Mail $mail): void
    {
        //
    }

    /**
     * Handle the Mail "force deleted" event.
     */
    public function forceDeleted(Mail $mail): void
    {
        //
    }
}
