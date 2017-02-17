<?php

    /**
     * Loads The Class Files.
     */
    class AutoLoader
    {        
        public static function load() 
        {
            //Bootstrap-Enums:
            include_once("BSF/Bootstrap/Themes.Class.php");
            include_once("BSF/Bootstrap/Colors.Class.php");

            //Bootstrap
            include_once("BSF/Bootstrap/Navigation.Class.php");
            include_once("BSF/Bootstrap/NavigationButton.Class.php");
            include_once("BSF/Bootstrap/NavigationStyles.Class.php");
            include_once("BSF/Bootstrap/Panel.Class.php");

            //HTML:
            include_once("BSF/HTML/Metatags/Author.Class.php");
            include_once("BSF/HTML/Metatags/Charset.Class.php");            
            include_once("BSF/HTML/Metatags/Description.Class.php");
            include_once("BSF/HTML/Metatags/Keywords.Class.php");            
            include_once("BSF/HTML/Metatags/Robots.Class.php");
            
            include_once("BSF/HTML/HTMLElement.Class.php");            
            include_once("BSF/HTML/Image.Class.php");

            //BSF-Elements:                        
            include_once("BSF/Site.Class.php");
        }
    }
    

?>

