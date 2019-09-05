<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use League\Csv\Reader;
use League\Csv\Statement;

class exportKidsData extends Command
{
    protected $group;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:kids {--group=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export all subscribed kids into a csv file';

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
        if($this->option('group'))
        {
            $group = \App\Group::FindOrFail($this->option('group'));
            $kids = $group->kids;
        }
        else $kids = \App\Kid::all();
        $filename = "ledenlijst.csv";
        $csv = \League\Csv\Writer::createFromPath($filename, 'w+');
        $csv->insertOne(\Schema::getColumnListing('kids'));
        foreach($kids as $kid){
            $csv->insertOne($kid->toArray());
        }
        $csv->output('ledenlijst.csv');
    }
}
