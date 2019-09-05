<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use League\Csv\Writer;

class importKidsData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:kids {--group=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import all kids data';

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

        $filename = "ledenlijst.csv";
        $reader = \League\Csv\Reader::createFromPath($filename, 'r');
        $reader->setHeaderOffset(0);
        $records = $reader->getRecords();
        foreach ($records as $offset => $record)
        {
            if($this->option('group')== null || $record['group_id'] == $this->option('group'))
            {
                $kid = new \App\Kid();
                $kid->fill($record);
                $kid->group()->associate(\App\Group::FindOrFail($record["group_id"]));
                $kid->save();
            }
        }
    }
}
