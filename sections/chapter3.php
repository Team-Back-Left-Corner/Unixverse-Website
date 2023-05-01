<?php
	$title = "Chapter 3: Permissions";
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
    
    <title>Chapter 3: Permissions</title>
</head>
<body>
    <div class="container">
        <h1>Chapter 3: Permissions</h1>
        <section class="ssh">
            <h2>SSH</h2>
                <p>SSH, or secure shell protocol is used for secure remote access to Unix based systems. 
                    It allows users to connect to a remote system and execute commands securely over an encrypted connection. 
                    SSH can also be used for things such as port forwarding, and file transfer. To be able to use SSH you must first have a SSH client installed on your local computer and an SSH server on the remote system you are attempting to connect to.
                    Make sure to check your router for open ports if you're having trouble as SSH by default uses port 22.</p>

                <p>Here are some basic commands for getting started with ssh:</p>
                <ul>
                    <li><strong>“ssh”</strong> Is a command that can be used to initiate an SSH connection. The usage is: “ssh [username]@[hostname/server IP]</li>
                    <li><strong>“scp”</strong> is a command that can be used to transfer files securely over SSH. The usage is: “scp [option] [user_name@source_host:path/to/source/file] [user_name@target_host:target/path]”</li>
                    <li><strong>“ssh-keygen”</strong> is a command that can be used to generate a public/private key pair for SSH authentication.</li>
                </ul>
        </section>

        <section class="ftp">
            <h2>FTP and SFTP</h2>
            <p>FTP, or File transfer protocol is used to remote-transfer files to and from a device that supports it, and while it may not be as secure as SCP or SFTP, it has the benefit over SCP of being able to easily list an entire directory structure in one access command rather than relying on the user to remember exactly where all their files are on the host machine. 
                However much like SCP and SSH, FTP and SFTP both require software on the host and client machines to work.</p>
            
            <p>Furthermore, FTP, while useful in its own right, is not as secure as its predecessor SFTP which adds to the FTP connection specification a level of encryption and security that many security minded individuals rely on.</p>

            <p>Here are some basic commands for getting started with SFTP:</p>
            <ul>
                <li><strong>“sftp”</strong> much like ssh is the command that can be used to initiate an SFTP connection, the usage of which is also similarly sftp[username]@[hostname/server IP]</li>
                <li>Since sftp is built around file transfer though, once a connection is initiated you will be prompted with a terminal that looks like this: “sftp>” this prompt is much the same as your local prompt and the same file commands can be used (ls, pwd, etc…) although now they you are connected to a remote host, 
                    the file listing will be of that host instead of your own computer, and to list your own computer's directories and files you will now need to append all common commands with an “l” for local.</li>
            </ul>
        </section>

        <section class="fileZilla">
            <h2>FileZilla</h2>
            <p>To make working with all these terminal and command-line based applications easier to digest, FileZilla is a great free application that gives a user interface to these programs. It supports all the protocols we have gone over previously, but instead of typing in your command to the terminal of your computer, you can just fill in the input fields along the top of the window:</p>
            <figure class="chapter-img">
                <img src="<?php echo $path;?>assets/img/chap3.png" alt="FileZilla Input Fields">
                <figcaption>FileZilla Input Fields</figcaption>
            </figure>

            <p>Where your server IP or hostname along with the protocol to connect with goes in “host” in the format “[protocol]:[hostname/IP]” your username goes in “username: and the password goes in password, or in the prompt that comes up when you try to connect using “quickconnect.”</p>
            <p>Once you have connected, you'll see two panes in the lower part of the window, the one on the left is your local device and the one on the right is the remote host, and transferring files is just as easy as dragging from one pane to another!</p>

            <figure class="chapter-img">
                <img src="<?php echo $path;?>assets/img/filezilla.png" alt="FileZilla Host and Local">
                <figcaption>FileZilla Host and Local</figcaption>
            </figure>
        </section>

        <a href="../quizzes/chapter_three_quiz.php" class="button-chap">Chapter Quiz!</a>
        <a href="#" class="button-chap">Next Chapter</a>


    </div>
    
</body>
<?php
	include($path ."assets/inc/footer.php");
?>
</html>