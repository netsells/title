<?php namespace Netsells\Title;

class Title
{
    public static $segment_seperator = ' - ';

    public static $_data = array(
        'site_name' => '',
        'segments' => array(),
        'layout' => '%s | %n'
    );

    public static function site_name($value)
    {
        self::$_data['site_name'] = $value;
    }

    public static function layout($value)
    {
        self::$_data['layout'] = $value;
    }

    public static function segment()
    {
        $args = func_get_args();
        
        self::$_data['segments'] = array_merge($args, self::$_data['segments']);
    }

    public static function make()
    {
        $data = self::$_data;

        $title = $data['site_name'];

        if (count($data['segments']))
        {
            $segments = implode(self::$segment_seperator, $data['segments']);

            $title = str_replace(array('%n', '%s'), array($data['site_name'], $segments), $data['layout']);
        }

        return $title;
    }
}