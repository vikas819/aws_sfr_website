<?php $page ="404";
include("meta_tags.php"); 
include("header.php"); ?>
		<section class="page-title p_relative pt_40 " style="background-color: #fff;">
            <div class="auto-container">
                <div class="content-box">
                    <h1 class="d_block fs_30 lh_40 fw_medium">404 Error</h1>
                    <hr>
                </div>
            </div>
        </section>
        <section class="error-section centred p_relative pt_100 pb_120">
            <div class="auto-container">
                <div class="inner-box">
                    <h1 class="d_block fs_200 lh_200 fw_bold orange-color">404</h1>
                    <h2 class="d_block fs_44 lh_50 fw_bold mb_10">Page not found</h2>
                    <p class="d_block fw_medium mb_30">The page you are looking for was moved, removed or never existed.</p>
                    <a href="<?php echo @$weburl; ?>" class="theme-btn btn-two"><span>Go Home</span></a>
                </div>
            </div>
        </section>

<?php include("footer.php"); ?>