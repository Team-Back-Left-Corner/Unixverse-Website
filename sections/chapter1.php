<?php
	$title = "Chapter 1: File System";
	$path = "../";
	include($path ."assets/inc/header.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/sections.css">
    
    <title>Chapter 1: Filesystem</title>
</head>
<body>
    <div class="container">
        <h1>Chapter 1: Filesystem</h1>
        <section class="basics">
            <h2>Files and system basics</h2>
            <p>In Unix-based systems, a file system is a way of organizing and storing files and directories on a storage device such as a hard drive. 
                The file system provides a hierarchical structure for storing files and directories, and it also manages access to those files and directories.</p>

            <p>These are the basic organization of file systems in Unix-based systems:</p>
            <ul class="command-list">
                <li>The root directory: The root directory is the top-level directory in the file system hierarchy. It is represented by a forward slash (/) and all other directories and files are organized under it. You can think of this as the 'System' folder on Mac or the 'C:/' drive in windows.</li>
                <li>Directories: Directories are used to organize files into a logical structure. They can contain other directories or files. Directories are also referred to as folders in some operating systems.</li>
                <li>files: Files are the basic unit of storage in a file system. They can be of different types, such as text files, image files, audio files, and executable files.</li>
                <li>Mount points: Mount points are used to connect different file systems together. A mount point is a directory that is used to access a file system that is physically stored on a different device. Like the way you may access a flash drive on your computer even though it's not an integral part of the system.</li>
            </ul>
        </section>

        <section class="dir-nav">
            <h2>Directory structure / Navigation</h2>
            <p>These are some basic commands that can be used to manipulate directories and files. After reading about each command, we recommend that you try it for yourself on your local Unix-based machine to get a better understanding of what the command accomplishes.</p>

            <ul class="dir-commands">
                <li><strong>cd:</strong> The cd command is used to change the current directory. For example, "cd Documents" would change the current directory to the "Documents" directory.</li>
                <li><strong>pwd:</strong> The pwd command is used to print the current working directory. For example, "pwd" would display the current directory path on the screen.</li>
                <li><strong>ls:</strong> This command is used to list the files and directories in the current directory. For example, "ls" would display the names of all files and directories in the current directory. 
                    <br>“ls” is one command where a modifier can be a good thing to use. When it comes to ls, often times you may want more than just to see the files in a folder, you may want to see things like permissions and owner, which can be accessed by what Unix calls an “argument”, in the case of “ls” the most commonly flags is “-l” or  'tack-L'  which stands for a “long” directory listing or a listing that includes all this common metadata.</li>
                <li><strong>mkdir:</strong> This command is used to create a new directory. For example, "mkdir Documents" would create a new directory named "Documents" in the current directory, it operates much the same as just making a folder in windows or on MacOS.</li>
                <li><strong>rmdir:</strong> This command is used to remove a directory. For example, "rmdir Documents" would remove the directory named "Documents" from the current directory.
                    <br>Sometimes though, you may want to remove all the files in a whole set of nested directories, when this is necessary the “-R” flag can be used, this flag implies a recursive directory action and will act on all subfolders as well as the one you ran it on.
                    <br>Furthermore, your Unix system may stop you from removing some directories, but if you want to ignore this precaution then the “-f” flag will ignore the prompt and delete without confirmation.</li>
                <li><strong>cp:</strong> This command is used to copy files or directories. For example, "cp file.txt ~/Documents/" would copy the file named "file.txt" to the "~/Documents" directory. Always remember to specify the directory's full path when copying too and from!</li>
                <li><strong>mv:</strong> This command is used to move files or directories. For example, "mv file.txt ~/Documents/" would move the file named "file.txt" to the "~/Documents" directory. Always remember to specify the directory's full path when moving too and from!</li>
                <li><strong>rm:</strong> This command is used to remove files. For example, "rm file.txt" would remove the file named "file.txt" from the current directory. Like rmdir, "-r" and "-f" can also be used here to remove recursively and without confirmation respectively, just be careful, what has been removed cannot be recovered and using the "-f" argument will not ask for confirmation!</li>
            </ul>
        </section>

        <a href="../quizzes/chapter_one_quiz.php" class="button-chap">Chapter Quiz!</a>
        <a href="chapter2.php" class="button-chap">Next Chapter</a>

    </div>
    
</body>
<?php
	include($path ."assets/inc/footer.php");
?>
</html>