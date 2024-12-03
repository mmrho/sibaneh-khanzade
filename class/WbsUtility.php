<?php

class WbsUtility
{
    public static function inputClean($input)
    {
        return esc_sql(esc_html(wc_clean(strip_tags($input))));
    }
}