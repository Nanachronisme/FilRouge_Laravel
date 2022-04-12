<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:database {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new database with specified name';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //code comes from https://www.techspeak.dev/2018/09/30/laravel-creating-the-database-using-artisan-commands.html

        $schemaName = $this->argument('name') ?: config("database.connections.mysql.database");
        $charset = config("database.connections.mysql.charset",'utf8mb4');
        $collation = config("database.connections.mysql.collation",'utf8mb4_unicode_ci');

        config(["database.connections.mysql.database" => null]);

        $query = "CREATE DATABASE IF NOT EXISTS $schemaName CHARACTER SET $charset COLLATE $collation;";

        DB::statement($query);

        config(["database.connections.mysql.database" => $schemaName]);
    }
}
