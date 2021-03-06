<link rel="stylesheet" type="text/css" href="../summary.css"/> 
<div class="container"><div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.autoLoad">autoLoad</a> <span>- Boolean, default = true</span>
</div>
<div class="obj-property-desc">
	Indicates if the records should be loaded from the server automatically as user scrolls.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.buffered">buffered</a> <span>- Integer, default = 0</span>
</div>
<div class="obj-property-desc">
	Number of buffered records.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.columnGroups">columnGroups</a> <span>- Array, default = []</span>
</div>
<div class="obj-property-desc">
	Array of column group objects. 
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.columns">columns</a> <span>- Array, default = []</span>
</div>
<div class="obj-property-desc">
	Array of column objects. 
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.fixedBody">fixedBody</a> <span>- Boolean, default = true</span>
</div>
<div class="obj-property-desc">
	Indicates if the body of the grid is of fixed height.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.header">header</a> <span>- String, default = ''</span>
</div>
<div class="obj-property-desc">
	The header of the grid. 
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.keyboard">keyboard</a> <span>- Boolean, default = true</span>
</div>
<div class="obj-property-desc">
	Indicates if grid should listen to keyboard.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.last">last</a> <span>- Object, default see below</span>
</div>
<div class="obj-property-desc">
	Internal grid's vairables.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.limit">limit</a> <span>- Integer, default = 100</span>
</div>
<div class="obj-property-desc">
	Number of records to return from remote data source per attempt.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.markSearchResults">markSearchResults</a> <span>- Boolean, default = true</span>
</div>
<div class="obj-property-desc">
	Indicates if result of the search should be highlighted.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.msgDelete">msgDelete</a> <span>- String, default = 'Are you sure you want to delete selected record(s)?'</span>
</div>
<div class="obj-property-desc">
	Confirmation message when user clicks the delete button.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.msgNotJSON">msgNotJSON</a> <span>- String, default = 'Returned data is not in valid JSON format.'</span>
</div>
<div class="obj-property-desc">
	Error message when server does not return JSON structure.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.msgRefresh">msgRefresh</a> <span>- String, default = 'Refreshing...'</span>
</div>
<div class="obj-property-desc">
	Message that appears when grid refreshes.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.multiSearch">multiSearch</a> <span>- Boolean, default = true</span>
</div>
<div class="obj-property-desc">
	Indicates if multi field search is allowed.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.multiSelect">multiSelect</a> <span>- Boolean, default = true</span>
</div>
<div class="obj-property-desc">
	Indicates if record multi select is allowed.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.multiSort">multiSort</a> <span>- Boolean, default = true</span>
</div>
<div class="obj-property-desc">
	Indicates if column multi sort is allowed.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.offset">offset</a> <span>- Integer, default = 0</span>
</div>
<div class="obj-property-desc">
	Number of records to skip when retriving records from remote source.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.postData">postData</a> <span>- Object, default = {}</span>
</div>
<div class="obj-property-desc">
	Map of additional parameter to submit to remove data source.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.ranges">ranges</a> <span>- Array, default = []</span>
</div>
<div class="obj-property-desc">
	Array of all ranges defined for the grid.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.recordHeight">recordHeight</a> <span>- Integer, default = 24</span>
</div>
<div class="obj-property-desc">
	Height of the record.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.records">records</a> <span>- Array, default = []</span>
</div>
<div class="obj-property-desc">
	Array of record objects. 
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.resizeBoxes">resizeBoxes</a> <span>- requestBoxes()</span>
</div>
<div class="obj-property-desc">
	Called to resize grid's elements.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.resizeRecords">resizeRecords</a> <span>- requestRecords()</span>
</div>
<div class="obj-property-desc">
	Called to resize grid's records.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.searchData">searchData</a> <span>- Array, default = []</span>
</div>
<div class="obj-property-desc">
	Array of search objects (submitted to data source for record filtering).
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.searches">searches</a> <span>- Array, default = []</span>
</div>
<div class="obj-property-desc">
	Array of search objects. 
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.selectType">selectType</a> <span>- String, default = 'row'</span>
</div>
<div class="obj-property-desc">
	Defines selection type.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.show">show</a> <span>- Object, default - see below</span>
</div>
<div class="obj-property-desc">
	Map of indicators which elements of the grid are visible.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.sortData">sortData</a> <span>- Array, default = []</span>
</div>
<div class="obj-property-desc">
	Array of sort objects (submitted to data source for record sorting).
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.summary">summary</a> <span>- Array, default = []</span>
</div>
<div class="obj-property-desc">
	Summary records that displayed on the bottom
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.toolbar">toolbar</a> <span>- Object, default = null</span>
</div>
<div class="obj-property-desc">
	Toolbar for the grid.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.total">total</a> <span>- Integer, default = 0</span>
</div>
<div class="obj-property-desc">
	Total number of records.
</div>

<div class="obj-property">
	<a href="<?=$site_root?>/docs/w2grid.url">url</a> <span>- String or Object, default = ''</span>
</div>
<div class="obj-property-desc">
	URL to the remote data source.
</div>

</div>