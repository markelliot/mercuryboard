MercuryBoard
============

Installation
------------
 1. Upload all files, overwriting any existing files

 2. If your server allows it, CHMOD the following files and directories to 755
    or, if you have problems, 777.

        ./
        ./admincp/
        ./attachments/
        ./avatars/uploaded/
        ./install/index.php
        ./settings.php

 3. Go to the install directory in your browser
 4. Follow the instructions
 5. Delete the install directory

Upgrading
---------
 Upgrading is done in the same way as installing. Make sure you select the
 "upgrade" option. Before upgrading, make a note of your current MercuryBoard
 installation version: you will need it to correctly upgrade.

 You may want to make a note of the values of`$set['db_host']`, `$set['db_name']`,
 `$set['db_pass']`, `$set['db_user']` from your old settings.php. These may be
 required to upgrade. After upgrading, you may need to use some of the board
 maintenance features in the admin control panel.

Requirements
------------
 MercuryBoard works with PHP 4.1.0 or higher. PHP 5 is also supported. MySQL
 3.22 or higher is required. MercuryBoard works on any operating system and
 web server combination.

 If you experience a problem and you meet these requirements, please report it
 as a bug. The latest versions of PHP and MySQL are recommended to keep
 MercuryBoard running its fastest and safest.

License
-------
 This software is released under the GNU General Public License (GPL). For the
 terms of the license, see the file docs/license.txt included in this
 distribution. The license is also available in many languages at
 http://www.gnu.org

How You Can Help
----------------
 If you know PHP and MySQL, and would like to help develop MercuryBoard, then
 feel free to modify the board and contact Jason Warner
 <jason at mercuryboard.com>. If you know a language in addition to English and
 would like to translate, your help is also welcome.

 Feature requests and bug reports are also very important to us. We have
 created forums at our site for this kind of information.

Support
-------
 If you're sure you've read the above information, and it simply will not work,
 visit the MercuryBoard support forums at http://www.mercuryboard.com
