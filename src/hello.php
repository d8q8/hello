<?php

/**
 * Hello命名空间
 */
namespace d8q8\hello;

/**
 * Hello测试类包
 * @category Hello
 * @package hello\Hello
 * @author d8q8<d8q8@163.com>
 * @license MIT
 * @link https://www.shinycg.com
 */
class Hello
{
    // 初始化配置参数
    private $config = [];

    // 错误信息
    private $error = '';

    /**
     * 获取属性
     */
    public function __get($name)
    {
        if (isset($this->config[$name])) {
            return $this->config[$name];
        }
        return null;
    }

    /**
     * 设置属性
     */
    public function __set($name, $value)
    {
        if (isset($this->config[$name])) {
            $this->config[$name] = $value;
        }
    }

    /**
     * 检测属性是否存在
     */
    public function __isset($name)
    {
        return isset($this->config[$name]);
    }

    /**
     * 架构函数
     * @access public
     * @param array $config 配置参数
     */
    public function __construct($config = [])
    {
        if (is_array($config)) {
            $this->config = array_merge($this->config, $config);
        }
    }

    /**
     * 处理错误
     */
    public function setError(string $str)
    {
        $this->error = $str;
    }

    /**
     * 取得最后一次错误信息
     * @access public
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * 获取结果
     * @return string 获取结果
     */
    public function toString()
    {
        return 'hello world';
    }
}
