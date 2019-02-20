<?php
/** 
 * 404.php
 *  
 * @author      熊猫小A
 * @version     2019-01-17 0.1
 * 
*/ 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$setting = $GLOBALS['VOIDSetting'];
?>

<main id="pjax-container">
    <title hidden>
        <?php Contents::title($this); ?>
    </title>

    <?php $this->need('includes/banner.php'); ?>

    <div class="wrapper container">
        <section id="post-list" class="archive-list">
            <div class="not-found">
                <h1>糟糕！这里什么也没有</h1>
                <input aria-label="搜索框" onkeydown="enterSearch(this);" type="text" name="search-content" id="search_404" class="text" required placeholder="Try search..." />
                <p><a href="<?php Utils::indexHome('/'); ?>">← 返回首页</a></p>
            </div>
        </section>
    </div>
</main>