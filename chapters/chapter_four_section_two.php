<?php
	// session_name("iste240t54");
	// session_start();
	// include("header.php");
	$path = "../";
	include($path . "assets/inc/header.php");
?>
<h2>Starting up:</h2>
<p>Vim is a powerful text editor that is available on most Unix-based 
systems, including macOS and Linux distributions. To launch Vim, simply 
open a terminal and type "vim" followed by the name of the file you want
to edit. If the file does not exist, Vim will create a new file with that
name.</p>
<h2>Editing Files:</h2>
<p>Once you have opened a file in Vim, you can start editing by moving the
cursor to the location where you want to make changes. Vim has several modes,
including insert mode, which allows you to type new text, and command mode,
which allows you to execute various commands. To enter insert mode, press 
the "i" key. You can then type new text as you would in any other text 
editor. To return to command mode, press the "Esc" key. In command mode, 
you can use various commands to manipulate the text in the file. 
For example, you can move the cursor using the arrow keys or by using the 
"h," "j," "k," and "l" keys. You can also delete text using the "x" key,
copy text using the "y" key, and paste text using the "p" key.</p>
<h2>Searching and replacing:</h2>
<p>Vim also has powerful search and replace capabilities. To search for a 
specific word or phrase, press the "/" key followed by the search term.
Vim will highlight all instances of the term in the file. 
To move to the next instance, press "n." To replace a word or phrase, 
you can use the command ":s/old/new/g". This command will replace all 
instances of "old" with "new" in the file. If you only want to replace the 
first instance of "old" in each line, use the command ":s/old/new/gc".</p>
<h2>Saving and Exiting:</h2>
<p>To save changes and exit Vim, type ":wq" in command mode. This command 
will save the changes to the file and exit Vim. If you do not want to save 
the changes, you can type ":q!" instead. If you have made changes to the 
file but do not have write permission, you can use the command ":wq!" to 
save the changes and exit Vim as the superuser.</p>
<?php include($path . "assets/inc/footer.php");?>
</body>
</html>

	
