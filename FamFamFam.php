<?php
/**
 * Created by PhpStorm.
 * User: Camilo3rd
 * Date: 21 Mar 2016
 * Time: 3:40 PM
 */

namespace camilord\fam3x;


class FamFamFam {

    /**
     * @param $icon_name
     * @return string
     */
    public static function iconize($icon_name) {
        return dirname(__FILE__).'/lib/assets/img/icons/'.strip_tags($icon_name).'.png';
    }

    /**
     * @return array
     */
    public static function get_list() {

        $icons = array();

        $dir = dirname(__FILE__).'/lib/assets/img/icons/';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if (substr($file, (strlen(trim($file)) - 3)) == 'png') {
                        $icons[] = $file;
                    }
                }
                closedir($dh);
            }
        }

        return $icons;

    }

} 