<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="page-title">Receipt</h1>


<article class="receipt">

	<section class="receipt__half upper">
		<p>Receipt</p>
		<h1>Tickets Used:
            <?php echo $_SESSION['ticketsused'];?></h1>

		<p class="sm"><?php echo date("Y/m/d");?></p>
		
		<div class="receipt__content">
			<table>
				<tbody>
					<tr>
						<td>Total Seats Booked</td>
						<td><?php echo $_SESSION['ticketsused']; ?></td>
					</tr>
					<tr>
						<td>Stand</td>
						<td><?php echo $_SESSION['stand'];?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	
	<section class="receipt__half lower">
		<button>More info</button>
	</section>
</article>
<a href="matches.php">continue</a><style>
    html {
	 box-sizing: border-box;
}
 *, *:before, *:after {
	 box-sizing: inherit;
}
 body {
	 margin: 40px;
	 background: #f4f4f4;
}
 .receipt {
	 width: 400px;
	 max-width: 100%;
	 margin: auto;
	 position: relative;
}
 .receipt__half {
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
	 align-items: center;
	 width: 100%;
	 position: relative;
	 background: white;
	 perspective: 1000px;
}
 .receipt__half::after {
	 content: '';
	 display: block;
	 width: 100%;
	 height: 100px;
	 position: absolute;
	 left: 0;
	 backface-visibility: hidden;
	 transition: all 0.8s ease;
	 transition-delay: 0.35s;
}
 .active .receipt__half::after {
	 transition-delay: 0s;
}
 .upper {
	 padding: 20px;
	 z-index: 10;
}
 .upper::after {
	 top: 100%;
	 background: #f7f7f7;
	 border-top: 1px dashed #dedede;
	 transform: rotate3d(1, 0, 0, -90deg);
	 transform-origin: top center;
}
 .active .upper::after {
	 background: white;
	 transform: rotate3d(1, 0, 0, 0deg);
}
 .lower {
	 transition: transform 0.8s ease;
	 transition-delay: 0.35s;
}
 .lower::after {
	 bottom: 100%;
	 background: #ebebeb;
	 transform: rotate3d(1, 0, 0, 90deg);
	 transform-origin: bottom center;
}
 .active .lower {
	 border-top: none;
	 transform: translateY(200px);
	 transition-delay: 0s;
}
 .active .lower::after {
	 background: white;
	 transform: rotate3d(1, 0, 0, 0deg);
}
 h1 {
	 margin: 10px 0 20px;
}
 h1.page-title {
	 text-align: center;
	 margin-bottom: 60px;
}
 p {
	 margin: 0;
}
 p.sm {
	 font-size: 80%;
}
 button {
	 width: 100%;
	 padding: 15px 20px;
	 background: none;
	 outline: none;
	 border: none;
	 border-top: 1px dashed #dedede;
	 color: #888;
	 font-size: 90%;
	 font-weight: 600;
	 cursor: pointer;
	 transition: all ease 0.35s;
}
 button:hover {
	 color: #484848;
}
 .receipt__content {
	 display: flex;
	 align-items: center;
	 width: 100%;
	 height: 200px;
	 padding: 20px;
	 position: absolute;
	 top: 140px;
	 left: 0;
	 z-index: 20;
	 pointer-events: none;
	 opacity: 0;
	 transform: translateY(-8px);
	 transition: opacity ease 0.35s, transform ease 0.35s;
	 transition-delay: 0s;
}
 .active .receipt__content {
	 opacity: 1;
	 transform: translateY(0);
	 transition-delay: 0.8s;
}
 table {
	 width: 100%;
}
 tr {
	 display: flex;
	 justify-content: space-between;
	 margin: 10px 0;
}
 
</style>
    
<script>
    const receipt = document.querySelector('.receipt')
const button = document.querySelector('button')

const toggleReceipt= () => {
	receipt.classList.toggle('active')
	
	if(receipt.classList.contains('active')) {
		button.innerHTML = 'Less info'
	} else {
		button.innerHTML = 'More info'
	}
}

button.addEventListener('click', toggleReceipt)
</script>
</body>
</html>