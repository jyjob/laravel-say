<?php
/**
 * Created by PhpStorm.
 * User: jywang
 * Date: 2019-09-27
 * Time: 10:50
 */

namespace Jywang\Say;
use Illuminate\Config\Repository;

class Say{

    protected $config;

    /**
     * 构造方法
     */
    public function __construct(Repository $config)
    {
        $this->config = $config->get('say');
    }

    /**
     * 输出内容
     */
    public function write($content)
    {
        switch ($this->config['output_type']) {
            case 'echo':
                echo $content;
                break;
            case 'print':
                print($content);
                break;
            case 'print_r':
                print_r($content);
                break;
            case 'var_dump':
                var_dump($content);
                break;
            case 'dd':
                dd($content);
                break;
            case  'dump':
                dump($content);
                break;
            default:
                echo $content;
        }
        if ($this->config['is_exit']) {
            exit;
        }
    }
}
