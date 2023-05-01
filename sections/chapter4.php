<?php
	$title = "Chapter 4: Permissions";
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
    <title>Chapter 4: Editors</title>
</head>
<body>
    <div class="container">
        <h1>Chapter 4: Editors</h1>
        <section class="ssh">
            <h2>Nano</h2>
                <p>Nano is a lightweight and user-friendly command-line text editor that is 
                    commonly pre-installed on most Linux distributions and macOS systems. 
                    To verify whether Nano is installed on your machine, you can run the 
                    command "nano --version." If it is not installed, you can install it using 
                    the appropriate package manager for your distribution.</p>

                <p>Here are some basic commands for getting started with Nano:</p>
                <ul><li><strong>“nano filename”</strong> Is a command that will let you enter/create a file.</li>
                    <li><strong>“Ctrl+O”</strong> Is a command that can be used to save a file.”</li>
                    <li><strong>“Ctrl+X”</strong> Is a command that can be used to exit a file without saving. Doing “Ctrl+O” before this will save you're work</li>
                </ul>
        </section>

        <section class="vim">
            <h2>Vim</h2>
            <p>Vim is a powerful text editor that is available on most Unix-based 
                systems, including macOS and Linux distributions. To launch Vim, simply 
                open a terminal and type "vim" followed by the name of the file you want
                to edit. If the file does not exist, Vim will create a new file with that
                name.</p>
            

            <p>Here are some basic commands for getting started with Vim:</p>
            <ul>
                <ul><li><strong>“nano filename”</strong> Is a command that will let you enter/create a file.</li>
                <li><strong>“Ctrl+i”</strong> Is a command that can be used to start typing in a editor.</li>
                <li><strong>“:wq”</strong> Is a command that will save and quit the file</li>
                <li><strong>“:q!”</strong> Is a command that will exit the file without saving</li>
                <li><strong>“:wq!”</strong> Is a command that will save the changes and exit vim as the superuser.</li>
        </section>

        <section class="emacs">
            <h2>Emacs</h2>
            <p>Emacs is a powerful text editor that is commonly used on Unix-based 
                systems. To launch Emacs, simply enter the command "emacs" in your terminal. 
                If Emacs is not installed on your system, you can typically install it using 
                your package manager. </p>
                <p>Here are some basic commands for getting started with Vim:</p>
                <ul>
                    <ul><li><strong>“Ctrl-x Ctrl-f”</strong> Is a command that will let you type in the path to get to a file.</li>
                    <li><strong>“"Ctrl-f," "Ctrl-b," "Ctrl-n," and "Ctrl-p"”</strong> These are commands that will let you move your curseor around or the arrow keys can be used.</li>
                    <li><strong>“Ctrl-x Ctrl-s”</strong> Is a command that will save the file</li>
                    <li><strong>“Ctrl-x Ctrl-c”</strong> Is a command that will exit the file</li>
        </section>

        <a href="../quizzes/chapter_four_quiz.php" class="button-chap">Chapter Quiz!</a>
        <a href="chapter5.php" class="button-chap">Next Chapter</a>


    </div>
    
</body>
<?php
	include($path ."assets/inc/footer.php");
?>
</html>