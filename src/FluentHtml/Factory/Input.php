<?php

namespace FluentHtml\Factory;

trait Input
{
    /**
     * https://developer.mozilla.org/en-US/docs/Web/Traits/Element/InputElements
     *
     */

    /**
     * A push button with no default behavior.
     */
    public static function inputButton($name, $value = null)
    {
        return "<input name='$name' type='button'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * A check box. You must use the value attribute to define the value submitted by this item. Use the checked attribute to indicate whether this item is selected. You can also use the indeterminate attribute to indicate that the checkbox is in an indeterminate state (on most platforms, this draws a horizontal line across the checkbox).
     */
    public static function checkbox($name, $value = null, $checked = false)
    {
        return "<input name='$name' type='checkbox'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A control for specifying a color. A color picker's UI has no required features other than accepting simple colors as text (more info).
     */
    public static function color($name, $value = null)
    {
        return "<input name='$name' type='color'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A control for entering a date (year, month, and day, with no time).
     */
    public static function date($name, $value = null)
    {
        return "<input name='$name' type='date'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A control for entering a date and time (hour, minute, second, and fraction of a second) based on UTC time zone.
     */
    public static function datetime($name, $value = null)
    {
        return "<input name='$name' type='datetime'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A control for entering a date and time, with no time zone.
     */
    public static function datetimelocal($name, $value = null)
    {
        return "<input name='$name' type='datetimelocal'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A field for editing an e-mail address. The input value is validated to contain either the empty string or a single valid e-mail address before submitting. The :valid and :invalid CSS pseudo-classes are applied as appropriate.
     */
    public static function email($name, $value = null)
    {
        return "<input name='$name' type='email'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * A control that lets the user select a file. Use the accept attribute to define the types of files that the control can select.
     */
    public static function file($name, $value = null)
    {
        return "<input name='$name' type='file'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * A control that is not displayed, but whose value is submitted to the server.
     */
    public static function hidden($name, $value = null)
    {
        return "<input name='$name' type='hidden'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * A graphical submit button. You must use the src attribute to define the source of the image and the alt attribute to define alternative text. You can use the height and width attributes to define the size of the image in pixels.
     */
    public static function image($name, $value = null)
    {
        return "<input name='$name' type='image'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A control for entering a month and year, with no time zone.
     */
    public static function month($name, $value = null)
    {
        return "<input name='$name' type='month'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A control for entering a floating point number.
     */
    public static function number($name, $value = null)
    {
        return "<input name='$name' type='number'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * A single-line text field whose value is obscured. Use the maxlength attribute to specify the maximum length of the value that can be entered.
     */
    public static function password($name, $value = null)
    {
        return "<input name='$name' type='password'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * A radio button. You must use the value attribute to define the value submitted by this item. Use the checked attribute to indicate whether this item is selected by default. Radio buttons that have the same value for the name attribute are in the same "radio button group"; only one radio button in a group can be selected at one time.
     */
    public static function radio($value)
    {
        return "<input name='$name' type='radio'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A control for entering a number whose exact value is not important. This type control uses the following default values if the corresponding attributes are not specified:
     */
    public static function range($name, $value = null)
    {
        return "<input name='$name' type='range'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * 0n [type] [description]
     */
    public static function min($name, $value = null)
    {
        return "<input name='$name' type='min'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * 100[type] [description]
     */
    public static function max($name, $value = null)
    {
        return "<input name='$name' type='max'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * min + (max-min)/2, or min if max is less than min
     */
    public static function value($name, $value = null)
    {
        return "<input name='$name' type='value'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * 1n [type] [description]
     */
    public static function step($name, $value = null)
    {
        return "<input name='$name' type='step'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * A button that resets the contents of the form to default values.
     */
    public static function reset($name, $value = null)
    {
        return "<input name='$name' type='reset'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A single-line text field for entering search strings; line-breaks are automatically removed from the input value.
     */
    public static function search($name, $value = null)
    {
        return "<input name='$name' type='search'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * A button that submits the form.
     */
    public static function submit($name, $value = null)
    {
        return "<input name='$name' type='submit'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A control for entering a telephone number; line-breaks are automatically removed from the input value, but no other syntax is enforced.
     * You can use attributes such as pattern and maxlength to restrict values entered in the control. The :valid and :invalid CSS pseudo-classes are applied as appropriate.
     */
    public static function tel($name, $value = null)
    {
        return "<input name='$name' type='tel'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * A single-line text field; line-breaks are automatically removed from the input value.
     */
    public static function text($name, $value = null)
    {
        return "<input name='$name' type='text'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A control for entering a time value with no time zone.
     */
    public static function time($name, $value = null)
    {
        return "<input name='$name' type='time'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A field for editing a URL. The input value is validated to contain either the empty string or a valid absolute URL before submitting. Line-breaks and leading or trailing whitespace are automatically removed from the input value. You can use attributes such as pattern and maxlength to restrict values entered in the control. The :valid and :invalid CSS pseudo-classes are applied as appropriate.
     */
    public static function url($name, $value = null)
    {
        return "<input name='$name' type='url'"
        . ($value ? " value='$value'" : '')
        . '>';
    }

    /**
     * (HTML5) A control for entering a date consisting of a week-year number and a week number with no time zone.
     */
    public static function week($name, $value = null)
    {
        return "<input name='$name' type='week'"
        . ($value ? " value='$value'" : '')
        . '>';
    }
}
