<?php

namespace CoderStudio\Bootstrap;

use Illuminate\Support\Facades\Session;

class Bootstrap {

    /**
     * Обрабатывает данные для формирования состояния вывода в шаблон
     * @param $type
     * @param $name
     * @param null $label
     * @param null $value
     * @param null $help
     * @param null $addon_left
     * @param null $addon_right
     * @param null $state
     * @param null $size
     * @param null $params
     * @param null $options
     * @return array
     */

    public function preparation($type, $name, $label = null, $value = null, $help = null, $addon_left = null, $addon_right = null, $state = null, $size = null, $params = null, $options = null)
    {
        if($params)
        {
            foreach($params as $k => $v)
            {
                if($k == 'class')
                {
                    $class[] = $v;
                }

                if(is_string($k))
                {
                    $p[] = "$k=\"$v\"";
                }
                elseif(is_integer($k))
                {
                    $p[] = $v;
                }
            }
            $params = $p;
        }

        $name_a = null;
        $n = explode('[', $name);
        if(count($n) > 1)
        {
            $name_a = mb_strcut($name, strlen($n[0]));
            $key = trim($name_a, '[]');
            $id = "$n[0]-$key";
        }
        else
        {
            $id = $name;
        }
        $name = $n[0];

        $checked = null;
        if(old($name) and !is_array(old($name)))
        {
            if($type == 'radio')
            {
                if(old($name) == $value)
                {
                    $checked = true;
                }
            }
            else
            {
                $value = old($name);
                $checked = true;
            }

        }
        elseif(is_array(old($name)))
        {
            if($key == '')
            {
                $value = old($name);
                $key = 0;
            }
            elseif(isset(old($name)[$key]))
            {
                $value = old($name)[$key];
                $checked = true;
            }
        }

        $feedback = null;
        $state_ico = null;

        if(Session::get('errors') != null)
        {
            $state = 'error';
            $feedback = true;
            if($addon_right == null)
            {
                $state_ico = 'glyphicon glyphicon-remove';
            }
            if(isset($key) and Session::get('errors')->first("$name.$key") != '')
            {
                $help = Session::get('errors')->first("$name.$key");
            }
            elseif(Session::get('errors')->first($name) != '')
            {
                if($type == 'radio')
                {
                    if(old($name) == $value)
                    {
                        $help = Session::get('errors')->first($name);
                    }
                }
                else
                {
                    $help = Session::get('errors')->first($name);
                }
            }
            else
            {
                $state = 'success';
                if($addon_right == null)
                {
                    $state_ico = 'glyphicon glyphicon-ok';
                }
            }
        }

        $return = [
            'id' => $id,
            'type' => $type,
            'name' => $name,
            'name_a' => $name_a,
            'label' => $label,
            'value' => $value,
            'help' => $help,
            'addon_left' => $addon_left,
            'addon_right' => $addon_right,
            'state' => "$state",
            'size' => $size,
            'params' => @implode(' ', $params),
            'class' => @implode(' ', $class),
            'feedback' => $feedback,
            'state_ico' => $state_ico,
            'options' => $options,
            'checked' => $checked,
        ];
        return $return;
    }

    /**
     * Выводит поле input
     * @param $type
     * @param $name
     * @param null $label
     * @param null $value
     * @param null $help
     * @param null $addon_left
     * @param null $addon_right
     * @param null $state
     * @param null $size
     * @param null $params
     * @return string
     */
    public function input($type, $name, $label = null, $value = null, $help = null, $addon_left = null, $addon_right = null, $state = null, $size = null, $params = null)
    {
        return view('bootstrap::input-constructor',
            $this->preparation($type, $name, $label, $value, $help, $addon_left, $addon_right, $state, $size, $params)
        )->render();
    }

    /**
     * Выводит поле textarea
     * @param $name
     * @param null $label
     * @param null $value
     * @param null $help
     * @param null $addon_left
     * @param null $addon_right
     * @param null $state
     * @param null $size
     * @param null $params
     * @return string
     */
    public function textarea($name, $label = null, $value = null, $help = null, $addon_left = null, $addon_right = null, $state = null, $size = null, $params = null)
    {
        return view('bootstrap::textarea-constructor',
            $this->preparation(null, $name, $label, $value, $help, $addon_left, $addon_right, $state, $size, $params)
        )->render();
    }

    /**
     * Выводит select
     * @param $name
     * @param null $options
     * @param null $selected
     * @param null $label
     * @param null $help
     * @param null $state
     * @param null $size
     * @param null $params
     * @return string
     */
    public function select($name, $options = null, $selected = null, $label = null, $help = null, $state = null, $size = null, $params = null)
    {
        return view('bootstrap::select-constructor',
            $this->preparation(null, $name, $label, $selected, $help, null, null, $state, $size, $params, $options)
        )->render();
    }

    /**
     * Выводит checkbox
     * @param $name
     * @param null $label
     * @param null $value
     * @param null $help
     * @param null $state
     * @param null $params
     * @return string
     */
    public function checkbox($name, $label = null, $value = null, $help = null, $state = null, $params = null)
    {
        return view('bootstrap::checkbox-constructor',
            $this->preparation('checkbox', $name, $label, $value, $help, null, null, $state, null, $params)
        )->render();
    }

    /**
     * Выводит radio
     * @param $name
     * @param null $label
     * @param null $value
     * @param null $help
     * @param null $state
     * @param null $params
     * @return string
     */
    public function radio($name, $label = null, $value = null, $help = null, $state = null, $params = null)
    {
        return view('bootstrap::radio-constructor',
            $this->preparation('radio', $name, $label, $value, $help, null, null, $state, null, $params)
        )->render();
    }

}