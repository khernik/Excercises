<?php

class Source {

    private $url, $fromCode, $regex;

    public function __construct($url, $fromCode)
    {
        $this->url = $url;
        $this->fromCode = $fromCode;
    }

    /**
     * Get the source of the given website using the
     * specified encoding
     *
     * @return string
     */
    public function file_get_contents_utf8()
    {
        $output = file_get_contents($this->url);

        $output = iconv($this->fromCode, 'UTF-8', $output);

        return $output;
    }

    public function setRegex($regex)
    {
        $this->regex = $regex;
    }

    /**
     * Match specified regex
     *
     * @return mixed
     */
    public function getSourcePart()
    {
        $source = $this->file_get_contents_utf8($this->url, 'ISO-8859-2');

        preg_match($this->regex, $source, $matches);

        return $matches;
    }

} // End Source
