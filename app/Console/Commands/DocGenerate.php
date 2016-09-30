<?php
/**
 * Author: hitman
 * Date: 27/7/2016
 * Time: 2:06 PM
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;

class DocGenerate extends Command
{
    protected $signature = 'doc:gen';
    protected $description = '数据库文档生成';

    public function handle()
    {
        $tables = collect(DB::select('show tables'))->map(function ($t) {
            return $t->Tables_in_yxe;
        })->filter(function ($name) {
            return $name != 'migrations' && $name != 'taggables';
        });

        $doc = '';

        $tables->each(function ($t) use (&$doc){
            $meta = DB::select("show full fields from $t");
            $d = collect($meta)->map(function($m){
                return "{$m->Field} | {$m->Type} | {$m->Comment}";
            })->implode("\n");
            $head = "##". trans('table.'.$t) . "({$t})\n";
            $head .= "字段 | 字段类型 | 字段说明\n";
            $head .= "--- | --- | ---\n";
            $doc .= $head . $d . "\n\n";
        });

        file_put_contents(base_path() . "/docs/docs/model.md", $doc);
        $this->info($doc);
    }
}
