<?php


// Include database connection details
require_once('connect.php');
session_start();

if(!isset($_SESSION['user_name'])){
	header('location:login.php');
}

// Get number of users in the system
// $userCountQuery = "SELECT COUNT(*) AS total FROM users";
// $userCountResult = mysqli_query($conn, $userCountQuery);
// $userCount = mysqli_fetch_assoc($userCountResult)['total'];

// // Get number of admin and regular users in the system
// $adminCountQuery = "SELECT COUNT(*) AS total FROM users WHERE role = 'admin'";
// $adminCountResult = mysqli_query($conn, $adminCountQuery);
// $adminCount = mysqli_fetch_assoc($adminCountResult)['total'];

// $regularCountQuery = "SELECT COUNT(*) AS total FROM users WHERE role = 'regular'";
// $regularCountResult = mysqli_query($conn, $regularCountQuery);
// $regularCount = mysqli_fetch_assoc($regularCountResult)['total'];

// // Get most recently added users
// $recentUsersQuery = "SELECT * FROM users ORDER BY created_at DESC LIMIT 5";
// $recentUsersResult = mysqli_query($conn, $recentUsersQuery);

// // Get distribution of users by role
// $roleDistributionQuery = "SELECT role, COUNT(*) AS total FROM users GROUP BY role";
// $roleDistributionResult = mysqli_query($conn, $roleDistributionQuery);

// // Get number of notes and past exam questions in the system
// $notesCountQuery = "SELECT COUNT(*) AS total FROM notes";
// $notesCountResult = mysqli_query($conn, $notesCountQuery);
// $notesCount = mysqli_fetch_assoc($notesCountResult)['total'];

// $pastQuestionsCountQuery = "SELECT COUNT(*) AS total FROM past_questions";
// $pastQuestionsCountResult = mysqli_query($conn, $pastQuestionsCountQuery);
// $pastQuestionsCount = mysqli_fetch_assoc($pastQuestionsCountResult)['total'];

// // Get distribution of notes and past exam questions by subject
// $notesDistributionQuery = "SELECT subject, COUNT(*) AS total FROM notes GROUP BY subject";
// $notesDistributionResult = mysqli_query($conn, $notesDistributionQuery);

// $pastQuestionsDistributionQuery = "SELECT subject, COUNT(*) AS total FROM past_questions GROUP BY subject";
// $pastQuestionsDistributionResult = mysqli_query($conn, $pastQuestionsDistributionQuery);

// // Get labels and counts for note and past question distribution by subject
// $subjectLabels = "";
// $noteCountBySubject = "";
// $questionCountBySubject = "";

// while ($row = mysqli_fetch_assoc($notesDistributionResult)) {
//     $subjectLabels .= "'{$row['subject']}',";
//     $noteCountBySubject .= "{$row['total']},";
// }

// while ($row = mysqli_fetch_assoc($pastQuestionsDistributionResult)) {
//     $questionCountBySubject .= "{$row['total']},";
// }

// // Remove trailing commas from label and count strings
// $subjectLabels = rtrim($subjectLabels, ",");
// $noteCountBySubject = rtrim($noteCountBySubject, ",");
// $questionCountBySubject = rtrim($questionCountBySubject, ",");

// // Close database connection
// mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel Dashboard</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"></script>
</head>
<body>
	<h1>Welcome to the Admin Panel Dashboard</h1>
	<h2>Summary</h2>
	<p>Number of users in the system: <?php echo $userCount; ?></p>
	<ul>
		<?php while ($user = mysqli_fetch_assoc($recentUsersResult)): ?>
		<li><?php echo $user['name']; ?> (<?php echo $user['email']; ?>)</li>
		<?php endwhile; ?>
	</ul>
	<?php while ($roleDistribution = mysqli_fetch_assoc($roleDistributionResult)): ?>
	<p>Number of <?php echo $roleDistribution['role']; ?> users: <?php echo $roleDistribution['total']; ?></p>
	<?php endwhile; ?>
	<p>Number of notes in the system: <?php echo $notesCount; ?></p>
	<p>Number of past exam questions in the system: <?php echo $pastQuestionsCount; ?></p>
	<h2>Charts</h2>
	<h3>User Distribution by Role</h3>
	<canvas id="user-role-chart"></canvas>
	<h3>Notes Distribution by Subject</h3>
	<canvas id="subject-chart"></canvas>
	<script>
		// Chart.js for user distribution by role
		var userRoleCanvas = document.getElementById("user-role-chart");
		var userRoleData = {
		    labels: ["Admin", "Regular User"],
		    datasets: [{
		        data: [<?php echo $adminCount; ?>, <?php echo $regularCount; ?>],
		        backgroundColor: ['#36a2eb', '#ff6384']
		    }]
		};
		var userRoleChart = new Chart(userRoleCanvas, {
		    type: 'pie',
		    data: userRoleData
		});

        	// Chart.js for note and past question distribution by subject
	var subjectCanvas = document.getElementById("subject-chart");
	var subjectData = {
	    labels: [<?php echo $subjectLabels; ?>],
	    datasets: [{
	        label: 'Notes',
	        data: [<?php echo $noteCountBySubject; ?>],
	        backgroundColor: '#36a2eb'
	    }, {
	        label: 'Past Questions',
	        data: [<?php echo $questionCountBySubject; ?>],
	        backgroundColor: '#ff6384'
	    }]
	};
	var subjectChart = new Chart(subjectCanvas, {
	    type: 'bar',
	    data: subjectData,
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true,
	                    stepSize: 1
	                }
	            }]
	        },
	        legend: {
	            display: true,
	            position: 'top',
	            labels: {
	                boxWidth: 20
	            }
	        }
	    }
	});
</script>
</body>
</html>
