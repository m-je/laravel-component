<?php

namespace App\Listeners;

use App\Events\PelaksanaanEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Mail\PelaksanaanMail;
use App\Helpers\Pelaksanaan;
use App\Helpers\Folder;
use App\Models\Emailpel;

use Mail;

class PelaksanaanEventListener
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
     * @param  \App\Events\PelaksanaanEvent  $event
     * @return void
     */
    public function handle(PelaksanaanEvent $event)
    {
        try {
            $this->kirimEmail($event);
            $fld = new Folder();
            $fl = $fld->getStatic('error_log.txt');
            file_put_contents( $fl, "tidak ada erro");
        }catch(Exception $e)
        {
            $fld = new Folder();
            $fl = $fld->getStatic('error_log.txt');
            file_put_contents( $fl, " ada erro");
        }
    }

    private function kirimEmail(PelaksanaanEvent $event)
    {
        $dt = $event->data;
        $em = Emailpel::where('jenis_menu', $dt['jm'] )->get();
        if( count( $em ) )
        {
            $pel = new Pelaksanaan();
            $temp = $pel->get( $dt['jm'] );
            $dt = [
                'nama' => $temp[0],
                'url' => url($temp[1]),
            ];
            $hsl = Mail::to( $em[0]->email)
            ->send(new PelaksanaanMail( $dt ) );
        }
    }
}
