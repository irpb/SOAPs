<?php 
 include('../lib/main-header.php');
?>
<head><title>Otolaryngology - SOAPnote.org</title></head>
<ul class="breadcrumb">
    <li><a href="/">Home</a></li>
  <li><a href="/categories/">Categories</a></li>
    <li class="active">Otolaryngology</li>
</ul>

<div id="container" class="container">
<ul class="filterSection">
    <li>
        <strong>Show:</strong>
        <input checked="true" type="checkbox" value="calc"/>
        <label>Calculator</label><img src="../lib/calculator.png">
    </li>
    <li>
        <input checked="true" type="checkbox" value="note"/>
        <label>Note</label><img src="../lib/page_white_text.png">
    </li>
</ul>
<ul id="itemsToFilter">
	<?php include '../lib/menu-structure/cat-ear-nose-throat.php';?>						
</ul></div>
<?php 
 include('../lib/main-footer.php');
?>