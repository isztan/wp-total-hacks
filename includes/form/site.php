<div id="site" class="tab">
<h3>Site Settings</h3>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Add a favicon', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php _e('Please upload .ico image.', 'wpbiz'); ?></p>
        <input type="text" id="wfb_favicon" name="wfb_favicon" class="media" value="<?php $this->op('wfb_favicon'); ?>" />
        <a class="media-upload" href="JavaScript:void(0);" rel="wfb_favicon">Select File</a>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Enable auto remove "wlwmanifest" and "xmlrpc" from meta.', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php printf(__('If you don\'t use "<a href="%s">Remote Publishing</a>", remove unnecessary tags from head.', 'wpbiz'), admin_url('options-writing.php')); ?></p>
        <?php $this->sel('wfb_remove_xmlrpc'); ?>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Remove adjacent posts rel links from head on Pages', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php _e('Remove adjacent posts rel links from head on Pages.<br />Example: &lt;link rel="next" ...&gt; &lt;link rel="prev" ...&gt;', 'wpbiz'); ?></p>
        <?php $this->sel('wfb_adjacent_posts_rel_links'); ?>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Remove version number from head', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php _e('Remove "&ltmeta name="generator" content="WordPress x.x.x" /&gt;" from head.', 'wpbiz'); ?></p>
        <?php $this->sel('wfb_hide_version'); ?>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Remove #more anchor', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php _e('Remove #more anchor.', 'wpbiz'); ?></p>
        <?php $this->sel('wfb_remove_more'); ?>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Install Google Analytics', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php _e('Add Google analytics code.', 'wpbiz'); ?></p>
        <textarea name="wfb_google_analytics" id="wfb_google_analytics" cols="50" rows="7"><?php $this->op('wfb_google_analytics'); ?></textarea><br />
        <?php if (get_option('wfb_exclude_loggedin')): ?>
        <input id="wfb_exclude_loggedin" type="checkbox" name="wfb_exclude_loggedin" value="1" checked="checked" />
        <?php else: ?>
        <input id="wfb_exclude_loggedin" type="checkbox" name="wfb_exclude_loggedin" value="1" />
        <?php endif; ?>
        <label for="wfb_exclude_loggedin"><?php _e('Exclude user logged in.', 'wpbiz'); ?></label>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Webmaster Tools Verification', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php _e('Enter your meta key "content" value to verify your blog with <a href="https://www.google.com/webmasters/tools/">Google Webmaster Tools</a>, <a href="https://siteexplorer.search.yahoo.com/">Yahoo! Site Explorer</a>, and <a href="http://www.bing.com/webmaster">Bing Webmaster Center</a>.', 'wpbiz'); ?></p>
        <dl>
            <dt>Google:</dt>
            <dd><input class="text" type="text" name="wfb_google" value="<?php $this->op('wfb_google')?>" /></dd>
            <dt>Yahoo:</dt>
            <dd><input class="text" type="text" name="wfb_yahoo" value="<?php $this->op('wfb_yahoo')?>" /></dd>
            <dt>Bing:</dt>
            <dd><input class="text" type="text" name="wfb_bing" value="<?php $this->op('wfb_bing')?>" /></dd>
        </dl>
    </div>
</div>

</div><!--end .tab-->

