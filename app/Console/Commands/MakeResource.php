<?php
/**
 * Author: hitman
 * Date: 28/9/2016
 * Time: 6:07 PM
 */


namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeResource extends Command
{

    protected $signature = 'resource:make';
    protected $description = '创建一个资源';

    public function handle()
    {
        $name = $this->ask("资源名称: ");
        $this->createTable($name);
        $this->createModel($name);
        $this->createRoute($name);
        $this->createController($name);
        $this->createView($name);
    }

    private function createTable($name)
    {
        $filename = "create_table_" . str_plural($name) . ".php";
        $path     = base_path('database/migrations') . "/" . $filename;

        $className = studly_case("create_table_" . str_plural($name));
        $content   = $this->phpView(view('console.migration.create', ['className' => $className, 'tableName' => str_plural($name)]));

        file_put_contents($path, $content);
        $this->info("数据表创建成功");
    }

    private function createModel($name)
    {
        $model = studly_case($name);
        $path  = app_path('Models') . "/{$model}.php";

        $content = $this->phpView(view('console.model', ['model' => $model]));

        file_put_contents($path, $content);
        $this->info("Model创建成功");
    }

    private function createRoute($name)
    {
        $resources   = config('resource');
        $resources[] = $name;
        $resources   = array_unique($resources);
        $content     = $this->phpView(view('console.route', ['resources' => $resources]));

        file_put_contents(config_path('resource.php'), $content);
        $this->info("路由创建成功");
    }

    private function createController($name)
    {
        $filename           = studly_case(str_plural($name)) . "Controller.php";
        $adminController    = app_path('Http/Controllers/Web/Admin/') . $filename;
        $adminApiController = app_path('Http/Controllers/Web/Admin/Api/') . $filename;
        $apiController      = app_path('Http/Controllers/Api/') . $filename;

        $adminContent = $this->phpView(view('console.controller.admin', ['name'=>$name]));
        file_put_contents($adminController, $adminContent);

        $adminApiContent = $this->phpView(view('console.controller.admin_api', ['name'=>$name]));
        file_put_contents($adminApiController, $adminApiContent);

        $apiContent = $this->phpView(view('console.controller.api', ['name'=>$name]));
        file_put_contents($apiController, $apiContent);
        $this->info("创建控制器成功");
    }

    private function createView($name)
    {
        // 创建文件夹
        $dir = resource_path("views/admin/resource/{$name}");
        if(!is_dir($dir)){
            mkdir($dir);
        }
        $indexContent = view('console.view.index', ['name'=>$name]);
        file_put_contents("{$dir}/index.blade.php", $indexContent);
        file_put_contents("{$dir}/show.blade.php", '');
        file_put_contents("{$dir}/create.blade.php", '');
        file_put_contents("{$dir}/edit.blade.php", '');

        $this->info('视图创建成功');
    }

    private function phpView($view)
    {
        return "<?php \n\n" . $view;
    }
}