<footer class="main-footer centered-footer">
    <!-- Pattern Layer -->
    <div class="pattern-layer paroller" data-paroller-factor="0.60" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image:url(images/icons/icon-1.png)"></div>
    <div class="pattern-layer-two" data-paroller-factor="0.60" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image:url(images/icons/icon-3.png)"></div>
    <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="row clearfix">
                <!-- Big Column -->
                <div class="big-column col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="index"><img src="<?php echo $websitelogo; ?>" width="100" height="60" alt="" /></a>
                                </div>
                                <div class="text"><?php echo $websitefooter; ?></div>
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-google"></a>
                                    <a href="#" class="fa fa-pinterest-p"></a>
                                </div>
                                <div class="copyright">Copyright &copy; <?php echo date("Y"); ?> <?php echo $websitename; ?></div>
                            </div>
                        </div>		
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
.centered-footer .auto-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
}
</style>

