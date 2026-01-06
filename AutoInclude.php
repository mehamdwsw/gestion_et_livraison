<?php
namespace gestion_et_livraison;

class AutoInclude
{
    public static function register()
    {
        spl_autoload_register(static function ($class) {
            // إزالة namespace gestion_et_livraison من البداية
            $class = str_replace('gestion_et_livraison\\', '', $class);
            $filename = $class . ".php";
            $filename = str_replace('\\', '/', $filename);
            
            // استخدام المسار المطلق من مجلد AutoInclude.php
            $basePath = dirname(__FILE__);
            $fullPath = $basePath . '/' . $filename;
            
            if (file_exists($fullPath)) {
                require $fullPath;
                return true;
            }
            
            return false;
        }); 
    }
}
