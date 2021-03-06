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
    // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- End of Google Website Optimizer Tracking Script -->


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Keywords" content="Formspider, Downloads">
<meta name="robots" content="index, follow">
<meta name="Language" content="en"> 

<title>Formspider</title>
<!--link href="master.css" rel="stylesheet" type="text/css"-->
<link href="css/style.css?v=1" rel="stylesheet" type="text/css">
<link href="css/product.css" rel="stylesheet" type="text/css">

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1251493-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 

</head>
<body>

<div id="changelog" class="container">
  <div class="header">
  	<?php $link_name= "Getting Started Guide" ?>
  	<?php include ('mainmenu.php'); ?>
  </div>
 
  <div class="content">  	
  	<img src="images/line.png" alt="line" />
  	<br/>
  	<br/>
	
	<h2>Change Log for Formspider 1.9<br/>27 August 2015</h2>
	<h3>New Features</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
		<li><a style="color: blue;" href="http://theformspider.com/learningcenter/?p=3394" target="_blank">Stateful database connections.</a> This makes migrating Oracle Forms applications to Formspider much easier.</li>
		<li><a style="color: blue;" href="http://theformspider.com/learningcenter/?p=3570" target="_blank">Six beautiful new themes</a> with modern, flat design.</li>
		<li><a style="color: blue;" href="http://theformspider.com/learningcenter/?p=3401" target="_blank">Oracle ROWID support for DML.</a> This feature makes it much easier to use datasource definitions with multi column primary keys in Formspider.</li>
		<li><a style="color: blue;" href="http://theformspider.com/learningcenter/?p=3409" target="_blank">Dynamic Where Clauses</a> to create more efficient queries.</li>
		<li><a style="color: blue;" href="http://theformspider.com/learningcenter/?p=3455" target="_blank">Search Panel Wizard</a> to create search screens faster.</li>
	</ul>
	<h3>Developer APIs</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
		<li>api_datasource.setWhereClause</li>
		<li>New API’s in api_panel:addStyleClass,getStyleClass, hasStyleClass, setStyleClass</li>
		<li>New API in api_component: setStyleClass</li>
		<li>New BDF_SEARCH API to create customized search screens automatically. (Tutorial coming soon)</li>
		<li>New APIs for stateful database connections in api_application: setStateful and isStateful</li>
		<li>New API’s for Oracle ROWID support in the api_datasource package: getRowIDByOraRowID, getRowNumberInPageByOraRowID, getColumnValueBLByOraRowID, getColumnValueCLByOraRowID, getColumnValueDTByOraRowID, getColumnValueNRByOraRowID, getColumnValueTXByOraRowID, getRowByOraRowID, getOraRowID, getRowStatusByOraRowID, getRowNumberByOraRowID, setColumnValueByOraRowID, setRowNumberByOraRowID, setCurrentRowByOraRowID, refreshRowByOraRowID, deleteRowByOraRowID</li>
	</ul>
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
		<li>Version Control My Objects Dialog has a new diff viewer which shows the difference between the current modified object XML and the last committed XML version of the object in Git.</li>
		<li>Redesigned the way the grid columns auto-expand. The behavior is much more sensible and predictable now.</li>
		<li>Added Lithuanian translations to Calendar, Date and Grid component labels.</li>
		<li>Fixed master-detail synchronization bugs.</li>
		<li>Implemented new faster application export. The export XML is now human readable.</li>
		<li>Discontinued partial export. Simply, export the full application and edit its content to create a partial export file. This is very easy now because the Formspider Export XML is human readable.</li>
		<li>Fixed a bug where the middle tier inadvertently changes the NLS language setting of the database</li>
		<li>Fixed a bug where deleting a key from the security repo did not work properly.</li>
		<li>Fixed. Reference to a non-existing timer object in api_timer.startTimer raised an unhandled  user defined exception.</li>
		<li>Fixed. List component did not work properly if too many items are selected.</li>
		<li>Minor improvements in the API documentation</li>
		<li>Fixed the issue of checking window.ActiveXObject in IE11</li>
		<li>Fixed several minor IE bugs</li>
		<li>Fixed Invalid Event Data error</li>
	</ul>
	
	
	<br/>

	<!--a href="download.php" class="download-link" >Download Formspider 1.4.0 &rarr;</a-->
	<div id="cta"><!--Try now &rarr; &nbsp;&nbsp;
		<a href="http://formspideronline.com" class="button blue mid-height" id="cloud"><span></span> Cloud </a-->
		<a href="download.php" class="button green mid-height" id="desktop"><span></span> Download </a>
	</div>
	
	<br/>
	<br/>
	<br/>
	<br/>

	<h2>Change Log for Formspider 1.8.1<br/>26 September 2014</h2>
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Improved license management.</li>
	  <li>Minor bug fixes.</li>
	</ul>
	
	<br/>
	<br/>
	<br/>
	<br/>

	<h2>Change Log for Formspider 1.8.0<br/>28 August 2014</h2>
	<h3>New Features</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Implemented <b><a href="http://theformspider.com/blog/?p=1247" target="_blank">Version Control</a></b>.</li>
	</ul>
	<h3>Developer APIs</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>New API "API_VERSIONCONTROL" is added.</li>
	</ul>
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Fixed button group component import problem when database NLS_DATE_FORMAT is DD/MM/RR.</li>
	  <li>Solved null value problem on textField component having case transform enabled domain.</li>
	  <li>Fixed list component empty display issue.</li>
	  <li>DB engine performance enhancements.</li>
	  <li>Fixed Formspider IDE XML Editor "r" character issue on Google Chrome. </li>
	  <li>Solved decimal separator issue when changing application's language at runtime.</li>
	</ul>
	
	
	<br/>
	<br/>


	<h2>Change Log for Formspider 1.7.0<br/>08 March 2014</h2>
	<h3>New Features</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Implemented <b><a href="http://theformspider.com/blog/2014/03/08/formspider-desktop-1-7-is-available/" target="_blank">Security Repository</a></b>.</li>
	  <li>Added ability to invalidate browser cache for multilingual key files through Formspider IDE.</li>
	</ul>
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Fixed infinite scroll issues.</li>
	  <li>Solved LOV column display problem when using the "API_LOV.setColumnVisible" API.</li>
	  <li>Fixed hyperlink component label refresh issue.</li>
	</ul>
	
	
	<br/>
	<br/>

	
	<h2>Change Log for Formspider 1.6.0<br/>29 Oct 2013</h2>
	<h3>New Features</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Implemented <b>Infinite Scroll</b> for the datasources.</li>
	  <li>Added "sortBy" attribute to Grid Column.</li>
	</ul>
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Added ability to retrieve the key combination through "API_APPLICATION.getEvent" API.</li>
	  <li>Solved null value representation problem of date values in LOV.</li>
	  <li>Fixed grid row focus issue on key navigation.</li>
	  <li>Fixed grid header display issue caused by "API_COMPONENT.setGridState" API on IE.</li>
	</ul>
	
	
	<br/>
	<br/>
	
	
	<h2>Change Log for Formspider 1.5.0<br/>15 Aug 2013</h2>
	<h3>New Features</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Implemented <b>Team Coding</b>.</li>
	</ul>
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Fixed column order problem on "API_COMPONENT.setGridState" API.</li>
	  <li>Fixed focus traversal problem of panels with line component.</li>
	  <li>Fixed a percentage column width bug in Grid.</li>
	  <li>Fixed ComboBox filter bug about space character.</li>
	  <li>Fixed XYChart refresh bug.</li>
	  <li>Fixed panel disableAll bug on IE.</li>
	  <li>Fixed multilingual grid header label problem on "API_COMPONENT.printToExcel" API.</li>
	</ul>
	
	<br/>
	<br/>
	
	<h2>Change Log for Formspider 1.4.0<br/>19 June 2013</h2>
	<h3>New Features</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>New component <b>MenuButton</b>.</li>
	  <li>Implemented <b>Column Locking</b> feature for the Grid component. This enables users to view a grid with a lot of columns without losing context.</li>
	  <li>Added ability to <b>save, restore Grid State</b>. Developers can now retrieve a grid's state and apply it later
          back on to the grid to implement saved custom reports for users.</li>
	  <li>Added "emptyText" attribute to ComboBox.</li>
	  <li>Added "autoExpand" attribute to Grid.</li>
	  <li>Added "firstDayOfWeek" attribute to DateField.</li>
	</ul>
	
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Added icons to grid header to indicate the applied function.</li>
	  <li>Added hover effect for editable cells in grid.</li>
	  <li>LOV performance enhancements.</li>
	  <li>Fixed AccordionPanel issues.</li>
	  <li>Fixed grid column resizing issues.</li>
	  <li>Fixed grid multiSelect issues.</li>
	  <li>Fixed grid first&last row focus issue on key navigation.</li>
	</ul>

	<br/>
	<br/>
	<br/>
	<br/>
	
	<h2>Change Log for Formspider 1.3.2<br/>30 April 2013</h2>
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Fixed installation problem on Windows platforms having Java 7 Update 21 installed.</li>
	  <li>Fixed excel file import bug.</li>
	  <li>Solved excel file export problem in XLSX format.</li>
	</ul>
	
	<h2>Change Log for Formspider 1.3.1<br/>24 April 2013</h2>
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Fixed combobox collapse problem.</li>
	</ul>
	
	<h2>Change Log for Formspider 1.3.0<br/>05 April 2013</h2>
	<h3>New Features</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Added a null representation attribute "emptyText" for TextField, DateField and TextArea components.</li>
	  <li>Added ability to download file from BLOB column of the datasource.</li>
	  <li>Added ability to add Image component to Grid.</li>
	  <li>New "LOVField" component is added.</li>
	  <li>The "icon" attribute and "iconClick" event is added to TextField component.</li>
	  <li>The "rowHeight" attribute is added to Grid component.</li>
	</ul>
	
	<h3>Behavior Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Better filtering for combobox. Users may filter the data by typing.</li>
	  <li>FocusGain, FocusLost and KeyEvents are removed from TextLabel and FileUpload components.</li>
	  <li>ValueChanged and FocusLost event order changed. ValueChanged fires first.</li>
	  <li>FocusLost & FocusGain events are not fired when user clicks out of browser.</li>
	</ul>
	
	<h3>Developer APIs</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>New "removePanel" API is aded to API_PANEL which removes a panel without the need to know its parent panel.</li>
	  <li>Added ability to get focused component in Grid.</li>
	</ul>
	
	<h3>Bug Fixes, Minor Enhancements and Changes</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>Fixed FocusGain not firing bug when moving cursor between two Grids.</li>
	  <li>Fixed the problem between "backgroundColorColumn" attribute and selected row color at the editable TextFields in Grid.</li>
	  <li>Solved translation problem on LOV search labels.</li>
	  <li>Solved "API_DATASOURCE.setQuery" and "API_DATASOURCE.setFilterWhereClause" problems on PreQuery event.</li>
	  <li>Prevented recursive panel inclusion in the IDE.</li>
	  <li>Fixed calculation of Grid row heights when row height is Dynamic.</li>
	  <li>Prevented sending unnecessary changes when there is numberMask at uneditable TextField component.</li>
	  <li>Fixed Grid key navigation issues.</li>
	  <li>Fixed ComboBox key navigation in Grid.</li>
	</ul>
	
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
	<p><i><b><a href="http://theformspider.com/learningcenter/tutorial-45-how-to-build-an-interactive-report/" target="_blank">Interactive Reporting features</a> for the Grid component such as column add/remove, functions and custom search criteria.</b></i></p>
	<p><i><b>Security improvements. Formspider now locks server side resources automatically and rejects any input from UI Components that are not editable by the user in the current application state.</b></i></p>
	<p><i><b><a href="http://theformspider.com/learningcenter/tutorial-46-how-to-use-gauge-chart/" target="_blank">Gauge Charts.</a></b></i></p>
	<p><i><b>Significantly faster middle tier with WebLogic and GlassFish support.</b></i></p>
	
	<h3>New Features</h3>
	<ul style="margin-left:10px;margin-bottom:10px;">
	  <li>New chart type <a href="http://theformspider.com/learningcenter/tutorial-46-how-to-use-gauge-chart/" target="_blank">Gauge</a> is added.</li>
	  <li>New "enableColumnSort" attribute is added to Grid component . This attribute affects all columns in Grid component. If users want to make only individual columns sortable, "sortable" attribute on the "column" attribute tag can be used. (columns with CLOB/BLOB datatype, radiobuttons and columns not bound to any datasource column, can not be sortable)</li>
	  <li>New "click" event is added to PieChart.</li>
	  <li><a href="http://theformspider.com/learningcenter/tutorial-45-how-to-build-an-interactive-report/" target="_blank">Interactive Reporting features</a> are added to the Grid component. Application users can now hide columns in a grid, apply search criteria to any grid column, apply functions such as sum, count, avg to grid column. Resizing and moving grid columns were already possible. These features can be enabled and disabled by the developer using grid attributes "enableColumnHide", "enableColumnFunctions", "enableColumnFilter". The "columnsResizable" attribute is re-named as "enableColumnResize" and the "columnsMovable" attribute re-named as "enableColumnMove".</li>
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
