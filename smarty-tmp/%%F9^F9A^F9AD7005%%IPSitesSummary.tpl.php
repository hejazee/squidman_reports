<?php /* Smarty version 2.6.10, created on 2013-01-02 00:12:31
         compiled from IPSitesSummary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'bytesToHRF', 'IPSitesSummary.tpl', 86, false),array('modifier', 'string_trim', 'IPSitesSummary.tpl', 112, false),)), $this); ?>
<nobr>[
<a href="<?php echo $_SERVER['PHP_SELF']; ?>
?a=IPSummary&date=<?php echo $this->_tpl_vars['pageVars']['today']; ?>
">&lt;&lt;&lt; Back to "Hosts and Users Summary for a Specific Day"</a>
|
<a href="<?php echo $this->_tpl_vars['pageVars']['uri']; ?>
">Refresh this page</a>
]</nobr>

<table><tr><th style="font-size: 20px";>Sites Summary for a Specific Host, User and Date</th></tr></table>
<p>
<table>
  <tr><td style="font-size: 20px;">
    <?php if ($this->_tpl_vars['pageVars']['previousWeekID'] != ""): ?>
      <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?a=<?php echo $this->_tpl_vars['pageVars']['thisPage']; ?>
&hostiplong=<?php echo $this->_tpl_vars['pageVars']['hostiplong']; ?>
&date=<?php echo $this->_tpl_vars['pageVars']['previousWeek']; ?>
&usersID=<?php echo $this->_tpl_vars['pageVars']['previousWeekID']; ?>
">&lt;&lt;</a>
	<?php endif; ?>
    <?php if ($this->_tpl_vars['pageVars']['previousDateID'] != ""): ?>
      <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?a=<?php echo $this->_tpl_vars['pageVars']['thisPage']; ?>
&hostiplong=<?php echo $this->_tpl_vars['pageVars']['hostiplong']; ?>
&date=<?php echo $this->_tpl_vars['pageVars']['previousDate']; ?>
&usersID=<?php echo $this->_tpl_vars['pageVars']['previousDateID']; ?>
">&lt;</a>
	<?php endif; ?>
    <?php echo $this->_tpl_vars['pageVars']['thisDateFormatted']; ?>

    <?php if ($this->_tpl_vars['pageVars']['nextDateID'] != ""): ?>
      <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?a=<?php echo $this->_tpl_vars['pageVars']['thisPage']; ?>
&hostiplong=<?php echo $this->_tpl_vars['pageVars']['hostiplong']; ?>
&date=<?php echo $this->_tpl_vars['pageVars']['nextDate']; ?>
&usersID=<?php echo $this->_tpl_vars['pageVars']['nextDateID']; ?>
">&gt;</a>
	<?php endif; ?>
    <?php if ($this->_tpl_vars['pageVars']['nextWeekID'] != ""): ?>
      <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?a=<?php echo $this->_tpl_vars['pageVars']['thisPage']; ?>
&hostiplong=<?php echo $this->_tpl_vars['pageVars']['hostiplong']; ?>
&date=<?php echo $this->_tpl_vars['pageVars']['nextWeek']; ?>
&usersID=<?php echo $this->_tpl_vars['pageVars']['nextWeekID']; ?>
">&gt;&gt;</a>
	<?php endif; ?>
  </td></tr>
  <tr><td style="text-align:center;">
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?a=<?php echo $this->_tpl_vars['pageVars']['thisPage']; ?>
&hostiplong=<?php echo $this->_tpl_vars['pageVars']['hostiplong']; ?>
&date=<?php echo $this->_tpl_vars['pageVars']['today']; ?>
&usersID=<?php echo $this->_tpl_vars['pageVars']['usersID']; ?>
">[ Go to today ]</a>
  </td></tr>
</table>
<p>
<table>
  <tr><th colspan="2">Information box</th></tr>
  <form method="POST">
  <input type="hidden" name="hiddenSubmit" value="1">
  <input type="hidden" name="action" value="hostDescriptionUpdate">
  <tr><td>Host Name</td><td style="text-align:left;"><?php echo $this->_tpl_vars['pageVars']['host']['hostname']; ?>
</td></tr>
  <tr><td>Host IP</td><td style="text-align:left;"><?php echo $this->_tpl_vars['pageVars']['host']['ip']; ?>
</td></tr>
  <tr><td>Host Description</td><td style="text-align:left;"><input type="text" name="thisValue" value="<?php echo $this->_tpl_vars['pageVars']['host']['description']; ?>
"</td></tr>
  <tr><td>User Name</td><td style="text-align:left;"><?php echo $this->_tpl_vars['pageVars']['user']['authuser']; ?>
</tr>
  </form>
</table>
<p>
      [
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?a=<?php echo $this->_tpl_vars['pageVars']['thisPage']; ?>
&action=setDefaultView&OrderMethod=<?php echo $this->_tpl_vars['pageVars']['orderMethod']; ?>
&OrderBy=<?php echo $this->_tpl_vars['pageVars']['orderBy']; ?>
&ByteUnit=<?php echo $this->_tpl_vars['pageVars']['ByteUnit']; ?>
&date=<?php echo $this->_tpl_vars['pageVars']['date']; ?>
&hostiplong=<?php echo $this->_tpl_vars['pageVars']['hostiplong']; ?>
">
          Set this view as the default
        </a>
      ]
  <table>
    <tr>
      <th></th>
      <th>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['pageVars']['url']['siteASC']; ?>
"><img border="<?php echo $this->_tpl_vars['pageVars']['siteASCImageBorder']; ?>
" src="images/up-arrow.gif"></a>
          <?php echo $this->_tpl_vars['pageVars']['siteLabelStart']; ?>
SITE<?php echo $this->_tpl_vars['pageVars']['siteLabelEnd']; ?>

        <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['pageVars']['url']['siteDESC']; ?>
"><img border="<?php echo $this->_tpl_vars['pageVars']['siteDESCImageBorder']; ?>
" src="images/down-arrow.gif"></a>
      </th>
      <th width="110">
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['pageVars']['url']['bytesASC']; ?>
"><img border="<?php echo $this->_tpl_vars['pageVars']['bytesASCImageBorder']; ?>
" src="images/up-arrow.gif"></a>
          <?php echo $this->_tpl_vars['pageVars']['bytesLabelStart']; ?>
BYTES<?php echo $this->_tpl_vars['pageVars']['bytesLabelEnd']; ?>

        <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['pageVars']['url']['bytesDESC']; ?>
"><img border="<?php echo $this->_tpl_vars['pageVars']['bytesDESCImageBorder']; ?>
" src="images/down-arrow.gif"></a>
        <br>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['pageVars']['url']['B']; ?>
"><?php echo $this->_tpl_vars['pageVars']['BLabelStart']; ?>
B<?php echo $this->_tpl_vars['pageVars']['BLabelEnd']; ?>
</a>
        |
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['pageVars']['url']['K']; ?>
"><?php echo $this->_tpl_vars['pageVars']['KLabelStart']; ?>
K<?php echo $this->_tpl_vars['pageVars']['KLabelEnd']; ?>
</a>
        |
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['pageVars']['url']['M']; ?>
"><?php echo $this->_tpl_vars['pageVars']['MLabelStart']; ?>
M<?php echo $this->_tpl_vars['pageVars']['MLabelEnd']; ?>
</a>
        |
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['pageVars']['url']['G']; ?>
"><?php echo $this->_tpl_vars['pageVars']['GLabelStart']; ?>
G<?php echo $this->_tpl_vars['pageVars']['GLabelEnd']; ?>
</a>
      </th>
      <th>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['pageVars']['url']['cachePercentASC']; ?>
"><img border="<?php echo $this->_tpl_vars['pageVars']['cachePercentASCImageBorder']; ?>
" src="images/up-arrow.gif"></a>
          <?php echo $this->_tpl_vars['pageVars']['cachePercentLabelStart']; ?>
CACHE PERCENT<?php echo $this->_tpl_vars['pageVars']['cachePercentLabelEnd']; ?>

        <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['pageVars']['url']['cachePercentDESC']; ?>
"><img border="<?php echo $this->_tpl_vars['pageVars']['cachePercentDESCImageBorder']; ?>
" src="images/down-arrow.gif"></a>
      </th>
    </tr>
  <?php $this->assign('recordCount', '0'); ?>
  <?php $this->assign('bytesTotal', '0'); ?>
  <?php $_from = $this->_tpl_vars['pageVars']['summaryIPSites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['record']):
?>
  <tr onMouseOver="this.bgColor='#C5D3E7';" onMouseOut="this.bgColor='#DAE3F0';">
    <td style="text-align: center;"><a href="<?php echo $_SERVER['PHP_SELF']; ?>
?a=details&date=<?php echo $this->_tpl_vars['pageVars']['date']; ?>
&hostiplong=<?php echo $this->_tpl_vars['pageVars']['hostiplong']; ?>
&sitesID=<?php echo $this->_tpl_vars['record']['sitesID']; ?>
&usersID=<?php echo $this->_tpl_vars['pageVars']['usersID']; ?>
"><b>Details</b></td>
    <td style="text-align: left;"><a href="<?php echo $this->_tpl_vars['record']['site']; ?>
" target="_blank"><?php echo $this->_tpl_vars['record']['site']; ?>
</a></td>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['record']['bytes'])) ? $this->_run_mod_handler('bytesToHRF', true, $_tmp, $this->_tpl_vars['pageVars']['ByteUnit']) : bytesToHRF($_tmp, $this->_tpl_vars['pageVars']['ByteUnit'])); ?>
</td>
    <td><?php echo $this->_tpl_vars['record']['cachePercent']; ?>
%</td>
  </tr>
  <?php $this->assign('recordCount', $this->_tpl_vars['recordCount']+1); ?>
  <?php $this->assign('bytesTotal', $this->_tpl_vars['bytesTotal']+$this->_tpl_vars['record']['bytes']); ?>
  <?php endforeach; endif; unset($_from); ?>
    <tr>
      <th>TOTALS</th>
      <th style="text-align: right;"><?php echo $this->_tpl_vars['recordCount']; ?>
</th>
      <th style="text-align: right;"><?php echo ((is_array($_tmp=$this->_tpl_vars['bytesTotal'])) ? $this->_run_mod_handler('bytesToHRF', true, $_tmp, $this->_tpl_vars['pageVars']['ByteUnit']) : bytesToHRF($_tmp, $this->_tpl_vars['pageVars']['ByteUnit'])); ?>
</th>
      <th></th>
    </tr>
  </table>
  <p>
    <table>
    <tr><th colspan="7">Latest user activity</th></td>
    <tr>
      <th>TIME</th>
      <th>BYTES</th>
      <th>URL</th>
      <th>STATUS</th>
    </tr>
    <?php $_from = $this->_tpl_vars['pageVars']['latestUserActivity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['record']):
?>
    <tr onMouseOver="this.bgColor='#C5D3E7';" onMouseOut="this.bgColor='#DAE3F0';">
      <td><?php echo $this->_tpl_vars['record']['time']; ?>
</td>
      <td><?php echo $this->_tpl_vars['record']['bytes']; ?>
</td>
      <td style="text-align: left"><a href="<?php echo $this->_tpl_vars['record']['url']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['record']['url'])) ? $this->_run_mod_handler('string_trim', true, $_tmp, 80, "...") : string_trim($_tmp, 80, "...")); ?>
</a></td>
      <td style="text-align: left"><?php echo $this->_tpl_vars['record']['resultCode']; ?>
</td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
  </table>
