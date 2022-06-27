<?php

/**
 * update file for menu
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id$
 */
function menu_update(&$content, $currentVersion)
{
    $home_directory = PHPWS_Boost::getHomeDir();

    switch ($currentVersion) {
        case version_compare($currentVersion, '2.1.0', '<'):
            $content[] = 'Versions prior to 2.1.0 need updating in phpwebsite.';

        case version_compare($currentVersion, '2.2.0', '<'):
            $content[] = <<<EOF
<pre>2.2.0 changes
-------------------
+ Canopy Version
</pre>
EOF;
        case version_compare($currentVersion, '2.2.1', '<'):
            $content[] = <<<EOF
<pre>2.2.1 changes
-------------------
+ Fixed associated image.
</pre>
EOF;
        case version_compare($currentVersion, '2.2.2', '<'):
            $content[] = <<<EOF
<pre>2.2.2 changes
-------------------
+ Added new classes to sublinks to help with menu styling.
</pre>
EOF;
        case version_compare($currentVersion, '2.2.3', '<'):
            $content[] = <<<EOF
<pre>2.2.3 changes
-------------------
+ Fixed error when all menus removed.
</pre>
EOF;
        case version_compare($currentVersion, '2.2.4', '<'):
            $content[] = <<<EOF
<pre>2.2.4 changes
-------------------
+ Fixed Font Awesome external link icon.
</pre>
EOF;
        case version_compare($currentVersion, '2.2.5', '<'):
            $content[] = <<<EOF
<pre>2.2.5 changes
-------------------
+ Updates Site Map page.
</pre>
EOF;
    }
    return true;
}
