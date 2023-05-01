<?php
	$title = "Chapter 2: Tools";
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
    
    <title>Chapter 2: Tools</title>
</head>
<body>
    <div class="container">
        <h1>Chapter 2: Tools</h1>
        <section class="access">
            <h2>Access modes</h2>
            <p>Access modes are used to refer to permissions of specific files and directories in Unix. There are three basic types of access modes:</p>
            <ul>
                <li>Read “R”</li>
                <li>Write “W”</li>
                <li>Execute “X”</li>
            </ul>
            <p>Each mode can be set separately for the owner of the file or directory, members of the owners group, and all other users. Read mode allows a user to view the contents of the file or directory, write mode allows a user to modify the contents of a file or directory, and execute mode allows a user to run executable files or enter a directory. 
                Access modes are typically represented by a three digit number with the first digit representing the owner's access, the second digit representing the group's access, and the third digit representing all other users' access.</p>
        </section>

        <section class="linux-file">
            <h2>Linux file ownership</h2>
            <p>In Unix based systems, each file and directory is associated with an owner and a group. The owner is the user who created the file or directory, and the group is the collection of users who share the same permissions for that same file or directory. 
                File ownership is an important thing to understand as it acts as the mediator between an unauthorized user and the owner of a file, on the web, this could be the difference between a client being able to see your site, and being able to change your site without your permission!</p>

            <p style="text-indent: 50px;">When long-listing a directory (“ls -l”) you can see the permissions associated with a file or directory on the left side, with the first three letters representing the owner, the second three representing the group, and the final three representing other users on the system:
                Typically a file's listing will look like this: drwxr-xr-- 
                which can be broken down into “d”, “rwx”, “r-x”, and “r-”</p>
            <p>If we were to break this down into what it means we would see that the object we are looking at is a directory “d”, that the owner can read “r”, write “w”, and execute “x”, and that the group can only read “r”, and execute “x” (or access the file) while other users can simply read “r” the directory. With all dashes standing for permissions not allowed.</p>
        </section>

        <section class="chmod">
            <h2>CHMOD</h2>
            <p>The chmod command can be used to “change mode” or to change the access mode of a file or directory, it can be modified similarly to “rm” and “rmdir” with arguments like “-R” for recursive, and is used to change the permissions of files in a filesystem. 
                This permissions value can be specified with a number representing the owner, group, and users all-together instead of the “rwx” style selector shown in the long file listing from before.</p>

            <p>The way this more unified permissions selector works is by assigning each permission to a number and adding them up for each type of access.</p>
            <ul>
                <li>For no permissions this number is 0</li>
                <li>For execute this number is 1</li>
                <li>For write this number is 2</li>
                <li>For read this number is 4</li>
            </ul>

            <p>To use these values you add up the permissions you want for one type of access and now you have the number, then you repeat this for the other two types and you are left with a three digit number in the format (owner group user) to pass into the chmod command as an argument that should look like this:</p>
            <p>“chmod 754” to allow owners rwx access (1+2+4 = 7) the group r-x access (1+4 = 5) and other users r-- access (0 + 0 + 4 = 4).</p>
        </section>

        <a href="../quizzes/chapter_two_quiz.php" class="button-chap">Chapter Quiz!</a>
        <a href="chapter3.php" class="button-chap">Next Chapter</a>
    </div>
    
</body>
<?php
	include($path ."assets/inc/footer.php");
?>
</html>