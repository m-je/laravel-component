<?php

namespace App\Listeners;

use App\Events\PurcashingEvent;
use App\Models\Purcashing;
use App\Models\Prekualifikasi;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Support\Facades\Mail;
use App\Mail\KontraktorMail;

class PurcashingEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PurcashingEvent  $event
     * @return void
     */
    public function handle(PurcashingEvent $event)
    {
        $this->historyPurcashing( $event);
        $this->buatPrekualifikasi($event);
        $this->sendEmailKontraktor( $event );
    }

    protected function historyPurcashing( PurcashingEvent $event)
    {
        $data = $event->data;
        $p = Purcashing::create([
            'email' => $data['email'],
            'password' => $data['password'],
            // 'email_terkirim_at' => '',
        ]);
    }

    private function buatPrekualifikasi(PurcashingEvent $event)
    {
        $data = $event->data;
        Prekualifikasi::create([
            'kontraktor_id' => $data['id'],
            'score' => 0.0,
        ]);
    }

    protected function sendEmailKontraktor( PurcashingEvent $event)
    {
        $data = $event->data;
        Mail::to($data['email'])
        ->send(new KontraktorMail($data));
    }
}
