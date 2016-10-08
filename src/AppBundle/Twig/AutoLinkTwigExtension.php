<?php
namespace AppBundle\Twig;

class AutoLinkTwigExtension extends \Twig_Extension
{

    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            'auto_link_text' => new \Twig_Filter_Method($this, 'autoLinkText', ['is_safe' => ['html']]),
        ];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return "auto_link_twig_extension";
    }

    /**
     * @param $string
     * @return mixed
     */
    public function autoLinkText($string)
    {
        $regexp = "/(<a.*?>)?(https?)?(:\/\/)?(\w+\.)?(\w+)\.(\w+)(<\/a.*?>)?/i";
        $anchorMarkup = "<a href=\"%s://%s\" target=\"_blank\" >%s</a>";

        preg_match_all($regexp, $string, $matches, \PREG_SET_ORDER);

        foreach ($matches as $match) {
            if (empty($match[1]) && empty($match[7])) {
                $http = $match[2]?$match[2]:'http';
                $replace = sprintf($anchorMarkup, $http, $match[0], $match[0]);
                $string = str_replace($match[0], $replace, $string);
            }
        }

        return $string;
    }
}
