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
    
    <title>Chapter 5: Networking Commands</title>
</head>
<body>
    <div class="container">
        <h1>Chapter 5: Networking Commands</h1>
        <section class="ifconfig">
            <h2>ifconfig</h2>
            <p>ifconfig is a command-line tool used to configure network interfaces on 
                Linux and Unix systems. It can be used to display and configure the IP 
                address, netmask, and other network-related settings for an interface. 

            <p>Examples</p>
            <ul class="ifconfig_example">
                <li>To display the configuration of all network interfaces, run the command 
                    "ifconfig." To configure a specific interface, specify its name after the 
                    ifconfig command.</p></li>
                <li> For example, "ifconfig eth0" will display the 
                    configuration for the eth0 network interface</li>
            </ul>
        </section>

        <section class="ping">
            <h2>ping</h2>
            <p>ping is a command-line tool used to test the connectivity of a network 
                device or server. It sends an ICMP echo request to the target device and 
                waits for an ICMP echo reply. If a reply is received, it indicates that the 
                device is reachable and responding to requests.</p>

            <ul class="ping-example">
                <li>To use the ping command, 
                    run "ping" followed by the IP address or hostname of the target device.</li>
                <li>By default, ping sends four packets and displays the round-trip time for 
                    each packet.</li>
            </ul>
        </section>
        <section class="traceroute">
            <h2>traceroute</h2>
            <p>traceroute is a command-line tool used to trace the route that packets 
                take from a source device to a destination device on a network. It sends 
                packets with varying time-to-live (TTL) values to each hop on the route and 
                records the IP address of each router or gateway that the packets pass 
                through.</p> 

            <p>Examples</p>
            <ul class="traceroute_example">
                <li>To use traceroute, run the command "traceroute" followed by the IP 
                    address or hostname of the destination device.</li>
                <li> The output shows the IP 
                    addresses of each hop, along with the round-trip time for each packet.</li>
            </ul>
        </section>

        <section class="arp">
            <h2>arp</h2>
            <p>arp is a command-line tool used to display and manipulate the Address 
                Resolution Protocol (ARP) cache on a network device. The ARP cache is used 
                to map IP addresses to MAC addresses on a local network.</p>

            <ul class="arp-example">
                <li> To display the 
                    contents of the ARP cache, run the command "arp -a."
                <li> To add a new entry to 
                    the ARP cache, use the command "arp -s" followed by the IP address and MAC 
                    address.</li>
            </ul>
        </section>

        <a href="../quizzes/chapter_five_quiz.php" class="button-chap">Chapter Quiz!</a>
        <a href="../landing.php" class="button-chap">Dashboard</a>

        

    </div>
    
</body>
<?php
	include($path ."assets/inc/footer.php");
?>
</html>