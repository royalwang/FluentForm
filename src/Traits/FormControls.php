<?php namespace inkvizytor\FluentForm\Traits;

use inkvizytor\FluentForm\Controls\Checkable;
use inkvizytor\FluentForm\Controls\CheckableList;
use inkvizytor\FluentForm\Controls\DateTime;
use inkvizytor\FluentForm\Controls\Editor;
use inkvizytor\FluentForm\Controls\Html;
use inkvizytor\FluentForm\Controls\Input;
use inkvizytor\FluentForm\Controls\Select;
use inkvizytor\FluentForm\Controls\Textarea;

/**
 * Class HasFormControls
 *
 * @package inkvizytor\FluentForm\Traits
 */
trait FormControls
{
    /**
     * @param string $type
     * @param string $name
     * @param string $value
     * @return \inkvizytor\FluentForm\Controls\Input
     */
    public function input($type, $name, $value = null)
    {
        return (new Input($this->getRenderer()))->type($type)->name($name)->value($value);
    }

    /**
     * @param string $name
     * @param string $value
     * @return \inkvizytor\FluentForm\Controls\Input
     */
    public function text($name, $value = null)
    {
        return $this->input('text', $name, $value);
    }

    /**
     * @param string $name
     * @return \inkvizytor\FluentForm\Controls\Input
     */
    public function password($name)
    {
        return $this->input('password', $name);
    }

    /**
     * @param string $name
     * @return \inkvizytor\FluentForm\Controls\Input
     */
    public function file($name)
    {
        return $this->input('file', $name);
    }

    /**
     * @param string $name
     * @param string $value
     * @return \inkvizytor\FluentForm\Controls\Textarea
     */
    public function textarea($name, $value = null)
    {
        return (new Textarea($this->getRenderer()))->name($name)->value($value)->rows(5);
    }
    
    /**
     * @param string $name
     * @param array $items
     * @param int|string $selected
     * @return \inkvizytor\FluentForm\Controls\Select
     */
    public function select($name, array $items, $selected = null)
    {
        return (new Select($this->getRenderer()))->name($name)->items($items)->selected($selected);
    }

    /**
     * @param string $name
     * @param int|mixed $value
     * @param bool $checked
     * @return \inkvizytor\FluentForm\Controls\Checkable
     */
    public function checkbox($name, $value = true, $checked = null)
    {
        return (new Checkable($this->getRenderer(), 'checkbox'))->name($name)->value($value)->checked($checked)->always(true);
    }

    /**
     * @param string $name
     * @param array $items
     * @param array $checked
     * @return \inkvizytor\FluentForm\Controls\CheckableList
     */
    public function checkboxes($name, array $items, array $checked = [])
    {
        return (new CheckableList($this->getRenderer(), 'checkbox'))->name($name)->items($items)->checked($checked);
    }

    /**
     * @param string $name
     * @param array $items
     * @param int|string $checked
     * @return \inkvizytor\FluentForm\Controls\CheckableList
     */
    public function radios($name, array $items, $checked = null)
    {
        return (new CheckableList($this->getRenderer(), 'radio'))->name($name)->items($items)->checked($checked);
    }

    /**
     * @param string $html
     * @return \inkvizytor\FluentForm\Controls\Html
     */
    public function html($html)
    {
        return (new Html($this->getRenderer()))->html($html);
    }

    /**
     * @param string $name
     * @param string $value
     * @return \inkvizytor\FluentForm\Controls\DateTime
     */
    public function datetime($name, $value = null)
    {
        return (new DateTime($this->getRenderer()))->name($name)->value($value)->time(false);
    }

    /**
     * @param string $name
     * @param string $value
     * @return \inkvizytor\FluentForm\Controls\Editor
     */
    public function editor($name, $value = null)
    {
        return (new Editor($this->getRenderer()))->name($name)->value($value);
    }
}