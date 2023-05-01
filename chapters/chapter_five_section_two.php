<?php
	// session_name("iste240t54");
	// session_start();
	// include("header.php");
	$path = "../";
	include($path . "assets/inc/header.php");
?>
<h2>arp:</h2>
<p>arp is a command-line tool used to display and manipulate the Address 
Resolution Protocol (ARP) cache on a network device. The ARP cache is used 
to map IP addresses to MAC addresses on a local network. To display the 
contents of the ARP cache, run the command "arp -a." To add a new entry to 
the ARP cache, use the command "arp -s" followed by the IP address and MAC 
address.</p>
<h2>traceroute:</h2>
<p>traceroute is a command-line tool used to trace the route that packets 
take from a source device to a destination device on a network. It sends 
packets with varying time-to-live (TTL) values to each hop on the route and 
records the IP address of each router or gateway that the packets pass 
through. To use traceroute, run the command "traceroute" followed by the IP 
address or hostname of the destination device. The output shows the IP 
addresses of each hop, along with the round-trip time for each packet.</p>
<?php include($path . "assets/inc/footer.php");?>
</body>
</html>