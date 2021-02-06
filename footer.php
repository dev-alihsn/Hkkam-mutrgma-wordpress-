        <footer class="main-footer">
            <div class="container">
                <div class="footer-column">
                    <?php if(is_active_sidebar("footer-1")){?>
                    <?php dynamic_sidebar("footer-1");?>
                    <?php };?>
                </div>
                <div class="footer-column">
                    <?php if(is_active_sidebar("footer-2")){?>
                    <?php dynamic_sidebar("footer-2");?>
                    <?php };?>
                </div>
                <div class="footer-column">
                    <?php if(is_active_sidebar("footer-3")){?>
                    <?php dynamic_sidebar("footer-3");?>
                    <?php };?>
                </div>
                <div class="copyright">
                كل الحقوق محفوظة لموقع <?php bloginfo("name"); echo " "; echo date("Y")?>
                </div>
            </div>
        </footer>
        <?php wp_footer()?>
    </body>
</html>