<?php

namespace FluentHtml\Extension;

/**
 *
 */
trait Forms
{
    /**
     * see: Appendable::append()
     * @param  string $markup new markup
     * @return $this
     */
    abstract public function append($markup);

    public function start($id, $action = '', $method = 'POST', $target = '_self')
    {
        /**
         * See: https://developer.mozilla.org/en-US/docs/Web/Traits/Element/form
         * Missing:
         * • accept-charset (A list of character encodings that the server accepts.)
         * • autocomplete (on/off)
         * • enctype (for method post)
         * • novalidate
         */
        return $this->append(
            "<form id='$id' action='$action' method='$method' target='$target'>"
        );
    }

    public function label($inner, $for = null)
    {
        /**
         * See: https://developer.mozilla.org/en-US/docs/Web/Traits/Element/label
         * Missing: accesskey, form
         */
        if ($for)
            return $this->append("<label for='$for'>" . htmlentities($inner) . '</label>');
        else
            return $this->append("<label>" . $inner . '</label>');
    }

    public function input($type, $name, $value = null)
    {
        /**
         * See: https://developer.mozilla.org/en-US/docs/Web/Traits/Element/input
         * Missing: accept, autocomplete, autofocus, autosave, disabled,
         *   formaction, formenctype, formmethod, formnovalidate, formtarget (form* all override the parent form)
         */
        return $this->append(
            "<input name='$name' type='$type'"
            . ($form ? " form='$form'" : '')
            . ($value ? " value='$value'" : '')
            . '>'
        );
    }

    public function button($name, $type = 'submit', $inner = 'submit')
    {
        /**
         * See: https://developer.mozilla.org/en-US/docs/Web/Traits/Element/button
         */
        return $this->append("<button name='$name' type='$type'>$inner</button>");
    }

    public function textarea($name, $inner, $rows = 3, $cols = 20)
    {
        /**
         * See: https://developer.mozilla.org/en-US/docs/Web/Traits/Element/textarea
         * Missing: autofocus, disabled, form, maxlength, placeholder, readonly,
         *   required, selectionDirection, selectionEnd, selectionStart, spellcheck,
         *   wrap
         */
        return $this->append(
            "<textarea name='$name' rows='$rows' cols='$cols'>"
            . htmlentities($inner)
            . "</textarea>"
        );
    }

    public function select($name, $inner)
    {
        /**
         * See: https://developer.mozilla.org/en-US/docs/Web/Traits/Element/select
         * Missing: autofocus, disabled, form, multiple, required, size
         */
        return $this->append(
            "<select name='$name'>" . htmlentities($inner) . '</select>'
        );
    }

    public function option($value, $inner = null, $isSelected = false)
    {
        return $this->append(
            "<option value='$value'"
            . ($isSelected ? ' selected' : '')
            . '>'
            . htmlentities($inner ? $inner : $value)
            . '</option>'
        );
    }

    public function options(array $values, array $labels = null, $selectedValue = null)
    {
        $markup = '';

        $i   = 0;
        $len = count($values);
        for (; $i < $len; $i++)
        {
            $value = $values[$i];
            $inner = ($labels && array_key_exists($i, $labels)) ? $labels[$i] : null;

            $markup .= "<option value='$value'"
                . ($selectedValue && $selectedValue === $value ? ' selected' : '')
                . '>'
                . htmlentities($inner ? $inner : $value) . '</option>';
        }

        return $this->append($markup);
    }
}
