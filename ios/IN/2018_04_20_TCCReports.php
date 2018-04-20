

<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8' /> 
	<meta name='description' content='' />
	<meta name='robots' content='noodp, noydir' />
	<meta name='viewport' content='width=device-width, initial-scale=1' />

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
		<link href='https://cdn.rawgit.com/anshooarora/extentreports-java/9fa70d0ed9c34a8ed445ceee3494d3d7de7f8918/dist/css/extent.css' type='text/css' rel='stylesheet' />
	
	<title>TCC Testing Report</title>
	<script type="text/javascript">
        var x = "<?php echo $_GET["order"]; ?>";
        document.addEventListener("DOMContentLoaded", function(event) {
            setTimeout(function(){ document.getElementsByClassName("test__id")[x].click(); }, 0);
        });
    </script>
</head>
	<body class='extent standard default hide-overflow '>
		<div id='theme-selector' alt='Click to toggle theme. To enable by default, use theme configuration.' title='Click to toggle theme. To enable by default, use theme configuration.'>
			<span><i class='material-icons'>desktop_windows</i></span>
		</div>

<nav>
	<div class="nav-wrapper">
		<a href="#!" class="brand-logo blue darken-3">Extent</a>

		<!-- slideout menu -->
		<ul id='slide-out' class='side-nav fixed hide-on-med-and-down'>
			<li class='waves-effect active'><a href='#!' view='test-view' onclick="configureView(0);chartsView('test');"><i class='material-icons'>dashboard</i></a></li>
						<li class='waves-effect'><a href='#!' view='category-view' onclick="configureView(1)"><i class='material-icons'>label_outline</i></a></li>
			<li class='waves-effect'><a href='#!' onclick="configureView(-1);chartsView('dashboard');" view='dashboard-view'><i class='material-icons'>track_changes</i></i></a></li>
		</ul>

		<!-- report name -->
		<span class='report-name'>TCC REPORT</span>
		
		<!-- report headline -->
		<span class='report-headline'></span>

		<!-- nav-right -->
		<ul id='nav-mobile' class='right hide-on-med-and-down nav-right'>
			<a href='#!'>
				<span class='label suite-start-time'>Apr 20, 2018, 2:47:35 PM</span>
			</a>
			<a href='#!'>
				<span class='label'>v3.0.3</span>
			</a>
		</ul>
	</div>
</nav>
		<!-- container -->
		<div class='container'>

<div id='test-view' class='view'>
				
	<section id='controls'>
		<div class='controls grey lighten-4'>
			<!-- test toggle -->
			<div class='chip transparent'>
				<a class='dropdown-button tests-toggle' data-activates='tests-toggle' data-constrainwidth='true' data-beloworigin='true' data-hover='true' href='#'>
					<i class='material-icons'>warning</i> Status
				</a>
				<ul id='tests-toggle' class='dropdown-content'>
											<li status='pass'><a href='#!'>Pass <i class='material-icons green-text'>check_circle</i></a></li>
					<li class='divider'></li>
					<li status='clear' clear='true'><a href='#!'>Clear Filters <i class='material-icons'>clear</i></a></li>
				</ul>
			</div>
			<!-- test toggle -->

			<!-- category toggle -->
			<div class='chip transparent'>
				<a class='dropdown-button category-toggle' data-activates='category-toggle' data-constrainwidth='false' data-beloworigin='true' data-hover='true' href='#'>
					<i class='material-icons'>local_offer</i> Category
				</a>
				<ul id='category-toggle' class='dropdown-content'>
					<li><a href='#'>iPhone7</a></li>
					<li class='divider'></li>
					<li class='clear'><a href='#!' clear='true'>Clear Filters</a></li>
				</ul>
			</div>
			<!-- category toggle -->

			<!-- clear filters -->
			<div class='chip transparent hide'>
				<a class='' id='clear-filters' alt='Clear Filters' title='Clear Filters'>
					<i class='material-icons'>close</i> Clear
				</a>
			</div>
			<!-- clear filters -->

			<!-- enable dashboard -->
			<div id='toggle-test-view-charts' class='chip transparent'>
				<a class='pink-text' id='enable-dashboard' alt='Enable Dashboard' title='Enable Dashboard'>
					<i class='material-icons'>track_changes</i> Dashboard
				</a>
			</div>
			<!-- enable dashboard -->

			<!-- search -->
			<div class='chip transparent' alt='Search Tests' title='Search Tests'>
				<a href="#" class='search-div'>
					<i class='material-icons'>search</i> Search
				</a>

				<div class='input-field left hide'>
					<input id='search-tests' type='text' class='validate browser-default' placeholder='Search Tests...'>
				</div>
				
			</div>
			<!-- search -->
		</div>
	</section>


	<div class='subview-left left'>
		
		<div class='view-summary'>
			<h5>Tests</h3>
			<ul id='test-collection' class='test-collection'>
				
				
				<li class='test displayed active  pass' status='pass' bdd='false' test-id='1'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-1-1</span>
						<span class='test-name'>testCaseLogin</span>
						<span class='test-time'>Apr 20, 2018, 2:48:07 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 20, 2018, 2:48:07 PM</span>
	<span class='label end-time'>Apr 20, 2018, 2:48:52 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 44s+447ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>iPhone7</span>
			</div>
	</div>
	<div class='test-steps'>
		<table class='bordered table-results'>
			<thead>
				<tr>
					<th>Status</th>
					<th>Timestamp</th>
					<th>Details</th>
				</tr>
			</thead>
			<tbody>
				<tr class='log' status='pass'>
					<td class='status pass' title='pass' alt='pass'><i class='material-icons'>check_circle</i></td>
					<td class='timestamp'>2:48:52 PM</td>
					<td class='step-details'>testCaseLogin</td>
				</tr>
			</tbody>
		</table>
	</div>
							<ul class='screenshots'>
								<li><img data-featherlight='images/testCaseLogin.png' width='10%' src='' data-src='images/testCaseLogin.png'></li>
							</ul>
					</div>
				</li>
				
				
				<li class='test displayed active  pass' status='pass' bdd='false' test-id='2'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-1-2</span>
						<span class='test-name'>chooseMode</span>
						<span class='test-time'>Apr 20, 2018, 2:48:53 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 20, 2018, 2:48:53 PM</span>
	<span class='label end-time'>Apr 20, 2018, 2:49:13 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 19s+933ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>iPhone7</span>
			</div>
	</div>
	<div class='test-steps'>
		<table class='bordered table-results'>
			<thead>
				<tr>
					<th>Status</th>
					<th>Timestamp</th>
					<th>Details</th>
				</tr>
			</thead>
			<tbody>
				<tr class='log' status='pass'>
					<td class='status pass' title='pass' alt='pass'><i class='material-icons'>check_circle</i></td>
					<td class='timestamp'>2:49:13 PM</td>
					<td class='step-details'>chooseMode</td>
				</tr>
			</tbody>
		</table>
	</div>
							<ul class='screenshots'>
								<li><img data-featherlight='images/chooseMode.png' width='10%' src='' data-src='images/chooseMode.png'></li>
							</ul>
					</div>
				</li>
				
				
				<li class='test displayed active  pass' status='pass' bdd='false' test-id='3'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-3-6</span>
						<span class='test-name'>TestcaseSearchAddress</span>
						<span class='test-time'>Apr 20, 2018, 2:49:14 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 20, 2018, 2:49:14 PM</span>
	<span class='label end-time'>Apr 20, 2018, 2:50:19 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 1m 4s+846ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>iPhone7</span>
			</div>
	</div>
	<div class='test-steps'>
		<table class='bordered table-results'>
			<thead>
				<tr>
					<th>Status</th>
					<th>Timestamp</th>
					<th>Details</th>
				</tr>
			</thead>
			<tbody>
				<tr class='log' status='pass'>
					<td class='status pass' title='pass' alt='pass'><i class='material-icons'>check_circle</i></td>
					<td class='timestamp'>2:50:19 PM</td>
					<td class='step-details'>TestcaseSearchAddress</td>
				</tr>
			</tbody>
		</table>
	</div>
							<ul class='screenshots'>
								<li><img data-featherlight='images/TestcaseSearchAddress.png' width='10%' src='' data-src='images/TestcaseSearchAddress.png'></li>
							</ul>
					</div>
				</li>
				
				
				<li class='test displayed active  pass' status='pass' bdd='false' test-id='4'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-3-7</span>
						<span class='test-name'>searchIncremental</span>
						<span class='test-time'>Apr 20, 2018, 2:50:20 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 20, 2018, 2:50:20 PM</span>
	<span class='label end-time'>Apr 20, 2018, 2:51:16 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 56s+126ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>iPhone7</span>
			</div>
	</div>
	<div class='test-steps'>
		<table class='bordered table-results'>
			<thead>
				<tr>
					<th>Status</th>
					<th>Timestamp</th>
					<th>Details</th>
				</tr>
			</thead>
			<tbody>
				<tr class='log' status='pass'>
					<td class='status pass' title='pass' alt='pass'><i class='material-icons'>check_circle</i></td>
					<td class='timestamp'>2:51:16 PM</td>
					<td class='step-details'>searchIncremental</td>
				</tr>
			</tbody>
		</table>
	</div>
							<ul class='screenshots'>
								<li><img data-featherlight='images/searchIncremental.png' width='10%' src='' data-src='images/searchIncremental.png'></li>
							</ul>
					</div>
				</li>
				
				
				<li class='test displayed active  pass' status='pass' bdd='false' test-id='5'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-3-8</span>
						<span class='test-name'>searchFreeWord</span>
						<span class='test-time'>Apr 20, 2018, 2:51:16 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 20, 2018, 2:51:16 PM</span>
	<span class='label end-time'>Apr 20, 2018, 2:51:53 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 36s+831ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>iPhone7</span>
			</div>
	</div>
	<div class='test-steps'>
		<table class='bordered table-results'>
			<thead>
				<tr>
					<th>Status</th>
					<th>Timestamp</th>
					<th>Details</th>
				</tr>
			</thead>
			<tbody>
				<tr class='log' status='pass'>
					<td class='status pass' title='pass' alt='pass'><i class='material-icons'>check_circle</i></td>
					<td class='timestamp'>2:51:53 PM</td>
					<td class='step-details'>searchFreeWord</td>
				</tr>
			</tbody>
		</table>
	</div>
							<ul class='screenshots'>
								<li><img data-featherlight='images/searchFreeWord.png' width='10%' src='' data-src='images/searchFreeWord.png'></li>
							</ul>
					</div>
				</li>
				
				
				<li class='test displayed active  pass' status='pass' bdd='false' test-id='6'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-3-9</span>
						<span class='test-name'>searchMutilWord</span>
						<span class='test-time'>Apr 20, 2018, 2:51:54 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 20, 2018, 2:51:54 PM</span>
	<span class='label end-time'>Apr 20, 2018, 2:52:34 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 39s+933ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>iPhone7</span>
			</div>
	</div>
	<div class='test-steps'>
		<table class='bordered table-results'>
			<thead>
				<tr>
					<th>Status</th>
					<th>Timestamp</th>
					<th>Details</th>
				</tr>
			</thead>
			<tbody>
				<tr class='log' status='pass'>
					<td class='status pass' title='pass' alt='pass'><i class='material-icons'>check_circle</i></td>
					<td class='timestamp'>2:52:34 PM</td>
					<td class='step-details'>searchMutilWord</td>
				</tr>
			</tbody>
		</table>
	</div>
							<ul class='screenshots'>
								<li><img data-featherlight='images/searchMutilWord.png' width='10%' src='' data-src='images/searchMutilWord.png'></li>
							</ul>
					</div>
				</li>
				
				
				<li class='test displayed active  pass' status='pass' bdd='false' test-id='7'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-3-10</span>
						<span class='test-name'>searchPhoneNumber</span>
						<span class='test-time'>Apr 20, 2018, 2:52:34 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 20, 2018, 2:52:34 PM</span>
	<span class='label end-time'>Apr 20, 2018, 2:53:30 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 55s+751ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>iPhone7</span>
			</div>
	</div>
	<div class='test-steps'>
		<table class='bordered table-results'>
			<thead>
				<tr>
					<th>Status</th>
					<th>Timestamp</th>
					<th>Details</th>
				</tr>
			</thead>
			<tbody>
				<tr class='log' status='pass'>
					<td class='status pass' title='pass' alt='pass'><i class='material-icons'>check_circle</i></td>
					<td class='timestamp'>2:53:30 PM</td>
					<td class='step-details'>searchPhoneNumber</td>
				</tr>
			</tbody>
		</table>
	</div>
							<ul class='screenshots'>
								<li><img data-featherlight='images/searchPhoneNumber.png' width='10%' src='' data-src='images/searchPhoneNumber.png'></li>
							</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- subview left -->

	<div class='subview-right left'>
		<div class='view-summary'>
			<h5 class='test-name'></h5>

			<div id='step-filters' class="right">
				<span class="blue-text" status="info" alt="info" title="info"><i class="material-icons">info_outline</i></span>
				<span class="green-text" status="pass" alt="pass" title="pass"><i class="material-icons">check_circle</i></span>
				<span class="red-text" status="fail" alt="fail" title="fail"><i class="material-icons">cancel</i></span>
				<span class="red-text text-darken-4" status="fatal" alt="fatal" title="fatal"><i class="material-icons">cancel</i></span>
				<span class="pink-text text-lighten-1" status="error" alt="error" title="error"><i class="material-icons">error</i></span>
				<span class="orange-text" alt="warning" status="warning" title="warning"><i class="material-icons">warning</i></span>
				<span class="teal-text" status="skip" alt="skip" title="skip"><i class="material-icons">redo</i></span>
				<span status="clear" alt="Clear filters" title="Clear filters"><i class="material-icons">clear</i></span>
			</div>
		</div>
	</div>
	<!-- subview right -->


<div id='test-view-charts' class='subview-full'>
	<div id='charts-row' class='row nm-v nm-h'>
		<div class='col s12 m6 l6 np-h'>
			<div class='card-panel nm-v'>
				<div class='left panel-name'>Tests</div>
				<div class='chart-box'>
					<canvas id='parent-analysis' width='100' height='80'></canvas>
				</div>
				<div class='block text-small'>
					<span><span class='strong'>7</span> test(s) passed</span>
				</div>
				<div class='block text-small'>
					<span class='strong'>0</span> test(s) failed, <span class='strong'>0</span> others
				</div>
			</div>
		</div>
		
		<div class='col s12 m6 l6 np-h'>
			<div class='card-panel nm-v'>
				<div class='left panel-name'>Steps</div>
				<div class='chart-box'>
					<canvas id='child-analysis' width='100' height='80'></canvas>
				</div>
				<div class='block text-small'>
					<span><span class='strong'>7</span> step(s) passed</span>
				</div>
				<div class='block text-small'>
					<span class='strong'>0</span> step(s) failed, <span class='strong'>0</span> others
				</div>
			</div>
		</div>
		
	</div>
</div>
</div>
<!-- test view --><div id='category-view' class='view hide'>

	<section id='controls'>
		<div class='controls grey lighten-4'>
			<!-- search -->
			<div class='chip transparent' alt='Search Tests' title='Search Tests'>
				<a href="#" class='search-div'>
					<i class='material-icons'>search</i> Search
				</a>
				
				<div class='input-field left hide'>
					<input id='search-tests' type='text' class='validate browser-default' placeholder='Search Tests...'>
				</div>
				
			</div>
			<!-- search -->
		</div>
	</section>

	<div class='subview-left left'>
		
		<div class='view-summary'>
			<h5>Categories</h3>
			<ul id='category-collection' class='category-collection'>
				
				<li class='category displayed active'>
					<div class='category-heading'>
						<span class='category-name'>iPhone7</span>
						<span class='category-status right'>
							<span class='label pass'>7</span>
						</span>
					</div>
					<div class='category-content hide'>
						<div class='category-status-counts'>
							<span class='label green accent-4 white-text'>Passed: 7</span>
							
							
						</div>
					
						<div class='category-tests'>
							<table class='bordered table-results'>
								<thead>
									<tr>
										<th>Timestamp</th>
										<th>TestName</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Apr 20, 2018, 2:48:07 PM</td>
										<td class='linked' test-id='1'>testCaseLogin</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
									<tr>
										<td>Apr 20, 2018, 2:48:53 PM</td>
										<td class='linked' test-id='2'>chooseMode</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
									<tr>
										<td>Apr 20, 2018, 2:49:14 PM</td>
										<td class='linked' test-id='3'>TestcaseSearchAddress</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
									<tr>
										<td>Apr 20, 2018, 2:50:20 PM</td>
										<td class='linked' test-id='4'>searchIncremental</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
									<tr>
										<td>Apr 20, 2018, 2:51:16 PM</td>
										<td class='linked' test-id='5'>searchFreeWord</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
									<tr>
										<td>Apr 20, 2018, 2:51:54 PM</td>
										<td class='linked' test-id='6'>searchMutilWord</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
									<tr>
										<td>Apr 20, 2018, 2:52:34 PM</td>
										<td class='linked' test-id='7'>searchPhoneNumber</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</li>

			</ul>
		</div>
	</div>

	<div class='subview-right left'>
		<div class='view-summary'>
			<h5 class='category-name'></h5>
		</div>
	</div>
</div>
<!-- category view --><!-- exception view --><div id='dashboard-view' class='view hide'>
	<div class='card-panel transparent np-v'>
		<h5>Dashboard</h5>

		<div class='row'>
			<div class='col s2'>
				<div class='card-panel r'>
					Tests
					<div class='panel-lead'>7</div>
				</div>
			</div>
			<div class='col s2'>
				<div class='card-panel r'>
					Steps
					<div class='panel-lead'>7</div>
				</div>
			</div>
			<div class='col s2'>
				<div class='card-panel r'>
					Start
					<div class='panel-lead'>Apr 20, 2018, 2:47:35 PM</div>
				</div>
			</div>
			<div class='col s2'>
				<div class='card-panel r'>
			 		End
			 		<div class='panel-lead'>Apr 20, 2018, 2:53:31 PM</div>
				</div>
			</div>
			<div class='col s2'>
				<div class='card-panel r'>
					Time Taken
					<div class='panel-lead'>355,847ms</div>
				</div>
			</div>
			<div class='col s4'>
				<div class='card-panel environment'>
					<span class='right label cyan white-text'>Environment</span><p>&nbsp;</p>
					
					<table>
						<tr>
							<th>Name</th>
							<th>Value</th>
						</tr>
							<tr>
								<td>OS</td>
								<td>Mac OS X</td>
							</tr>
							<tr>
								<td>Automation Tool </td>
								<td>Appium</td>
							</tr>
							<tr>
								<td>Build Automation Tool</td>
								<td>Maven</td>
							</tr>
					</table>
				</div>
			</div>
			<div class='col s4'>
				<div class='card-panel'>
					<span class='right label cyan white-text'>Categories</span><p>&nbsp;</p>
					
					<table>
						<tr>
							<th>Name</th>
							<th>Passed</th>
							<th>Failed</th>
							<th>Others</th>
						</tr>
						<tr>
							<td>iPhone7</td>
							<td>7</td>
							<td>0</td>
							<td>0</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- dashboard view --><!-- testrunner-logs view -->
		</div>
		<!-- container -->

		<script>
			var statusGroup = {
				passParent: 7,
				failParent: 0,
				fatalParent: 0,
				errorParent: 0,
				warningParent: 0,
				skipParent: 0,
				exceptionsParent: 0,
				
				passChild: 7,
				failChild: 0,
				fatalChild: 0,
				errorChild: 0,
				warningChild: 0,
				skipChild: 0,
				infoChild: 0,
				exceptionsChild: 0,
				
				passGrandChild: 0,
				failGrandChild: 0,
				fatalGrandChild: 0,
				errorGrandChild: 0,
				warningGrandChild: 0,
				skipGrandChild: 0,
				infoGrandChild: 0,
				exceptionsGrandChild: 0,
			};
		</script>
		
			<script src='https://cdn.rawgit.com/anshooarora/extentreports-java/9fa70d0ed9c34a8ed445ceee3494d3d7de7f8918/dist/js/extent.js' type='text/javascript'></script>
		
		
	</body>
	
</html>
