<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>


<!-- Google Website Optimizer Tracking Script -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['gwo._setAccount', 'UA-1251493-9']);
  _gaq.push(['gwo._trackPageview', '/4191598815/goal']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- End of Google Website Optimizer Tracking Script -->


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Keywords" content="Formspider, Downloads">
<meta name="robots" content="index, follow">
<meta name="Language" content="en"> 

<title>Formspider</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/product.css" rel="stylesheet" type="text/css">

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1251493-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 

</head>
<body>

<div class="container">
  <div class="header">
  	<?php $link_name= "Getting Started Guide" ?>
  	<?php include ('mainmenu.php'); ?>
  </div>
 
  <div class="content">  	
  	<img src="/images/line.png" alt="line" />
  	<br/>
  	<br/>
	
	<h2>Change Log for Formspider 1.2.1<br/>12 December 2012</h2>
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Updated Oracle JDBC driver.</li>
	  <li>Fixed column function bug on non-editable Grids.</li>
	  <li>Fixed debug window scrollbar issue on Chrome and IE.</li>
	  <li>Fixed security alert on multiple grids with same datasource.</li>
	  <li>Security improvement for preventing xss on url.</li>
	  <li>Added icons for Grid functions.</li>
	</ul>
	
	<h2>Change Log for Formspider 1.2.0<br/>06 December 2012</h2>
	<h3>Highlights</h3>
	<p><i><b>Interactive Reporting features for the Grid component such as column add/remove, functions and custom search criteria.</b></i></p>
	<p><i><b>Security improvements. Formspider now locks server side resources automatically and rejects any input from UI Components that are not editable by the user in the current application state.</b></i></p>
	<p><i><b>Gauge Charts.</b></i></p>
	<p><i><b>Significantly faster middle tier with WebLogic and GlassFish support.</b></i></p>
	
	<h3>New Features</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>New chart type Gauge is added.</li>
	  <li>New "enableColumnSort" attribute is added to Grid component . This attribute affects all columns in Grid component. If users want to make only individual columns sortable, "sortable" attribute on the "column" attribute tag can be used. (columns with CLOB/BLOB datatype, radiobuttons and columns not bound to any datasource column, can not be sortable)</li>
	  <li>New "click" event is added to PieChart.</li>
	  <li>Interactive Reporting features are added to the Grid component. Application users can now hide columns in a grid, apply search criteria to any grid column, apply functions such as sum, count, avg to grid column. Resizing and moving grid columns were already possible. These features can be enabled and disabled by the developer using grid attributes "enableColumnHide", "enableColumnFunctions", "enableColumnFilter". The "columnsResizable" attribute is re-named as "enableColumnResize" and the "columnsMovable" attribute re-named as "enableColumnMove".</li>
	  <li>KeyEvents are added to Tree component.</li>
	  <li>New "Case Transform" attribute is added to Domains which can be used to make user entered text in UI components uppercase or lowercase automatically.</li>
	  <li>New "styleClass" attribute is added to components. Developers can now reference CSS class names in the Panel XML.</li>
	  <li>Formspider middle tier now can run on WebLogic and GlassFish. The new middle tier is also significantly faster.</li>
	</ul>
	
	<h3>Behavior Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>When a user changes the page in a grid, Formspider sets first row as current row. Formspider does not change the page when last row is deleted in the page while datasource fetchmode is Paging, but if fetchmode is FetchAll, current page will be the previous one.</li>
	  <li>The "heightPolicy" attribute is removed from XYCell.</li>
	  <li>Formspider does not show error messages that are logged by API_ERROR.log API, if an OnError event is defined.</li>
	  <li>In debug mode, Formspider displays the KEY value instead of a null string for language keys if the translation is not defined in the current Language.</li>
	  <li>If current tab is closed in TabbedPanel, the focus will go to the next tab on the right. If closed tab is the last one on the right, the left tab will be the current tab. (Before this release, if current tab is closed, Formspider was moving the focus to the first tab of the TabbedPanel)</li>
	</ul>
	
	<h3>Developer APIs</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>New "getDefaultQuery" and "setDefaultQuery" APIs are added to API_DATASOURCE to implement better performing queries depending on the bind variables that are used.</li>
	  <li>New "getBaseURL" and "getKeyEventPoint" APIs are added to API_APPLICATION.</li>
	  <li>API_ENGINE is removed.</li>
	  <li>New "getUserIP" and "close" APIs are added to API_SESSION.</li>
	  <li>New "getListDatasource" API is added to API_COMPONENT.</li>
	  <li>New "setValue" API is added to API_CHART.</li>
	  <li>New "getLogs" API is added to API_ERROR.</li>
	  <li>New "importFromFile" API is added to API_DATASOURCE. It enables importing excel files into specified Formspider datasource objects.</li>
	</ul>
	
	<h3>Security</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Formspider locks server side resources automatically and rejects any input from UI Components that are not editable by the user at the current application state. </li>
	  <li>Removed session ID value from response when using printToExcel API.</li>
	  <li>Prevented opening Formspider applications inside IFrames from other domains.</li>
	  <li>Prevented executing javascript code appended to Formspider application URL's.</li>
	</ul>
	
	<h3>Installation</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Added option to the installer to connect to the database using service name.</li>
	  <li>Added ability to continue installation even if XSD registration fails.</li>
	  <li>Installer now validates XDB installation in the database before starting to install Formspider.</li>
	</ul>
	
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>MiddleTier performance improvements.</li>
	  <li>Safari browser bug fixes and enhancements.</li>
	  <li>The "sortMode" attribute replaced with "sortable" in Grid columns.</li>
	  <li>Solved displaying wrong values problem on PopupMenu labels and tooltips when API_APPLICATION.setLanguage ise called.</li>
	  <li>Change current page to first one when using API_DATASOURCE.clear/deleteAllRows APIs. Also CurrentPage component is modified automatically.</li>
	  <li>Raise a meaningful error message when there is an unsupported column type in Datasource Definition query.</li>
	  <li>Fixed disabled Calendar component issues.</li>
	  <li>Using float values with "longitude" and "latitude" attributes of Map and "font-size" attribute of components are supported.</li>
	  <li>Solved XYChart/CategoryChart initialization problem when queryOnInitialize attribute of datasource is 'N'.</li>
	  <li>Solved initialize problem of DateField component which has default value.</li>
	  <li>Solved the problem which occurs when Search button pressed without value in LOV.</li>
	  <li>Solved application close or restart problem at IE8.</li>
	  <li>Solved using API_APPLICATION.getMultiLingualValue problem in PostOpen event of Application.</li>
	  <li>Modified all servlets to use only one package in database.</li>
	  <li>Added session ID parameter and validate it in all servlets.</li>
	  <li>Formspider now returns right position values when tree node is right clicked.</li>
	  <li>Formspider no more deletes snapshots when API_DATASOURCE.deleteRow delete all rows.</li>
	  <li>Returned focus to right component when PopupMenu is closed by ESC button.</li>
	  <li>Solved the problems moving focus with TAB button.</li>
	  <li>Deprecated "transferFocus" attribute.</li>
	  <li>Fixed combobox key navigation problems.</li>
	  <li>Fixed browser cache problems on IE.</li>
	</ul>
	
	<br/>
  	<br/>
	
	
	
	<h2>Change Log for Formspider 1.1.1<br/>22 August 2012</h2>
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Fixed LOV search field bugs.</li>
	  <li>Fixed the issue of showing dynamic panels on IE.</li>
	  <li>Fixed XMLEditor bugs on Safari.</li>
	</ul>
	<br/>
  	<br/>
	
	<h2>Change Log for Formspider 1.1<br/>01 August 2012</h2>
	
	
	<h3>New Features</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Formspider now posts DML operations to the database in the order they were created by the user.</li>
	  <li>Replaced "sortable" attribute of Grid component with "sortMode". Available options are "InDatasource" and "ExecuteQuery". Existing "Y" values are migrated as "InDatasource".</li>
	  <li>Replaced "displayValue" attribute of ComboBox component with "SelectionColumn" . Existing "Y" values are replaced with the value of ValueColumn attribute and existing "N" values are replaced with the attribute of DisplayColumn.</li>
	  <li>Support Datasource FetchMode attribute while printing to Excel file.</li>
	  <li>Support "allowPopups" attribute on AlertClose and ExternalMethod MethodInvoked events.</li>
	  <li>Support for deploying to GlassFish.</li>
	  <li>Added ability to move Grid columns ("columnsMovable" attribute is added to the Grid component).</li>
	  <li>Added ability to resize Grid columns ("columnsResizable" attribute is added to the Grid component).</li>
	  <li>Added ability to use icon and label together on buttons.</li>
    </ul>
	
	<h3>Developer APIs</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>New API API_DATASOURCE.getColumnNames.</li>
	  <li>API_DATASOURCE.getRequiredColumnViolations is updated to return the datatype of the column.</li>
	  <li>API_TABBEDPANEL.getCurentTabName API is updated to return the name of the previous Tab and API_TABBEDPANEL.getCurentTabOrder API is updated to return the order of the previous Tab in PreTabChanged event. Users need to update existing "PreTabChanged" events to "PostTabChanged".</li>
	  <li>API_ERROR.log API adds logs to debug window.</li>
	</ul>
	
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Improved appearance of paging components.</li>
	  <li>Validate the Color parameter value on API_CALENDAR.setActivity and API_CALENDAR.addActivity APIs.</li>
	  <li>Trigger CurrentRowChanged event when api_datasource.executeQuery API is executed for a datasource which has rows.</li>
	  <li>Solved errors occuring while adding a panel to a tab or removing a panel from a tab without initializing them.</li>
	  <li>Solved errors in API_PANEL.getWindow API when a panel in a tab is moved to another tabbedpanel.</li>
	  <li>Solved XSD validation problem when an element has no defined child element but has white spaces as its child.</li>
	  <li>Solved problem of generating redundant delta for DD-MON-YYYY dateFormat.</li>
	  <li>Solved the issue of API_DATASOURCE.loadSnapshot API not working properly when data-driven grid rows are sorted by user (by clicking on the header of a column).</li>
	  <li>Solved the issue of displaying null values in CurrentPage and TotalPage components when the QueryOnInitialize value of a datasource is "Y".</li>
	  <li>Solved returning wrong value problem of API_COMPONENT.getSelectedRowIDs API when a selected row is unselected in a Grid which has multiple selected rows.</li>
	  <li>Solved the Map component problem in which a new Marker added before displaying the Map is not shown in the Map.</li>
	  <li>Solved the problem where checking a CheckBox in a Grid using the Space Bar causes all CheckBoxes in the same row changed their status to checked.</li>
	  <li>Fixed issue prevented multiple applications showing up in the same page.</li>
	</ul>
	
	
	
	
	<br/>
  	<br/>
	
  		<h2>Change Log for Formspider 1.0<br/>21 May 2012</h2>
  	
  <h3>Engine</h3>
  <ul style="margin-left:10px;margin-bottom:10px;">
    <li>Formspider now enforces <a href="http://theformspider.com/learningcenter/tutorial-25-concurrency-control-mechanism/" target="_blank">Concurrency</a> </li>
	<li>Line, Box, <a href="http://theformspider.com/learningcenter/tutorial-41-how-to-use-map/" target="_blank">Map</a>, <a href="http://theformspider.com/learningcenter/tutorial-37-how-to-build-a-calendar-part-i/" target="_blank">Calendar</a> and <a href="http://theformspider.com/learningcenter/tutorial-27-how-to-build-a-timer/" target="_blank">Timer</a> components are added</li>
	<li>"currentRowChanged" event is added to Datasources</li>
	<li>You can now bind the Image component to a datasource column(BLOB)</li>
	<li>New revamped Chart components, implemented in JavaScript</li>
	<li><a href="http://theformspider.com/learningcenter/tutorial-28-how-to-export-data-to-excel-from-formspider-datasources-and-grids/" target="_blank">Export to Excel file</a> from Datasources and Grid component</li>
	<li>"sessionExpired" event is added to Application</li>
	<li>CHECKBOX components can now be in BUTTONGROUPs</li>
	<li>New <a href="http://theformspider.com/learningcenter/tutorial-38-how-to-use-paging-components/" target="_blank">paging components</a>: FirstPage, LastPage, PreviousPage, NextPage, CurrentPage and TotalPage are added</li>
	<li>New easier paging in grids</li>
	<li>Ability to <a href="http://theformspider.com/learningcenter/tutorial-29-how-to-share-session-across-multiple-formspider-applications/" target="_blank">run multiple Formspider applications in same web session</a></li>
	<li><a href="http://theformspider.com/learningcenter/tutorial-16-integrating-jasperreports-into-formspider-using-htmlrenderer-component/" target="_blank">Jasper</a> and <a href="http://theformspider.com/learningcenter/tutorial-30-integrating-oracle-reports-into-formspider-using-htmlrenderer-component-2/" target="_blank">Oracle Reports</a> servlets are integrated to the Formspider middle tier</li>
	<li>User Closable tabs. Also "preTabClosed" and "postTabClosed" events are added</li>
	<li>"<a href="http://theformspider.com/learningcenter/tutorial-42-how-to-use-when-current-row-is-deleted-and-force-current-row/" target="_blank">Force Current Row</a>" and "<a href="http://theformspider.com/learningcenter/tutorial-42-how-to-use-when-current-row-is-deleted-and-force-current-row/" target="_blank">When current row is deleted</a>" options added to Datasources</li>
	<li>Ability to set "thousandSeperator" and "decimalSeperator" parameters for Languages</li>
	<li>Drag&drop for Tree component nodes</li>
	<li>Resizable Grid columns</li>
	<li>Ability to define checked and unchecked values for CHECKBOX</li>
	<li>New "enable" attribute is added to TABBEDPANEL tabs</li>
	<li>New "displayValue" attribute is added to COMBOBOX component</li>
	<li>New color "Transparent" is added</li>
  </ul>
  
  <h3>Developer APIs</h3>
  <ul style="margin-left:10px;margin-bottom:10px;">
    <li>New API "API_ALERT.setTitle" is added</li>
	<li>New API "API_APPLICATION.getOperatingSystem" is added</li>
	<li>New API "API_APPLICATION.restart" is added</li>
	<li>New parameter "keepSession" is added to "API_APPLICATION.run"</li>
	<li>New API "API_BUTTONGROUP.getDatasource" is added</li>
	<li>New APIs "API_COMPONENT.setIcon and API_COMPONENT.getIcon" are added</li>
	<li>New API "API_COMPONENT.getDatasource" is added</li>
	<li>New APIs "API_DATASOURCE.printToExcel" and "API_COMPONENT.printToExcel" to export excel file from DATASOURCE and GRID are added</li>
	<li>New APIs "API_DATASOURCE.setRowNumber" and "API_DATASOURCE.setRowNumberByPK" are added</li>
	<li>New API "API_DATASOURCE.doCommit" is added</li>
	<li>New APIs "API_DATASOURCE.firstRow, API_DATASOURCE.previousRow, API_DATASOURCE.nextRow and API_DATASOURCE.lastRow" are added</li>
	<li>New API "API_SESSION.authenticate" is added</li>
	<li>New APIs "API_TABBEDPANEL.setTabVisible" and "API_TABBEDPANEL.isTabVisible" are added</li>
	<li>New API "API_TABBEDPANEL.getTabPanel" is added</li>
	<li>New APIs "API_TABBEDPANEL.getClosedTabName" and "API_TABBEDPANEL.getClosedTabOrder" are added</li>
	<li>New APIs "API_TABBEDPANEL.setTabClosable" and "API_TABBEDPANEL.isTabClosable" are added</li>
	<li>New API "API_TREE.getDraggedNode" is added</li>
	<li>New APIs "API_DEBUG, API_CALENDAR, API_TIMER, API_MAP" are added</li>
  </ul>
  
  <h3>Security</h3>
  <ul style="margin-left:10px;margin-bottom:10px;">
	<li>CDATA is no longer used in communication XML to prevent XSS attacks</li>
	<li>The "API_SESSION.authenticate" API is added to change session ID during runtime</li>
	<li>Keep user IP address in user session and prevent access to the user session from different IP addresses</li>
	<li>Hide error messages in Production</li>
	<li>Added session id parameter to all servlets</li>
  </ul>
  
  <h3>IDE</h3>
  <ul style="margin-left:10px;margin-bottom:10px;">
    <li>New LOV dialog (No XML anymore for LOVs) is added</li>
	<li>New Grid and Form wizards are added (accessible from the Datasource right click menu)</li>
	<li>API Documantation is added to HELP menu</li>
	<li>About dialog is changed (Removed old connection parameters)</li>
  </ul>
  
  

  <p>Gerger Team,</p>

  <p><a class="c9" href="http://www.theformspider.com">theformspider.com</a></p>

  <p>contact@theformspider.com</p>

    <!-- end .content --></div>
  <?php include ('footer.php'); ?>
  <!-- end .container --></div>
</body>
</html>
