<?php

namespace CoderStudio\Bootstrap;

use Illuminate\Support\Facades\Session;

class Bootstrap
{
    /**
     * @var null|string
     */
    protected $template_name = null;

    /**
     * @var null|string
     */
    protected $type = null;

    /**
     * @var null|string
     */
    protected $name = null;

    /**
     * @var null|string
     */
    protected $label = null;

    /**
     * @var null|string|integer
     */
    protected $value = null;

    /**
     * @var null|string
     */
    protected $help = null;

    /**
     * @var null|string
     */
    protected $addon_left = null;

    /**
     * @var null|string
     */
    protected $addon_right = null;

    /**
     * @var null|string
     */
    protected $state = null;

    /**
     * @var null|string
     */
    protected $size = null;

    /**
     * @var null|array
     */
    protected $params = null;

    /**
     * @var null|array
     */
    protected $options = null;

    /**
     * @var null|string
     */
    protected $id = null;

    /**
     * @var null|string
     */
    protected $class = null;

    /**
     * @var null|string
     */
    protected $placeholder = null;

    /**
     * @var null|integer
     */
    protected $rows = null;

    /**
     * @var bool
     */
    protected $floatingLabel = false;

    const BUTTON = 'button';
    const CHECKBOX = 'checkbox';
    const FILE = 'file';
    const HIDDEN = 'hidden';
    const IMAGE = 'image';
    const PASSWORD = 'password';
    const RADIO = 'radio';
    const RESET = 'reset';
    const SUBMIT = 'submit';
    const TEXT = 'text';
    const COLOR = 'color';
    const DATE = 'date';
    const DATETIME = 'datetime';
    const DATETIME_LOCAL = 'datetime-local';
    const EMAIL = 'email';
    const NUMBER = 'number';
    const RANGE = 'range';
    const SEARCH = 'search';
    const TEL = 'tel';
    const TIME = 'time';
    const URL = 'url';
    const MONTH = 'month';
    const WEEK = 'week';

    const VALID = 'is-valid';
    const IVALID = 'is-invalid';

    const SM = 'form-control-sm';
    const LG = 'form-control-lg';

    const TEMPLATE_INPUT_CONSTRUCTOR = 'input-constructor';
    const TEMPLATE_TEXTAREA_CONSTRUCTOR = 'textarea-constructor';
    const TEMPLATE_SELECT_CONSTRUCTOR = 'select-constructor';
    const TEMPLATE_CHECKBOX_CONSTRUCTOR = 'checkbox-constructor';
    const TEMPLATE_RADIO_CONSTRUCTOR = 'radio-constructor';


    public function button($name, $value = null)
    {
        $this->type = self::BUTTON;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function checkbox($name, $value = null)
    {
        $this->type = self::CHECKBOX;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_CHECKBOX_CONSTRUCTOR;

        return $this;
    }

    public function file($name, $value = null)
    {
        $this->type = self::FILE;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function hidden($name, $value = null)
    {
        $this->type = self::HIDDEN;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function image($name, $value = null)
    {
        $this->type = self::IMAGE;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function password($name, $value = null)
    {
        $this->type = self::PASSWORD;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function radio($name, $value = null)
    {
        $this->type = self::RADIO;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_RADIO_CONSTRUCTOR;

        return $this;
    }

    public function reset($name, $value = null)
    {
        $this->type = self::RESET;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function submit($name, $value = null)
    {
        $this->type = self::SUBMIT;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function text($name, $value = null)
    {
        $this->type = self::TEXT;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function color($name, $value = null)
    {
        $this->type = self::COLOR;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function date($name, $value = null)
    {
        $this->type = self::DATE;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function datetime($name, $value = null)
    {
        $this->type = self::DATETIME;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function datetime_local($name, $value = null)
    {
        $this->type = self::DATETIME_LOCAL;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function email($name, $value = null)
    {
        $this->type = self::EMAIL;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function number($name, $value = null)
    {
        $this->type = self::NUMBER;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function range($name, $value = null)
    {
        $this->type = self::RANGE;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function search($name, $value = null)
    {
        $this->type = self::SEARCH;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function tel($name, $value = null)
    {
        $this->type = self::TEL;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function time($name, $value = null)
    {
        $this->type = self::TIME;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function url($name, $value = null)
    {
        $this->type = self::URL;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function month($name, $value = null)
    {
        $this->type = self::MONTH;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function week($name, $value = null)
    {
        $this->type = self::WEEK;
        $this->setName($name);
        $this->setValue($value);
        $this->template_name = self::TEMPLATE_INPUT_CONSTRUCTOR;

        return $this;
    }

    public function textarea($name, $value = null)
    {
        $this->template_name = self::TEMPLATE_TEXTAREA_CONSTRUCTOR;
        $this->setName($name);
        $this->setValue($value);

        return $this;
    }

    public function select($name, $value = null)
    {
        $this->template_name = self::TEMPLATE_SELECT_CONSTRUCTOR;
        $this->setName($name);
        $this->setValue($value);

        return $this;
    }

    /**
     * @param $name string
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @param string $label
     * @return $this
     */
    public function label(string $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @param string $help
     * @return $this
     */
    public function help(string $help)
    {
        $this->help = $help;

        return $this;
    }

    /**
     * @param string $addon_left
     * @return $this
     */
    public function addonLeft(string $addon_left)
    {
        $this->addon_left = $addon_left;

        return $this;
    }

    /**
     * @param string $addon_right
     * @return $this
     */
    public function addonRight(string $addon_right)
    {
        $this->addon_right = $addon_right;

        return $this;
    }

    public function valid()
    {
        $this->state = self::VALID;

        return $this;
    }

    public function invalid()
    {
        $this->state = self::IVALID;

        return $this;
    }

    public function sm()
    {
        $this->size = self::SM;

        return $this;
    }

    public function lg()
    {
        $this->size = self::LG;

        return $this;
    }

    /**
     * @return $this
     */
    public function floatingLabel()
    {
        $this->floatingLabel = true;

        return $this;
    }

    /**
     * @param array $params
     * @return $this
     */
    public function params(array $params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function options(array $options)
    {
        $this->options = $options;

        return $this;
    }

    public function id(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $class
     * @return $this
     */
    public function cssClass(string $class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * @param string $placeholder
     * @return $this
     */
    public function placeholder(string $placeholder)
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    /**
     * @param string $rows
     * @return $this
     */
    public function rows(string $rows)
    {
        $this->rows = $rows;

        return $this;
    }

    /**
     * @return string
     * @throws \Throwable
     */
    public function get()
    {
        $name_a = null;
        $p = [];
        $n = explode('[', $this->name);
        if (count($n) > 1) {
            $name_a = mb_strcut($this->name, strlen($n[0]));
            $key = trim($name_a, '[]');
            $id = "$n[0]-$key";
        } else {
            $id = $this->name;
        }
        $this->name = $n[0];

        if (!empty($this->id)) {
            $id = $this->id;
        }

        if (!empty($this->class)) {
            $class[] = $this->class;
        }

        if (!empty($this->placeholder)) {
            $p[] = "placeholder=\"$this->placeholder\"";
        }

        if (!empty($this->rows)) {
            $p[] = "rows=\"$this->rows\"";
        }

        if ($this->params) {
            foreach ($this->params as $k => $v) {
                if (is_string($k)) {
                    $p[] = "$k=\"$v\"";
                } elseif (is_integer($k)) {
                    $p[] = $v;
                }
            }
        }
        $this->params = $p;

        $checked = null;
        if (old($this->name) and !is_array(old($this->name))) {
            if ($this->type == 'radio') {
                if (old($this->name) == $this->value) {
                    $checked = true;
                }
            } else {
                $this->value = old($this->name);
                $checked = true;
            }

        } elseif (is_array(old($this->name))) {
            if ($key == '') {
                $this->value = old($this->name);
                $key = 0;
            } elseif (isset(old($this->name)[$key])) {
                $this->value = old($this->name)[$key];
                $checked = true;
            }
        }

        if (Session::get('errors') != null) {
            $this->state = 'is-invalid';
            if (isset($key) and Session::get('errors')->first("$this->name.$key") != '') {
                $this->help = Session::get('errors')->first("$this->name.$key");
            } elseif (Session::get('errors')->first($this->name) != '') {
                if ($this->type == 'radio') {
                    if (old($this->name) == $this->value) {
                        $this->help = Session::get('errors')->first($this->name);
                    }
                } else {
                    $this->help = Session::get('errors')->first($this->name);
                }
            } else {
                $this->state = 'is-valid';
            }
        }

        $return = [
            'id'             => $id,
            'type'           => $this->type,
            'name'           => $this->name,
            'name_a'         => $name_a,
            'label'          => $this->label,
            'value'          => $this->value,
            'help'           => $this->help,
            'addon_left'     => $this->addon_left,
            'addon_right'    => $this->addon_right,
            'state'          => "$this->state",
            'size'           => $this->size,
            'params'         => @implode(' ', $this->params),
            'class'          => @implode(' ', $class),
            'options'        => $this->options,
            'checked'        => $checked,
            'floating_label' => $this->floatingLabel,
        ];

        $template_name = $this->template_name;

        $this->resetObject();

        return view("bootstrap::$template_name", $return)->render();
    }

    private function resetObject()
    {
        $reflection_class = new \ReflectionClass($this);
        $default_properties = $reflection_class->getDefaultProperties();
        foreach ($default_properties as $key => $value) {
            $this->$key = $value;
        }
    }
}
