<?php

    /**
     * Browser
     * @author Ahmed Zamouche (medzam [at] gmail [dot] com)
     * @link http://www.zammed.co.cc
     * @since 27/August/2008
     * @version 1
     * @TODO See help
     */
    session_start();

    class fileBrowser {

        public $hostname;
        public $home_path;
        public $htdoc_path;
        public $Errors_reporting = true; // default set to true to report Errors.
        public $container; // has a meaning if you want more that one browser in a single page.
        private $forceStay = false; //will force the browser to stay within $home path.
        private $error = true;
        private $error_msg = "";
        private $action;
        private $ajax = 0;
        private $path;
        private $step; // variable used for History browsing.
        private $toolBarItem = array();
        private $dlist;
        //var $file_cmd = '';
        var $file_cmd = '/usr/bin/file';
        var $file_options = array('b' => null, 'i' => null, 'p' => null, 'z' => null);

        /**
         * @author Keyvan Minoukadeh <keyvan@k1m.com>
         * MIME Types
         * Initially we start with the more popular ones.
         *  ["txt"]  => "text/plain",
         *  ["gif"]  => "image/gif",
         *  ["jpg"]  => "image/jpeg",
         *  ["html"] => "text/html",
         *  ["htm"]  => "text/html"
         * @var array
         * @access private
         */
        var $mime_types = array(
            'txt' => 'text/plain',
            'gif' => 'image/gif',
            'jpg' => 'image/jpeg',
            'html' => 'text/html',
            'htm' => 'text/html');

        /**
         *
         * Constructor Function
         *
         * @param string $htdoc
         * @param string $home
         * @param string $page
         * @param boolean $fs
         * @param string $ctnr
         * @param string $lang
         * @return null
         */
        function __construct($htdoc, $home, $page, $fs, $ctnr, $lang) {
            $this->container = $ctnr;
            if (isset($_GET['container'])) {
                if ($_GET['container'] != $this->container) {
                    return;
                }
            }
            $this->page = $page;
            $this->hostname = $htdoc;
            $this->home_path = $home;
            $this->hostname = $_SERVER['SERVER_NAME'];
            $this->forceStay = $fs;
            include_once("Languages/$lang.php"); //Include Language pack
            if (isset($_GET['action'])) {
                $this->action = $_GET['action'];
            }
            else {
                $this->action = "browse";
            }

            if (isset($_GET['ajax'])) {
                $this->ajax = $_GET['ajax'];
            }
            else {
                $this->ajax = 0;
            }

            if (isset($_GET['path'])) {
                $this->path = $_GET['path'];
            }
            else {
                $this->path = $this->home_path;
            }

            if ($this->forceStay) {
                $pos = stripos(realpath($this->path), $this->home_path);
                if (($pos === FALSE) || $pos != 0) {
                    $this->errors_report(PERMISSION_DENIED.realpath($this->path), "001");
                    $this->path = $this->home_path;
                    $this->action = "browse"; // to prevent any action from being taken.
                }
            }

            if (isset($_GET['step'])) {
                $this->step = $_GET['step'];
            }
            else {
                $this->step = 0;
            }

            switch ($this->action) {
                case "browse":
                    $this->saveHistory();
                    $this->initialize();
                    break;
                case "history":
                    $this->getHistory();
                    $this->initialize();
                    break;
                case "rename":
                    $this->frename($_GET['newname'], $_GET['oldname']);
                    $this->initialize();
                    break;
                case "fchmod":
                    $this->fchmod($this->path."/".$_GET['filename'], $_GET['mod']);
                    $this->initialize();
                    break;
                case "newFile":
                    $this->newfile();
                    $this->initialize();
                    break;
                case "newFolder":
                    $this->newfolder();
                    $this->initialize();
                    break;
                case "delete":
                    $i = 0;
                    while (isset($_GET['fileToDelete_'.$i])) {
                        $this->recursive_remove_directory($this->path."/".$_GET['fileToDelete_'.$i]);
                        $i++;
                    }
                    $this->initialize();
                    break;
                case "copy":
                    unset($_SESSION['copy'.$this->container]);
                    unset($_SESSION['cut'.$this->container]);
                    unset($_SESSION['clipboard'.$this->container]);
                    $i = 0;
                    while (isset($_GET['fileToCopy_'.$i])) {
                        $_SESSION['copy'.$this->container][$i] = $this->path."/".$_GET['fileToCopy_'.$i];
                        $_SESSION['clipboard'.$this->container].="Copy:".$_SESSION['copy'.$this->container][$i]."\n";
                        $i++;
                    }
                    $this->initialize();
                    break;
                case "cut":
                    unset($_SESSION['copy'.$this->container]);
                    unset($_SESSION['cut'.$this->container]);
                    unset($_SESSION['clipboard'.$this->container]);
                    $i = 0;
                    while (isset($_GET['fileToCut_'.$i])) {
                        $_SESSION['cut'.$this->container][$i] = $this->path."/".$_GET['fileToCut_'.$i];
                        $_SESSION['clipboard'.$this->container].="Cut:".$_SESSION['cut'.$this->container][$i]."\n";
                        $i++;
                    }
                    $this->initialize();
                    break;
                case "paste":
                    $i = 0;
                    if (isset($_SESSION['copy'.$this->container])) {
                        while (isset($_SESSION['copy'.$this->container][$i])) {
                            $this->error = @copy($_SESSION['copy'.$this->container][$i], $this->path."/".basename($_SESSION['copy'.$this->container][$i]));

                            if ($this->error === false) {
                                $this->errors_report(FILES_FOLDERS_PASTE_FAILED.$_SESSION['copy'.$this->container][$i], "017");
                            }
                            $i++;
                        }
                    }
                    elseif (isset($_SESSION['cut'.$this->container])) {
                        while (isset($_SESSION['cut'.$this->container][$i])) {
                            $this->error = @rename($_SESSION['cut'.$this->container][$i], $this->path."/".basename($_SESSION['cut'.$this->container][$i]));
                            if ($this->error === false) {
                                $this->errors_report(FILES_FOLDERS_PASTE_FAILED.$_SESSION['cut'.$this->container][$i], "018");
                            }
                            $i++;
                        }
                    }
                    else {

                    }
                    unset($_SESSION['copy'.$this->container]);
                    unset($_SESSION['cut'.$this->container]);
                    unset($_SESSION['clipboard'.$this->container]);
                    $this->initialize();
                    break;
                case 'newSymLink';
                    $i = 0;
                    while (isset($_GET['Targetfile_'.$i])) {
                        $this->error = @symlink($this->path."/".$_GET['Targetfile_'.$i], $this->path."/link_to_".$_GET['Targetfile_'.$i]);
                        if ($this->error === false) {
                            $this->errors_report(FAILED_TO_CREATE_SYMBOLIC_LINK.$_GET['Targetfile_'.$i], "019");
                        }
                        $i++;
                    }

                    $this->initialize();
                    break;
            }
        }

        /**
         *
         * Function to convert from Byte to 'B', 'Kb', 'MB', 'GB', 'TB', 'PB'
         *
         * @author (olafurw [at] gmail [dot] com)
         * @link http://www.php.net/manual/en/function.filesize.php
         * @changes  I made an if test  to avoid  division by zero Error;
         * @access private
         * @param int $byte
         * @return string or 0
         */
        private function byteConvert($bytes) {
            $s = array('B', 'Kb', 'MB', 'GB', 'TB', 'PB');
            $e = floor(log($bytes) / log(1024));
            if (pow(1024, floor($e)) != 0) {// Changes I made  to avoid Error division by zero;
                return sprintf('%.2f '.$s[$e], ($bytes / pow(1024, floor($e))));
            }
            else {
                return 0;
            }
        }

        /**
         *
         * Function to display full permissions
         *
         * @author ?????
         * @link http://www.php.net/manual/en/function.fileperms.php
         * @access private
         * @param int $perms
         * @return string
         */
        private function Displayfullpermissions($perms) {

            if (($perms & 0xC000) == 0xC000) {
                // Socket
                $info = 's';
            }
            elseif (($perms & 0xA000) == 0xA000) {
                // Symbolic Link
                $info = 'l';
            }
            elseif (($perms & 0x8000) == 0x8000) {
                // Regular
                $info = '-';
            }
            elseif (($perms & 0x6000) == 0x6000) {
                // Block special
                $info = 'b';
            }
            elseif (($perms & 0x4000) == 0x4000) {
                // Directory
                $info = 'd';
            }
            elseif (($perms & 0x2000) == 0x2000) {
                // Character special
                $info = 'c';
            }
            elseif (($perms & 0x1000) == 0x1000) {
                // FIFO pipe
                $info = 'p';
            }
            else {
                // Unknown
                $info = 'u';
            }

            // Owner
            $info .= (($perms & 0x0100) ? 'r' : '-');
            $info .= (($perms & 0x0080) ? 'w' : '-');
            $info .= (($perms & 0x0040) ?
                            (($perms & 0x0800) ? 's' : 'x' ) :
                            (($perms & 0x0800) ? 'S' : '-'));

            // Group
            $info .= (($perms & 0x0020) ? 'r' : '-');
            $info .= (($perms & 0x0010) ? 'w' : '-');
            $info .= (($perms & 0x0008) ?
                            (($perms & 0x0400) ? 's' : 'x' ) :
                            (($perms & 0x0400) ? 'S' : '-'));

            // World
            $info .= (($perms & 0x0004) ? 'r' : '-');
            $info .= (($perms & 0x0002) ? 'w' : '-');
            $info .= (($perms & 0x0001) ?
                            (($perms & 0x0200) ? 't' : 'x' ) :
                            (($perms & 0x0200) ? 'T' : '-'));

            return $info;
        }

        /**
         *
         * Function to dispaly owner
         *
         * @access private
         * @param int $fname
         * @return string
         */
        private function DispalyOwner($fname) {
            $ownerid = @fileowner($fname);
            if ($ownerid === false) {
                $this->errors_report(FAILED_TO_GET_OWNER.$fname, "002");
            }
            $userinfo = posix_getpwuid($groupid);
            return $userinfo['name'];
        }

        /**
         *
         * Function to dispaly group
         *
         * @access private
         * @param int $fname
         * @return string
         */
        private function DispalyGroup($fname) {
            $groupid = @filegroup($fname);
            if ($groupid === false) {
                $this->errors_report(FAILED_TO_GET_GROUP.$fname, "003");
            }
            $groupinfo = posix_getgrgid($groupid);
            return $groupinfo['name'];
        }

        /**
         *
         * Function return the history path
         *
         * @access private
         * @return null
         */
        private function getHistory() {

            $_SESSION['position_'.$this->container] = $_SESSION['position_'.$this->container] + $this->step;
            $this->path = $_SESSION['history_'.$this->container][$_SESSION['position_'.$this->container]];
        }

        /**
         *
         * Function to save path in history
         *
         * @access private
         * @return null
         */
        private function saveHistory() {
            if (isset($_SESSION['history_'.$this->container])) {
                $_SESSION['position_'.$this->container]++;
                $_SESSION['history_'.$this->container][$_SESSION['position_'.$this->container]] = $this->path;
                $arr = $_SESSION['history_'.$this->container];
                for ($i = $_SESSION['position_'.$this->container] + 1; $i < count($arr); $i++) {
                    unset($arr[$i]);
                }
                $_SESSION['history_'.$this->container] = array_values($arr);
            }
            else {
                $_SESSION['position_'.$this->container] = 0;
                $_SESSION['history_'.$this->container][$_SESSION['position_'.$this->container]] = $this->path;
            }
        }

        /**
         *
         * Function to  rename a file
         *
         * @access private
         * @param string $newname
         * @param string $oldname
         * @return null
         */
        private function frename($newname, $oldname) {
            if (file_exists($this->path."/".$newname) && (filetype($this->path."/".$newname) == filetype($this->path."/".$oldname))) {
                $this->errors_report(RENAME_FAILED_F_EXISTS.$newname, "004");
            }
            else {
                $r = @rename($this->path."/".$oldname, $this->path."/".$newname);
                if ($r === false) {
                    $this->errors_report(RENAME_FAILED.$oldname, "005");
                }
            }

            /**
             *
             * Function to  change the permisions of file
             *
             * @access private
             * @param string $filename
             * @param int $mode
             * @return null
             */
        }

        private function fchmod($filename, $mode) {
            if (isset($mode)) {
                switch ($mode) {
                    case '0444':
                        $this->error = @chmod($filename, 0444);
                        break;
                    case '0600':
                        $this->error = @chmod($filename, 0600);
                        break;
                    case '0644':
                        $this->error = @chmod($filename, 0644);
                        break;
                    case '0666':
                        $this->error = @chmod($filename, 0666);
                        break;
                    case '0700':
                        $this->error = @chmod($filename, 0700);
                        break;
                    case '0744':
                        $this->error = @chmod($filename, 0744);
                        break;
                    case '0755':
                        $this->error = @chmod($filename, 0755);
                        break;
                    case '0777':
                        $this->error = @chmod($filename, 0777);
                        break;
                }

                if ($this->error === false) {
                    $this->errors_report(FAILED_TO_CHANGE_PERMISSIONS.$filename, "019");
                }
            }
            else {
                $this->errors_report(FAILED_TO_CHANGE_PERMISSIONS.$filename, "020");
            }
        }

        /**
         *
         * Function to  delete  a file
         *
         * @access private
         * @param string $file
         * @return null
         */
        public function fdelete($file) {
            if (file_exists($file)) {
                $this->error = @unlink($file);
                if ($this->error === false) {
                    $this->errors_report(FILE_DELETION_FAILED.$file, "015");
                }
            }
            else {
                $this->errors_report(FILE_DELETION_FAILED.$file, "016");
            }
        }

        /**
         * recursive_remove_directory( directory to delete, empty )
         * ------------ lixlpixel recursive PHP functions -------------
         * recursive_remove_directory( directory to delete, empty )
         * expects path to directory and optional TRUE / FALSE to empty
         * of course PHP has to have the rights to delete the directory
         * you specify and all files and folders inside the directory
         * ------------------------------------------------------------
         * to use this function to totally remove a directory, write:
         * recursive_remove_directory('path/to/directory/to/delete');
         * to use this function to empty a directory, write:
         * recursive_remove_directory('path/to/full_directory',TRUE);
         *
         * @copyright this function originally come from lixlpixel
         *
         * @changes remov empty feature and add some errors reports call and call to file delete function.
         *
         * @author      lixlpixel
         * @param       string directory
         * @return boolean
         */
        function recursive_remove_directory($directory) {
            // if the path has a slash at the end we remove it here
            if (substr($directory, -1) == '/') {
                $directory = substr($directory, 0, -1);
            }

            // if the path is not valid or is not a directory ...
            if (!file_exists($directory) || !is_dir($directory) || is_link($directory)) {
                // ... we return false and exit the function
                //$this->errors_report($php_errormsg,"012");
                $this->fdelete($directory);

                // ... if the path is not readable
            }
            elseif (!is_readable($directory)) {
                $this->errors_report(CAN_NOT_READ_THE_PATH.$directory, "013");
                // ... we return false and exit the function
                return FALSE;

                // ... else if the path is readable
            }
            else {

                // we open the directory
                $handle = opendir($directory);

                // and scan through the items inside
                while (FALSE !== ($item = readdir($handle))) {
                    // if the filepointer is not the current directory
                    // or the parent directory
                    if ($item != '.' && $item != '..') {
                        // we build the new path to delete
                        $path = $directory.'/'.$item;

                        // if the new path is a directory
                        if (is_dir($path)) {
                            // we call this function with the new path
                            $this->recursive_remove_directory($path);

                            // if the new path is a file
                        }
                        else {
                            // we remove the file
                            $this->error = @unlink($path);
                            if ($this->error === false) {
                                $this->errors_report(FOLDER_DELETION_FAILED.$path, "014");
                            }
                        }
                    }
                }
                // close the directory
                closedir($handle);

                // try to delete the now empty directory
                $this->error = @rmdir($directory);
                if (!$this->error) {
                    // return false if not possible
                    return FALSE;
                }

                // return success
                return TRUE;
            }
        }

        /**
         *
         * Function to  create  a new file
         *
         * @access private
         * @return null
         */
        private function newfile() {
            $i = 1;
            do {
                $newfileName = $this->path."/".NEW_FILE." ".$i;
                $i++;
            }
            while (file_exists($newfileName));
            $handle = @fopen($newfileName, "x");
            if ($handle === false) {
                $this->errors_report(FAILED_TO_CREATE_NEW_FILE, "006");
            }
        }

        /**
         *
         * Function to  creat  a new folder
         *
         * @access private
         * @return null
         */
        private function newFolder() {
            $i = 1;
            do {
                $newfolderName = $this->path."/".NEW_FOLDER." ".$i;
                $i++;
            }
            while (file_exists($newfolderName));
            $this->error = @mkdir($newfolderName, 0755);
            if ($this->error === false) {
                $this->errors_report(FAILED_TO_CREATE_NEW_FOLDER, "007");
            }
        }

        /**
         *
         * Function to  initialise teh browser toolbar  links and files to browse
         *
         * @access private
         * @return null
         */
        public function initialize() {

            $dir = $this->path;
            $this->error = @chdir($dir);
            if ($this->error === false) {
                $this->errors_report(FAILED_TO_CHANGE_DIRECTORY.$dir, "008");
            }
            if (!$this->error) {
                $dir = $this->home_path;
                $this->error = @chdir($dir);
                if ($this->error === false) {
                    $this->errors_report(FAILED_TO_CHANGE_DIRECTORY.$dir, "009");
                }
            }
            $dir = getcwd();
            $this->path = $dir;
            $files = @scandir($dir);
            if ($files === false) {
                $this->errors_report(FAILED_TO_POPULATE_DIRECTORY_CONTENTS.$dir, "010");
            }

            $this->toolBarAdd("page_add.png", NEW_EMPTY_FILE, "newFile", $dir);
            $this->toolBarAdd("folder_add.png", NEW_FOLDER, "newFolder", $dir);
            $this->toolBarAdd("link_add.png", NEW_SYMBOLIC_LINK, "newSymLink", $dir, false, "", "false", NEW_SYMBOLIC_LINK);
            $this->toolBarAddS();
            if (!$_SESSION['position_'.$this->container] == 0) {
                $this->toolBarAdd("arrow_left.png", HISTORY_BACK, "history", $dir, false, "&step=-1");
            }
            else {
                $this->toolBarAdd("arrow_left.png", HISTORY_BACK, "history", $dir, true, "&step=-1");
            }
            $arr = $_SESSION['history_'.$this->container];
            if (!($_SESSION['position_'.$this->container] == (count($arr) - 1))) {
                $this->toolBarAdd("arrow_right.png", HISTORY_FORWARD, "history", $dir, false, "&step=1");
            }
            else {
                $this->toolBarAdd("arrow_right.png", HISTORY_FORWARD, "history", $dir, true, "&step=1");
            }

            $this->toolBarAdd("arrow_up.png", DIRECTORY_UP_ONE_LEVEL, "browse", $dir."/..");
            $this->toolBarAdd("house.png", HOME_DIRECTORY, "browse", $this->home_path);
            $this->toolBarAddS();
            $this->toolBarAdd("arrow_refresh.png", RELOAD_CURRENT_DIRECTORY, "browse", $dir);
            $this->toolBarAddS();
            $this->toolBarAdd("delete.png", DELETE_FILES_FOLDERS, "delete", $dir, false, "", "true", DELETE_);
            $this->toolBarAddS();

            $this->toolBarAdd("copy.png", COPY_FILES_FOLDERS_TO_CLIPBOARD, "copy", $dir, false, "", "false", COPY);
            $this->toolBarAdd("cut.png", CUT_FILES_FOLDERS, "cut", $dir, false, "", "false", CUT);

            if (isset($_SESSION['copy'.$this->container]) || isset($_SESSION['cut'.$this->container])) {
                $this->toolBarAdd("paste.png", PASTE_FILES_FOLDERS_FROM_CLIPBOARD, "paste", $dir);
            }
            else {
                $this->toolBarAdd("paste.png", PASTE_FILES_FOLDERS_FROM_CLIPBOARD, "paste", $dir, true);
            }
            $this->toolBarAddS();

            $this->toolBarAdd("error.png", SHOW_HIDE_ERRORS, "", "", false, "", "", "", "onclick =\"document.getElementById('errors_".$this->container."').style.visibility=(document.getElementById('errors_".$this->container."').style.visibility=='hidden')?'visible':'hidden';\"");
            $this->toolBarAdd("clipboard.png", SHOW_HIDE_CLIPBOARD, "", $dir, false, "", "", "", "onclick =\"document.getElementById('clipboard_".$this->container."').style.visibility=(document.getElementById('clipboard_".$this->container."').style.visibility=='hidden')?'visible':'hidden';\"");

            $this->toolBarAddS();
            for ($i = 0; $i < count($files); $i++) {
                $filesArr["name"][$i] = $files[$i];
                $filesArr["link"][$i] = $this->filelink($files[$i], $this->page."?ajax=1&container=".$this->container."&action=browse&path=", $dir);
                $filesArr["size"][$i] = $this->byteConvert(@filesize($files[$i]));
                $filesArr["date"][$i] = date("Y-m-d H:i", @filectime($files[$i]));
                $filesArr["permissions"][$i] = $this->Displayfullpermissions(@fileperms($files[$i]));
                $filesArr["owner"][$i] = $this->DispalyOwner($files[$i]);
                $filesArr["group"][$i] = $this->DispalyGroup($files[$i]);
                $filesArr["type"][$i] = filetype($files[$i]);
            }
            $this->dlist = $filesArr;
        }

        /**
         *
         * Function to  return the target of a link
         *
         * @access private
         * @param string $filename
         * @param string $url
         * @param string $dir
         * @return string
         */
        private function filelink($filename, $url, $dir) {
            $filetype = filetype($filename);
            if ($filetype == "file") {
                return "";
            }
            elseif ($filetype == "dir") {
                return $url.$dir."/".$filename;
            }
            elseif ($filetype == "link") {
                $link_targer = readlink($filename);
                $link_targettype = @filetype($link_targer);
                if ($link_targettype === false) {
                    $this->errors_report(FAILED_TO_GET_FILE_TYPE.$link_targer, "011");
                }

                if ($link_targettype == "dir") {
                    return $url."/".$link_targer;
                }
                else {
                    if (dirname($link_targer) != ".") {
                        return $url.dirname($link_targer);
                    }
                    else {
                        return "";
                    }
                }
            }
            elseif ($filetype == "char") {
                return "";
            }
            elseif ($filetype == "block") {
                return "";
            }
            elseif ($filetype == "fifo") {
                return "";
            }
            elseif ($filetype == "socket") {
                return "";
            }
            else {
                return "";
            }
        }

        /**
         *
         * Function that format the url link parametre
         *
         * @access private
         * @param string $toHtml
         * @return string
         */
        private function toHtml($toHtml, $singleQ = false, $backslash = false) {
            $toHtml = str_replace('"', '&quot;', $toHtml);

            if ($singleQ) {
                $toHtml = str_replace("'", '\&#039;', $toHtml);
            }
            else {
                $toHtml = str_replace("'", '&#039;', $toHtml);
            }
            if ($backslash) {
                $toHtml = str_replace("\\", '\\\\', $toHtml);
            }
            else {
                $toHtml = str_replace("\\", '\\', $toHtml);
            }


            return $toHtml;
        }

        /**
         *
         * Function for reporting Errors
         *
         * @access private
         * @param string $strError
         * @param string $ErrorNumber
         * @return null
         */
        private function errors_report($strError, $ErrorNumber) {
            if (!$this->Errors_reporting) {
                return;
            }
            if (!isset($strError)) {
                return;
            }
            $this->error_msg.="# $ErrorNumber : $strError\n";
        }

        /**
         *
         * Function that draw the toolBar
         *
         * @access public
         * @return string
         */
        public function toolBarDraw() {
            $toolbar = "<div id=\"toolbar_".$this->container."\">";
            foreach ($this->toolBarItem as $key => $value) {
                $toolbar.=$value;
            }


            $toolbar.=" </div>";
            return $toolbar;
        }

        /**
         *
         * Function to add  a toolBarItem
         *
         * @access public
         * @param String $icon name of the icon file (16x16 png placed in rhe icons directory)
         * @param String $title  that will appear one mouse over
         * @param String $ction the action taken once the the tool is clicked
         * @param String $dir the directory listed
         * @param Boolean $$disbale if set to true the tool will be disabled
         * @param String $ExtraUrlPara Extra  url paramater can be added here
         * @param String $conf if set to "true" the ajaxloader javascript function wil ask  for confirmation to execute the actions, Example delete.
         * @param String $conMsg the confirmation message to be displayed if $conf="true"
         * @UDA stands for user defined action, if is set you can enter your own para for <a> tag ex:UDA="href=\"www.google.com\"";
         * @return null
         */
        public function toolBarAdd($icon, $title, $action, $dir, $disabled = false, $ExtraUrlPara = "", $conf = "false", $conMsg = "", $UDA = null) {
            if (isset($UDA)) {
                $this->toolBarItem[] = "<a $UDA><img src=\"icons/$icon\" title=\"$title\"></a>";
                return;
            }
            if ($disabled) {
                $this->toolBarItem[] = "<a href=\"#\"><img src=\"icons/$icon\" title=\"$title\"></a>";
            }
            else {
                $this->toolBarItem[] = "<a href=\"javascript:ajaxloader('".$this->page."?ajax=1&container=".$this->container."&action=$action&path=".$dir."$ExtraUrlPara', '".$this->container."',$conf,'$conMsg');\"><img src=\"icons/$icon\" title=\"$title\"></a>";
            }
        }

        /**
         *
         * Function to add  a toolBarSeparator
         *
         * @access public
         * @return null
         */
        public function toolBarAddS() {
            $this->toolBarItem[] = "|";
        }

        /*         * ----------------------------------------------------------------------------------------------------------------------- */
        /*         * ----------------------------------------------------------------------------------------------------------------------- */
        /*         * ----------------------------------------------------------------------------------------------------------------------- */

        /**
         *
         * Function that Draw() the browser
         *
         * @access public
         * @return null
         */
        public function draw() {

            if (isset($_GET['container'])) {
                if ($_GET['container'] != $this->container) {
                    return;
                }
            }
            $url['addressbar'] = $this->page."?ajax=1&container=".$this->container."&action=browse&path=";
            $url['permissions'] = $this->page."?ajax=1&container=".$this->container."&action=fchmod&path=".$this->path."&filename=";
            $url['rename'] = $this->page."?ajax=1&container=".$this->container."&action=rename&path=".$this->path."&oldname=";
            include_once('js/ajaxloader.js.php');
            if ($this->ajax == 0) {
                $html = "<div id=\"".$this->container."\">";
            }

            $html.="<html style=\"direction: ".LANGUAGE_DIRECTION.";\" lang=\"".LANG."\">
		  <meta content=\"text/html; charset=".CHARSET."\"http-equiv=\"content-type\">
		  <title>".PAGE_TITLE."</title>
		  <link rel=\"stylesheet\" type=\"text/css\" href=\"styles/style.css\">
		  <script type=\"text/javascript\">".$ajaxloader."</script>
		  <script type=\"text/javascript\" src=\"js/common.js\"></script>";
            $html.=$this->toolBarDraw();

            $html.="<table>
		  <thead>
			<tr id=\"firstrow\">
			  <td class=\"select\">".SELECT."<a href=\"#\" onclick=\"selectAll('".$this->container."')\">".ALL."</a>/<a href=\"#\" onclick=\"selectNone('".$this->container."')\">".NONE."</a></th>
			  <th>".NAME."</th>
			  <th>".SIZE."</th>
			  <th>".DATE_."</th>
			  <th>".PERMISSIONS."</th>
			  <th>".OWNER."</th>
			  <th>".GROUP."</th>
			  <th>".TYPE."</th>
			</tr>
			</thead>
		  <tbody>
			<tr>
			  <td colspan=\"8\">
				  <input id=\"adressbar\" value=\"".$this->path."\" style=\"width: 100%;\" onchange=\"ajaxloader('".$url['addressbar']."'+document.getElementById('adressbar').value, '".$this->container."',false,'');\">
			  </td>
			</tr>";


            for ($i = 0; $i < count($this->dlist["name"]); $i++) {
                if ($this->dlist["name"][$i] !== "." && $this->dlist["name"][$i] !== "..") {

                    $html.="<tr class=\"tablerow\" id=\"row_".$this->container."_$i\" onmouseover=\"mouseOver('".$this->container."_$i')\" onmouseout=\"mouseOut('".$this->container."_$i')\">";
                    //<---------------------------select----------------------------->
                    $html.="<td><input id=\"select_".$this->container."_$i\" name=\"select_".$this->container."\" type=\"checkbox\"></td>";
                    //<---------------------------icon link----------------------------->

                    $html.="<td>";
                    $html.="<a href=\"javascript:ajaxloader('".$this->dlist["link"][$i]."', '".$this->container."',false,'');\">";
                    $html.="<img src=\"icons/".$this->dlist["type"][$i].".png\" title=\"".$this->get_file_type($this->dlist["name"][$i])."\">";
                    $html.="</a>";
                    //<---------------------------name----------------------------->
                    $html.="<input id=\"name_".$this->container."_$i\" title=\"".RENAME_."\" class=\"name_row\" value=\"".$this->dlist["name"][$i]."\"  onmouseover=\"mouseOver('".$this->container."_$i')\" onmouseout=\"mouseOut('".$this->container."_$i')\" onchange=\"ajaxloader('".$url['rename'].$this->dlist["name"][$i]."&newname='+document.getElementById('name_".$this->container."_$i').value, '".$this->container."',true,'".RENAME_."');\">
				  </td>";
                    //<---------------------------size----------------------------->
                    $html.="<td>".$this->dlist["size"][$i]."</td>";
                    //<---------------------------date----------------------------->
                    $html.="<td>".$this->dlist["date"][$i]."</td>";
                    //<---------------------------permissions----------------------------->
                    $html.="<td><input id=\"perms_".$this->container."_$i\"  title=\"".CHANGE_PERMISSIONS."\n".PERMISSIONS_POSSIBLE_VALUES."\" class=\"perms_row\" value=\"".$this->dlist["permissions"][$i]."\" onchange=\"ajaxloader('".$url['permissions'].$this->dlist["name"][$i]."&mod='+document.getElementById('perms_".$this->container."_$i').value, '".$this->container."',true,'".CHANGE_PERMISSIONS."');\"></td>";
                    //<---------------------------owner----------------------------->
                    $html.="<td>".$this->dlist["owner"][$i]."</td>";
                    //<---------------------------group----------------------------->
                    $html.="<td>".$this->dlist["group"][$i]."</td>";
                    //<---------------------------type----------------------------->
                    $html.="<td>".$this->dlist["type"][$i]."</td>";

                    $html.="</tr>
			  </tbody>";
                }
            }
            $html.="<tfoot>
				<tr id=\"statusrow\">
				  <td colspan=\"8\">(".(count($this->dlist["name"]) - 2).") ".TOTAL_FILES_FOLDERS." | ".STATUS.":<span id=\"status_".$this->container."\" style=\"color: green ;\"></span></td>
				</tr>
				</tfoot>

		</table>";
            //
            $html.="<div id=\"errors_".$this->container."\" style =\"visibility:".$_GET['EV']."\" >".ERRORS.":<br><textarea  readonly=\"readonly\" cols=\"70\" rows=\"2\" name=\"Errors_log\" id=\"Errors_Log\">".$this->error_msg."</textarea></div>";
            $html.="<div id=\"clipboard_".$this->container."\" style =\"visibility:".$_GET['CV']."\" >".CLIPBOARD.":<br><textarea  readonly=\"readonly\" cols=\"70\" rows=\"2\" name=\"ClipBoard\" id=\"ClipBoard\">".$_SESSION['clipboard'.$this->container]."</textarea></div>";
            //
            if ($this->ajax == 0) {
                $html.="</div>";
            }
            return $html;
        }

        /*         * ----------------------------------------------------------------------------------------------------------------------- */
        /*         * ----------------------------------------------------------------------------------------------------------------------- */
        /*         * ----------------------------------------------------------------------------------------------------------------------- */

        /**
         * Get file type - returns MIME type by trying to guess it using the file command.
         * Optional second parameter should be a boolean.  If true (default), get_file_type() will
         * try to guess the MIME type based on the file extension if the file command fails to find
         * a match.
         * Example:
         *   echo $this->get_file_type('/path/to/my_file', false);
         *  or
         *   echo $this->get_file_type('/path/to/my_file.gif');
         * @param string $file
         * @param bool $use_ext default: true
         * @return string false if unable to find suitable match
         * @author Keyvan Minoukadeh <keyvan@k1m.com>
         */
        private function get_file_type($file, $use_ext = true) {
            $file = trim($file);
            if ($file == '')
                return false;
            $type = false;
            $result = false;
            if ($this->file_cmd && is_readable($file) && is_executable($this->file_cmd)) {
                $cmd = $this->file_cmd;
                foreach ($this->file_options as $option_key => $option_val) {
                    $cmd .= ' -'.$option_key;
                    if (isset($option_val))
                        $cmd .= ' '.escapeshellarg($option_val);
                }
                $cmd .= ' '.escapeshellarg($file);
                $result = @exec($cmd);
                if ($result) {
                    $result = strtolower($result);
                    $pattern = '[a-z0-9.+_-]';
                    if (preg_match('!(('.$pattern.'+)/'.$pattern.'+)!', $result, $match)) {
                        if (in_array($match[2], array('application', 'audio', 'image', 'message',
                                    'multipart', 'text', 'video', 'chemical', 'model')) ||
                                (substr($match[2], 0, 2) == 'x-')) {
                            $type = $match[1];
                        }
                    }
                }
            }
            // try and get type from extension
            if (!$type && $use_ext && strpos($file, '.'))
                $type = $this->get_type($file);
            // this should be some sort of attempt to match keywords in the file command output
            // to a MIME type, I'm not actually sure if this is a good idea, but for now, it tries
            // to find an 'ascii' string.
            if (!$type && $result && preg_match('/\bascii\b/', $result))
                $type = 'text/plain';
            return $type;
        }

        /**
         * Get type - returns MIME type based on the file extension.
         * Example:
         *   echo $this->get_type('txt');
         *  or
         *   echo $this->get_type('test_file.txt');
         * both examples above will return the same result.
         * @param string $ext
         * @return string false if extension not found
         * @author Keyvan Minoukadeh <keyvan@k1m.com>
         */
        private function get_type($ext) {
            $ext = strtolower($ext);
            // get position of last dot
            $dot_pos = strrpos($ext, '.');
            if ($dot_pos !== false)
                $ext = substr($ext, $dot_pos + 1);
            if (($ext != '') && isset($this->mime_types[$ext]))
                return $this->mime_types[$ext];
            return false;
        }

    }
?>