<?php

declare(strict_types=1);

namespace App\Notifications\Frontend\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

/**
 * Class UserNeedsConfirmation.
 */
class UserNeedsConfirmation extends Notification
{
    use Queueable;

    /**
     * @var
     */
    protected $confirmation_code;

    /**
     * UserNeedsConfirmation constructor.
     *
     * @param $confirmation_code
     */
    public function __construct($confirmation_code)
    {
        $this->confirmation_code = $confirmation_code;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->subject(app_name() . ': ' . __('exceptions.frontend.auth.confirmation.confirm'))
            ->line(__('strings.emails.auth.click_to_confirm'))
            ->action(__('buttons.emails.auth.confirm_account'), route('frontend.auth.account.confirm', $this->confirmation_code))
            ->line(__('strings.emails.auth.thank_you_for_using_app'));
    }
}
