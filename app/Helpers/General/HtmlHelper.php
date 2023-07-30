<?php

declare(strict_types=1);

namespace App\Helpers\General;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Support\HtmlString;

/**
 * Class HtmlHelper.
 */
class HtmlHelper
{
    /**
     * HtmlHelper constructor.
     */
    public function __construct(
        /**
         * The URL generator instance.
         */
        protected ?UrlGenerator $url = null
    )
    {
    }

    /**
     * @param       $url
     * @param null  $secure
     * @return mixed
     */
    public function style($url, array $attributes = [], $secure = null): HtmlString
    {
        $defaults = ['media' => 'all', 'type' => 'text/css', 'rel' => 'stylesheet'];

        $attributes = $attributes + $defaults;

        $attributes['href'] = $this->url->asset($url, $secure);

        return $this->toHtmlString('<link' . $this->attributes($attributes) . '>' . PHP_EOL);
    }

    /**
     * Generate a link to a JavaScript file.
     *
     * @param string $url
     * @param bool   $secure
     *
     */
    public function script($url, array $attributes = [], $secure = null): HtmlString
    {
        $attributes['src'] = $this->url->asset($url, $secure);

        return $this->toHtmlString('<script' . $this->attributes($attributes) . '></script>' . PHP_EOL);
    }

    /**
     * @param        $cancel_to
     * @param        $title
     * @param string $classes
     *
     * @return HtmlString
     */
    public function formCancel($cancel_to, $title, $classes = 'btn btn-danger btn-sm')
    {
        return html()->a($cancel_to, $title)->class($classes);
    }

    /**
     * @param        $title
     * @param string $classes
     *
     * @return HtmlString
     */
    public function formSubmit($title, $classes = 'btn btn-success btn-sm pull-right')
    {
        return html()->submit($title)->class($classes);
    }

    /**
     * Build an HTML attribute string from an array.
     *
     * @param array $attributes
     */
    public function attributes($attributes): string
    {
        $html = [];

        foreach ((array) $attributes as $key => $value) {
            $element = $this->attributeElement($key, $value);

            $html[] = $element;
        }

        return $html !== [] ? ' ' . implode(' ', $html) : '';
    }

    /**
     * Build a single attribute element.
     *
     * @param string $key
     * @param string $value
     *
     * @return string
     */
    protected function attributeElement($key, $value)
    {
        // For numeric keys we will assume that the value is a boolean attribute
        // where the presence of the attribute represents a true value and the
        // absence represents a false value.
        // This will convert HTML attributes such as "required" to a correct
        // form instead of using incorrect numerics.
        if (is_numeric($key)) {
            return $value;
        }

        // Treat boolean attributes as HTML properties
        if (is_bool($value) && $key != 'value') {
            return $value ? $key : '';
        }

        return $key . '="' . e($value) . '"';
    }

    /**
     * Transform the string to an Html serializable object.
     *
     * @param $html
     */
    protected function toHtmlString($html): HtmlString
    {
        return new HtmlString($html);
    }
}
