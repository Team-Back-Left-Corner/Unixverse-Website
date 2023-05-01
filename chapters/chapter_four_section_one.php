<?php
	// session_name("iste240t54");
	// session_start();
	// include("header.php");
	$path = "../";
	include($path . "assets/inc/header.php");
?>
<h2>Starting up:</h2>
<p>Nano is a lightweight and user-friendly command-line text editor that is 
commonly pre-installed on most Linux distributions and macOS systems. 
To verify whether Nano is installed on your machine, you can run the 
command "nano --version." If it is not installed, you can install it using 
the appropriate package manager for your distribution.
</p>
<h2>Editing Files:</h2>
<p>To open a file for editing with Nano, simply type "nano" followed by the 
file name or path. You can use various keyboard shortcuts to navigate and 
edit the file, such as the arrow keys to move the cursor, and the Ctrl key 
in combination with other keys to perform various editing functions. For 
example, you can use Ctrl+K to cut a line, Ctrl+U to paste a line, and 
Ctrl+O to save the changes made to the file.
</p>
<h2>Searching and replacing:</h2>
<p>You can search for a specific word or phrase within a file by pressing 
Ctrl+W and entering the search term. To find the next occurrence of the 
term, press Ctrl+W again. To replace a word or phrase, press Ctrl+\ and 
enter the search term followed by the replacement text. You can then choose 
to replace one occurrence at a time or all occurrences at once.
</p>
<h2>Saving and Exiting:</h2>
<p>To save the changes made to a file, press Ctrl+O. If you wish to save 
the file with a different name, press Ctrl+O followed by the new file name. 
To exit Nano without saving changes, press Ctrl+X. If you have made changes 
and want to save them before exiting, press Ctrl+O followed by Ctrl+X. 
Nano will prompt you to confirm the action before closing the file.
</p>
<?php include($path . "assets/inc/footer.php");?>
</body>
</html>