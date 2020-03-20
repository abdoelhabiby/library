<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Carbon\Carbon;

class checkReservation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservation:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'to check reservation every 12h';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        //


      $reservation =  \DB::table('reservations')->where('status','pending')->where("created_at","<",Carbon::now()->subHours(72))->get();

          if(!empty($reservation)){

             foreach ($reservation as $reservations) {

                 \DB::table('reservations')->where('id',$reservations->id)->update(['status' => 'refused']);

             }
          }
    }
}
