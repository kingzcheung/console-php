<?php
/**
 * -------------------
 * console.log for php
 * -------------------
 *
 * Created by PhpStorm.
 * User: kingzcheung
 * Date: 16/9/16
 * Time: 09:40
 */

namespace console;

use Enum\Debug;

class Console {

    protected static $type;

    /**
     * 调试输出到浏览器的 console
     *
     * @author  Kingz Cheung <kingzcheung@gmail.com>
     */
    public static function log() {
        //$numargs = func_num_args();
        $args = func_get_args();//获得传入的所有参数的数组

        $log = '';

        foreach ($args as $k => $arg) {
            $log .= self::jsLog($arg, ':' . gettype($arg));
        }

        //echo Debug::ERROR;
        self::script($log);

    }





    /**
     * 把打印信息以 JSON 的形式输出到浏览器的控制台
     *
     * @param $msg  需要打印的信息
     * @author  Kingz Cheung <kingzcheung@gmail.com>
     */
    public static function json($msg) {
        self::script("console.log(" . json_encode($msg) . ");");
    }

    /**
     * 打印信息以表格的形式输出到控制台
     *
     * @param $msg  需要打印的信息
     * @author  Kingz Cheung <kingzcheung@gmail.com>
     */
    public static function table($msg) {
        self::script("console.table(" . json_encode($msg) . ");");
    }


    /**
     * 显示对象
     * @param $msg
     * @author  Kingz Cheung <kingzcheung@gmail.com>
     */
    public static function dir($msg) {
        self::script("console.dir(" . json_encode($msg) . ");");
    }


    /**
     * 添加 script 标签
     *
     * @param $js javascript 代码
     * @author  Kingz Cheung <kingzcheung@gmail.com>
     */
    private static function script($js) {
        $script = <<<JS
    <script type='text/javascript'>
    {$js}
    </script>
JS;
        echo $script;
    }


    /**
     * console.log 输出
     *
     * @param $arg          打印信息
     * @param null $type    输出类型
     * @return string       返回 Javascript 代码
     * @author  Kingz Cheung <kingzcheung@gmail.com>
     */
    private static function jsLog($arg, $type = null) {

        $log = "console.group('" . $type . "');";
        $log .= "console.log(" . json_encode(var_export($arg, true)) . ");";
        $log .= "console.groupEnd();";
        return $log;
    }


}

