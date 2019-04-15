<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\Hubtel\HubtelChannel;
use NotificationChannels\Hubtel\HubtelMessage;

class DemoNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function via($notifiable)
    {
        return [HubtelChannel::class];
    }

    public function toSMS($notifiable)
    {
        return ( new HubtelMessage )
            ->from("The-Project")
            ->content('Just Testing it out');
    }
}
