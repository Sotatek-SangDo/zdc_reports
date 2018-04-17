

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
        var x = '<?php echo $_GET["order"]; ?>';
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
			<li class='waves-effect'><a href='#!' view='exception-view' onclick="configureView(2)"><i class='material-icons'>bug_report</i></a></li>
			<li class='waves-effect'><a href='#!' onclick="configureView(-1);chartsView('dashboard');" view='dashboard-view'><i class='material-icons'>track_changes</i></i></a></li>
		</ul>

		<!-- report name -->
		<span class='report-name'>TCC REPORT</span>
		
		<!-- report headline -->
		<span class='report-headline'></span>

		<!-- nav-right -->
		<ul id='nav-mobile' class='right hide-on-med-and-down nav-right'>
			<a href='#!'>
				<span class='label suite-start-time'>Apr 17, 2018 3:54:32 PM</span>
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
						<li status='fail'><a href='#!'>Fail <i class='material-icons red-text'>cancel</i></a></li>
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
					<li><a href='#'>GalaxyS5</a></li>
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
						<span class='test-time'>Apr 17, 2018 3:54:54 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 17, 2018 3:54:54 PM</span>
	<span class='label end-time'>Apr 17, 2018 3:56:06 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 1m 11s+536ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>GalaxyS5</span>
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
					<td class='timestamp'>3:56:06 PM</td>
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
						<span class='test-name'>TCChooseMode</span>
						<span class='test-time'>Apr 17, 2018 3:56:09 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 17, 2018 3:56:09 PM</span>
	<span class='label end-time'>Apr 17, 2018 3:56:17 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 8s+162ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>GalaxyS5</span>
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
					<td class='timestamp'>3:56:17 PM</td>
					<td class='step-details'>TCChooseMode</td>
				</tr>
			</tbody>
		</table>
	</div>
							<ul class='screenshots'>
								<li><img data-featherlight='images/TCChooseMode.png' width='10%' src='' data-src='images/TCChooseMode.png'></li>
							</ul>
					</div>
				</li>
				
				
				<li class='test displayed active  fail' status='fail' bdd='false' test-id='3'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-3-1</span>
						<span class='test-name'>searchCountry</span>
						<span class='test-time'>Apr 17, 2018 3:56:20 PM</span>
						<span class='test-status right fail'>fail</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 17, 2018 3:56:20 PM</span>
	<span class='label end-time'>Apr 17, 2018 3:56:23 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 3s+140ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>GalaxyS5</span>
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
				<tr class='log' status='fail'>
					<td class='status fail' title='fail' alt='fail'><i class='material-icons'>cancel</i></td>
					<td class='timestamp'>3:56:23 PM</td>
					<td class='step-details'><textarea>java.lang.AssertionError: App not have test case! expected:<true> but was:<false>
	at org.testng.Assert.fail(Assert.java:89)
	at org.testng.Assert.failNotEquals(Assert.java:489)
	at org.testng.Assert.assertTrue(Assert.java:37)
	at test.TCCTestcaseSearch.searchCountry(TCCTestcaseSearch.java:35)
	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method)
	at sun.reflect.NativeMethodAccessorImpl.invoke(Unknown Source)
	at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source)
	at java.lang.reflect.Method.invoke(Unknown Source)
	at org.testng.internal.MethodInvocationHelper.invokeMethod(MethodInvocationHelper.java:80)
	at org.testng.internal.Invoker.invokeMethod(Invoker.java:702)
	at org.testng.internal.Invoker.invokeTestMethod(Invoker.java:894)
	at org.testng.internal.Invoker.invokeTestMethods(Invoker.java:1219)
	at org.testng.internal.TestMethodWorker.invokeTestMethods(TestMethodWorker.java:127)
	at org.testng.internal.TestMethodWorker.run(TestMethodWorker.java:111)
	at org.testng.TestRunner.privateRun(TestRunner.java:768)
	at org.testng.TestRunner.run(TestRunner.java:617)
	at org.testng.SuiteRunner.runTest(SuiteRunner.java:334)
	at org.testng.SuiteRunner.access$000(SuiteRunner.java:37)
	at org.testng.SuiteRunner$SuiteWorker.run(SuiteRunner.java:368)
	at org.testng.internal.thread.ThreadUtil$2.call(ThreadUtil.java:64)
	at java.util.concurrent.FutureTask.run(Unknown Source)
	at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source)
	at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source)
	at java.lang.Thread.run(Unknown Source)
</textarea></td>
				</tr>
			</tbody>
		</table>
	</div>
							<ul class='screenshots'>
								<li><img data-featherlight='images/searchCountry.png' width='10%' src='' data-src='images/searchCountry.png'></li>
							</ul>
					</div>
				</li>
				
				
				<li class='test displayed active  pass' status='pass' bdd='false' test-id='4'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-3-6</span>
						<span class='test-name'>searchAddress</span>
						<span class='test-time'>Apr 17, 2018 3:56:23 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 17, 2018 3:56:23 PM</span>
	<span class='label end-time'>Apr 17, 2018 3:57:02 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 38s+970ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>GalaxyS5</span>
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
					<td class='timestamp'>3:57:02 PM</td>
					<td class='step-details'>searchAddress</td>
				</tr>
			</tbody>
		</table>
	</div>
							<ul class='screenshots'>
								<li><img data-featherlight='images/searchAddress.png' width='10%' src='' data-src='images/searchAddress.png'></li>
							</ul>
					</div>
				</li>
				
				
				<li class='test displayed active  pass' status='pass' bdd='false' test-id='5'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-3-7</span>
						<span class='test-name'>searchFreeword</span>
						<span class='test-time'>Apr 17, 2018 3:57:04 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 17, 2018 3:57:04 PM</span>
	<span class='label end-time'>Apr 17, 2018 3:57:29 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 25s+425ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>GalaxyS5</span>
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
					<td class='timestamp'>3:57:29 PM</td>
					<td class='step-details'>searchFreeword</td>
				</tr>
			</tbody>
		</table>
	</div>
							<ul class='screenshots'>
								<li><img data-featherlight='images/searchFreeword.png' width='10%' src='' data-src='images/searchFreeword.png'></li>
							</ul>
					</div>
				</li>
				
				
				<li class='test displayed active  pass' status='pass' bdd='false' test-id='6'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-3-8</span>
						<span class='test-name'>searchWord</span>
						<span class='test-time'>Apr 17, 2018 3:57:32 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 17, 2018 3:57:32 PM</span>
	<span class='label end-time'>Apr 17, 2018 3:57:57 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 25s+273ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>GalaxyS5</span>
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
					<td class='timestamp'>3:57:57 PM</td>
					<td class='step-details'>searchWord</td>
				</tr>
			</tbody>
		</table>
	</div>
							<ul class='screenshots'>
								<li><img data-featherlight='images/searchWord.png' width='10%' src='' data-src='images/searchWord.png'></li>
							</ul>
					</div>
				</li>
				
				
				<li class='test displayed active  pass' status='pass' bdd='false' test-id='7'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-3-9</span>
						<span class='test-name'>searchMutilWord</span>
						<span class='test-time'>Apr 17, 2018 3:58:01 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 17, 2018 3:58:01 PM</span>
	<span class='label end-time'>Apr 17, 2018 3:58:35 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 34s+1ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>GalaxyS5</span>
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
					<td class='timestamp'>3:58:35 PM</td>
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
				
				
				<li class='test displayed active  pass' status='pass' bdd='false' test-id='8'>
					<div class='test-heading'>
						<span class='test__id' style="display: none;">1-3-10</span>
						<span class='test-name'>searchPhoneNumber</span>
						<span class='test-time'>Apr 17, 2018 3:58:39 PM</span>
						<span class='test-status right pass'>pass</span>
					</div>
					<div class='test-content hide'>
<div class='test-time-info'>
	<span class='label start-time'>Apr 17, 2018 3:58:39 PM</span>
	<span class='label end-time'>Apr 17, 2018 3:59:07 PM</span>
	<span class='label time-taken grey lighten-1 white-text'>0h 0m 27s+840ms</span>
</div>
	<div class='test-attributes'>
			<div class='category-list'>
				<span class='category label white-text'>GalaxyS5</span>
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
					<td class='timestamp'>3:59:07 PM</td>
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
					<span class='strong'>1</span> test(s) failed, <span class='strong'>0</span> others
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
					<span class='strong'>1</span> step(s) failed, <span class='strong'>0</span> others
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
						<span class='category-name'>GalaxyS5</span>
						<span class='category-status right'>
							<span class='label pass'>7</span>
							<span class='label fail'>1</span>
						</span>
					</div>
					<div class='category-content hide'>
						<div class='category-status-counts'>
							<span class='label green accent-4 white-text'>Passed: 7</span>
							<span class='label red lighten-1 white-text'>Failed: 1</span>
							
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
										<td>Apr 17, 2018 3:54:54 PM</td>
										<td class='linked' test-id='1'>testCaseLogin</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
									<tr>
										<td>Apr 17, 2018 3:56:09 PM</td>
										<td class='linked' test-id='2'>TCChooseMode</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
									<tr>
										<td>Apr 17, 2018 3:56:20 PM</td>
										<td class='linked' test-id='3'>searchCountry</td>
										<td><span class='test-status fail'>fail</span></td>
									</tr>
									<tr>
										<td>Apr 17, 2018 3:56:23 PM</td>
										<td class='linked' test-id='4'>searchAddress</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
									<tr>
										<td>Apr 17, 2018 3:57:04 PM</td>
										<td class='linked' test-id='5'>searchFreeword</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
									<tr>
										<td>Apr 17, 2018 3:57:32 PM</td>
										<td class='linked' test-id='6'>searchWord</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
									<tr>
										<td>Apr 17, 2018 3:58:01 PM</td>
										<td class='linked' test-id='7'>searchMutilWord</td>
										<td><span class='test-status pass'>pass</span></td>
									</tr>
									<tr>
										<td>Apr 17, 2018 3:58:39 PM</td>
										<td class='linked' test-id='8'>searchPhoneNumber</td>
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
<!-- category view --><div id='exception-view' class='view hide'>
	
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
			<h5>Exceptions</h3>
			<ul id='exception-collection' class='exception-collection'>
				
				<li class='exception displayed active'>
					<div class='exception-heading'>
						<span class='exception-name'>java.lang.AssertionError</span>
						<span class='exception-count right'><span class='label red lighten-1 white-text'>1</span></span>
					</div>
					<div class='exception-content hide'>	
						<div class='exception-tests'>
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
										<td>Apr 17, 2018 3:56:20 PM</td>
										<td class='linked' test-id='3'>searchCountry</td>
										<td><pre><textarea>java.lang.AssertionError: App not have test case! expected:<true> but was:<false>
	at org.testng.Assert.fail(Assert.java:89)
	at org.testng.Assert.failNotEquals(Assert.java:489)
	at org.testng.Assert.assertTrue(Assert.java:37)
	at test.TCCTestcaseSearch.searchCountry(TCCTestcaseSearch.java:35)
	at sun.reflect.NativeMethodAccessorImpl.invoke0(Native Method)
	at sun.reflect.NativeMethodAccessorImpl.invoke(Unknown Source)
	at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source)
	at java.lang.reflect.Method.invoke(Unknown Source)
	at org.testng.internal.MethodInvocationHelper.invokeMethod(MethodInvocationHelper.java:80)
	at org.testng.internal.Invoker.invokeMethod(Invoker.java:702)
	at org.testng.internal.Invoker.invokeTestMethod(Invoker.java:894)
	at org.testng.internal.Invoker.invokeTestMethods(Invoker.java:1219)
	at org.testng.internal.TestMethodWorker.invokeTestMethods(TestMethodWorker.java:127)
	at org.testng.internal.TestMethodWorker.run(TestMethodWorker.java:111)
	at org.testng.TestRunner.privateRun(TestRunner.java:768)
	at org.testng.TestRunner.run(TestRunner.java:617)
	at org.testng.SuiteRunner.runTest(SuiteRunner.java:334)
	at org.testng.SuiteRunner.access$000(SuiteRunner.java:37)
	at org.testng.SuiteRunner$SuiteWorker.run(SuiteRunner.java:368)
	at org.testng.internal.thread.ThreadUtil$2.call(ThreadUtil.java:64)
	at java.util.concurrent.FutureTask.run(Unknown Source)
	at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source)
	at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source)
	at java.lang.Thread.run(Unknown Source)
</textarea></pre></td>
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
			<h5 class='exception-name'></h5>
		</div>
	</div>
</div>
<!-- exception view --><div id='dashboard-view' class='view hide'>
	<div class='card-panel transparent np-v'>
		<h5>Dashboard</h5>

		<div class='row'>
			<div class='col s2'>
				<div class='card-panel r'>
					Tests
					<div class='panel-lead'>8</div>
				</div>
			</div>
			<div class='col s2'>
				<div class='card-panel r'>
					Steps
					<div class='panel-lead'>8</div>
				</div>
			</div>
			<div class='col s2'>
				<div class='card-panel r'>
					Start
					<div class='panel-lead'>Apr 17, 2018 3:54:32 PM</div>
				</div>
			</div>
			<div class='col s2'>
				<div class='card-panel r'>
			 		End
			 		<div class='panel-lead'>Apr 17, 2018 3:59:10 PM</div>
				</div>
			</div>
			<div class='col s2'>
				<div class='card-panel r'>
					Time Taken
					<div class='panel-lead'>277,323ms</div>
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
								<td>Windows 10</td>
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
							<td>GalaxyS5</td>
							<td>7</td>
							<td>1</td>
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
				failParent: 1,
				fatalParent: 0,
				errorParent: 0,
				warningParent: 0,
				skipParent: 0,
				exceptionsParent: 1,
				
				passChild: 7,
				failChild: 1,
				fatalChild: 0,
				errorChild: 0,
				warningChild: 0,
				skipChild: 0,
				infoChild: 0,
				exceptionsChild: 1,
				
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
