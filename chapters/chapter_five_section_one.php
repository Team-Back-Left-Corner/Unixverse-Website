<?php
	// session_name("iste240t54");
	// session_start();
	// include("header.php");
	$path = "../";
	include($path . "assets/inc/header.php");
?>
<h2>ifconfig:</h2>
<p>ifconfig is a command-line tool used to configure network interfaces on 
Linux and Unix systems. It can be used to display and configure the IP 
address, netmask, and other network-related settings for an interface. 
To display the configuration of all network interfaces, run the command 
"ifconfig." To configure a specific interface, specify its name after the 
ifconfig command. For example, "ifconfig eth0" will display the 
configuration for the eth0 network interface.</p>
<h2>ping:</h2>
<p>ping is a command-line tool used to test the connectivity of a network 
device or server. It sends an ICMP echo request to the target device and 
waits for an ICMP echo reply. If a reply is received, it indicates that the 
device is reachable and responding to requests. To use the ping command, 
run "ping" followed by the IP address or hostname of the target device. 
By default, ping sends four packets and displays the round-trip time for 
each packet.
</p>
<?php include($path . "assets/inc/footer.php");?>
</body>
</html>